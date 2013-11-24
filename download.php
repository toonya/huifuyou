<?php
/*
Template Name: 应用下载
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
.font-12 { font-size:12px; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="padding:0; background:#f4f4f4; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
            <div style="height:500px;width:1200px; margin:0 auto;">
              <!-- Nav tabs -->
                 <div style="width:300px;float:left;">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#android-download" data-toggle="tab">Android客户端</a></li>
                      <li><a href="#iphone-download" data-toggle="tab">iPhone客户端</a></li>
                    </ul>
                 </div>   
                    <!-- Tab panes -->
                    <div class="tab-content" style="width:900px;float:left;">
                      <div class="tab-pane active" id="android-download">
                          <p>你可以在电脑上下载</p>
                          <a href="" target="_blank">
                              <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly.png">
                          </a>
                          <p class="font-12">适用于Android系统的手机和部分平板电脑</p>
                          <a class="font-12" href="" target="_blank">Andriod V1.3.0版本下载</a>
                          <p class="font-12">还可以扫一扫直接手机下载</p>
                          <img src="<?php echo get_template_directory_uri()?>/images/download/down_android_28.gif">
                          <p class="font-12">适用于Android系统的手机和部分平板电脑</p>                         
                      </div><!--//android-download-->
                      <div class="tab-pane" id="iphone-download">
                          <a href="" target="_blank">
                              <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly_ip.png">
                          </a>
                          <p class="font-12">仅支持越狱的iphone手机，并且需要安装 btstack 软件。</p>
                          <p class="font-12">安装方法：1、打开Cydia 2、搜索 Btstack ，并安装（有可能搜到多个，任意装一个即可）</p>
                          <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                          <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oas.png">
                          <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oly.png">
                          <p class="font-12">仅支持越狱的iphone手机</p>
                          <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                          <img src="<?php echo get_template_directory_uri()?>/images/download/down_iphone_30.gif">
                          <p class="font-12">不支持蓝牙打印功能</p>
                      </div><!--//iphone-download-->
                    </div>
            </div>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>