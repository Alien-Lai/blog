<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Code extends M_Controller {

	// 代码录
	public function index()
	{
		$this->smarty->display('code/index');
	}
}
