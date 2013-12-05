<?php
/*
Template Name: 安全保障
*/
?>

<?php get_header(); ?>
<style type="text/css">
    #feature-1, #feature-2, #feature-3 {text-align:left; font-family:Microsoft YaHei,微软雅黑; font-size:30px; border-bottom:2px dashed grey; padding: 24px;}
    .font-12 { font-size:12px; }
    .container .img-responsive{
        margin: 24px;
    }
</style>
<div id="primary" class="site-content">
    <div id="content" role="main" style="background:#f4f4f4; text-align:center;">
        <?php while ( have_posts() ) : the_post(); ?>

        <!--开始代码-->
        <div class="container">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div id="feature-1">
                    <div class="text-left">通过银联相关认证</div>
                    <div class="hidden-xs col-xs-offset-2 col-sm-5 col-lg-push-6 col-md-push-6 col-sm-push-6">
                        <img class="img-responsive" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/unionpay.png">
                    </div>
                    <div class="visible-xs col-xs-8 pull-right">
                        <img class="img-responsive" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/unionpay.png">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="feature-2">
                    <div class="text-left">软硬件双重加密</div>
                    <div class="hidden-xs col-sm-5 col-lg-push-6 col-md-push-6 col-sm-push-6">
                        <img class="img-responsive pull-right" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/2.png">
                    </div>
                    <div class="visible-xs col-xs-4 pull-right">
                        <img class="img-responsive pull-right" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/2.png">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="feature-3" style="border-bottom:none;margin-bottom:0">
                    <div class="text-left">后台数据严密审核</div>
                    <div class="hidden-xs col-sm-5 col-lg-push-6 col-md-push-6 col-sm-push-6">
                        <img class="img-responsive  pull-right" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/1.png">
                    </div>
                    <div class="visible-xs col-xs-4 pull-right">
                        <img class="img-responsive  pull-right" style="vertical-align:top" src="<?php echo get_template_directory_uri()?>/images/security/1.png">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--结束代码-->

        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>