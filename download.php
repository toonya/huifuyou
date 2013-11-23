<?php
/*
Template Name: 应用下载
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="padding:0; background:white; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
              <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#android-download" data-toggle="tab">Android客户端</a></li>
                      <li><a href="#iphone-download" data-toggle="tab">iPhone客户端</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="android-download">Android客户端</div>
                      <div class="tab-pane" id="iphone-download">iPhone客户端</div>
                    </div>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>