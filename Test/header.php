
	<header id="header">
	
		<div id="logo">
		
			<h1>
			
				<a href="<?php bloginfo('url')?>"><!-- 网站链接 -->
				
					<?php  bloginfo('name');?><!-- 网站名称 -->
					
				</a>
			</h1>		
			
			<?php bloginfo('description');?><!-- 站点描述 -->
		</div>
		
		<?php
		
			wp_nav_menu( array('menu' => 'mymenu', 'depth' => 1));
		?>
		
		
	</header>