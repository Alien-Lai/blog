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
            $comment = getParam($_POST,null,'comment');
            $searchStart = strSearch($comment, '[code]');
            $searchEnd   = strSearch($comment, '[/code]');
            if($searchStart && $searchEnd){
                $comment = str_replace('[code]', '<pre><code class="lang-php hljs bash">', $comment);
                $comment = str_replace('[/code]', '</pre></code>', $comment);
            }
            
            $name  = getParam($_POST,null,'name');
            $email = getParam($_POST,null,'email');
            if(empty($_COOKIE['comment_name']) || empty($_COOKIE['comment_email'])){
                cookie('comment_name',  $name, COOKIE_EXP_TIME);
                cookie('comment_email', $email, COOKIE_EXP_TIME);
            }
            $data['name']    = $name;
            $data['email']   = $email;
            $data['content'] = $comment;
            $data['article_id'] = getParam($_POST,null,'article_id');
            $data['fid']        = getParam($_POST,null,'fid');
            $data['face']       = USER_DEFAULT_FACE;
            
            echo $this->articleModel->subComment($data);
        }else{
            echo $this->formatReturn(-1, 'not allow visit ');
        }
    }
}
