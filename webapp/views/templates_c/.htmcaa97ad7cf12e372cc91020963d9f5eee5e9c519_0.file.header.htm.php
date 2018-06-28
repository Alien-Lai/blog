<?php
/* Smarty version 3.1.30, created on 2018-06-28 12:47:22
  from "E:\PHPstudy2016\WWW\blog\webapp\views\common\header.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b34d8da25c202_17652455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa97ad7cf12e372cc91020963d9f5eee5e9c519' => 
    array (
      0 => 'E:\\PHPstudy2016\\WWW\\blog\\webapp\\views\\common\\header.htm',
      1 => 1530190034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34d8da25c202_17652455 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE;chrome=1">
        <title>赖孟军的博客</title>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['head']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <link rel="stylesheet" href="<?php echo @constant('STATIC');?>
/css/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.css" type="text/css" media="all">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/jquery1.10.2.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/layer.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/plugins.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/suxingme.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/owl.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/lazyload.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/wow.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/share.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/base.js"><?php echo '</script'; ?>
>
        
        <style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>
        
        <link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">  
        <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"><?php echo '</script'; ?>
>  
        <?php echo '<script'; ?>
 >hljs.initHighlightingOnLoad();<?php echo '</script'; ?>
>  
    </head>
<body>
<empty name="showHeader">
<div id="header" class="navbar-fixed-top" style="top: 0px;">
    <div class="container">
        <h1 class="logo">
            <a href="//" title="GRACE" style="background-image: url(//wp-content/themes/2018020921594790/img/logo.png);"></a>
        </h1>

        <div role="navigation" class="site-nav  primary-menu">
            <div class="menu-fix-box">
                <ul id="menu-navigation" class="menu">

                    <!--Nav-->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php if (empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                            <!-- current-menu-ancestor -->
                            <li class="<?php if (@constant('CONTROLLER') == $_smarty_tpl->tpl_vars['item']->value['parent_href'] || (@constant('CONTROLLER') == '/index' && $_smarty_tpl->tpl_vars['item']->value['parent_href'] == '/')) {?>current-menu-ancestor<?php }?>" data-a="<?php echo @constant('BACK_URL');?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
</a>
                            </li>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_href'] == '/code') {?>
                                
                                <li class="<?php if (@constant('CONTROLLER') == '/code') {?>current-menu-ancestor<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
</a></li>
                            <?php } else { ?>
                                
                                <li class="<?php if (@constant('CONTROLLER') == $_smarty_tpl->tpl_vars['item']->value['parent_href']) {?>current-menu-ancestor<?php }?> current-menu-parent menu-item-has-children">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['parent_href'])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
</a>
                                    <?php } else { ?>
                                        <a><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
</a>
                                    <?php }?>
                                    <ul class="sub-menu"><!--current-menu-item-->
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                                            <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value['children_name'];?>
</a></li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </ul>
                                </li>
                            <?php }?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>

        <div class="right-nav pull-right">

            <button class="js-toggle-search"><i class=" icon-search"></i></button>
            <a href="//wp-login.php" class="toggle-login hidden-xs hidden-sm">登录</a>
            <span class="line  hidden-xs hidden-sm"></span>
            <a href="//wp-login.php?action=register" class="toggle-login hidden-xs hidden-sm">注册</a>

        </div>
        <div class="navbar-mobile hidden-md hidden-lg">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                    style="position: relative; overflow: visible;">
                    <div id="mCSB_1_scrollbar_vertical"
                         class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
                         style="display: none;">
                        <div class="mCSB_draggerContainer">
                            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                 style="position: absolute; min-height: 50px; top: 0px;">
                                <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                            </div>
                            <div class="mCSB_draggerRail"></div>
                        </div>
                    </div>
                </ul>

            </div>
            <div class="body-overlay"></div>
        </div>
    </div>
</div>
</empty><?php }
}
