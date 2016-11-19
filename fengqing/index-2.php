<?
	get_header();
?>
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
							
							<?
								if( have_posts() ){
									while( have_posts() ){
										the_post();
										
										$pp_id = get_the_ID();

										if($pp_id % 2){
	
											the_title();
											echo '<br/>';
											
											
											
										}else{
											
											the_title();
											echo '<br/>';
										}
									}
									
								}
							
							
							?>
							
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			
<!--调用模版-->
<? get_template_part('template','footer');?>


<? 

	get_footer();

?>