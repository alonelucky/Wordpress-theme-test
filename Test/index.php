
	<?php get_header();?><!-- 调用头部 -->
	

	
	<div id="container">
	
		<?php if(have_posts()): ?><!-- 判断是否有博文 -->
		
			<?php while(have_posts()):the_post();?><!-- 有就输出 -->
			
				<div class="enty" id="post-<?php the_ID();?>"><!-- 博客ID -->
				
					<h2>
					
						<a href="the_permalink()" title="<?php the_title();?>"> <!-- 博客链接和链接标题 -->
						
							<?php the_title();?><!-- 博客标题 -->
							
						</a>
						
					</h2><!-- 博客标题 -->
					
					<?php the_content();?><!-- 博客内容 -->
					
					<p class="blogmate">
					
						<?php the_category(',');?><!-- 博客分类 -->
						
						<?php the_author();?><!-- 博客作者-->
						
						<?php comments_popup_link('No Comments &#187;');?><!-- 博客评论 -->
						
					</p>	
					
				</div>		
				
			<?php endwhile; ?>
			
			<p>
				<?php posts_nav_link('in between','before','after');?><!-- 博文导航链接 -->
			</p>
			
			<?php else: ?><!-- 没有博文就提示not found -->
			
				<div class="enty">
				
					Not Found!
					
				</div>
				
		<?php endif; ?>
		
	</div>
	
	<?php get_sidebar();?><!-- 调用侧边栏 -->
	
</body>
</html>