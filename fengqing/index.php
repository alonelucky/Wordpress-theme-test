<?
	get_header();
?>

			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li>当前位置：<i class="fa fa-home pr-10"></i><a href="<? bloginfo(url);?>">首页</a></li>
								<li class="active">新闻列表</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">
					
						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">
						
							<!-- 新闻标头 start -->
							<!-- ================ -->
							<h1 class="page-title">新闻动态</h1>
							<div class="separator-2"></div>
							<p class="lead">关注更新最新的企业新闻、行业动态，满足您对我们的关注和对知识的渴望</p>
							<!-- 新闻标头 end -->

							<?
								if( have_posts()){
									while(have_posts()){
										the_post();
							?>
							
							<!-- 新闻列表 -->
							<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="overlay-container">
								<!--获取文章特色图像-->
									<img src="<? $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_post()),array(1024,326) ); echo $image_url[0];?>" alt="">
									
									<div class="overlay">
										<div class="overlay-links"><!--预览特色图像-->
											<a href="<? the_permalink();?>"><i class="fa fa-link"></i></a>
											<a href="<? $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_post()),array(1024,326) ); echo $image_url[0];?>" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="blogpost-body">
									<div class="post-info"><!--文章日期-->
										<span class="day"><? the_time('d');?></span>
										<span class="month"><? the_time('MY');?></span>
									</div>
									<div class="blogpost-content">
										<header><!--文章标题和作者-->
											<h2 class="title"><a href="<? the_permalink();?>"><? the_title();?></a></h2>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#"><? the_author();?></a></div>
										</header>
										<p><!--文章内容同一摘要截取300字-->
											<?php
												echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"......"); 
											?>
										</p>
									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-tags pr-5"></i> | 
											<?php   //<!--文章分类及链接-->
												$category = get_the_category();
												if($category[0]){
												echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
												}
											?>
										</li>
									</ul>
									<a class="pull-right link" href="<? the_permalink();?>"><span>阅读全文</span></a>
								</footer>
							</article>
							<!-- blogpost end -->
							
						
							<?		}
								}else{
									echo '当前页面没有新闻，请刷新或者联系管理员';
								}
							?>

							<!-- 翻页 -->
							<div class="newslist-page"><!--分页插件-->
								<?php wp_pagenavi(); ?>
							</div>
							<!-- pagination end -->

						</div>
						<!-- main end -->

						<!-- 侧边栏 -->
						<?
							get_sidebar();
						?>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->


<? get_template_part('template','footer');?>

<?
	get_footer();
?>
