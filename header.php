<?php
/*
Template Name:今夕何夕
Description:今夕何夕,以黑色为主色调，使用html5,css3,jquery等技术，实现页面适应手机以及电脑，平板等。手写的原生代码，布局合理，代码精简，页面再加上古典元素的点缀，现代与古典艺术的结合，使网站看起来更文艺。
Version:1.0.4
ForEmlog:6.0.1
Author:萧瑟(qingshanking)
Author Url:https://qsh5.cn
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $site_title; ?> <?php echo page_tit($page); ?> </title>
		<meta name="keywords" content="<?php echo $site_key; ?>" />
		<meta name="description" content="<?php echo $site_description; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo TEMPLATE_URL; ?>css/base.css" rel="stylesheet">
		<link href="<?php echo TEMPLATE_URL; ?>css/m.css" rel="stylesheet">		
        <link href="<?php echo TEMPLATE_URL; ?>js/codesample/css/prism.css" rel="stylesheet">
		<script src="<?php echo TEMPLATE_URL; ?>js/jquery-1.8.3.min.js" ></script>
		<script src="<?php echo TEMPLATE_URL; ?>js/comm.js"></script>
		<script src="<?php echo TEMPLATE_URL; ?>js/xiaose.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/codesample/prism.js"></script>   
		<script src="//msite.baidu.com/sdk/c.js?appid=1598078242944738"></script>
		<!--[if lt IE 9]>
			<script src="js/modernizr.js"></script>
		<![endif]-->
		<?php doAction('index_head'); ?>
	</head>
<body>
	<!--top begin-->
<header id="header">
  <div class="navbox">
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <div class="logo"><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></div>
    <nav>
      <ul id="starlist">
      	<?php blog_navi();?>
      </ul>
    </nav>
    <div class="searchico"></div>
  </div>
</header>
<div class="searchbox">
  <div class="search">
    <form method="get" action="<?php echo BLOG_URL; ?>index.php" name="keyform" id="searchform">
      <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字词" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字词'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字词'}" type="text">
      <input class="input_submit" type="submit">
    </form>
  </div>
  <div class="searchclose"></div>
</div>
<!--top end-->