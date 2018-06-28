<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 本类用于提供给smarty模板引擎调用的方法
 */
class Tplcall extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取网站信息
     */
    public function get_site_info(&$smarty)
    {
        static $getted;

        if (empty($getted['info'])) {
            // 默认值
            $getted['info'] = [
                'site_name' => '超级分销',
                'site_url' => '',
                'tcp_no' => '',
                'logo' => '',
                'qrcode' => '',
                'book_online' => '',
                'license' => '',
                'seo_keywords' => '',
                'seo_description' => '',
                'about_us' => '',
                'contact_us' => '',
            ];
        }
        $smarty->assign('_SITE_INFO', $getted['info']);
    }
}
