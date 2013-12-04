<?php
/*
Template Name: 商户案例
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
.wrap { width:1000px; margin:0 auto; }
.case { width:750px; height:330px;}
.margin-left-250 { margin-left:250px; }
.text-right { text-align:right; }
.case img { float:left; }
.case ul { width:500px; list-style:none; padding:15px; float:left;}
.case h3 { font-family:Microsoft YaHei,微软雅黑; margin-bottom:0; font-weight:bolder; }
.h3-right { text-align:right; width:680px; }
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="height:5400px;background:#cfe8cb;font-family:Microsoft YaHei,微软雅黑;font-size:16px;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
            <div class="wrap">
                <div class="case">
                    <h3>餐饮商户</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-1.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>客户需要送餐上门，担心收假钞；</li>
                        <li>移动POS价格太高，无法给送餐人员每人配备；</li>
                        <li>柜台电脑占用网线、电话占用电话线，没有多余线路；</li>
                        <li>收银台太小，固定POS太大没地方放；</li>
                        <li>银行POS月交易量如果不达标，就要撤机。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>随时刷卡完成交易；价格便宜，使用方便，送餐人员连接手机即可收款；</li>
                        <li>兼容PC电脑收款，不需多余线路，体积小不占过多空间；</li>
                        <li>无交易量要求。</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">保险代理人</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>外出展业，保单金额大，客户要求刷卡支付；</li>
                        <li>移动POS太贵（机具价格+服务费+通信费……），使用成本高；</li>
                        <li>申请门槛高，各种证件资质要求……</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>随时刷卡完成交易，现场成交，省去来回周折，保单落袋为安；</li>
                        <li>机具价格便宜， 使用方便，业务人员配合手机或平板即可收款；</li>
                        <li>审批灵活，轻松解决收款问题。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-2.jpg">				    
                </div>   
                <div class="case">
                    <h3>通讯、数码电子</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-3.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>通讯店产品单价高，客户出行现金不足，希望刷卡支付；</li>
                        <li>移动POS太贵（机具价格+服务费+通信费……），成本通讯店无力承担；</li>
                        <li>申请门槛高，各种证件资质要求……</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>使用方便，销售人员用其手机即可刷卡收款；</li>
                        <li>机具价格便宜，一次付费，终身免费使用；</li>
                        <li>审批灵活，轻松解决收款问题。</li>
                    </ul>
                </div> 
                <div class="case margin-left-250">
                    <h3 class="h3-right">直销人员</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>店铺购买，上门推销，部分客户要求刷卡；</li>
                        <li>现场介绍后需马上形成销售，客户现金不足导致成交率降低；</li>
                        <li>银行POS、传统POS基本无法申请。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>随时随地收款，提高冲动消费成交概率；</li>
                        <li>申请审批灵活、价格低；</li>
                        <li>增值服务生活好帮手。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-4.jpg">				    
                </div> 
                <div class="case">
                    <h3>杂货店、便利店</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-5.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>经常有客户需要刷卡；</li>
                        <li>小本生意，担心收假币；</li>
                        <li>传统POS申请困难，门槛高、周期长，成本高。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>随时随地刷卡完成交易，送货上门也可以刷卡交易；</li>
                        <li>不用担心收到假币；</li>
                        <li>申请门槛低，审批速度快，价格便宜；</li>
                        <li>增值业务信用卡还款功能带来人气引导二次消费。</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">婚纱摄影</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>经常有客户需要刷卡；</li>
                        <li>小本生意，担心收假币；</li>
                        <li>传统POS申请困难，门槛高、周期长，成本高。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>随时随地刷卡完成交易，送货上门也可以刷卡交易；</li>
                        <li>不用担心收到假币；</li>
                        <li>申请门槛低，审批速度快，价格便宜；</li>
                        <li>增值业务信用卡还款功能带来人气引导二次消费。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-6.jpg">
                </div>
                <div class="case">
                    <h3>美容店</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-7.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>时尚客户群，首选刷卡支付；</li>
                        <li>会员办卡金额较大，少有客户现金支付；</li>
                        <li>传统POS申请流程复杂、审批周期长、使用成本高。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>便捷时尚，年轻人很容易接受；</li>
                        <li>审核灵活、使用成本低；</li>
                        <li>增值业务免去经常银行、营业厅排队。</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">服装</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>经常出现因为不能刷卡而导致客户流失的情况；</li>
                        <li>门面零售和批发同做，批发客户金额大，不做现金付款；</li>
                        <li>传统POS申请周期长、使用成本高。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>年轻人时尚消费，乐刷POS时尚便捷；</li>
                        <li>乐刷审批灵活、机具价格低；</li>
                        <li>增值业务丰富，还款、充值也不耽误看店。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-8.jpg">				    
                </div>
                <div class="case">
                    <h3>五金</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-9.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>部分大额订单，无法现金支付；</li>
                        <li>送货上门，客户需要刷卡；</li>
                        <li>每天收现金，有可能收到假币，每天需要对账，转存现金风险；</li>
                        <li>传统POS使用成本高；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>店铺收银，送货上门收款，都可以用乐刷POS收款；</li>
                        <li>无假币、转存现金风险；</li>
                        <li>乐刷POS审批灵活，价格低，携带方便。</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">汽修、汽配服务</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>绝大部分车主习惯刷卡消费；</li>
                        <li>店内服务价格高，客户现金不足；</li>
                        <li>外出抢修无法收到现金，需要现场收款，机具数量大无法承受。</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>移动收款便捷；不错过任何一笔交易；</li>
                        <li>机具成本更适合普及使用。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-10.jpg">				    
                </div>
                <div class="case">
                    <h3>家具建材</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-11.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>大部分为大额订单，在店铺付定金，货到付款，需刷卡收款；</li>
                        <li>有假币风险，送货收钱后遗失风险，每天需手工对账；</li>
                        <li>传统POS携带不方便，价格高，不宜大量普及；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>携带方便，便于移动收款；</li>
                        <li>机具性价比高，适合普及使用；</li>
                        <li>刷卡转账也可以收款；</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">花店</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>大部分年轻人习惯刷卡消费；</li>
                        <li>店铺收银，送货上门都有刷卡需求；</li>
                        <li>传统POS申请门槛较高，使用成本高；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>店铺收银、送货上门均可以刷卡收款；</li>
                        <li>审批灵活、周期短，使用成本低；</li>
                        <li>增值服务功能满足日常需求。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-12.jpg">
                </div>
                <div class="case">
                    <h3>快递</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-13.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>部分快递需要货到付款；</li>
                        <li>传统POS体积大、笨重，携带不方便；</li>
                        <li>传统POS使用成本高，定制功能周期长；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>小巧、便捷、收款快捷方便；</li>
                        <li>获取和使用成本低；</li>
                        <li>定制开发周期短，满足不同客户需求，便于快速部署。</li>
                    </ul>
                </div>
                <div class="case margin-left-250">
                    <h3 class="h3-right">出租车</h3>
                    <ul class="text-right">
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>新潮客户打车刷卡；</li>
                        <li>客户忘带钱包；</li>
                        <li>收到假币，一天就白干了；</li>
                        <li>传统POS申请难，使用成本高；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>审核灵活、移动收款好帮手；</li>
                        <li>机具获取和使用成本低。</li>
                    </ul>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-14.jpg">				    
                </div>
                <div class="case">
                    <h3>药店</h3>
                    <img class="img-responsitive" src="<?php echo get_template_directory_uri()?>/images/cases/case-15.jpg">
				    <ul>
                        <li style="font-weight:bold">【商户面临的问题】</li>
                        <li>客户多有刷卡习惯；</li>
                        <li>假币风险，转存现金风险、每天需要对账；</li>
                        <li>传统POS使用成本高；</li>
                        <li style="font-weight:bold">【乐刷商务版】</li>
                        <li>收款方便，降低交易风险；</li>
                        <li>小巧方便，不占收银台太多空间；</li>
                        <li>获取和使用的成本低。</li>
                    </ul>
                </div>
            </div><!--//wrap--> 
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>