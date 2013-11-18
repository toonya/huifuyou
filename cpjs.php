<?php
/*
Template Name: 产品介绍
*/
?>

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
            
            
            	<h1><?php the_title();?></h1>
                
                <article><?php the_content();?></article>
            
            
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>