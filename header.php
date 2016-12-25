<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-cache" />
<title><?php bloginfo('name'); if (is_home()) {echo " | "; bloginfo('description');} wp_title( '|', true, 'left' ); ?></title>
<meta name="format-detection" content="telephone=no"/>
<meta name="apple-mobile-app-status-bar-style" content="black" />
<meta name="apple-touch-fullscreen" content="YES" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0" />
<?php if(is_home()){
$keywords = get_option('mytheme_keywords');
$description = get_option('mytheme_description');
}elseif(is_single() || is_page()){
$keywords = tagtext();
$description = get_the_title();
}elseif(is_category()){
$description = category_description();
if (!empty($description) && get_query_var('paged')) {
    $description .= '(第'.get_query_var('paged').'页)';
    }
$keywords = single_cat_title('', false);
}elseif (is_tag())
{
$description = tag_description();
if (!empty($description) && get_query_var('paged')) {
$description .= '(第'.get_query_var('paged').'页)';
}
$keywords = single_tag_title('', false);
}
?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="description" content="<?php echo $description; ?>">
<link href="<?php bloginfo('stylesheet_url'); ?>?ver=1.1" rel="stylesheet" />
<link href="<?php bloginfo('template_url'); ?>/css/tip-twitter/tip-twitter.css?ver=1.2" rel="stylesheet">
<link href="//cdn.bootcss.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/tomorrow.css">
<script src="<?php bloginfo('template_url'); ?>/scripts/highlight.pack.js"></script>
<?php wp_head(); ?>

</head>

<body>
<!--loading-->
<div class="loading"></div>
<div class="circle-loading"></div>
<!-- float category -->
    <div class="list">
    	<ul>
			<?php wp_list_categories("title_li=0&hide_empty=0");?>
        </ul>
    </div>
    <div class="weibo-show">
<iframe name="weiboshow" width="100%" height="100%" class="share_self"  frameborder="0" scrolling="no" src=""></iframe>
	</div>
    <div class="left">
    	<div class="sns-icon">
        	<ul>
                <li class="sns-qq"><span>QQ:751197996</span></li>
                <li class="sns-weichat"><span>微信:JackFrost</span></li>
                <li class="icon-category"><span>展开分类目录</span></li>
            </ul>
        </div>
        <div class="to-top"><i class="fa fa-angle-up"></i></div>
    	<div class="face-area">
        	<div class="face-img">
            <img src="<?php bloginfo('template_url'); ?>/images/face.png" />
            </div>
            <div class="face-name">Jack Frost</div>
        </div>
    	<div class="search">
        	<?php
				get_search_form();
			?>
        </div>
        <div class="nav">
        	<ul>
            	<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'false', 'items_wrap' => '%3$s'));?>
            	<li id="nav-current" class="nav-current"></li>
            </ul>
            
        </div>
    </div>