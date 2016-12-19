<?
	get_header();
?>
			

<?
	get_template_part('template','slider');    //轮播图
	get_template_part('template','indexabout');    //关于我们
	get_template_part('template','indexservice');   //服务内容
	get_template_part('template','indexwhy');   //为什么选择我们 
	get_template_part('template','indexanli');   //客户案例
	get_template_part('template','indexpingjia');   //客户评价
?>
			

<? //调用模版
	
	get_template_part('template','footer');    //友情链接
	
	get_footer();
?>