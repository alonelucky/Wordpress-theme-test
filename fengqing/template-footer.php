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
									<div class="logo-footer"><img id="logo-footer" src="<? bloginfo('stylesheet_directory');?>/images/logo.gif" alt=""></div>
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
								<!-- 友情链接-->
									<?
										wp_list_bookmarks( array('categorize'=>'0','category_name'=>'友情链接','category_before'=>'<div class="footer-content">','category_after'=>'</div>','title_li'=>'友情链接') );
									?>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1 hidden-xs">
								<img src="<? bloginfo('stylesheet_directory');?>/images/coderonline.jpg" class="qcoder img-responsive img-rounded" width="200px" style="margin: 70px auto 0;" alt="">
								<div class="qcoder-body">
									官方微信公众号
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->