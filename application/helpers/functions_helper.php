<?php  defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: lmj
 * Date: 2018/1/4
 * Time: 23:03
 */

if(! function_exists('autoCode')){
    function autoCode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
        // 动态密匙长度，相同的明文会生成不同密文就是依靠动态密匙
        $ckey_length = 4;
        // 密匙
        $key = md5($key ? $key : '$%^&*(lmj&wwt20171211)');
        // 密匙a会参与加解密
        $keya = md5(substr($key, 0, 16));
        // 密匙b会用来做数据完整性验证
        $keyb = md5(substr($key, 16, 16));
        // 密匙c用于变化生成的密文
        $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
        // 参与运算的密匙
        $cryptkey = $keya.md5($keya.$keyc);
        $key_length = strlen($cryptkey);
        // 明文，前10位用来保存时间戳，解密时验证数据有效性，10到26位用来保存$keyb(密匙b)，解密时会通过这个密匙验证数据完整性
        // 如果是解码的话，会从第$ckey_length位开始，因为密文前$ckey_length位保存 动态密匙，以保证解密正确
        $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
        $string_length = strlen($string);
        $result = '';
        $box = range(0, 255);
        $rndkey = array();
        // 产生密匙簿
        for($i = 0; $i <= 255; $i++) {
            $rndkey[$i] = ord($cryptkey[$i % $key_length]);
        }
        // 用固定的算法，打乱密匙簿，增加随机性，好像很复杂，实际上对并不会增加密文的强度
        for($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $rndkey[$i]) % 256;
            $tmp = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $tmp;
        }
        // 核心加解密部分
        for($a = $j = $i = 0; $i < $string_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;
            $tmp = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $tmp;
            // 从密匙簿得出密匙进行异或，再转成字符
            $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
        }
        if($operation == 'DECODE') {
            // 验证数据有效性，请看未加密明文的格式
            if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
                return substr($result, 26);
            } else {
                return '';
            }
        } else {
            // 把动态密匙保存在密文里，这也是为什么同样的明文，生产不同密文后能解密的原因
            // 因为加密后的密文可能是一些特殊字符，复制过程可能会丢失，所以用base64编码
            return $keyc.str_replace('=', '', base64_encode($result));
        }
    }
}

// return-json
if(! function_exists('returnJson')){
    function returnJson($code, $message, $data = '')
    {
        $arr = [
            'code'=>$code,
            'data'=>$data,
            'message'=>$message
        ];
        return json_encode($arr);
    }
}

/*
 *  获取分页链接
 *  @int        $count      数据总数
 *  @pageNum    $pageNum    每页显示条数
 */
if(! function_exists('getPagelink')){

    function getPagelink( $count , $page_size , $pageName )
    {
        require APPPATH.'/libraries/FormPage.php';
        $page    = new FormPage($count,$page_size,array(),$pageName);
        return $page->show();
    }
}

/**
 *  字符串查找
 *  @param string $content 搜索对象
 *  @param string $search  搜索内容
 *  @return bool
 */
if(! function_exists('strSearch')){

    function strSearch($content, $search)
    {
        return stristr($content, $search);
    }
}

/*
 *  解决cookie不能立即生效问题
 *  @param $value 支持数组
 */
if(! function_exists('cookie')){
    function cookie($var, $value = '', $time = 0, $path = '/', $domain = '', $prefix = '', $xss = true)
    {
        $CI =& get_instance();
        $_COOKIE[$var] = $value;
        $CI->input->set_cookie($var, $value, $time);
    }
}

/**
+----------------------------------------------------------
 * 过滤防止SQL注入
+----------------------------------------------------------
 * @param string|array  $arr      需要过滤的数组或字符串
 * @param string        $def      变量为空时的默认值
 * @param string        $name     数组的键名
+----------------------------------------------------------
 * @return array
 */
if(! function_exists('getParam')){

    function getParam(&$arr, $name='', $def = NUll) 
    {
        if (is_array($arr) && isset($arr[$name])) {
            $str    =    &$arr["$name"];
        }elseif (isset($arr) && empty($name)) {
            $str    =    $arr;
        }else {
            return $def;
        }
        if (is_array($str)) {
            foreach ($str as $key=>$element) getParam($str, $key, $def);
        }
        if (!is_array($str)) {
            $str = _filter_param($str,$def);
        }
        $str = trim($str); 
        return $str;
    }
}
/**
 +----------------------------------------------------------
 * 过滤防止SQL注入
 +----------------------------------------------------------
 */
