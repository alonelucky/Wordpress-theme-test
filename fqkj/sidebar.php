<div class="col-md-4">
<?php 
	if(is_dynamic_sidebar()){
		dynamic_sidebar();
	}else{

?>
	<div class="panel panel-info">
		<div class="panel-heading">分类</div>
			<div class="panel-body">
				<!-- 调用所有分类 -->
				<ul class="list-group">
					<?php
						$args=array(
							'orderby' => 'name',
							'order' => 'ASC'
						);
						$categories=get_categories($args);
						foreach($categories as $category) {
							echo ' <li class="list-group-item">';
							echo ' <a href="'.get_category_link($category->term_id ).'">'.$category->name.'</a>';
							echo ' </li>';
						}
					?>
				</ul>
			</div>
	</div>
</div>
<?php
	}

?>