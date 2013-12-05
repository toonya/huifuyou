<?php
/*
Template Name: 渠道合作
*/
?>

<?php get_header();?>

<style type="text/css">
h2, .cor-p {
     margin:0 auto;
	 text-align:left;
	 font-family:Microsoft YaHei,微软雅黑;
	 font-weight:bolder;
}
.cor-p {
	color:grey; font-size:16px; padding-bottom:10px;
}
h2 {
    color:#2f75aa;
	padding-top:50px;
	padding-bottom:10px;  }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="background:white;">
			<?php while ( have_posts() ) : the_post(); ?>

            <!--开始代码-->
            	<img class="img-responsive center-block" style="margin-top:-48px;" src="<?php echo get_template_directory_uri()?>/images/corporation/corporation.png">
                <div class="container">
                	<h2>什么是乐刷商务版</h2>
                	<p class="cor-p">乐刷商务版是一款支持商户进行刷卡收款并通过银联认证的移动手机刷卡器。</p>
                	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/corporation/1.png">
                	<h2>乐刷商务版优势对比</h2>
                	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/corporation/2.png">
                	<h2>乐刷商务版便民服务</h2>
                	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/corporation/3.png">
                	<h2>申请渠道条件</h2>
                	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/corporation/4.png">
                	<h2>申请流程</h2>
                	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri()?>/images/corporation/5.png">
                	            <!--结束代码-->
                	<h2>意向合作</h2>
                	<div class="container"><div class="col-xs-8 col-xs-offset-1"><?php the_content(); ?></div></div>
                </div>
			<?php endwhile; // end of the loop. ?>
            <!--结束代码-->
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>