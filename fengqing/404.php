<?

	get_header();
 
?>

			<!-- 面包屑导航 start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12"><!-- 面包屑导航语法-->
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
						<div class="main col-md-6 col-md-offset-3">

							<h1 class="title">404 抱歉没有找到您需要的内容</h1>
							<br>
							<p>您输入的网址没有找到请确认您的网址是否正确或者 <a href="<? bloginfo( 'url' )?>">返回主页</a></p>
							<img src="images/404.png" style="margin:15px auto" alt="">
							<form role="search">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Search">
									<i class="fa fa-search form-control-feedback"></i>
								</div>
							</form>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
