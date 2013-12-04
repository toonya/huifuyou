<?php
/*
Template Name: 联系我们
*/
?>

<?php get_header(); ?>
<style type="text/css">
h3 { 
    width:600px;
	margin:30px auto;
	font-family:Microsoft YaHei,微软雅黑;
	color:grey;
}
span { font-weight:bold; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="background:#f4f4f4;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
                <h3><span>商家QQ：</span>2869774809</h3>
                <h3><span>联系人：</span>梁经理&nbsp;&nbsp;15237122333</h3>
                <h3><span>固定电话：</span>0371-63449343</h3>
                <h3 style="padding-left:120px;">0371-56780877</h3>  
                <h3><span>地址：</span>郑州市金水路未来路东北角升龙大厦12号楼1503</h3>
                <img style="margin-left:900px;" src="<?php echo get_template_directory_uri()?>/images/signature.png">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>