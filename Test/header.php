<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"><!-- 网页文字编码 -->
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"><!-- 外部样式表链接 -->
</head>
<body>
	
	<header id="header">
	
		<div id="logo">
		
			<h1>
			
				<a href="<?php bloginfo('url')?>"><!-- 网站链接 -->
				
					<?php  bloginfo('name');?><!-- 网站名称 -->
					
				</a>
			</h1>		
			
			<?php bloginfo('description');?><!-- 站点描述 -->
		</div>
		
	</header>