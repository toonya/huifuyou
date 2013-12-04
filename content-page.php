<div class="container">
	<?php if(is_home()):; ?>
    <!--begin code-->
    <div class="text-center">
    	<img class="img-responsive" style="margin:0 auto;" src="<?php echo get_template_directory_uri();?>/images/assets/features.png" />
    </div>
    <style type="text/css">
			.flink { margin-top:100px; padding-top:40px; border-top:1px solid #999;  }
			.flink ul { width:900px; margin:0 auto; height:115px; list-style:none; }
			.flink ul li { float:left; margin-right:35px; }
			.m-bottom-30 { margin-bottom:30px; }
		</style>
    <div class="flink">
    	<p style="width:900px; margin:0 auto; font-family:Microsoft YaHei,微软雅黑; margin-bottom:10px;">友情链接：</p>
        <ul>
        	<li class="m-bottom-30"><a href="http://lepos.yeahka.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/yeahka.png"></a></li>
            <li class="m-bottom-30"><a href="http://cn.unionpay.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/unionpay.jpg"></a></li>
            <li class="m-bottom-30"><a href="http://www.cmbchina.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-3.jpg"></a></li>
            <li class="m-bottom-30"><a href="http://www.boc.cn/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-4.jpg"></a></li>
            <li><a href="http://www.bankcomm.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-5.jpg"></a></li>
            <li><a href="http://www.abchina.com/cn/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-6.jpg"></a></li>
            <li><a href="http://www.ccb.com/cn/home/index.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-1.jpg"></a></li>
            <li><a href="http://www.cebbank.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-2.jpg"></a></li>
        </ul>
    </div>
    <!--end code-->
    <?php else: ?>
    <article>
    	<h1><?php the_title(); ?></h1>
    	<section><?php the_content();?></section>
    </article>
	<?php endif; ?>
</div>