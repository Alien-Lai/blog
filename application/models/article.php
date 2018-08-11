<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Common {

	/**
     *  Page size
     */
    const PAGESIZE = 10;

    /**
     *  Table name
     */
    protected static $Article = 'article';

    /**
     *  Categoty name
     */
    protected static $CateGory_Name = 'category';

    /**
     * default field
     */
    protected static $DefaultField = 'id,type,create_time,title,category,face,view,like,tags,introduction,comment_num,content';

    /**
     * [$comment_table]
     * @var string
     */
    protected static $comment_table = 'comment';

    /**
     * comment field
     * @var string
     */
    protected static $commentField  = 'id,fid,face,name,article_id,content,create_time,agree,unagree';

    public function __construct()
    {
    	parent::__construct();
    }

    // 获取最新文章列表
    public function getArtlist($page=1, $category='')
    {
        if(!empty($category)){
            $where['category'] = $category;
        }
    	$where['status'] = 1;
    	$start = ($page - 1) * self::PAGESIZE;
        $total = $this->db->select(self::$DefaultField)->where($where)->count_all_results(self::$Article);
    	$list  = $this->db->select(self::$DefaultField)->where($where)->limit(self::PAGESIZE, $start)->order_by('create_time','DESC')->get(self::$Article)->result_array();
        
    	$data['list']    = $list; 
        $data['total']   = $total;  //ceil($total / self::PAGESIZE);
        $data['backUrl'] = BACK_URL;
        return $this->format($data,'index_list');
    }

    // 格式化数据
    private function format($data,$type)
    {
        switch ($type) {
            case 'index_list':
                $list = $data['list'];
                foreach ($list as $key => $value) {
                    // cover
                    $face = $value['face'];
                    $str  = mb_substr($face, 0 , mb_strlen($face)-1);
                    $ex   = explode('|', $str);
                    $list[$key]['face'] = $ex;
                    // tags
                    $tags  = $value['tags'];
                    $tagEx = explode('，',$tags);
                    $list[$key]['tags'] = $tagEx;
                    // view like
                    $list[$key]['view'] = number_format($value['view']);
                    $list[$key]['like'] = number_format($value['like']);
                    // category-name
                    $where['id'] = $value['category'];
                    $f = $this->db->select('name')->where($where)->get(self::$CateGory_Name)->row_array();
                    $list[$key]['category'] = strtolower($f['name']);
                }
                $data['list'] = $list;
                break;
            case 'detail':
                // 上下一篇
                $nowID = $data['id'];
                $prev  = $this->getNearArticle('prev', $nowID);
                $next  = $this->getNearArticle('next', $nowID);
                $data['prev'] = empty($prev) ? ['id'=> $nowID, 'title'=> $data['title']] : $prev;
                $data['next'] = empty($next) ? ['id'=> $nowID, 'title'=> $data['title']] : $next;

                $data['create_time'] = date('Y-m-d',$data['create_time']);
                $data['content']     = html_entity_decode($data['content']);
                break;
            case 'comment':
                foreach ($data as $key => $value) {
                    $id = $value['id'];
                    // 查找二级评论
                    $where = ['fid' => $id];
                    $child = $this->db->select(self::$commentField)->where($where)->order_by('create_time','DESC')->get(self::$comment_table)->result_array();
                    $data[$key]['child'] = $child;
                    $data[$key]['create_time'] = $this->formatTime($value['create_time']);
                    // 格式化时间
                    if(!empty($data[$key]['child'])){

                        foreach ($data[$key]['child'] as $k => $v) {
                            $data[$key]['child'][$k]['create_time'] = $this->formatTime($v['create_time']);
                        }
                    }
                    // 转义HTML
                    $content = stripslashes(html_entity_decode(htmlspecialchars_decode($value['content'])));
                    $data[$key]['content'] = $content;
                }
                break;
            default:
                # code...
                break;
        }
        return $data;
    }

    /**
     * 获取文章详情
     * @param  [int] $id [文章ID]
     * @return array|false
     */
    public function getDetailByID(int $id)
    {
        $where = ['id'=>$id];
        $find  = $this->db->where($where)->get(self::$Article)->row_array();
        return empty($find) ? false : $this->format($find,'detail');
    }

    /**
     * [getArticleComment 获取文章评论列表]
     * @param  int    $id     [文章ID]
     * @return [array|false]  
     */
    public function getArticleComment(int $id)
    {
        $where = [
            'fid'        => 0,
            'article_id' => $id
        ];
        $list = $this->db->select(self::$commentField)->where($where)->order_by('create_time','DESC')->get(self::$comment_table)->result_array();
        return empty($list) ? false : $this->format($list,'comment');
    }

    /**
     * 传入时间戳,计算距离现在的时间
     * @param  number $time 时间戳
     * @return string       返回多少以前
     */
    private function formatTime($time) 
    {
        $time = (int) substr($time, 0, 10);
        $int = time() - $time;
        $str = '';
        if ($int <= 2){
            $str = sprintf('刚刚', $int);
        }elseif ($int < 60){
            $str = sprintf('%d秒前', $int);
        }elseif ($int < 3600){
            $str = sprintf('%d分钟前', floor($int / 60));
        }elseif ($int < 86400){
            $str = sprintf('%d小时前', floor($int / 3600));
        }else{
            $str = date('Y-m-d H:i:s', $time);
        }
        return $str;
    }

    /**
     * 获取上一篇，下一篇
     */
    private function getNearArticle($type = 'prev', int $nowID)
    {
        $whereString = ($type == 'prev') ? "id < $nowID" : "id > $nowID";
        return $this->db->select('id,title')
                        ->where($whereString)
                        ->order_by('id','desc')
                        ->limit(1)
                        ->get(self::$Article)
                        ->row_array();
    }

    /**
     * 提交评论
     * 
     * @param array $data  
     * @return json
     */
    public function subComment($data)
    {
        $data['create_time'] = time();
        $data['ip'] = getIp();
        $this->db->insert(self::$comment_table, $data);
        $affected_rows = $this->db->affected_rows();
        if($affected_rows > 0){
            return returnJson( 1, 'success', $affected_rows);
        }else{
            return returnJson(-2, 'error');
        }
    }
}