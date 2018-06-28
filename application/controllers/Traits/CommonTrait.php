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
    public function formatReturn(int $status ,string $message ,$data='' ,int $code = 0)
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
    private function getUploadErr($errCode)
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
                $msg = '';
                break;
        }
        return $msg;
    }

    /*
     *  解决cookie不能立即生效问题
     *  @param $value 支持数组
     */
    function cookie($var, $value = '', $time = 0, $path = '', $domain = '', $s = false)
    {
        $_COOKIE[$var] = $value;
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                setcookie($var . '[' . $k . ']', $v, $time, $path, $domain, $s);
            }
        } else {
            setcookie($var, $value, $time, $path, $domain, $s);
        }
    }

}