if(! function_exists('_filter_param')){

    function _filter_param($str,$def='') 
    {
        $str    =    trim($str);
        $str    =    strip_tags($str);

        $i = 0;
        $w = 0;
        $len = strlen($str);
        $return_str = '';

        if ($len<1) return empty($return_str) ? $def : $return_str;

        while ($i < $len) {
            if (ord($str{$i}) < 0x80) {
                $w    =    1;
            }
            else if (ord($str{$i}) < 0xe0) {
                $w    =    2;
            }
            else if (ord($str{$i}) < 0xf0) {
                $w    =    3;
            }
            else if (ord($str{$i}) < 0xf8) {
                $w    =    4;
            }
            else if (ord($str{$i}) < 0xfc) {
                $w    =    5;
            }
            else if (ord($str{$i}) < 0xfe) {
                $w    =    6;
            }
            $tmp_str=substr($str,$i,$w);
            $i+=$w;
            if ($w==1){
                $tmp_str=addslashes($tmp_str);
            }
            $return_str.=$tmp_str;
        }
        if (ord(substr($return_str,-1,1))==92){
            $return_str=$return_str.' ';
        }
        return ($return_str === '') ? $def : $return_str;
    }
}

/**
+----------------------------------------------------------
 * 生成二维码
+----------------------------------------------------------
 */
if(! function_exists('qrcode')){

    function qrcode($content, $size=6)
    {
        require_once(APPPATH.'/libraries/phpqrcode.php');
        $errorCorrectionLevel = 'L';
        $matrixPointSize = $size;
        //生成二维码图片
        QRcode::png($content, false , $errorCorrectionLevel, $matrixPointSize, 2);
    }
}

// 获取host地址
if(! function_exists('getHost')){

    function getHost()
    {
        if(!empty($_SERVER["SERVER_PORT"])){
            return 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"];
        }else{
            return 'http://'.$_SERVER['SERVER_NAME'];
        }
    }
}

/**
 *  获取随机字符串
 *  
 *  @param  int     $length 指定的字符串长度
 *  @param  string  $type   类型 
 *  @return string
 *  @date 2017-8-3
 */
if(! function_exists('getRandChar')){
    function getRandChar($length, $type = 'both')
    {
        $str  = '';
        $both = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $num  = "0123456789";
        $strPol = ($type == 'both') ? $both : $num;
        $max = strlen($strPol)-1;

        for($i= 0;$i < $length; $i++){
            $str.= $strPol[rand(0,$max)];
        }
        return $str;
    }
}

/**
 * 获取客户端IP
 */
if (!function_exists('getIp')) {
    function getIp() {
        $ip = '未知IP';
        if (isset($_SERVER['REMOTE_ADDR']) && isIp($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }
        if (! empty($_SERVER['HTTP_CLIENT_IP']) && isIp($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        if (! empty($_SERVER['HTTP_X_FORWARDED_FOR']) &&  isIp($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }
}

/**
 * 检测IP是否正确
 * @param string $str
 * @return boolean
 * @date 2017-4-6
 */
if (!function_exists('isIp')) {
    function isIp($str) {
        $ip = explode('.', $str);
        for ($i = 0; $i < count($ip); $i++) {
            if ($ip[$i] > 255) {
                return false;
            }
        }
        $result = preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $str);
        return empty($result) ? false : true;
    }
}

/**
 *  日志类
 *  @param $log_content 日志内容
 *  @param $fileDir     日志目录
 *  @param $file_name   日志文件名
 *  @date 2017-8-2
 */
if (! function_exists('logger') ) {
    header("Content-type:text/html;charset=utf-8");
    function logger( $log_content , $fileDir , $file_name ){
        $max_size     = 102400 * 30;
        $log_filename = $fileDir.'/'.$file_name.'.log';
        $root_dir     = $fileDir.'/';

        file_exists($root_dir) ? : mkdir("$root_dir", 0777) ;
        // file_exists($root_dir.'/'.$fileDir) ? : mkdir($root_dir.'/'.$fileDir, 0777) ;
        //写入日志
        file_put_contents($log_filename,date("Y-m-d H:i:s")."\r\n".$log_content."\r\n",FILE_APPEND);
    }
}