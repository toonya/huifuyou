<?php
/*
Template Name: 关于乐刷
*/
?>

<?php get_header(); ?>
<style type="text/css">


</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="background:#f4f4f4;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
                <div class="container">
              <!-- Nav tabs -->
                 <div style="margin-top:50px;" class="col-xs-12 col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#about-pos" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于POS</a></li>
                      <li><a href="#about-rate" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于费率</a></li>
                      <li><a href="#about-three-pay" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于三方支付</a></li>
                      <li><a href="#about-register" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于注册申请</a></li>
                    </ul>
                 </div>
                    <!-- Tab panes -->
                <div class="tab-content col-xs-12 col-md-9" style="margin-top:30px;">
                <!--about-pos开始-->
                  <div class="tab-pane active" id="about-pos">

                  </div>
                <!--//about-pos-->
                <!--about-rate开始-->
                  <div class="tab-pane" id="about-rate">

                  </div>
                <!--//about-rate-->
                <!--about-three-pay开始-->
                  <div class="tab-pane" id="about-rate">

                  </div>
                <!--//about-three-pay-->
                </div>
                <!--about-register开始-->
                  <div class="tab-pane" id="about-rate">

                  </div>
                <!--//about-register-->               
                <img style="margin-left:900px;" src="<?php echo get_template_directory_uri()?>/images/signature.png">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>