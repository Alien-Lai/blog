<?php
/* Smarty version 3.1.30, created on 2018-08-04 04:32:40
  from "E:\PHPstudy2016\WWW\blog\webapp\views\common\footer.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b652c6890ae53_53913473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71531737b49924e72bda388c333fc7df66b52a4e' => 
    array (
      0 => 'E:\\PHPstudy2016\\WWW\\blog\\webapp\\views\\common\\footer.htm',
      1 => 1533279009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b652c6890ae53_53913473 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (empty($_smarty_tpl->tpl_vars['footershow']->value)) {?>
    <div class="box404" style="display: none;">
        <div class="page404-title">
            <h4>404</h4>
            <h5>抱歉，没有你要找的文章...</h5>
        </div>
        <div class="buttons">
            <div class="pull2-left">
                <a title="Back" home="" href="//" class="btn btn-primary">返回首页</a>
            </div>
        </div>
    </div>
    <div id="footer" class="two-s-footer clearfix">
        <div class="footer-box">
            <div class="container">
                <div class="social-footer">
                    <a id="tooltip-f-weixin" class="wxii" href="javascript:void(0);"><i class="icon-wechat"></i></a>
                </div>
                <div class="nav-footer">
                    <a>首页样式</a>
                    <a href="//topic">专题</a>
                    <a href="//category/sqd">耍腔调</a>
                    <a href="//category/szj">说正经</a>
                    <a>页面模版</a>
                    <a target="_blank" href="http://www.suxing.me/">购买主题</a>
                </div>
                <div class="copyright-footer">
                    <p>Copyright © 2018 <a class="site-link" href="//" title="GRACE" rel="home">GRACE</a>

                        · Powered By WordPress · Grace Theme By <a href="http://www.suxing.me/"
                                                                   target="_blank">Suxing</a></p>
                </div>
                <div class="links-footer">
                    <span>友情链接：</span>
                    <a href="http://www.2zzt.com/" title="定位 WordPress主题 中国 标志性门户。" target="_blank">安静的大忽悠大叔</a>
                    <a href="http://www.wpmee.com/" target="_blank">维维炒鸡大屌</a>
                    <a href="http://www.suxing.me/" target="_blank">苏醒博客</a>
                </div>
            </div>
        </div>
    </div>
    <div class="search-form">
        <form method="get" action="//" role="search">
            <div class="search-form-inner">
                <div class="search-form-box">
                    <input class="form-search" name="s" placeholder="键入搜索关键词" type="text">
                    <button type="submit" id="btn-search"><i class="icon-search"></i></button>

                </div>
            </div>
        </form>
        <div class="close-search">
            <span class="close-top"></span>
            <span class="close-bottom"></span>
        </div>
    </div>

<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">

var suxingme_url = {"url_ajax":"http:\/\/grace.iwpzt.com\/wp-admin\/admin-ajax.php","url_theme":"http:\/\/grace.iwpzt.com\/wp-content\/themes\/2018020921594790","slidestyle":"index_slide_sytle_3","wow":"1","sideroll":"1","duang":""};

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/suxingme.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
