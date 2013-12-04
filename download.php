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
		<div id="content" role="main" style="padding:0; background:#f4f4f4; text-align:center;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
            <div style="height:700px;width:900px; margin:0 auto;">
              <!-- Nav tabs -->
                 <div style="width:250px;float:left;margin-top:50px;">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#android-download" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">Android客户端</a></li>
                      <li><a href="#iphone-download" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">iPhone客户端</a></li>
                    </ul>
                 </div>   
                    <!-- Tab panes -->
                    <div class="tab-content" style="width:600px;float:right;margin-top:30px;">
                    <!--android-download开始-->
                      <div class="tab-pane active" id="android-download">
                         <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                              <h3 style="margin-top:0;">你可以在电脑上下载</h3>
                              <a href="" target="_blank">
                                  <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly.png">
                              </a>
                              <p class="font-12">适用于Android系统的手机和部分平板电脑</p>
                              <a class="font-12" href="" target="_blank">Andriod V1.3.0版本下载</a>
                         </div>
                         <div style="background:lightgrey;padding:20px;">
                              <h3 style="margin-top:0;">还可以扫一扫直接手机下载</h3>
                              <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/download/down_android_28.gif">
                              <p class="font-12" style="margin-top:5px;">适用于Android系统的手机和部分平板电脑</p> 
                         </div>                        
                      </div>
                    <!--//android-download-->
                    <!--iphone-download开始-->
                      <div class="tab-pane" id="iphone-download">
                         <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                              <a href="" target="_blank">
                                  <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_ly_ip.png">
                              </a>
                              <p class="font-12">仅支持越狱的iphone手机，并且需要安装 btstack 软件。</p>
                              <p class="font-12">安装方法：1、打开Cydia 2、搜索 Btstack ，并安装（有可能搜到多个，任意装一个即可）</p>
                              <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                         </div>
                         <div style="background:lightgrey;padding:20px;margin-bottom:40px;">
                              <img style="margin-right:50px;" src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oas.png">
                              <img src="<?php echo get_template_directory_uri()?>/images/download/btn_d_oly.png">
                              <p class="font-12">仅支持越狱的iphone手机</p>
                              <p><a class="font-12" href="" target="_blank">iPhone V1.3.0版本下载</a></p>
                          </div>
                          <div style="background:lightgrey;padding:20px;">
                              <img src="<?php echo get_template_directory_uri()?>/images/download/down_iphone_30.gif">
                              <p class="font-12" style="margin-top:5px;">不支持蓝牙打印功能</p>
                          </div>
                         </div>
                      </div><!--//iphone-download-->
                    </div>
            </div>
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>