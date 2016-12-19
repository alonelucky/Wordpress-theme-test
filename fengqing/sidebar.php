<aside class="col-md-3 col-md-offset-1">
	<div class="sidebar">
		<div class="block clearfix">
			<h3 class="title">新闻分类</h3>
			<div class="separator"></div>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<?php //循环输出前三个分类目录
						$args=array(
							'orderby' => 'name',
							'order' => 'ASC',
							'include' => '1,6,7'
						);
						$categories=get_categories($args);
						for($i=0;$i<=2;$i++){
							echo ' <li class="list-group-item">';
							echo ' <a href="'.get_category_link($categories[$i]).'">'.$categories[$i]->name.'</a>';
							echo ' </li>';
						}
					?>
				</ul>
			</nav>
		</div>
		
		<div class="block clearfix">
			<h3 class="title">最新文章</h3>
			<div class="separator"></div>
			<div class="image-box">
				<div class="overlay-container">
					<img src="images/blog-sidebar.jpg" alt="">
					<div class="overlay">
						<div class="overlay-links">
							<a href="blog-post.html"><i class="fa fa-link"></i></a>
							<a href="images/blog-sidebar.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="image-box-body">
					<h3 class="title"><a href="blog-post.html">美国AOL收购Yanhoo</a></h3>
						<p>美国通信业巨头Verizon于25日发布公告称,该公司已与雅虎达成最终协议,以约48.3亿美元现金收购雅虎经营业务。</p>
						<a href="/newslist" class="link"><span>查看全文</span></a>
				</div>
			</div>
		</div>

	</div>
</aside>