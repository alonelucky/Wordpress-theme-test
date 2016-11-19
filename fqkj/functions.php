<?php
	register_sidebar(
		array(
			'name'           =>'文章页侧边栏',
			'before_widget'  =>'<div class="panel panel-primary">',
			'after_widget'   =>'</div>',
			'before_title'   =>'<div class="panel-heading"><h3 class="panel-title">',
			'after_title'    =>'</h3></div>'
		)
	);
	register_sidebar(
		array(
			'name'           =>'页面侧边栏',
			'before_widget'  =>'<div class="panel panel-primary">',
			'after_widget'   =>'</div>',
			'before_title'   =>'<div class="panel-heading"><h3 class="panel-title">',
			'after_title'    =>'</h3></div>'
		)
	);
	
	
?>