<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Line extends M_Controller {

	// 首页
	public function index()
	{
		$this->load->view('line/index');
	}
}
