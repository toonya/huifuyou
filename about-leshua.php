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
                <h3><span>商家QQ：</span>9999999999</h3>
                <h3><span>联系人：</span>梁经理&nbsp;&nbsp;18666666666</h3>
                <h3><span>固定电话：</span>0000-8888888</h3>
                <h3 style="padding-left:120px;">0000-88888888</h3>  
                <h3><span>地址：</span>某某市某某区某某路某大厦某号楼某室</h3>
                <img style="margin-left:900px;" src="<?php echo get_template_directory_uri()?>/images/signature.png">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>