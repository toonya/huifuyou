<div class="container">
	<?php if(is_home()):; ?>
    <!--begin code-->
    <div class="text-center">
    	<img class="img-responsive" style="margin:0 auto;" src="<?php echo get_template_directory_uri();?>/images/assets/features.png" />
    </div>
    <div class="flink">
    	<p>友情链接：</p>
        <ul>
        	<li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/assets/flink/bank-1.jpg"</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
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