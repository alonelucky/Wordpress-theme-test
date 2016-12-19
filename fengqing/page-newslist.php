<? get_header();?>
			<!-- 面包屑导航 start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="index.html">首页</a></li>
								<li class="active">新闻列表</li>
							</ol>
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

						<!-- 新闻列表 start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- 新闻标头 start -->
							<!-- ================ -->
							<h1 class="page-title">新闻动态</h1>
							<div class="separator-2"></div>
							<p class="lead">关注更新最新的企业新闻、行业动态，满足您对我们的关注和对知识的渴望</p>
							<!-- 新闻标头 end -->

							<div class="row">
								<div class="col-md-10 col-md-offset-1">

									<!-- timeline start -->
									<div class="timeline row">

										<div class="timeline-icon hidden-xs"><i class="fa fa-angle-double-up"></i></div>
										<?
										if(have_posts()){
											while (have_posts()) {
												the_post();
												the_title();}
										?>
										<div class="timeline-date-label clearfix">2016-10-10</div>

										<!-- timeline item start -->
										<div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- 第一条新闻 start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-2.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">30</span>
														<span class="month">9月</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">网站SEO基础知识</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> 发布人 <a href="#">风擎科技</a></div>
														</header>
														<p>作为一个网站优化者，有一些基础seo知识点是大家必须要掌握的，网站排名的好快，和这些基础的SEO优化知识有没做好，有没做到位，有着直接的关系!</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-tags pr-5"></i>标签 | </li>
														<li><a href="#">技术动态</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>阅读全文</span></a>
												</footer>
											</article>
											<!-- 第一条新闻 end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item pull-right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- 第二条新闻 start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-2.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">28</span>
														<span class="month">Sept 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Audio post</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- 第二条新闻 end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-2.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">25</span>
														<span class="month">Sept 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Blogpost with embedded youtube video</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item pull-right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-3.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-3.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">20</span>
														<span class="month">Sept 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Augue eleifend dignissim</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">03</span>
														<span class="month">Sept 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Maecenas  ullamcorper commodo</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item pull-right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-4.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">01</span>
														<span class="month">Sept 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Aenean viverra semper</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<div class="timeline-date-label clearfix">August 2014</div>

										<!-- timeline item start -->
										<div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-1.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">20</span>
														<span class="month">Aug 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Blogpost with image</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item pull-right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="overlay-container">
													<img src="images/blog-2.jpg" alt="">
													<div class="overlay">
														<div class="overlay-links">
															<a href="blog-post.html"><i class="fa fa-link"></i></a>
															<a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">11</span>
														<span class="month">Aug 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Audio post</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

										<!-- timeline item start -->
										<div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
											<!-- blogpost start -->
											<article class="clearfix blogpost">
												<div class="blogpost-body">
													<div class="post-info">
														<span class="day">05</span>
														<span class="month">Aug 2014</span>
													</div>
													<div class="blogpost-content">
														<header>
															<h2 class="title"><a href="blog-post.html">Nunc interdum mi neque</a></h2>
															<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">John Doe</a></div>
														</header>
														<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
													</div>
												</div>
												<footer class="clearfix">
													<ul class="links pull-left">
														<li><i class="fa fa-comment-o pr-5"></i> <a href="#">22 comments</a> |</li>
														<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a></li>
													</ul>
													<a class="pull-right link" href="blog-post.html"><span>Read more</span></a>
												</footer>
											</article>
											<!-- blogpost end -->
										</div>
										<!-- timeline item end -->

									</div>
									<!-- timeline end -->

									<div class="text-center">
										<a href="#" class="btn btn-default">加载更多</a>
									</div>

								</div>
							</div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><img id="logo-footer" src="images/logo.gif" alt=""></div>
									<div class="row">
										<div class="col-sm-6 col-xs-12">
											<p>Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
											<ul class="social-links circle">
												<li class="facebook"><a target="_blank" href="http://sc.chinaz.com"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="http://sc.chinaz.com"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://sc.chinaz.com"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6 col-xs-12">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> 郑州市农业路天明路<br>怡丰新都汇2期11号楼1单元802室</li>
												<li><i class="fa fa-phone pr-10"></i> <a href="#" type="tel">+00 1234567890</a></li>
												<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
												<li><i class="fa fa-envelope-o pr-10"></i> <a href="#" type="email">xiaqiubo123@163.com</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									<h2>友情链接</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="http://www.google.com">Google</a></li>
											<li class="active"><a href="http://www.yandex.ru">yandex</a></li>
											<li><a href="http://www.wind-intl.com">国际展会</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1 hidden-xs">
								<img src="images/coderonline.jpg" class="qcoder img-responsive img-rounded" width="200px" style="margin: 70px auto 0;" alt="">
								<div class="qcoder-body">
									官方微信公众号
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->


<? get_footer();?>
