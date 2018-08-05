<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');

class Upload extends M_Controller {

    // err-message
    private static $errMessage = '';
    // img-dir
    private $ImgDir = 'upload' . DIRECTORY_SEPARATOR;

	// upload
	public function index()
	{
        if(IS_AJAX){
            if(isset($_FILES['file']['error']) && $_FILES['file']['error'] != 0){
                $this->errMessage = $this->getUploadErr($_FILES['file']['error']);
                echo returnJson(-1 ,$this->errMessage);
            }else{
                $path = $this->ImgDir. date('Ymd',time()) . DIRECTORY_SEPARATOR;
                if(! file_exists($path)){ mkdir("$path", 0777); }
                // 后缀
                $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
                $new_name = $path . time() .'_'. getRandChar(10) . '.' . $ext;
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $new_name)){
                    echo returnJson(1, 'success', $new_name);
                }else{
                    echo returnJson(-3, 'error');
                }
            }
        }else{
            echo returnJson(-2, 'error');
        }
	}
}
