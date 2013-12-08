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
                      <li><a href="#about-pos" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于乐POS</a></li>
                      <li><a href="#about-rate" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于费率</a></li>
                      <li><a href="#about-three-pay" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于三方支付</a></li>
                      <li><a href="#about-register" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于注册申请</a></li>
                    </ul>
                 </div>
                    <!-- Tab panes -->
                <div class="tab-content col-xs-12 col-md-9" style="margin-top:30px;">
                <!--about-pos开始-->
                  <div class="tab-pane active" id="about-pos">
                      <div style="width:60%;float:left;">
				  		<p>乐刷商务版简称乐POS，是一款支持商户进行刷卡收款，并通过银联认证的移动手机刷卡器。由深圳移卡科技有限公司研发。</p>
                        <ul>收单功能：
                        	<li>普通收款、撤销</li>
							<li>快递/COD订单号收款、代理商提货收款、保险保单号收款</li>
                        </ul>
						<ul>便民服务：
                            <li>查询余额</li>
                            <li>信用卡还款</li>
                            <li>卡卡转账</li>
                            <li>财付通充值、支付宝充值、手机充值、游戏充值、Q币充值</li>
                        </ul>
                        <ul>对账系统：
                            <li>交易查询</li>
                            <li>结算查询</li>
                            <li>经营业绩统计分析</li>
                            <li>便民服务的收益分成</li>
                        </ul>
                      </div>
                      <div style="width:40%;float:left;">
                          <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/1.png">
                      </div>
                      <div style="width:100%">
                      <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/2.jpg">
                      <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/3.jpg">
                      <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/4.jpg">
                      </div>
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