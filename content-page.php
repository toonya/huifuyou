<div class="container">
	<?php if(is_home()):; ?>
    <!--begin code-->
    <div class="text-center">
    	<img class="img-responsive" style="margin:0 auto;" src="<?php echo get_template_directory_uri();?>/images/assets/features.png" />
    </div>
    <div class="flink">
    	<p>友情链接：</p>
        <style type="text/css">
			.flink ul { width:900px; margin:0 auto; height:150px; list-style:none; }
			.flink ul li { float:left; margin-right:15px; }
		</style>
        <ul>
        	<li style="float:left"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-1.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-2.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-3.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-4.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-5.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-6.jpg"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/yeahka.png"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/unionpay.jpg"></a></li>
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