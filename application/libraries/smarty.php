<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(__DIR__ . '/smarty/libs/Smarty.class.php');

class CI_Smarty extends Smarty
{
    private $templateExt = '.htm';

    public function __construct()
    {
        parent::__construct();

//        $this->setTemplateDir(APPPATH . 'views/');
        $this->setTemplateDir(TEMPLATE_PATH);
        $this->setCacheDir(ROOTPATH . 'sitedata/views_c');
        $this->setCompileDir(ROOTPATH . 'sitedata/views_c');

        $this->setLeftDelimiter('{');
        $this->setRightDelimiter('}');

        // 注册模板调用函数的方法
        $this->registerPlugin('function','tpl_call', array($this, 'tpl_call'));
    }

    function tpl_call($params, &$smarty){
        $CI = & get_instance();
        $CI->load->model('tplcall');

        // 第一个参数为请求的方法
        $func = array_shift($params);

        /* 将当前的smarty对象(Smarty_Internal_Template)，传递给被调用的函数，主要用于assign变量
         * (否则直接用$this->smarty->assign将无效)
         * In Smarty3 your plugins work with the template, not the smarty object.
         * So your function's footprint is
         * function smarty_updatehour(array $params, Smarty_Internal_Template $template)
         */
        $params['smarty'] = & $smarty;

        call_user_func_array(array($CI->tplcall,$func),$params);
    }

    /**
     * 设置模板文件后缀名
     *
     * @param string $templateExt 模板文件后缀名
     * @return self
     */
    public function setTemplateExt($templateExt)
    {
        if (!is_string($templateExt) || empty($templateExt)) {
            $templateExt = '.htm';
        }

        if (strpos('.', $templateExt) !== 0) {
            $templateExt = '.' . $templateExt;
        }

        $this->templateExt = $templateExt;
        return $this;
    }

    /**
     * 获取模板文件后缀
     *
     * @return string 模板文件后缀名
     */
    public function getTemplateExt()
    {
        return $this->templateExt;
    }

    /**
     * {@inheritdoc}
     */
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        parent::display($template . $this->getTemplateExt(), $cache_id, $compile_id, $parent);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        return $parent::fetch($template . $this->getTemplateExt(), $cache_id, $compile_id, $parent);
    }
}
