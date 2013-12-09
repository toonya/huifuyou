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
                      <li><a href="#about-three-pay" data-toggle="tab" style="font-size:28px; font-family:Microsoft YaHei,微软雅黑;">关于第三方支付</a></li>
                    </ul>
                 </div>
                    <!-- Tab panes -->
                <div class="tab-content col-xs-12 col-md-9" style="margin-top:30px;">
                <!--about-pos开始-->
                  <div class="tab-pane active" id="about-pos">
                      <div style="width:60%;float:left;">
				  		<p style="text-indent:2em">乐刷商务版简称乐POS，是一款支持商户进行刷卡收款，并通过银联认证的移动手机刷卡器。由深圳移卡科技有限公司研发。</p>
                        <ul><span style="font-weight:bold;">收单功能：</span>
                        	<li>普通收款、撤销</li>
							<li>快递/COD订单号收款、代理商提货收款、保险保单号收款</li>
                        </ul>
						<ul><span style="font-weight:bold;">便民服务：</span>
                            <li>查询余额</li>
                            <li>信用卡还款</li>
                            <li>卡卡转账</li>
                            <li>财付通充值、支付宝充值、手机充值、游戏充值、Q币充值</li>
                        </ul>
                        <ul><span style="font-weight:bold;">对账系统：</span>
                            <li>交易查询</li>
                            <li>结算查询</li>
                            <li>经营业绩统计分析</li>
                            <li>便民服务的收益分成</li>
                        </ul>
                      </div>
                      <div style="width:40%;float:left;">
                          <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/1.png">
                      </div>
                      <div style="width:100%;float:left;margin-top:50px;">
                      <img style="margin-right:20px;" src="<?php echo get_template_directory_uri()?>/images/about-leshua/2.jpg">
                      <img style="margin-right:20px;" src="<?php echo get_template_directory_uri()?>/images/about-leshua/3.jpg">
                      <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/4.jpg">
                      </div>
                  </div>
                <!--//about-pos-->
                <!--about-rate开始-->
                  <div class="tab-pane" id="about-rate">
                  		<p style="text-indent:2em;font-size:16px;">连锁民生类个体商户或有限公司（包括加油类，超市类，便民类，家用电器销售，手机话费充值）。可以申请<span style="font-weight:bold">0.5%</span>费率。</p>
                        <p style="text-indent:2em;font-size:16px;">其他行业可以办理申请<span style="font-weight:bold">0.78%</span>费率。</p>
                  </div>
                <!--//about-rate-->
                <!--about-three-pay开始-->
                  <div class="tab-pane" id="about-three-pay">
                  		<p style="text-indent:2em"><span style="font-size:20px;font-weight:bold;">深圳市移卡科技有限公司</span>是一家以技术为导向的高科技移动支付公司，针对市场需求，我公司推出三代移动支付终端，第四代终端还在研发中。</p>
                        <ul>
                            <li>公司自2011年初成立，即获得著名VC和腾讯的风险投资，注册资本1500万元。</li>
							<li>初创团队由来自国内知名互联网、通信、金融支付行业企业资深人士组成；</li>
							<li>拥有深厚的支付行业背景经验和强大的软硬件自主研发能力。</li> 
                            <li>2011年7月，国内率先发布个人刷卡支付产品；</li>
							<li>2011年12月，发布“乐刷1.5” ；用户无需开通网银或第三方支付平台帐户，即可通过个人手机和“乐刷1.5 APP”进行刷卡支付； 目前，乐刷移动支付平台已稳健运营，用户飞速增长。</li>
							<li>持续创新：两款“乐POS ”产品和新一代”乐刷”产品即将发布。</li>
                        </ul>
                        <img src="<?php echo get_template_directory_uri()?>/images/about-leshua/5.png">
                  </div>
                <!--//about-three-pay-->
                </div>              
                <img style="margin:50px 0 0 900px" src="<?php echo get_template_directory_uri()?>/images/signature.png">
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>