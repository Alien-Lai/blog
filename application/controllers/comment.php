<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Comment extends M_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // 文章详情
    public function subComment()
    {
        if(IS_AJAX){
        	// 图片张数限制
            $comment = getParam($_POST,'comment');
            $searchStart = strSearch($comment, '[code]');
            $searchEnd   = strSearch($comment, '[/code]');
            if($searchStart && $searchEnd){
                $comment = str_replace('[code]', '<pre><code class="lang-php hljs bash">', $comment);
                $comment = str_replace('[/code]', '</pre></code>', $comment);
            }
            // 图片匹配
            $imgString = '';
            $comment   = stripslashes($comment);
            preg_match_all('/\[img src=\"(.*?)\" alt=\"图片描述\"\]/ism', $comment, $matches);
            if(isset($matches[1][0]) && !empty($matches[1][0])){
            	foreach ($matches[1] as $key => $value) {
            		$comment   = str_replace('[img src="'.$value.'" alt="图片描述"]','', $comment);
            		$imgString.= '<img src="\\'.$value.'" alt="图片描述">';
            	}
            }
            $comment = !empty($imgString) ? addslashes($imgString."</br>".$comment) : addslashes($comment);
            $name  = getParam($_POST,'name');
            $email = getParam($_POST,'email');
            if(empty($_COOKIE['comment_name']) || empty($_COOKIE['comment_email'])){
                cookie('comment_name',  $name, COOKIE_EXP_TIME);
                cookie('comment_email', $email, COOKIE_EXP_TIME);
                // 头像比对，!= 则更新头像
                
            }
            $data['name']    = $name;
            $data['email']   = $email;
            $data['content'] = $comment;
            $data['article_id'] = getParam($_POST,'article_id');
            $data['fid']        = getParam($_POST,'fid');
            $data['face']       = USER_DEFAULT_FACE;
            
            echo $this->articleModel->subComment($data);
        }else{
            echo $this->formatReturn(-1, 'not allow visit ');
        }
    }
}
