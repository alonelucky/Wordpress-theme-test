		<?php get_header();?>
		
		<div class="row">
			<div class="col-md-12 slider">
				<?php echo do_shortcode('[rev_slider alias="home-slide"]'); ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8">
				<?php 
				if( have_posts() ){
					while( have_posts() ){the_post();
				?>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							<a href="<? the_permalink(); ?>"><?php the_title();?></a>
						</h3>
						<span class="small">
							发布时间：<?php the_time('Y-m-d'); ?>
							作者：<?php the_author();?>
						</span>
					</div>
					
					<div class="panel-body post-height">
						<p><!--控制显示博客摘要   0 从头开始截取，300结束，以省略号结尾-->
						<? echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"......"); ?>
						</p>
					</div>
					
					<div class="panel-footer">
						<span>
							<a href="<?php the_permalink() ?>">了解更多</a>
						</span>					
					</div>
				</div>
				
				<?php
					}
				}else{
					echo "没有文章";
				}
				?>
				<!-- 博客分页 -->
				<nav>
					<ul class="pager">
						<li><?php posts_nav_link(" ","向前","向后");?></li>
					</ul>
				</nav>
			</div>	
			<?php get_sidebar();?>
		</div>
	<?php get_footer();?>