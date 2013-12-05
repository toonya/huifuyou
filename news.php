<?php
/*
Template Name: 新闻栏目
*/
?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="container">
				<?php
					$args = array(
					        'posts_per_page'  => 15,
					        'offset'          => 0,
					        'category'        => '',
					        'orderby'         => 'post_date',
					        'order'           => 'DESC',
					        'include'         => '',
					        'exclude'         => '',
					        'meta_key'        => '',
					        'meta_value'      => '',
					        'post_type'       => 'post',
					        'post_mime_type'  => '',
					        'post_parent'     => '',
					        'post_status'     => 'publish',
					        'suppress_filters' => true );

					// The Query
					$the_query = new WP_Query( $args );

					// The Loop
					echo '<ul class="list-unstyled center-block">';
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						echo '<li>';
						echo '<div class="col-xs-10 col-lg-offset-2 col-lg-7"><a href="';
						the_permalink();
						echo '">';
						the_title();
						echo '</a></div>';
						echo '<div class="col-xs-2">';
						the_time('Y-m-d');
						echo '</div>';
						echo '</li>';
					endwhile;
					echo '</ul>';
					/* Restore original Post Data
					 * NB: Because we are using new WP_Query we aren't stomping on the
					 * original $wp_query and it does not need to be reset.
					*/
					wp_reset_postdata();
				 ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>