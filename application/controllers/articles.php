<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Articles extends M_Controller {

    /**
     *  head css
     */
    protected $head_arr = ['2/smartideo','2/font-awesome.min','2/magnific-popup','2/nicetheme','2/reset','2/style','2/simple-line-icons'];


    public function __construct()
    {
        parent::__construct();
        $this->smarty->assign('footershow',1);
        $this->smarty->assign('showHeader',1);
    }

    // 文章详情
    public function index(int $id)
    {
        if(!is_numeric($id)){
            throw new Exception("Error Processing Request", 1);
        }

        $str = str_replace('\\','/', "[img src='upload\0180805\1533447795_ObNQpY3rUf.png' alt='图片描述']");
        preg_match_all('/\[img src=\'(.*?)\' alt=\'图片描述\'\]/ism', $str, $matches);
        echo $str;
        print_r($matches);
        $detail  = $this->articleModel->getDetailByID($id);
        $comment = $this->articleModel->getArticleComment($id);
        $this->smarty->assign('detail',$detail);
        $this->smarty->assign('comment',$comment);
        $this->smarty->display('articles/index');
    }


}
