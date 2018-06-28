<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Line extends M_Controller {

	// 首页
	public function index()
	{
		// 获取最新文章列表
        $data = $this->articleModel->getArtlist();
        $this->smarty->assign('data',$data);
		$this->smarty->display('line/index');
	}
}
