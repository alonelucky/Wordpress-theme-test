<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	

<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo("stylesheet_url");?>">

	<title><?php bloginfo("name");?></title>
</head>
<body>
	<div class="container">
		<!-- 顶部导航栏  logo及手机菜单-->
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					 <span class="sr-only">手机菜单</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button>
				<a href="<?php bloginfo('url'); ?>">
				<img src="http://localhost:8080/wp-content/uploads/2016/09/logo_45.png" href="#" alt="logo_45">
				</a>
			</div>
			<!-- 顶部导航栏 导航主体-->
			<div class="collapse navbar-collapse" id="main-menu">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php bloginfo("url");?>">首页</a></li>
					<?php wp_list_pages('sort_column=menu_order&title_li=&depth=2&include='); ?>
				</ul>
				<ul class="navbar-right nav navbar-nav">
					<li><a href="">微博</a></li>
				</ul>
			</div>
		</nav>

