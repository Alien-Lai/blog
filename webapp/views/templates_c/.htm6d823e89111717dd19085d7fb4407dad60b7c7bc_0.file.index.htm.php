<?php
/* Smarty version 3.1.30, created on 2018-08-05 05:56:49
  from "E:\PHPstudy2016\WWW\blog\webapp\views\articles\index.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6691a1a49a09_39235775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d823e89111717dd19085d7fb4407dad60b7c7bc' => 
    array (
      0 => 'E:\\PHPstudy2016\\WWW\\blog\\webapp\\views\\articles\\index.htm',
      1 => 1533448344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header' => 1,
  ),
),false)) {
function content_5b6691a1a49a09_39235775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<!--content-->
<body class="">
<input type="hidden" class="article_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
">
<input type="hidden" class="name" value="<?php echo (($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp);?>
">
<input type="hidden" class="email" value="<?php echo (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp);?>
">
<input type="hidden" class="face" value="<?php echo (($tmp = @@constant('USER_DEFAULT_FACE'))===null||$tmp==='' ? '' : $tmp);?>
">
<form id="uploadForm" style="display: none;">  
    <input type="file" name="file" class="file">
</form>  
<section class="mobile-overlay" id="mobile-overlay">
    <div class="mobile-search">
        <form role="search" method="get" class="mobile-search-form"
              action="http://cosy.iwpzt.com/ru-guo-ni-shi-v-amp-a-bo-wu-guan-de-hui-yuan-xia-ci-qu-qian-wan-bie-wang-le-qu-zhe-ge-xiu-xi-shi.html">
            <label>
                <input type="search" class="mobile-search-field" placeholder="输入关键词…" value="" name="s">
            </label>
            <button type="submit" class="mobile-search-submit"><i class="icon icon-magnifier"></i></button>
        </form>
    </div>

    <button id="mobile-close-icon" class="navbar-close">
        <i class="icon icon-close"></i>
    </button>
</section>
<section class="nt_search_inner nt_search_inner_up">
    <div class="container">
        <div class="top_searchform_wrapper">

            <form method="get" class="searchform" action="http://cosy.iwpzt.com/">

                <div class="input-group">
                    <input type="text" name="s" id="s" placeholder="Search..." class="form-control" required="">
                    <span class="input-group-btn">
                        <button class="btn" type="submit">
                            <i class="icon icon-magnifier"></i>
                        </button>
                    </span>
                </div>
            </form>
            <div class="search_inner_close">
                <div class="btn-search-close"><i class="icon icon-close"></i></div>
            </div>
        </div>
    </div>
</section>

<!-- content -->
<section class="nt-warp  nt-warp-nospace" style="transform: none;">
    <div class="container" style="transform: none;">

  
        <div class="breadcrumbs hidden-xs"><span itemprop="itemListElement"><a href="http://cosy.iwpzt.com/" itemprop="item" class="home"><span itemprop="name">首页</span></a></span> <span class="sep"><i class="fa fa-angle-right"></i></span> <span itemprop="itemListElement"><a href="http://cosy.iwpzt.com/category/shangye" itemprop="item"><span itemprop="name">商业</span></a></span> <span class="sep"><i class="fa fa-angle-right"></i></span> <span class="current">正文</span></div>        <div class="row" style="transform: none;">
            <main class="l-main col-xs-12 col-sm-8 col-md-9">
                <div class="suxing post-cover">
                    <div class="image" style="background-image: url('<?php echo @constant('STATIC');?>
/img/content-default-top-img.jpg');"></div>
                    <div class="content">
                        <span class="categories"><a href="http://cosy.iwpzt.com/category/shangye" rel="category tag">商业</a></span>
                        <div style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</div>
                    </div>
                    <div class="post-data">
                                                <span class="u-time"><?php echo $_smarty_tpl->tpl_vars['detail']->value['create_time'];?>
</span>
                        <span class="u-view"><i class="icon icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['detail']->value['view'];?>
</span>
                        <span class="u-comment"><i class="icon icon-bubble"></i> <?php echo $_smarty_tpl->tpl_vars['detail']->value['comment_num'];?>
</span>
                                            </div>
                </div>
                <div class="m-post">
                    
                    <article class="post-content suxing-popup-gallery">
                        <?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
    
                    </article>
                    <div class="hr-short"></div>
<!--                     <div class="post-tags">           
                        #<a href="http://cosy.iwpzt.com/tag/synkrotakt" rel="tag">SynkroTakt</a>#<a href="http://cosy.iwpzt.com/tag/ye-lu-da-xue" rel="tag">耶鲁大学</a>                    </div> -->
                        
                    <div class="post-footer clearfix">                 
    <div class="pull-left">
        <div class="post-action">
            <a class="btn-action btn-like " href="javascript:;" id="Addlike" data-action="ding" data-id="1594"><i class="icon icon-heart"></i>
                <span class="count">
                    27                
                </span>
            </a>
<!--             <a class="btn-action btn-bigger-cover" data-module="miPopup" data-selector="#bigger-cover" href="javascript:;">
                <i class="icon icon-paper-plane"></i> 
                <span>生成封面</span>
            </a> -->
            <div class="dialog-suxing" id="bigger-cover">
                <div class="dialog-content dialog-bigger-cover">
                    <div class="row">
                        <div class="bigger-image col-xs-12 col-sm-6 col-md-6">
                            <img src="<?php echo @constant('STATIC');?>
/img/bigger-5a547bb9bde67.png" alt="文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏 bigger封面">
                        </div>
                        <div class="bigger-share col-xs-12 col-sm-6 col-md-6">
                            <div class="share-btns">
                                <h3><span>分享本文封面</span></h3>
                                <p class="text-center">
                                                                    <a href="https://service.weibo.com/share/share.php?url=http%3A%2F%2Fcosy.iwpzt.com%2Fye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html&amp;type=button&amp;language=zh_cn&amp;searchPic=true&amp;pic=http%3A%2F%2Fcosy.iwpzt.com%2Fwp-content%2Fuploads%2F2017%2F09%2Fbigger-5a547bb9bde67.png&amp;title=%E3%80%90%E6%96%87%E7%AB%A0%E6%A0%B7%E5%BC%8F2:%20%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E7%9A%84%E8%BF%99%E5%9C%BA%E9%9F%B3%E4%B9%90%E4%BC%9A%EF%BC%8C%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E7%94%A8%E6%89%8B%E6%9C%BA%E5%92%8C%E4%BB%96%E4%BB%AC%E4%B8%80%E8%B5%B7%E6%BC%94%E5%A5%8F%E3%80%91%E5%9B%9E%E6%83%B3%E4%BD%A0%E5%8E%BB%E8%BF%87%E7%9A%84%E6%BC%94%E5%A5%8F%E4%BC%9A%EF%BC%8C%E6%98%AF%E4%B8%8D%E6%98%AF%E9%83%BD%E4%BC%9A%E8%A2%AB%E8%A6%81%E6%B1%82%E6%8A%8A%E6%89%8B%E6%9C%BA%E8%B0%83%E8%87%B3%E9%9D%99%E9%9F%B3%E7%8A%B6%E6%80%81%E6%88%96%E8%80%85%E5%85%B3%E9%97%AD%EF%BC%9F%E8%80%8C%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E5%9C%A8%2010%20%E6%9C%88%206%20%E5%8F%B7%E4%B8%BE%E8%A1%8C%E7%9A%84%E9%9F%B3%E4%B9%90%E5%AD%A3%E5%BC%80%E5%B9%95..." target="_blank" class="btn btn-primary bigger_share"><i class="fa fa-weibo"></i> 分享到微博</a>
                                                                    <a href="<?php echo @constant('STATIC');?>
/img/bigger-5a547bb9bde67.png" download="文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏-Bigger-cover.png" class="btn btn-primary bigger_down"><i class="icon icon-cloud-download"></i> 下载封面</a>
                                </p>
                                
                            </div>
                        </div>
                        <div class="action-share hidden-sm hidden-md hidden-lg">
                            <button class="btn-open-share"><i class="icon icon-share-alt"></i></button>
                            <button class="btn-close-share"><i class="icon icon-close"></i></button>
                        </div>
                    </div>
                    <div class="btn-close">
                        <i class="icon icon-close"></i>
                    </div>
                </div>    
            </div>
                    </div>
    </div>
    <div class="pull-right">
                <ul class="social bdsharebuttonbox">
            <li><a class="weibo" rel="nofollow" target="_blank" href="https://service.weibo.com/share/share.php?url=http%3A%2F%2Fcosy.iwpzt.com%2Fye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html&amp;type=button&amp;language=zh_cn&amp;title=%E3%80%90%E6%96%87%E7%AB%A0%E6%A0%B7%E5%BC%8F2%3A+%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E7%9A%84%E8%BF%99%E5%9C%BA%E9%9F%B3%E4%B9%90%E4%BC%9A%EF%BC%8C%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E7%94%A8%E6%89%8B%E6%9C%BA%E5%92%8C%E4%BB%96%E4%BB%AC%E4%B8%80%E8%B5%B7%E6%BC%94%E5%A5%8F%E3%80%91%E5%9B%9E%E6%83%B3%E4%BD%A0%E5%8E%BB%E8%BF%87%E7%9A%84%E6%BC%94%E5%A5%8F%E4%BC%9A%EF%BC%8C%E6%98%AF%E4%B8%8D%E6%98%AF%E9%83%BD%E4%BC%9A%E8%A2%AB%E8%A6%81%E6%B1%82%E6%8A%8A%E6%89%8B%E6%9C%BA%E8%B0%83%E8%87%B3%E9%9D%99%E9%9F%B3%E7%8A%B6%E6%80%81%E6%88%96%E8%80%85%E5%85%B3%E9%97%AD%EF%BC%9F%E8%80%8C%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E5%9C%A8+10+%E6%9C%88+6+%E5%8F%B7%E4%B8%BE%E8%A1%8C%E7%9A%84%E9%9F%B3%E4%B9%90%E5%AD%A3%E5%BC%80%E5%B9%95%E6%BC%94%E5%A5%8F%E4%BC%9A%E4%B8%8A%EF%BC%8C%E5%8D%B4%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E6%89%93%E5%BC%80%E6%89%8B%E6%9C%BA%E5%92%8C%E6%BC%94%E5%A5%8F%E8%80%85%E4%B8%80%E8%B5%B7%E5%AE%8C%E6%88%90%E3%80%8A%E8%9C%82%E5%B7%A2%E3%80%8B%EF%BC%88Honeycomb%EF%BC%89%E8%BF%99%E9%A6%96%E6%9B%B2%E5%AD%90%E7%9A%84%E6%BC%94%E5%A5%8F%E3%80%82+%C2%A0%C2%A0+%E5%A4%A7%E5%A4%9A%E6%95%B0%E7%9A%84%E9%9F%B3%E4%B9%90%E5%8E%85%E9%83%BD%E4%BC%9A%E6%8A%8A%E8%88%9E%E5%8F%B0%E8%AE%BE%E7%BD%AE%E5%9C%A8%E5%A4%A7%E5%8E%85%E4%B8%80%E7%AB%AF%EF%BC%8C%E5%9B%A0%E6%AD%A4%E5%9C%A8%E4%B8%8D%E5%90%8C%E7%9A%84%E4%BD%8D%E7%BD%AE%E5%90%AC%E6%BC%94%E5%A5%8F%EF%BC%8C%E6%95%88%E6%9E%9C%E4%B9%9F%E6%9C%89%E5%BE%AE%E5%A6%99%E7%9A%84%E5%8F%98%E5%8C%96%E3%80%82+%E5%9C%A8%E8%BF%99%E5%9C%BA%E6%BC%94%E5%A5%8F%E4%BC%9A%E4%B8%8A%EF%BC%8C%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E6%8A%8A%E6%89%8B%E6%9C%BA%E6%89%93%E5%BC%80%EF%BC%8C%E8%BF%9E%E4%B8%8A%E7%BD%91%E7%BB%9C%EF%BC%8C%E7%99%BB%E9%99%86%E4%B8%80%E4%B8%AA%E5%8F%AB%E5%81%9A+SynkroTakt+%E7%B3%BB%E7%BB%9F%EF%BC%8C%E5%AE%83%E4%BC%9A%E8%AE%A9%E4%BD%A0%E8%80%B3%E6%9C%B5%E5%90%AC%E5%88%B0%E7%9A%84%E9%9F%B3%E4%B9%90%E5%92%8C%E6%BC%94%E5%A5%8F%E4%BC%9A%E5%8F%B0%E4%B8%8A%E7%9A%84%E9%9F%B3%E4%B9%90%E6%B7%B7%E5%90%88%EF%BC%8C%E7%84%B6%E5%90%8E%E5%90%8C%E6%AD%A5%E6%92%AD%E6%94%BE%E5%87%BA%E6%9D%A5%E3%80%82+%E5%A6%82%E6%9E%9C%E6%BC%94%E5%A5%8F%E4%BC%9A%E7%8E%B0%E5%9C%BA%E6%9C%89+250+%E4%B8%AA%E4%BA%BA%E5%B8%A6%E4%BA%86%E6%89%8B%E6%9C%BA%EF%BC%8C%E9%82%A3%E5%B0%B1%E7%9B%B8%E5%BD%93%E4%BA%8E%E5%A4%9A%E4%BA%86+250+%E4%B8%AA%E6%89%AC%E5%A3%B0%E5%99%A8%EF%BC%8C%E7%AE%97%E6%98%AF%E7%9C%9F%E6%AD%A3%E7%9A%84%E7%8E%AF%E7%BB%95%E7%AB%8B%E4%BD%93%E5%A3%B0%E4%BA%86%E3%80%82+SynkroTakt+%E6%98%AF%E7%94%B1%E7%BE%8E%E5%9B%BD%E4%B9%94%E6%B2%BB%E4%BA%9A%E5%A4%A7%E5%AD%A6%E7%9A%84%E5%8D%9A+%5B%26hellip%3B%5D&amp;pic=http%3A%2F%2Fcosy.iwpzt.com%2Fwp-content%2Fuploads%2F2017%2F10%2F2017100416064445-e1512811758795.jpeg&amp;searchPic=true"><i class="fa fa-weibo"></i></a></li>
            <li><a data-module="miPopup" data-selector="#post_qrcode" class="weixin" rel="nofollow" href="javascript:;"><i class="fa fa-weixin"></i></a></li>
            <li><a class="qq" rel="nofollow" target="_blank" href="https://connect.qq.com/widget/shareqq/index.html?url=http%3A%2F%2Fcosy.iwpzt.com%2Fye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html&amp;title=%E6%96%87%E7%AB%A0%E6%A0%B7%E5%BC%8F2%3A+%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E7%9A%84%E8%BF%99%E5%9C%BA%E9%9F%B3%E4%B9%90%E4%BC%9A%EF%BC%8C%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E7%94%A8%E6%89%8B%E6%9C%BA%E5%92%8C%E4%BB%96%E4%BB%AC%E4%B8%80%E8%B5%B7%E6%BC%94%E5%A5%8F&amp;pics=http%3A%2F%2Fcosy.iwpzt.com%2Fwp-content%2Fuploads%2F2017%2F10%2F2017100416064445-e1512811758795.jpeg&amp;summary=%E5%9B%9E%E6%83%B3%E4%BD%A0%E5%8E%BB%E8%BF%87%E7%9A%84%E6%BC%94%E5%A5%8F%E4%BC%9A%EF%BC%8C%E6%98%AF%E4%B8%8D%E6%98%AF%E9%83%BD%E4%BC%9A%E8%A2%AB%E8%A6%81%E6%B1%82%E6%8A%8A%E6%89%8B%E6%9C%BA%E8%B0%83%E8%87%B3%E9%9D%99%E9%9F%B3%E7%8A%B6%E6%80%81%E6%88%96%E8%80%85%E5%85%B3%E9%97%AD%EF%BC%9F%E8%80%8C%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E5%9C%A8+10+%E6%9C%88+6+%E5%8F%B7%E4%B8%BE%E8%A1%8C%E7%9A%84%E9%9F%B3%E4%B9%90%E5%AD%A3%E5%BC%80%E5%B9%95%E6%BC%94%E5%A5%8F%E4%BC%9A%E4%B8%8A%EF%BC%8C%E5%8D%B4%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E6%89%93%E5%BC%80%E6%89%8B%E6%9C%BA%E5%92%8C%E6%BC%94%E5%A5%8F%E8%80%85%E4%B8%80%E8%B5%B7%E5%AE%8C%E6%88%90%E3%80%8A%E8%9C%82%E5%B7%A2%E3%80%8B%EF%BC%88Honeycomb%EF%BC%89%E8%BF%99%E9%A6%96%E6%9B%B2%E5%AD%90%E7%9A%84%E6%BC%94%E5%A5%8F%E3%80%82+%C2%A0%C2%A0+%E5%A4%A7%E5%A4%9A%E6%95%B0%E7%9A%84%E9%9F%B3%E4%B9%90%E5%8E%85%E9%83%BD%E4%BC%9A%E6%8A%8A%E8%88%9E%E5%8F%B0%E8%AE%BE%E7%BD%AE%E5%9C%A8%E5%A4%A7%E5%8E%85%E4%B8%80%E7%AB%AF%EF%BC%8C%E5%9B%A0%E6%AD%A4%E5%9C%A8%E4%B8%8D%E5%90%8C%E7%9A%84%E4%BD%8D%E7%BD%AE%E5%90%AC%E6%BC%94%E5%A5%8F%EF%BC%8C%E6%95%88%E6%9E%9C%E4%B9%9F%E6%9C%89%E5%BE%AE%E5%A6%99%E7%9A%84%E5%8F%98%E5%8C%96%E3%80%82+%E5%9C%A8%E8%BF%99%E5%9C%BA%E6%BC%94%E5%A5%8F%E4%BC%9A%E4%B8%8A%EF%BC%8C%E8%80%B6%E9%B2%81%E5%A4%A7%E5%AD%A6%E9%82%80%E8%AF%B7%E5%90%AC%E4%BC%97%E6%8A%8A%E6%89%8B%E6%9C%BA%E6%89%93%E5%BC%80%EF%BC%8C%E8%BF%9E%E4%B8%8A%E7%BD%91%E7%BB%9C%EF%BC%8C%E7%99%BB%E9%99%86%E4%B8%80%E4%B8%AA%E5%8F%AB%E5%81%9A+SynkroTakt+%E7%B3%BB%E7%BB%9F%EF%BC%8C%E5%AE%83%E4%BC%9A%E8%AE%A9%E4%BD%A0%E8%80%B3%E6%9C%B5%E5%90%AC%E5%88%B0%E7%9A%84%E9%9F%B3%E4%B9%90%E5%92%8C%E6%BC%94%E5%A5%8F%E4%BC%9A%E5%8F%B0%E4%B8%8A%E7%9A%84%E9%9F%B3%E4%B9%90%E6%B7%B7%E5%90%88%EF%BC%8C%E7%84%B6%E5%90%8E%E5%90%8C%E6%AD%A5%E6%92%AD%E6%94%BE%E5%87%BA%E6%9D%A5%E3%80%82+%E5%A6%82%E6%9E%9C%E6%BC%94%E5%A5%8F%E4%BC%9A%E7%8E%B0%E5%9C%BA%E6%9C%89+250+%E4%B8%AA%E4%BA%BA%E5%B8%A6%E4%BA%86%E6%89%8B%E6%9C%BA%EF%BC%8C%E9%82%A3%E5%B0%B1%E7%9B%B8%E5%BD%93%E4%BA%8E%E5%A4%9A%E4%BA%86+250+%E4%B8%AA%E6%89%AC%E5%A3%B0%E5%99%A8%EF%BC%8C%E7%AE%97%E6%98%AF%E7%9C%9F%E6%AD%A3%E7%9A%84%E7%8E%AF%E7%BB%95%E7%AB%8B%E4%BD%93%E5%A3%B0%E4%BA%86%E3%80%82+SynkroTakt+%E6%98%AF%E7%94%B1%E7%BE%8E%E5%9B%BD%E4%B9%94%E6%B2%BB%E4%BA%9A%E5%A4%A7%E5%AD%A6%E7%9A%84%E5%8D%9A+%5B%26hellip%3B%5D"><i class="fa fa-qq"></i></a></li>          
        </ul>
        <div class="dialog-suxing" id="post_qrcode">
            <div class="dialog-content dialog-wechat-content">
                  <p>微信扫一扫,分享到朋友圈</p>
                  <img src="<?php echo @constant('STATIC');?>
/img/qrcode.php" alt="">
                  <div class="btn-close">
                      <i class="icon icon-close"></i>
                  </div>
            </div>    
        </div>
            </div>
    </div>
<!--     <div class="suxing-adv post-adv">
        <div class="visible-xs">
            <a href="https://www.nicetheme.cn/store/cosy">
                <img src="<?php echo @constant('STATIC');?>
/img/ad-750-150.png">
            </a>
            <span>广告</span>        </div>
        <div class="visible-sm visible-md visible-lg">
            <a href="https://www.nicetheme.cn/store/cosy">
                <img src="<?php echo @constant('STATIC');?>
/img/adv-943-150.png">
            </a>
            <span>广告</span>        </div>
    </div> -->                         
        <div class="post-navigation">
            <div class="row">
                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['detail']->value['prev']['id'];?>
"
                   class="prev col-xs-12 col-sm-6 col-md-6">
                    <i class="icon icon-arrow-left-circle"></i>

                    <?php echo $_smarty_tpl->tpl_vars['detail']->value['prev']['title'];?>
 </a>
                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['detail']->value['next']['id'];?>
"
                   class="next col-xs-12 col-sm-6 col-md-6 pull-right">
                    <i class="icon icon-arrow-right-circle"></i>

                    <?php echo $_smarty_tpl->tpl_vars['detail']->value['next']['title'];?>
 </a>
            </div>
        </div>
    </div>
    <div id="comments" class="m-comments">
        <h4>文章评论
            <small>(<?php echo count($_smarty_tpl->tpl_vars['comment']->value);?>
)</small>
        </h4>
        <div id="commentform" class="comment-form">
            <div class="comment-avatar">
                <img alt="" src="<?php echo @constant('USER_DEFAULT_FACE');?>
" class="avatar avatar-50 photo"
                     height="50" width="50"></div>
            <div class="comment-author-from">
                <div class="form-comment-info no-login-input" <?php if ((($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp) != '' && (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp) != '') {?>style="display:none;"<?php }?>>
                    <div class="form-group row">

                        <div class="col-xs-12 col-sm-6 col-md-6 comment-form-author">
                            <input class="form-control" id="author" placeholder="昵称"
                                   name="author" type="text" value="<?php echo (($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp);?>
" required="required">
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 comment-form-email">
                            <input id="email" class="form-control" name="email"
                                   placeholder="邮箱" type="email" value="<?php echo (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp);?>
"
                                   required="required">
                        </div>

                    </div>
                <!-- <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-6 comment-form-url">
                            <input class="form-control" placeholder="网址" id="url" name="url"
                                   type="url" value="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 comment-form-url">
                            <input class="form-control" maxlength="12" placeholder="输入QQ号快速评论" id="qqnum"
                                   type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
                        </div>
                    </div> -->
                </div>
                <div class="form-group comment-form-comment login-show-info <?php if ((($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp) != '' && (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp) != '') {?>login<?php } else { ?>nlogin<?php }?>">
                    <?php if ((($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp) != '' && (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp) != '') {?>
                    <div class="comment-from-main">
                        <div class="logged-in-as"><?php echo $_COOKIE['comment_name'];?>
                    
                            <a href="javascript:void(0);" id="logout"><i>[ 退出 ]</i></a>
                        </div>
                    </div>
                    <?php }?>
                    <div class="comment-textarea">
                        <textarea id="comment" name="comment" placeholder="" cols="45"
                                  rows="8" maxlength="65525" aria-required="true"
                                  required="required"></textarea>

                        <div id="comment_message"></div>
                        <div class="text-bar">
                            <button id="drop_Smilies" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn">
                                <i class="icon icon-emotsmile" aria-hidden="true"></i>
                            </button>
                            <button class="btn add_image">
                                <i class="icon icon-picture"></i>
                            </button>
                            <button class="btn add_code">
                                <i class="fa fa-code" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="form-submit  row">
                    <div class="col-form-captcha col-xs-12 col-sm-6 col-md-6">
                        <input type="hidden" id="slidecode" name="slidecode" value="822833">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                        <input name="submit" type="submit" id="submit"
                               class="btn btn-primary" value="发表评论" article-id="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" cid="0">
                        <input type="hidden" name="comment_post_ID" value="1817"
                               id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent"
                               value="7">
                    </div>
                </div>
            </div>
        </div>
        <div id="wp-temp-form-div"></div> <!-- #respond -->
        <ul class="comment-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                <li id="comment-<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
" class="comment even thread-even depth-1">
                    <article id="div-comment-<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
" class="comment-body">
                        <div class="comment-avatar vcard">
                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value['face'];?>
"
                                 class="avatar avatar-50 photo" height="50" width="50"></div>
                        <!-- .comment-author -->
                        <div class="comment-text">
                            <div class="comment-info">
                                <h6 class="comment-author">
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>

                                </h6>
                            </div>
                            <div class="comment-content comment-img">
                                <p><?php echo $_smarty_tpl->tpl_vars['obj']->value['content'];?>
</p>
                            </div><!-- .comment-content -->
                            <div class="comment-meta">
                                <time class="comment-date"><?php echo $_smarty_tpl->tpl_vars['obj']->value['create_time'];?>
</time>
                                <a href="javascript:;" data-id="7" data-caction="up"
                                   data-action="comment_up_down" class="like comment-action"><i
                                        class="icon icon-like" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['obj']->value['agree'];?>
</i></a>
                                <a href="javascript:;" data-id="7" data-caction="down"
                                   data-action="comment_up_down" class="fuck comment-action"><i
                                        class="icon icon-dislike" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['obj']->value['unagree'];?>
</i></a>
                                <a
                                   class="comment-reply-link" rel="nofollow" cid="<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
"><i
                                        class="icon icon-action-undo" aria-hidden="true"></i> 回复</a>
                            </div>
                        </div><!-- .comment-text -->
                    </article><!-- .comment-body -->
                    <ul class="children">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value['child'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <li id="comment-87" class="comment even thread-even depth-1">
                                <article id="div-comment-87" class="comment-body">
                                    <div class="comment-avatar vcard">
                                        <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" class="avatar avatar-50 photo" width="50" height="50">         
                                    </div><!-- .comment-author -->
                                        <div class="comment-text">
                                        <div class="comment-info">
                                            <h6 class="comment-author">
                                                <a href="javascript:;" rel="external nofollow" class="url"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>                             
                                            </h6>     
                                        </div>
                                        <div class="comment-content">
                                            <p><a href="http://cosy.iwpzt.com/wu-xing-tui-jian-chao-qiang-ke-huan-jia-pian-huai-jiu-zhe.html#comment-53">@<?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</a>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta">
                                            <time class="comment-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
</time>        
                                        </div>
                                        
                                    </div><!-- .comment-text -->          
                                </article><!-- .comment-body -->
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                    <div id="respond" class="comment-respond" style="display: none;">
                        <div id="commentform" class="comment-form">
                            <div class="comment-avatar">
                                <img alt="" src="<?php echo @constant('USER_DEFAULT_FACE');?>
" class="avatar avatar-50 photo" width="50" height="50"></div>
                            <div class="comment-author-from">
                                <div class="form-comment-info">
                                    <div class="form-group row" <?php if ((($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp) != '' && (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp) != '') {?>style="display:none;"<?php }?>>
                                        
                                            <div class="col-xs-12 col-sm-6 col-md-6 comment-form-author">
                                                <input class="form-control" id="author" placeholder="昵称" name="author" value="<?php echo (($tmp = @$_COOKIE['comment_name'])===null||$tmp==='' ? '' : $tmp);?>
" required="required" type="text"></div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 comment-form-email">
                                                <input id="email" class="form-control" name="email" placeholder="邮箱" value="<?php echo (($tmp = @$_COOKIE['comment_email'])===null||$tmp==='' ? '' : $tmp);?>
" required="required" type="email"></div>
                                    </div>

                                </div>
                                <div class="form-group comment-form-comment">
                                    <div class="comment-textarea">
                                        <textarea id="comment" name="comment" placeholder="" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>
                                        <div id="comment_message" style=""></div>
                                        <div class="text-bar">
                                            <button class="btn add_code">
                                                <i class="fa fa-code" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit  row">
                                    <div class="col-form-captcha col-xs-12 col-sm-6 col-md-6"></div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                        <input name="submit" id="submit" class="btn btn-primary" value="发表评论" article-id="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" cid="<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
" type="submit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>


    </div>         
    </main>
       
            <aside class="l-sidebar col-xs-12 col-sm-4 col-md-3 hidden-xs" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        
        
        
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1212.19px;"><div id="search-2" class="widget widget_search"><h3 class="widget-title">搜索</h3><form role="search" method="get" id="searchform" class="searchform" action="http://cosy.iwpzt.com/">
                <div>
                    <label class="screen-reader-text" for="s">搜索：</label>
                    <input type="text" value="" name="s" id="s">
                    <input type="submit" id="searchsubmit" value="搜索">
                </div>
            </form></div><div class="widget widget_top_entries">      
            <h3 class="widget-title">聚合文章</h3>
            <ul>
                            <li class="clearfix">
                                <a href="http://cosy.iwpzt.com/wu-xing-tui-jian-chao-qiang-ke-huan-jia-pian-huai-jiu-zhe.html">
                                    <div class="thumbnail pull-right">
                                    
                                        <img src="<?php echo @constant('STATIC');?>
/img/content-default-top-img.jpg" class="timthumb_php lazyloaded" alt="文章样式6: 五星推荐超强科幻佳片《怀旧者》" title="文章样式6: 五星推荐超强科幻佳片《怀旧者》">
                                          
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            文章样式6: 五星推荐超强科幻佳片《怀旧者》                                      </h5>
                                        <div class="meta">
                                        <i class="icon icon-clock"></i> 2017-10-04                                      </div>
                                      
                                    </div>
                                </a>
                            </li>

            
                            <li class="clearfix">
                                <a href="http://cosy.iwpzt.com/jixizaisigechengshitiehaibaonijianguozhezhimaoma.html">
                                    <div class="thumbnail pull-right">
                                    
                                        <img src="<?php echo @constant('STATIC');?>
/img/content-default-top-img.jpg" class="timthumb_php lazyloaded" alt="文章样式5:纪梵希在四个城市贴海报，“你见过这只猫吗？”" title="文章样式5:纪梵希在四个城市贴海报，“你见过这只猫吗？”">
                                          
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            文章样式5:纪梵希在四个城市贴海报，“你见过这只猫吗？”                                        </h5>
                                        <div class="meta">
                                        <i class="icon icon-clock"></i> 2017-10-01                                      </div>
                                      
                                    </div>
                                </a>
                            </li>

            
                            <li class="clearfix">
                                <a href="http://cosy.iwpzt.com/ji-rou-lian-de-zen-me-yang-na-zhe-ge-ri-ben-fu-zhuang-gong-si-tui-chu-de-jian-shen-fu-lai-ce.html">
                                    <div class="thumbnail pull-right">
                                    
                                        <img src="<?php echo @constant('STATIC');?>
/img/content-default-top-img.jpg" class="timthumb_php lazyloaded" alt="文章样式1: 肌肉练得怎么样？拿这个日本服装公司推出的健身服来测" title="文章样式1: 肌肉练得怎么样？拿这个日本服装公司推出的健身服来测">
                                          
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            文章样式1: 肌肉练得怎么样？拿这个日本服装公司推出的健身服来测                                        </h5>
                                        <div class="meta">
                                        <i class="icon icon-clock"></i> 2017-09-29                                      </div>
                                      
                                    </div>
                                </a>
                            </li>

            
                            <li class="clearfix">
                                <a href="http://cosy.iwpzt.com/ye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html">
                                    <div class="thumbnail pull-right">
                                    
                                        <img src="<?php echo @constant('STATIC');?>
/img/content-default-top-img.jpg" class="timthumb_php lazyloaded" alt="文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏" title="文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">
                                          
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏                                        </h5>
                                        <div class="meta">
                                        <i class="icon icon-clock"></i> 2017-09-29                                      </div>
                                      
                                    </div>
                                </a>
                            </li>

             
            </ul>  
        </div>
        <div id="tag_cloud-2" class="widget widget_tag_cloud"><h3 class="widget-title">热门标签</h3>
            <div class="tagcloud">
                <a href="http://cosy.iwpzt.com/tag/aeon" class="tag-cloud-link tag-link-145 tag-link-position-1" style="font-size: 8pt;" aria-label="AEON (1个项目)">AEON</a>
                <a href="http://cosy.iwpzt.com/tag/bam" class="tag-cloud-link tag-link-60 tag-link-position-2" style="font-size: 8pt;" aria-label="BAM (1个项目)">BAM</a>
            </div>
        </div>
        <div id="recent-posts-4" class="widget widget_related_posts">      
            <h3 class="widget-title">相关文章</h3>      
            <ul class="row">
            <!-- <li><p>暂时没有相关的文章！</p></li>    -->
                <li>
                    <a href="http://cosy.iwpzt.com/ye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html">
                        <div class="thumbnail pull-right">
                            <div class="img-cover"></div>
                            <img src="http://192.168.0.17:721/Uploads/ueditor//remote/5ad1dda494e3d.png">
                              
                        </div>
                        <div class="content">
                            <h5 class="title">
                                文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏
                            </h5>
                            <div class="meta" style="margin-top: 15px;">
                                <i class="icon icon-clock"></i> 2017-09-29 
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://cosy.iwpzt.com/ye-lu-da-xue-de-zhe-chang-yin-yue-hui-yao-qing-ting-zhong-yong-shou-ji-he-ta-men-yi-qi-yan-zou.html">
                        <div class="thumbnail pull-right">
                            <div class="img-cover"></div>
                            <img src="http://192.168.0.17:721/Uploads/ueditor//remote/5ad1dda494e3d.png">
                              
                        </div>
                        <div class="content">
                            <h5 class="title">
                                文章样式2: 耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏
                            </h5>
                            <div class="meta" style="margin-top: 15px;">
                                <i class="icon icon-clock"></i> 2017-09-29 
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div></div></aside>
          
        </div>
    </div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">

var globals = {"ajax_url":"http:\/\/cosy.iwpzt.com\/wp-admin\/admin-ajax.php","url_theme":"http:\/\/cosy.iwpzt.com\/wp-content\/themes\/2018010916203677","image_popup":"gallery","new_comment_position":"asc","single":"1","post_style":"two","home":"0","page":"0"};

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/smartideo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/emoji.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/share.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/plugins.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/nicetheme.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/ajax-comment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('STATIC');?>
/js/lazysizes.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // $('.menu-item-has-children a').hover(function(){
        // console.log($(this));
        // $(this).parent().find('ul').slideToggle();
    // });
<?php echo '</script'; ?>
>
<footer id="footer-main" class="footer-main footer-2 footer-black">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <aside class="footer-widget footer-widget-text">
                        <h3 class="widget-title">我们</h3>

                        <div class="text-widget">
                            <p>
                                团队从事WordPress主题及网站开发5年，专注开发好用又颜值高的WordPress主题，在WordPress国内有着不错的口碑。团队专注网站前端设计、网站开发、小程序开发。</p>
                        </div>

                    </aside>
                    <aside class="footer-widget footer-widget-social">
                        <ul>


                            <li><a data-module="miPopup" data-selector="#footer_qrcode-1" href="javascript:void(0);"
                                   class="link btn-social-weixin"><i class="fa fa-weixin"></i></a>

                                <div id="footer_qrcode-1" class="dialog-suxing">
                                    <div class="dialog-content dialog-wechat-content">
                                        <p>微信公众号</p>
                                        <img src="<?php echo @constant('STATIC');?>
/img/qrcode.jpg" alt="微信公众号">

                                        <div class="btn-close">
                                            <i class="icon icon-close"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="http://www.suxing.me/go/qq" class="link" title="qq" target="_blank">
                                    <i class="fa fa-qq"></i>
                                </a></li>
                            <li><a href="https://www.nicetheme.cn/" class="link" title="微博" target="_blank">
                                    <i class="fa fa-weibo"></i>
                                </a></li>
                            <li><a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=suxingme@qq.com"
                                   class="link" title="邮箱" target="_blank">
                                    <i class="fa fa-envelope"></i>
                                </a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-1">
                    <aside class="footer-widget footer-widget-categories">
                        <h3 class="widget-title">菜单</h3>
                        <ul>
                            <li id="menu-item-2865"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2865">
                                <a href="http://cosy.iwpzt.com/category/yi-tu">一图</a></li>
                            <li id="menu-item-2866"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2866">
                                <a href="http://cosy.iwpzt.com/category/shangye">商业</a></li>
                            <li id="menu-item-2869"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2869">
                                <a href="http://cosy.iwpzt.com/category/shishang">时尚</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <aside class="footer-widget footer-widget-links">
                        <h3 class="widget-title">友情链接</h3>
                        <ul>
                            <ul>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2865">
                                    <a href="http://cosy.iwpzt.com/category/yi-tu">一图</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2866">
                                    <a href="http://cosy.iwpzt.com/category/shangye">商业</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2869">
                                    <a href="http://cosy.iwpzt.com/category/shishang">时尚</a></li>
                            </ul>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <!-- Bottom Footer -->
                <div class="col-md-12 col-sm-12 col-xs-12 footer-copyright">
                    <p>
                    </p>

                    <p>Copyright © 2018 <a href="http://cosy.iwpzt.com/" title="Cosy主题演示站" rel="home">Cosy主题演示站</a>.
                        Design by <a href="https://www.nicetheme.cn/" title="最有范的WordPress主题开发团队" target="_blank">Nicetheme</a>.
                    </p>

                    <p></p>
                </div><!-- Bottom Footer /- -->
            </div>
        </div>
    </div>
</footer>
<?php echo '<script'; ?>
 type="text/javascript">
    $(window).scroll(function(){

        if($(window).scrollTop() >= 300){
            $('#header').slideUp();
        } else{
            $('#header').slideDown();
        }
    }); 
<?php echo '</script'; ?>
>
</body>
</html>    <?php }
}
