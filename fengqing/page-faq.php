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
						<div class="main col-md-9">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">基础问答</h1>
							<p>这里是我们收集的客户经常询问的一些问题，如果不能解决您的问题，请在左侧输入您详细的问题，我们会在四个小时之内给您回复。或拨打我们的客服电话0371-8615 2687</p>
							<!-- page-title end -->

							<!-- tabs start -->
							<div class="tabs-style-2">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa  fa-life-saver pr-10"></i>服务内容</a></li>
									<li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>套餐了解</a></li>
									<li><a href="#tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-10"></i>技术问答</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1">
										<!-- accordion start -->

										<div class="panel-group" id="accordion-faq">
<? query_posts('showposts=8&category_name=service-faq'); 
 if( have_posts() ){
	while( have_posts() ){
		the_post();
?>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq" href="#<? echo the_slug();?>" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i><? the_title();?>
														</a>
													</h4>
												</div>
												<div id="<? echo the_slug();?>" class="panel-collapse collapse">
													<div class="panel-body">
														<p><? the_content();?></p>
													</div>
												</div>
											</div>
<?	}
};
wp_reset_query(); ?>
										</div>
										<!-- accordion end -->
									</div>
									<div class="tab-pane fade" id="tab2">
										<!-- accordion start -->
										<div class="panel-group" id="accordion-faq-2">
<? query_posts('showposts=8&category_name=taocan-faq'); 
 if( have_posts() ){
	while( have_posts() ){
		the_post();
?>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#<? echo the_slug();?>" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i> <? the_title();?>
														</a>
													</h4>
												</div>
												<div id="<? echo the_slug();?>" class="panel-collapse collapse">
													<div class="panel-body">
														<p><? the_content();?></p>
													</div>
												</div>
											</div>
<?	}
};
wp_reset_query(); ?>
										</div>
										<!-- accordion end -->
									</div>
									<div class="tab-pane fade" id="tab3">
										<!-- accordion start -->
										<div class="panel-group" id="accordion-faq-3">
<? query_posts('showposts=8&category_name=jishu-faq'); 
 if( have_posts() ){
	while( have_posts() ){
		the_post();
?>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#<? echo the_slug();?>" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i> <? the_title();?>
														</a>
													</h4>
												</div>
												<div id="<? echo the_slug();?>" class="panel-collapse collapse">
													<div class="panel-body">
														<p><? the_content();?></p>
													</div>
												</div>
											</div>
<?	}
};
wp_reset_query(); ?>
										</div>
										<!-- accordion end -->
									</div>
								</div>
							</div>
							<!-- tabs end -->
						</div>
						<!-- main end -->
						
												<!-- sidebar start -->
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">详细咨询</h3>
									<div class="separator"></div>
									<div class="alert alert-success hidden" id="contactSuccess3">
										<strong>发送成功</strong> 我们已经收到您的来信。
									</div>
									<div class="alert alert-error hidden" id="contactError3">
										<strong>发送失败</strong> 请检查填写项。
									</div>
									<form role="form" id="sidebar-form">
										<div class="form-group has-feedback">
											<label for="name3">姓名</label>
											<input type="text" class="form-control" id="name3" placeholder="请输入您的姓名" name="name3">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label for="email3">邮箱</label>
											<input type="email" class="form-control" id="email3" placeholder="请输入您的邮箱" name="email3">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<div class="form-group">
											<label>分类</label>
											<select class="form-control" id="category">
												<option value="Sales">服务</option>
												<option value="Support">套餐</option>
												<option value="Lorem">合作</option>
												<option value="Ipsum sit">代理</option>
												<option value="Dolor amet">技术</option>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label for="message3">内容</label>
											<textarea class="form-control" rows="4" id="message3" placeholder="" name="message3"></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
										<button type="submit" class="btn btn-default"><i class="fa fa-send"></i> 发送</button>
									</form>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->


<? get_template_part('template','footer');?>

<? get_footer();?>