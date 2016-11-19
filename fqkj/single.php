<?php get_header();?>
<?php the_post();?>
	<div class="row alert-info">
		<div class="col-md-12">
			<span>当前为文章页面</span>
		</div>
	</div>
	<div class="row">

		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						<a href="<? the_permalink(); ?>"><?php the_title();?></a>
						<!--定义文章阅读数量-->
						<?php 
							$view = get_post_meta($post->ID,'_view',true);
							update_post_meta($post->ID,'_view',$view+1);
						?>
						<span class="view">阅读次数：<?php echo get_post_meta($post->ID,'_view',true)?></span>
					</h3>
					
				</div>
				<div class="panel-body">
					<p><? the_content(); ?></p>
				</div>
				
				<div class="panel-footer">
				<span class="small">发布时间：<?php the_time('Y-m-d'); ?>
										作者：<?php the_author();?></span>
										
				</div>
			</div>
			<div class="">
				<ul class="pager">
					<li class="previous"><?php previous_post_link('<span>上一篇：%link</span>');?></li>
					<li class="next"><?php next_post_link('<span>下一篇：%link</span>');?></li>
				</ul>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>


