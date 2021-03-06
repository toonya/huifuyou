<?php
/*
Template Name: 应用下载
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
.font-12 { font-size:12px; }
h3 { text-align:left;
     font-family:Microsoft YaHei,微软雅黑;
	 margin-bottom:30px; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="background:#f4f4f4; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>

            <!--开始代码-->
            <div class="container">
              <!-- Nav tabs -->
                 <div style="margin-top:50px;" class="col-xs-12 col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#android-download" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">Android客户端</a></li>
                      <li><a href="#iphone-download" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">iPhone客户端</a></li>
                      <li><a href="#pc-download" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">电脑客户端</a></li>
                    </ul>
                 </div>
                    <!-- Tab panes -->
                <div class="tab-content col-xs-12 col-md-9" style="margin-top:30px;">
                <!--android-download开始-->
                  <div class="tab-pane active" id="android-download">
                     <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                          <h3 style="margin-top:0;">你可以在电脑上下载</h3>
                          <a href="" target="_blank">
                              <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly.png">
                          </a>
                          <p class="font-12">适用于Android系统的手机和部分平板电脑</p>
                          <a class="font-12" href="" target="_blank">Andriod V1.3.0版本下载</a>
                     </div>
                     <div style="background:lightgrey;padding:20px;">
                          <h3 style="margin-top:0;">还可以扫一扫直接手机下载</h3>
                          <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/download/down_android_28.gif">
                          <p class="font-12" style="margin-top:5px;">适用于Android系统的手机和部分平板电脑</p>
                     </div>
                  </div>
                <!--//android-download-->
                <!--iphone-download开始-->
                  <div class="tab-pane" id="iphone-download">
                     <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                          <a href="" target="_blank">
                              <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly_ip.png">
                          </a>
                          <p class="font-12">仅支持越狱的iphone手机，并且需要安装 btstack 软件。</p>
                          <p class="font-12">安装方法：1、打开Cydia 2、搜索 Btstack ，并安装（有可能搜到多个，任意装一个即可）</p>
                          <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                     </div>
                     <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                          <img class="img-responsive" style="margin-right:50px;" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oas.png">
                          <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oly.png">
                          <p class="font-12">仅支持越狱的iphone手机</p>
                          <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                      </div>
                      <div style="background:lightgrey;padding:20px;">
                          <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/download/down_iphone_30.gif">
                          <p class="font-12" style="margin-top:5px;">不支持蓝牙打印功能</p>
                      </div>
                  </div>
                  <!--//iphone-download-->
                  <!--pc-download开始-->
                  <div class="tab-pane" id="pc-download">
                          <h3 style="margin-top:0;">第一次在电脑上登陆后，弹出如下对话框，点击“安装”即可使用刷卡收款功能。</h3>
                          <img src="<?php echo get_template_directory_uri()?>/images/download/h_ax_az.jpg">
                          <p style="margin-top:50px;"><a style="background:#fabe00;color:white;font-family:Microsoft YaHei,微软雅黑;font-size:25px;border-radius:3px;padding:8px;" href="http://pos.yeahka.com/leposweb/home/login.do" target="_blank">点击登录乐刷PC客户端</a></p>
                  </div>
                <!--//pc-download-->
                </div>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>