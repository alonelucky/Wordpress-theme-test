
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
							'order' => 'ASC'
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
			<h3 class="title">信息展示</h3>
			<div class="separator"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nemo, necessitatibus, expedita voluptate esse ipsam aliquid blanditiis maxime sequi veniam suscipit atque sapiente cum voluptatum quos mollitia laborum? Esse, officia!</p>
		</div>

	</div>
</aside>
