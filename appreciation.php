<?php
/*
Template Name: 增值服务
*/
?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" style="padding:0;background:white;text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
                <img class="img-responsitive center-block" 
                     src="<?php echo get_template_directory_uri()?>/images/appreciation/appreciation.png">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>