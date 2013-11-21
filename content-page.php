<div class="container">
	<?php if(is_home()):; ?>
    <div class="text-center">
    	<img class="center" src="<?php echo get_template_directory_uri();?>/images/assets/features.png" />
    </div>
    <?php else: ?>
	<?php the_content();?>
	<?php endif; ?>
</div>