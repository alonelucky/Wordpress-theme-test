<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset' );?>">
<title>
	<?php 
		if (is_home()||is_search()){ 
			bloginfo('name'); 
		}else{
			wp_title('');
			print" - ";
			bloginfo('name');}
	?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('stylesheet_directory');?>/css/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('stylesheet_directory');?>/css/jcarousel.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('stylesheet_directory');?>/css/flexslider.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('stylesheet_directory');?>/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('stylesheet_url' );?>" rel="stylesheet" type="text/css"/>

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Welcome</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('stylesheet_directory');?>/images/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo get_option('home'); ?>">Home</a></li> 
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="about.html">Company</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">News</a></li> 
								<li><a href="#">Investors</a></li>
							</ul>
						</li>
						<?php wp_list_pages('sort_column=menu_order&title_li=&depth=2&include='); ?>

                    </ul>
                </div>
            </div>
        </div>
	</header>