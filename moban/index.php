<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" href="<? bloginfo('stylesheet_url')?>" />
	<link rel="stylesheet" href="<? bloginfo('stylesheet_directory')?>/css/normalize.min.css" />
	<title>响应式网站学习</title>
</head>
<body>
	<!--头部区域-->
	<span><?php echo get_option('view');?></span>
	<?php
			$view = get_option('view');
			update_option('view',$view+1);
		?>

		
	<header>
		<div class="header-content">
			<div class="header-top">
				<p class="clearfix"><span>欢迎访问我们的网站</span>
					<a href="#" type="tel">400-888-8888</a></p>
				<ul class="header-nav">
					<li><a href="#">网站首页</a></li>
					<li><a href="#">加入收藏</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!--内容区域-->
	<div class="container">
		
	</div>
	<!--尾部区域-->
	<footer>
		
	</footer>
</body>
</html>