<div id="sidebar">
		<ul>
			<?php wp_list_pages('depth=2&title_li=<h2>页面</h2>');?><!-- 页面链接列表 depth表示显示层级-->
			<li>
				<?php _e('<h2>分类目录</h2>');?><!-- 分类链接列表 Categories-->
				<ul>				
					<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0');?><!-- 按分类字符顺序 --><!-- 分类含有的日志数 -->
				</ul>
			</li>
			<li>
				<?php _e('<h2>文章归档</h2>');?><!-- 文章归档 Archives-->
				<ul>
					<?php wp_get_archives('type=monthly');?><!-- 按月份存档 -->
				</ul>
			</li>
			
			<?php get_links_list();?><!-- 获取友情链接 -->
			
		</ul>
</div>