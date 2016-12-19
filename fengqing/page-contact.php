<?
	get_header();
?>
			<!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image dark-translucent-bg section" style="background-image:url('images/page-contact-banner.jpg');height:250px">
					<div class="container">
						<h1>联系我们</h1>
						<div class="separator-2"></div>
						<p class="lead">我们有专人为您服务</p>
					</div>
				</div>
			</div>
			<!-- banner end -->

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

			<!-- 联系内容 start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h2 class="page-title">详细咨询</h2>
							<!-- page-title end -->
							<div class="row">
								<div class="col-md-6">
									<p>如果您有意向请发送邮件像我们询问详细内容，我们会在两个小时内给您回复。</p>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>发送成功</strong> 。您的邮件已经发送到我们的邮箱了。
									</div>
									<div class="alert alert-error hidden" id="contactError">
										<strong>发送失败</strong> 。请检查您填写的内容
									</div>
									<div class="contact-form">
										<form id="contact-form" role="form">
											<div class="form-group has-feedback">
												<label for="name">姓名*</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">邮箱*</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subject">询问标题*</label>
												<input type="text" class="form-control" id="subject" name="subject" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="message">详细内容*</label>
												<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<button type="submit" class="btn btn-default"><i class="fa fa-send"></i> 发送</button>

										</form>
									</div>
								</div>
								<div class="col-md-6">
									<!-- 高德地图 start -->
									<div id="map-canvas"></div>
									<!-- 高德地图 end -->
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- 联系内容 end -->

			<?
			get_template_part('template','footer');
			?>
			
			
		<!-- 高德地图组件 javascript -->
		<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=625f91f9053106d256e51453c72e0b32"></script>
		<script type="text/javascript" src="<? bloginfo('stylesheet_directory');?>/js/gaode.map.config.js"></script>
		<script>
			$('.weichat-qcoder').hover({

			});
		</script>
			<?
				get_footer();
			?>