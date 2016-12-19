<?
	get_header();
?>

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

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">网站结构</h1>
							<hr>
							<!-- page-title end -->
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<h2>企业简介</h2>
									<ul class="list">
										<li><a href="http://www.zzfqkj.com/about"><i class="icon-right-open"></i>企业文化</a></li>
										<li><a href="http://www.zzfqkj.com/about"><i class="icon-right-open"></i>企业介绍</a></li>
										<li><a href="http://www.zzfqkj.com/about"><i class="icon-right-open"></i>人文环境</a></li>
										<li><a href="http://www.zzfqkj.com/about"><i class="icon-right-open"></i>员工风采</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-4">
									<h2>新闻列表</h2>
									<ul class="list">
										<li><a href="http://www.zzfqkj.com/newslist"><i class="icon-right-open"></i>企业新闻</a></li>
										<li><a href="http://www.zzfqkj.com/category/dynamic"><i class="icon-right-open"></i>行业动态</a></li>
										<li><a href="http://www.zzfqkj.com/category/technology"><i class="icon-right-open"></i>知识详解</a></li>
									</ul>
									
								</div>
								<div class="col-md-3 col-sm-4">
									<h2>客户案例</h2>
									<ul class="list">

										<li>
											<strong>郑州客户</strong>
											<ul class="list">
												<li><a href="http://www.zzfqkj.com/portfolio"><i class="icon-right-open"></i>河南洁利康股份有限公司</a></li>
												<li><a href="http://www.zzfqkj.com/portfolio"><i class="icon-right-open"></i>正星股份有限公司</a></li>
											</ul>
											<br>
										</li>
										<li><strong>地市客户</strong>
											<ul class="list">
												<li><a href="http://www.zzfqkj.com/portfolio"><i class="icon-right-open"></i>郑州赛福特电子设备有限公司</a></li>
												<li><a href="http://www.zzfqkj.com/portfolio"><i class="icon-right-open"></i>郑州康诺有限公司</a></li>
												<li><a href="http://www.zzfqkj.com/portfolio"><i class="icon-right-open"></i>河南和汇磨料磨具有限公司</a></li>
											</ul>
											<br>
										</li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-4">
									<h2>联系我们</h2>
									<ul class="list">
										<li><strong>企业前台</strong>
											<ul class="list">
												<li>小路 <a href="tel:0371-8615 2687"><i class="icon-right-open"></i>0371-8615 2687</a></li>
											</ul>
											<br>
										</li>
										
										<li><strong>售后客户</strong>
											<ul class="list">
												<li>小夏 <a href="tel:0371-5601 2765"><i class="icon-right-open"></i>0371-5601 2765</a></li>
											</ul>
											<br>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->


<? get_template_part( 'footer', '2' )?>
<? get_footer();?>
