<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Line extends M_Controller {

	// 首页
	public function index()
	{
		// 获取最新文章列表
        $data = $this->articleModel->getArtlist();
        // print_r($data);
        $this->smarty->assign('data',$data);
		$this->smarty->display('line/index');
	}

	/**
     * Index-loadMore
     * @return [string] [description]
     */
    public function loadMore()
    {
        if(IS_AJAX){
            $page     = getParam($_POST,null,'page');
            $category = getParam($_POST,null,'category');
            $pageData = $this->articleModel->getArtlist((int)$page,$category);
            $list     = $pageData['list'];
            if(!empty($list)){
                echo returnJson(200, 'success', $pageData);
            }else{
                echo returnJson(400, 'no data');
            }
        }
    }

    /**
     * logout
     * @return [type] [description]
     */
    public function logout()
    {
        if(IS_AJAX){
            $this->input->set_cookie('comment_name',null);
            $this->input->set_cookie('comment_email',null);
            echo returnJson(1, 'success');
        }else{
            new Exception('error request');
        }
    }
}
