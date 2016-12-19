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
									<div class="logo-footer"><a href="<? bloginfo('url');?>"><img id="logo-footer" src="<? bloginfo('stylesheet_directory');?>/images/logo.gif" alt="风擎科技logo"></a></div>
									<div class="row">
										<div class="col-sm-6 col-xs-12">
											<span>客户是上帝<br>员工是财富<br>事业是信念</span>
											<ul class="social-links circle">
												<li class="weibo"><a target="_blank" href="http://weibo.com/fengqingkeji"><i class="fa fa-weibo"></i></a></li>
												<li class="weixin"><a target="_blank" href="weixin://contacts/profile/zzfqkj"><i class="fa fa-weixin"></i></a></li>
												<li class="qq"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1632739299&site=qq&menu=yes"><i class="fa fa-qq"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6 col-xs-12">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> 郑州市农业路天明路<br>怡丰新都汇2期11号楼1单元802室</li>
												<li><i class="fa fa-phone pr-10"></i> <a href="tel:0371-8615 2687" type="tel">(+86)0371 8615 2687</a></li>
												<li><i class="fa fa-fax pr-10"></i> (+86)0371 8615 2687</li>
												<li><i class="fa fa-envelope-o pr-10"></i> <a href="mailto:1632739299@qq.com">1632739299@qq.com</a></li>
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