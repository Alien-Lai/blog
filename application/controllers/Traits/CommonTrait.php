<?php
/**
 * 抽象公共控制器类
 *
 */
trait CommonTrait
{
    /**
     *  返回Json格式数据
     *  @return string
     */
    public function formatReturn(int $status ,string $message ,$data='' ,int $code = null)
    {
        $data = [
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
            'code'    => $code
        ];
        return json_encode( $data , JSON_UNESCAPED_UNICODE);
    }

    /**
     *  获取上传错误信息
     *  @param  int    $errCode  错误码 
     *  @return string $msg      错误信息
     */
    public function getUploadErr($errCode)
    {
        switch ($errCode) {
            case '1':
                $msg = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case '2':
                $msg = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                break;
            case '3':
                $msg = '文件只有部分被上传';
                break;
            case '4':
                $msg = '没有文件被上传';
                break;        
            case '5':
                $msg = '传文件大小为0';
                break;    
            default:
                $msg = 'error';
                break;
        }
        return $msg;
    }

    /**
     *  图片格式检测，大小检测
     *
     * 
     */
    public function CheckImgFile($files, $allow_type = array('image/jpg','image/png','image/jpeg','image/gif','image/bmp'), $size = 1024*1024*5)
    {
        $type  = $files['file']['type'];
        $fsize = $files['file']['size'];
        $returnData = [];
        if(! in_array($type, $allow_type)){
            $returnData = ['status'=>-1, 'message'=>'× 错误的图片类型'];
        } elseif ($fsize > $size){
            $returnData = ['status'=>-2, 'message'=>'× 图片不得大于5M'];
        }else{
            $returnData = ['status'=>1, 'message'=>'success'];
        }
        return $returnData;
    }
}
