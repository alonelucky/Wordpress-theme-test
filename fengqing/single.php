<? get_header();?>


			<!-- 面包屑导航 start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if(function_exists('fengqing_breadcrumbs')) fengqing_breadcrumbs();?>
						</div>
					</div>
				</div>
			</div>
			<!-- 面包屑导航 end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- 新闻主体 start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<? the_post();?>
							<h1 class="page-title"><? the_title();?></h1>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost full">
								<div class="blogpost-body">
									<div class="side">
										<div class="post-info">
											<span class="day"><? the_time('d');?></span>
											<span class="month"><? the_time('MY');?></span>
										</div>
										
									</div>
									<div class="blogpost-content">
										<header>
											<div class="submitted"><i class="fa fa-user pr-5"></i> 发布人： <a href="#"><? the_author();?></a></div>
										</header>
										<div class="owl-carousel content-slider-with-controls">
											<div class="overlay-container">
												<img src="<? $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_post()),array(1024,326) ); echo $image_url[0];?>" alt="">
											</div>
											
										</div>
										<p><? the_content();?></p>
										
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-tags pr-5"></i> 标签 |</li>
										<li><a href="#">
											<?php   //<!--文章分类及链接-->
												$category = get_the_category();
												if($category[0]){
												echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
												}
											?>
										</a> </li>
									</ul>
								</footer>
							</article>
							<!-- blogpost end -->


						</div>
						<!-- 新闻主体 end -->

						<!-- 侧边栏菜单 start -->
						<? get_sidebar();
							?>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

<? get_template_part('template','footer');?>

<? get_footer();?>