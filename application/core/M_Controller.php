<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once( TRAITS_DIR . "CommonTrait.php");

class M_Controller extends CI_Controller {

	use CommonTrait;
    /**
     * category nav
     */
    private $getCg;

    /**
     *  category table
     */
    protected static $category = 'category';

    /**
     *  Head-Css
     */
    protected $head_arr = ['owl','nicetheme','fontello','reset','style'];
	
	public function __construct()
	{
		parent::__construct();	
		// 公共模型
        $this->load->model('common','commonModel');
        $this->load->model('article','articleModel');
        
        $myInfo = ['face'=>'/static/img/avatar.png','name'=>'lmj'];
        $this->getCg = $this->GetCategory();
        $this->smarty->assign('category', $this->getCg);
        $this->smarty->assign('myInfo', $myInfo);
        $this->smarty->assign('head', $this->head_arr);

        define('CONTROLLER_NAME', $this->uri->segment(2, ''));
        // 后台地址
        define('BACK_URL', '192.168.0.17:721');
        // 控制器名
        define('CONTROLLER', '/'.strtolower(CONTROLLER_NAME));
        // cookie
        define('COOKIE_EXP_TIME', 3600*24*30);
        // 默认用户头像
        define('USER_DEFAULT_FACE','/static/img/default.png');
        // IS_AJAX
        define('IS_AJAX', $this->input->is_ajax_request());
	}

    // GetCategory
    private function GetCategory()
    {
        return $this->commonModel->GetCategory();
    }
}
