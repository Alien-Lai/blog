<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/M_Controller.php');
require_once(APPPATH . 'libraries/vendor/thumb.php');

class Upload extends M_Controller {

    private $errMessage = '';
    private $filename   = '';
    
    private static $AvatarDir  = 'upload' . DIRECTORY_SEPARATOR . 'avatar'  . DIRECTORY_SEPARATOR;
    private static $CommentDir = 'upload' . DIRECTORY_SEPARATOR . 'comment' . DIRECTORY_SEPARATOR;

    CONST DEFAULT_THUMB_WIDTH  = 100;
    CONST DEFAULT_THUMB_HEIGHT = 100;
    CONST DEFAULT_THUMB_MIN_SIZE = 1024*100;

	public function index()
	{
        if(IS_AJAX){
            // 判断是否多文件
            $count = count($_FILES['file']['name']);
            if($count > 1){
                $errNum = 0;
                for ($i=0; $i < $count; $i++) { 
                    $files['file']['name']     = $_FILES['file']['name'][$i];
                    $files['file']['type']     = $_FILES['file']['type'][$i];
                    $files['file']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
                    $files['file']['error']    = $_FILES['file']['error'][$i];
                    $files['file']['size']     = $_FILES['file']['size'][$i];
                    $result = json_decode($this->doUpload($files));
                    if($result->code < 0){
                        $errNum+=1;
                        $this->errMessage .= '图片: '.$files['file']['name'].'上传失败，原因：'.$result->message."\r\n";
                    }else{
                        $successData[] = $result->data;
                    }
                    unset($files);
                }
                echo ($errNum > 0) ? returnJson(-5, $this->errMessage) : returnJson(1, DEFAULT_SUCCESS_TIPS, $successData);
            }else{
                $files['file']['name']      = $_FILES['file']['name'][0];
                $files['file']['type']      = $_FILES['file']['type'][0];
                $files['file']['tmp_name']  = $_FILES['file']['tmp_name'][0];
                $files['file']['error']     = $_FILES['file']['error'][0];
                $files['file']['size']      = $_FILES['file']['size'][0];
                echo $this->doUpload($files);
            }
        }else{
            echo returnJson(-2, DEFAULT_ERROR_REQUEST);
        }
	}

    /**
     * 图片上传执行方法
     * 
     * @param  array $files $_FILES
     * @return Json
     */
    private function doUpload($files)
    {
        if(isset($files['file']['error']) && $files['file']['error'] != 0){
            $this->errMessage = $this->getUploadErr($files['file']['error']);
            return returnJson(-1 ,$this->errMessage);
        }else{
            // 图片及文件大小检测
            $check = $this->CheckImgFile($files);
            if($check['status'] < 0){
                return returnJson(-4, $check['message']);exit();
            }
            $imgDir = (getParam($_POST,'type') == 'avatar') ? Upload::$AvatarDir : Upload::$CommentDir;
            $path   = $imgDir . date('Ymd',time()) . DIRECTORY_SEPARATOR;
            if(! file_exists($path)) mkdir("$path", 0777); 
            $filename = $path . time() .'_'. getRandChar(10);
            $ext = pathinfo($files["file"]["name"], PATHINFO_EXTENSION);
            $new_name_source = $filename . '_source.' . $ext;
            $new_name_small  = $filename . '_small.'  . $ext;

            if(move_uploaded_file($files["file"]["tmp_name"], $new_name_source)){
                $thumb = new ThumbHandler();
                $thumb->setSrcImg( $new_name_source );
                $thumb->setDstImg( $new_name_small );
                // 小于指定大小不进行裁剪(防止图片过小)
                if($files["file"]["size"] < self::DEFAULT_THUMB_MIN_SIZE){
                    $thumb->createImg(100);
                }else{
                    $thumb->createImg(self::DEFAULT_THUMB_WIDTH, self::DEFAULT_THUMB_HEIGHT);
                }
                return returnJson(1, DEFAULT_SUCCESS_TIPS, ['source'=>$new_name_source,'small'=>$new_name_small]);
            }else{
                return returnJson(-3, DEFAULT_ERROR_TIPS);
            }
        }
    }
}
