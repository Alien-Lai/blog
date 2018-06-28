<?php
/* Smarty version 3.1.30, created on 2018-06-28 15:46:47
  from "E:\PHPstudy2016\WWW\blog\webapp\views\line\index.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3502e70f9cb2_50030674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951d9535c5f531b9c2ec62d0afff1d972d2d6fd4' => 
    array (
      0 => 'E:\\PHPstudy2016\\WWW\\blog\\webapp\\views\\line\\index.htm',
      1 => 1530200804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header' => 1,
  ),
),false)) {
function content_5b3502e70f9cb2_50030674 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\PHPstudy2016\\WWW\\blog\\application\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:common/header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<!--content-->
<div id="page-content" class="page-content-110">
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="article col-xs-12 col-sm-8 col-md-7.5">

                    <div class="ajax-load-box posts-con">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 1) {?>
                                <!-- 纯文本 -->
                                <div class="ajax-load-con content posts-default wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="content-box">

                                        <div class="posts-default-box">
                                            <div class="posts-default-content">

                                                <div class="posts-text">
                                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</a>
                                                </div>
                                                <div class="posts-default-info">
                                                    <ul>

                                                        <li class="ico-cat"><i class="icon-list-2"></i> 
                                                            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</a>
                                                        </li>
                                                        <li class="ico-time"><i class="icon-clock-1"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%Y-%m-%d");?>
</li>
                                                        <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['view'];?>

                                                        </li>
                                                        <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['like'];?>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 2) {?>
                                <!-- 单图文（大） -->
                                <div class="ajax-load-con content posts-default wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="content-box">
                                        <div class="posts-default-img">
                                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                               title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank">
                                                <div class="overlay"></div>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['face'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                                                    <img class="lazy thumbnail"
                                                     data-original=""
                                                     src="http://<?php echo @constant('BACK_URL');
echo $_smarty_tpl->tpl_vars['obj']->value;?>
"
                                                     alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" style="display: block;">
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
                                            </a>
                                        </div>
                                        <div class="posts-default-box">
                                            <div class="posts-default-title">
                                                <div class="post-entry-categories">
                                                    <foreach from="item.tags" id="obj">
                                                        <a href="/tag/<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" rel="tag"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</a>
                                                    </foreach>
                                                </div>
                                                <h2><a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                                </h2>
                                            </div>
                                            <div class="posts-default-content">

                                                <div class="posts-text">
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['introduction'];?>

                                                </div>
                                                <div class="posts-default-info">
                                                    <ul>

                                                        <li class="ico-cat"><i class="icon-list-2"></i> <a
                                                                href="//category/<?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</a></li>
                                                        <li class="ico-time"><i class="icon-clock-1"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],'%Y-%m-%d');?>
</li>
                                                        <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['view'];?>

                                                        </li>
                                                        <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['like'];?>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 3) {?>
                                <!-- 单图文（小） -->
                                <div class="ajax-load-con content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="content-box posts-gallery-box">
                                        <div class="posts-gallery-img">
                                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['face'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                                                    <img class="lazy thumbnail" data-original="" src="http://<?php echo @constant('BACK_URL');
echo $_smarty_tpl->tpl_vars['obj']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" style="display: block;">
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </a>
                                        </div>
                                        <div class="posts-gallery-content">
                                            <h2>
                                                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                            </h2>

                                            <div class="posts-gallery-text">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['introduction'];?>

                                            </div>
                                            <div class="posts-default-info posts-gallery-info">
                                                <ul>

                                                    <li class="ico-cat"><i class="icon-list-2"></i> <a
                                                            href="//category/<?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</a></li>
                                                    <li class="ico-time"><i class="icon-clock-1"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],'%Y-%m-%d');?>
</li>
                                                    <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i> 
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['view'];?>

                                                    </li>
                                                    <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['like'];?>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 4) {?>  
                                <!-- 多图文 -->
                                <div class="ajax-load-con content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="content-box posts-image-box">
                                        <div class="posts-default-title">
                                            <div class="post-entry-categories">
                                                <volist name="item.tags" id="obj">
                                                    <a href="/tag/<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" rel="tag"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</a>
                                                </volist>
                                            </div>
                                            <h2><a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"
                                                   target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
                                        </div>
                                        <div class="post-images-item">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['face'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                                                    <li>
                                                        <div class="image-item">
                                                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                                <div class="overlay"></div>
                                                                <img class="lazy thumbnail"
                                                                     data-original=""
                                                                     src="http://<?php echo @constant('BACK_URL');
echo $_smarty_tpl->tpl_vars['obj']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"
                                                                     style="display: block;">
                                                            </a>
                                                        </div>
                                                    </li>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </ul>
                                        </div>
                                        <div class="posts-default-content">
                                            <div class="posts-text">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['introduction'];?>

                                            </div>
                                        </div>
                                        <div class="posts-default-info">
                                            <ul>
                                                <li class="ico-cat"><i class="icon-list-2"></i> <a
                                                        href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</a></li>
                                                <li class="ico-time"><i class="icon-clock-1"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],'%Y-%m-%d');?>
</li>
                                                <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['view'];?>

                                                </li>
                                                <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['like'];?>
</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                    <div class="clearfix"></div>
                    <?php if (count($_smarty_tpl->tpl_vars['data']->value['list']) > 0) {?>
                        <div id="ajax-load-posts">
                            <button id="fa-loadmore" class="button button-more wow fadeInUp" data-wow-delay="0.3s"
                                    data-home="true" data-paged="2" data-action="fa_load_postlist" data-total="4"
                                    style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">Load More
                            </button>
                        </div>
                    <?php }?>
                </div>
                <div class="sidebar col-xs-12 col-sm-4 col-md-4"
                     style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar"
                         style="padding-top: 0px; padding-bottom: 1px; position: static; transform: translateY(10px); top: 0px; left: 1161.52px;">
                        <div class="widget suxingme_post_author">

                            <div class="authors_profile">
                                <div class="avatar-panel">
                                    <a target="_blank" href="//author/suxing" title="suxing" class="author_pic">
                                        <img alt="" src="http://cdn.v2ex.com/gravatar/afa39accf8700cbbe7b13e1d01aa5b17?s=80&amp;d=mm&amp;r=g" data-original="http://cdn.v2ex.com/gravatar/afa39accf8700cbbe7b13e1d01aa5b17?s=80&amp;d=mm&amp;r=g" srcset="http://cdn.v2ex.com/gravatar/afa39accf8700cbbe7b13e1d01aa5b17?s=160&amp;d=mm&amp;r=g 2x" class="avatar avatar-80 photo" style="display: inline;" width="80" height="80">              </a>
                                </div>
                                <div class="author_name"><a target="_blank" href="//author/suxing" title="suxing">suxing</a><span>官方</span></div>
                                <p class="author_dec">我是一条简介</p>
                            </div>
                        </div>
                        <div class="widget suxingme_topic"><h3><span>推荐专题</span></h3>
                            <ul class="widget_suxingme_topic">
                                <li>
                                    <a href="/special/china" title="中国">
                                        <div class="overlay"></div>
                                        <div class="image"
                                             style="background-image: url(//wp-content/uploads/2017/07/2017072901045867.jpg);"></div>
                                        <div class="title">
                                            <h4>国，是以华夏文明为源泉、中华文化为基础，并以汉族为主体民族的多民族国家，通用汉语、汉字，汉族与少数民族</h4>

                                            <div class="meta"><span>查看专题</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="widget_suxingme_topic">
                                <li>
                                    <a href="/special/keji" title="恐怖故事">
                                        <div class="overlay"></div>
                                        <div class="image"
                                             style="background-image: url(//wp-content/uploads/2017/09/2017090212240145.jpg);"></div>
                                        <div class="title">
                                            <h4>最受欢迎的恐怖故事广播</h4>

                                            <div class="meta"><span>查看专题</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="widget_suxingme_topic">
                                <li>
                                    <a href="/special/gg" title="广告">
                                        <div class="overlay"></div>
                                        <div class="image"
                                             style="background-image: url(//wp-content/uploads/2016/10/2016101811390365.jpg);"></div>
                                        <div class="title">
                                            <h4>松下那些情怀的广告</h4>

                                            <div class="meta"><span>查看专题</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_suxingme_postlist"><h3><span>最新文章</span></h3>
                            <ul class="recent-posts-widget">
                                <li class="one">
                                    <a href="/901.html" title="视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞">
                                        <div class="overlay"></div>
                                        <img class="lazy thumbnail"
                                             data-original="//wp-content/themes/2018020921594790/timthumb.php?src=//wp-content/uploads/2017/09/2017090212234988.jpg&amp;h=170&amp;w=299.98&amp;zc=1"
                                             src="<?php echo @constant('STATIC');?>
/img/timthumb_017.jpg" alt="视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞"
                                             style="display: block;">

                                        <div class="title">
                                            <span>2015-10-25</span>
                                            <h4>视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="others">
                                    <div class="image"><a href="/965.html"
                                                          title="卡西尼-惠更斯探测器的 20 年旅程即将终结，它让我们重新认识了土星">
                                            <img class="lazy thumbnail"
                                                 data-original="//wp-content/themes/2018020921594790/timthumb.php?src=//wp-content/uploads/2015/10/2017090218425879.jpg&amp;h=75&amp;w=100&amp;zc=1"
                                                 src="<?php echo @constant('STATIC');?>
/img/timthumb_004.jpg"
                                                 alt="卡西尼-惠更斯探测器的 20 年旅程即将终结，它让我们重新认识了土星"
                                                 style="display: block;">

                                        </a></div>
                                    <div class="title">
                                        <h4><a href="/965.html"
                                               title="卡西尼-惠更斯探测器的 20 年旅程即将终结，它让我们重新认识了土星">卡西尼-惠更斯探测器的 20
                                                年旅程即将终结，它让我们重新认识了土星</a></h4>
                                        <span>2015-10-25</span>

                                    </div>
                                </li>

                                <li class="others">
                                    <div class="image"><a href="/917.html"
                                                          title="高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？">
                                            <img class="lazy thumbnail"
                                                 data-original="//wp-content/themes/2018020921594790/timthumb.php?src=//wp-content/uploads/2015/10/2017090212015047.jpg&amp;h=75&amp;w=100&amp;zc=1"
                                                 src="<?php echo @constant('STATIC');?>
/img/timthumb_007.jpg"
                                                 alt="高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？"
                                                 style="display: block;">

                                        </a></div>
                                    <div class="title">
                                        <h4><a href="/917.html"
                                               title="高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？">高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？</a>
                                        </h4>
                                        <span>2015-10-25</span>

                                    </div>
                                </li>
                                <li class="others">
                                    <div class="image"><a href="/911.html"
                                                          title="资本寒冬，小心因裁员造成敏感信息泄漏">
                                            <img class="lazy thumbnail"
                                                 data-original="//wp-content/themes/2018020921594790/timthumb.php?src=//wp-content/uploads/2017/09/2017090212241020.jpg&amp;h=75&amp;w=100&amp;zc=1"
                                                 src="<?php echo @constant('STATIC');?>
/img/timthumb_003.jpg" alt="资本寒冬，小心因裁员造成敏感信息泄漏"
                                                 style="display: block;">

                                        </a></div>
                                    <div class="title">
                                        <h4><a href="/911.html" title="资本寒冬，小心因裁员造成敏感信息泄漏">资本寒冬，小心因裁员造成敏感信息泄漏</a>
                                        </h4>
                                        <span>2015-10-25</span>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget suxingme_social"><h3><span>关注我们 么么哒！</span></h3>

                            <div class="attentionus">
                                <ul class="items clearfix">

                                    <span class="social-widget-link social-link-weibo"> <span
                                            class="social-widget-link-count"><i
                                                class="icon-weibo"></i>苏醒主题</span> <span
                                            class="social-widget-link-title">新浪微博</span> <a href="http://suxing.me/"
                                                                                            target="_blank"
                                                                                            rel="nofollow"></a></span>

                                    <span class="social-widget-link social-link-tencent-weibo"> <span
                                            class="social-widget-link-count"><i class="icon-tencent-weibo"></i>苏醒主题</span> <span
                                            class="social-widget-link-title">腾讯微博</span> <a href="http://suxing.me/"
                                                                                            target="_blank"
                                                                                            rel="nofollow"></a> </span>

                                    <span class="social-widget-link social-link-qq"> <span
                                            class="social-widget-link-count"><i class="icon-qq"></i>25679903</span> <span
                                            class="social-widget-link-title">QQ号</span> <a
                                            href="http://wpa.qq.com/msgrd?v=3&amp;uin=25679903&amp;site=qq&amp;menu=yes"
                                            rel="nofollow"></a> </span>

                                    <span class="social-widget-link social-link-email"> <span
                                            class="social-widget-link-count"><i class="icon-mail"></i>suxingme@qq.com</span> <span
                                            class="social-widget-link-title">QQ邮箱</span> <a
                                            href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=suxingme@qq.com"
                                            target="_blank" rel="nofollow"></a> </span>

                                    <span class="social-widget-link social-link-wechat"> <span
                                            class="social-widget-link-count"><i class="icon-wechat"></i>苏醒主题</span> <span
                                            class="social-widget-link-title">微信公众号</span> <a id="tooltip-s-weixin"
                                                                                             href="javascript:void(0);"></a> </span>

                                </ul>
                            </div>

                        </div>
                        <div class="widget widget_suxingme_comment"><h3><span>最新评论</span></h3>
                            <ul class="w_comment">
                                <li>
                                    <div class="message"><a href="/1304.html#comment-319"
                                                            title="发表在： 女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？"
                                                            class="comment_t"><img src="<?php echo @constant('STATIC');?>
/img/icon_neutral.gif"
                                                                                   alt=":neutral:" class="wp-smiley"
                                                                                   style="height: 1em; max-height: 1em;">
                                            你好你好</a></div>
                                    <div class="clearfix meta">
                                        <div class="avatar"><img alt=""
                                                                 src="<?php echo @constant('STATIC');?>
/img/394af6761618ef57c2955d7c23afc0f6.jpg"
                                                                 data-original="http://cdn.v2ex.com/gravatar/394af6761618ef57c2955d7c23afc0f6?s=96&amp;d=mm&amp;r=g"
                                                                 srcset="http://cdn.v2ex.com/gravatar/394af6761618ef57c2955d7c23afc0f6?s=192&amp;d=mm&amp;r=g 2x"
                                                                 class="avatar avatar-96 photo"
                                                                 style="display: block;" width="96" height="96">
                                        </div>
                                        <a href="/1304.html#comment-319"
                                           title=" 在： 女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？" class="link">donne 评
                                            女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？</a></div>
                                </li>
                                <li>
                                    <div class="message"><a href="/901.html#comment-316"
                                                            title="发表在： 视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞"
                                                            class="comment_t">技术等级分类电视剧</a></div>
                                    <div class="clearfix meta">
                                        <div class="avatar"><img alt=""
                                                                 src="<?php echo @constant('STATIC');?>
/img/992e921e4d3fdfb01f7963f2ee8de5fa.jpg"
                                                                 data-original="http://cdn.v2ex.com/gravatar/992e921e4d3fdfb01f7963f2ee8de5fa?s=96&amp;d=mm&amp;r=g"
                                                                 srcset="http://cdn.v2ex.com/gravatar/992e921e4d3fdfb01f7963f2ee8de5fa?s=192&amp;d=mm&amp;r=g 2x"
                                                                 class="avatar avatar-96 photo"
                                                                 style="display: block;" width="96" height="96">
                                        </div>
                                        <a href="/901.html#comment-316"
                                           title=" 在： 视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞" class="link">show 评 视频公司
                                            Netflix 又办了一场黑客比赛，开了很多脑洞</a></div>
                                </li>
                                <li>
                                    <div class="message"><a href="/901.html#comment-315"
                                                            title="发表在： 视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞"
                                                            class="comment_t">不错不错 <img
                                                src="<?php echo @constant('STATIC');?>
/img/icon_neutral.gif"
                                                alt=":neutral:"
                                                class="wp-smiley"
                                                style="height: 1em; max-height: 1em;"></a>
                                    </div>
                                    <div class="clearfix meta">
                                        <div class="avatar"><img alt=""
                                                                 src="<?php echo @constant('STATIC');?>
/img/139877639721ef17512bbf1434e1abe9.jpg"
                                                                 data-original="http://cdn.v2ex.com/gravatar/139877639721ef17512bbf1434e1abe9?s=96&amp;d=mm&amp;r=g"
                                                                 srcset="http://cdn.v2ex.com/gravatar/139877639721ef17512bbf1434e1abe9?s=192&amp;d=mm&amp;r=g 2x"
                                                                 class="avatar avatar-96 photo"
                                                                 style="display: block;" width="96" height="96">
                                        </div>
                                        <a href="/901.html#comment-315"
                                           title=" 在： 视频公司 Netflix 又办了一场黑客比赛，开了很多脑洞" class="link">考拉的生活 评 视频公司
                                            Netflix 又办了一场黑客比赛，开了很多脑洞</a></div>
                                </li>
                                <li>
                                    <div class="message"><a href="/1304.html#comment-314"
                                                            title="发表在： 女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？"
                                                            class="comment_t">值得关注一下</a></div>
                                    <div class="clearfix meta">
                                        <div class="avatar"><img alt=""
                                                                 src="<?php echo @constant('STATIC');?>
/img/139877639721ef17512bbf1434e1abe9.jpg"
                                                                 data-original="http://cdn.v2ex.com/gravatar/139877639721ef17512bbf1434e1abe9?s=96&amp;d=mm&amp;r=g"
                                                                 srcset="http://cdn.v2ex.com/gravatar/139877639721ef17512bbf1434e1abe9?s=192&amp;d=mm&amp;r=g 2x"
                                                                 class="avatar avatar-96 photo"
                                                                 style="display: block;" width="96" height="96">
                                        </div>
                                        <a href="/1304.html#comment-314"
                                           title=" 在： 女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？" class="link">考拉的生活 评
                                            女王大管家要来给习近平接机，传说中的英式管家到底是有多万能？</a></div>
                                </li>
                                <li>
                                    <div class="message"><a href="/917.html#comment-311"
                                                            title="发表在： 高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？"
                                                            class="comment_t">很不错的主题</a></div>
                                    <div class="clearfix meta">
                                        <div class="avatar"><img alt=""
                                                                 src="<?php echo @constant('STATIC');?>
/img/b642b4217b34b1e8d3bd915fc65c4452.jpg"
                                                                 data-original="http://cdn.v2ex.com/gravatar/b642b4217b34b1e8d3bd915fc65c4452?s=96&amp;d=mm&amp;r=g"
                                                                 srcset="http://cdn.v2ex.com/gravatar/b642b4217b34b1e8d3bd915fc65c4452?s=192&amp;d=mm&amp;r=g 2x"
                                                                 class="avatar avatar-96 photo"
                                                                 style="display: block;" width="96" height="96">
                                        </div>
                                        <a href="/917.html#comment-311"
                                           title=" 在： 高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？" class="link">test 评
                                            高德和百度又在谈让地图成为生活服务入口，类似的话怎么说了十年还没成？</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget suxingme_tag"><h3><span>热门标签</span></h3>

                            <div class="widge_tags">
                                <div class="tag-items"><a href="/tag/%e9%ad%85%e6%97%8f"
                                                          class="tag-item" title="浏览和魅族有关的文章">魅族</a><a
                                        href="//tag/%e9%a6%96%e5%af%8c" class="tag-item"
                                        title="浏览和首富有关的文章">首富</a><a
                                        href="//tag/%e9%a3%9e%e4%ba%ba" class="tag-item"
                                        title="浏览和飞人有关的文章">飞人</a><a
                                        href="//tag/%e9%9f%b3%e4%b9%90" class="tag-item"
                                        title="浏览和音乐有关的文章">音乐</a><a
                                        href="//tag/%e9%9e%8b%e9%9d%a2" class="tag-item"
                                        title="浏览和鞋面有关的文章">鞋面</a><a
                                        href="//tag/%e9%9b%86%e5%9b%a2" class="tag-item"
                                        title="浏览和集团有关的文章">集团</a><a
                                        href="//tag/%e9%99%8d%e6%81%af" class="tag-item"
                                        title="浏览和降息有关的文章">降息</a><a
                                        href="//tag/%e9%98%bf%e9%87%8c%e5%b7%b4%e5%b7%b4"
                                        class="tag-item" title="浏览和阿里巴巴有关的文章">阿里巴巴</a><a
                                        href="//tag/%e9%98%bf%e9%87%8c" class="tag-item"
                                        title="浏览和阿里有关的文章">阿里</a><a
                                        href="//tag/%e9%94%80%e9%87%8f" class="tag-item"
                                        title="浏览和销量有关的文章">销量</a><a
                                        href="//tag/%e9%93%81%e5%a1%94" class="tag-item"
                                        title="浏览和铁塔有关的文章">铁塔</a><a
                                        href="//tag/%e9%87%91%e8%9e%8d%e6%9c%ba%e6%9e%84"
                                        class="tag-item" title="浏览和金融机构有关的文章">金融机构</a><a
                                        href="//tag/%e9%87%91%e8%9e%8d" class="tag-item"
                                        title="浏览和金融有关的文章">金融</a><a
                                        href="//tag/%e9%83%bd%e6%98%af" class="tag-item"
                                        title="浏览和都是有关的文章">都是</a><a
                                        href="//tag/%e8%bf%9e%e6%8e%a5" class="tag-item"
                                        title="浏览和连接有关的文章">连接</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php echo '<script'; ?>
 src="<?php echo @constant('STATIC');?>
/js/index.js"><?php echo '</script'; ?>
>   
<?php }
}
