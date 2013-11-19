<?php
/*
Template Name: 商户案例
*/
?>

<?php get_header(); ?>
<style type="text/css">
p { text-align:center; }
.case { width:700px; height:400px; float:left; }
.case img { float:left; }
.case ul { list-style:none; padding:15px;}
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main" style="height:3000px;padding:0; background:#cfe8cb;font-family:Microsoft YaHei,微软雅黑;font-size:16px;">
			<?php while ( have_posts() ) : the_post(); ?>
				
            <!--开始代码-->
                <div class="case">
                    <img src="<?php echo get_template_directory_uri()?>/images/cases/case-1.jpg">
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
                <div class="case"></div>    
            <!--结束代码-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>