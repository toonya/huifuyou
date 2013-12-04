<?php
/*
Template Name: 安全保障
*/
?>

<?php get_header(); ?>
<style type="text/css">
#feature-1, #feature-2, #feature-3 { width:800px; margin:50px auto; padding-bottom:50px; text-align:left; font-family:Microsoft YaHei,微软雅黑; font-size:30px; border-bottom:2px dashed grey; }
.font-12 { font-size:12px; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="background:#f4f4f4; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
                <p id="feature-1">通过银联相关认证<img class="img-responsitive" style="vertical-align:top;margin-left:300px;" src="<?php echo get_template_directory_uri()?>/images/security/unionpay.png"></p>
                <p id="feature-2">软硬件双重加密<img class="img-responsitive" style="vertical-align:top;margin-left:400px;" src="<?php echo get_template_directory_uri()?>/images/security/2.png"></p>
                <p id="feature-3" style="border-bottom:none;margin-bottom:0">后台数据严密审核<img style="vertical-align:top;margin-left:365px;" src="<?php echo get_template_directory_uri()?>/images/security/1.png"></p>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>