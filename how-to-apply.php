<?php
/*
Template Name: 如何申请
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="padding:0; background:#f4f4f4; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>

            <!--开始代码-->
              <img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/how-to-apply/how-to-apply.jpg">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>