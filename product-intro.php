<?php
/*
Template Name: 产品介绍
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="padding:0;">
			<?php while ( have_posts() ) : the_post(); ?>

            <!--开始代码-->
            <div style="background:#f4f4f4">
                <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/product-intro/product-intro-2.jpg">
                <p style="font-family:Microsoft YaHei,微软雅黑;font-size:24px;margin:50px;">乐刷商务版是一款支持商户进行刷卡收款，并通过银联认证的移动手机刷卡器。可以用于门店收款或上门收款。</p>
                <img class="img-responsive"  src="<?php echo get_template_directory_uri()?>/images/product-intro/product-intro-1.jpg">
                <a href="http://item.taobao.com/item.htm?spm=a1z10.3.w4002-1198074655.91.v0ip1z&id=20396079117" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/product-intro/buynow.png"></a>
            </div>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>