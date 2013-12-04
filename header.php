<!DOCTYPE html>
<html>
    <head>
        <title><?php echo bloginfo('blogname'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
    	<!-- class="auto-add-bg bg-cover" data-bg-src="<?php echo get_template_directory_uri();?>/images/bgheader.jpg" -->
        <header>
            <div class="siteinfo">
            	<div class="container">
                    <p style="font-size:12px;margin-bottom:-20px;color:#999;">代理商代码：14</p>
            	    <div class="pull-right">
            	        <div class="share">
            	            <?php require_once("sharejiathis.php"); ?>
            	        </div>
            	        <div class="user">
            	            <a href="<?php echo esc_attr(get_option('headerLoginUrl')) ?>" class="login">
            	                <span class="glyphicon glyphicon-user"></span>
            	                登录
            	            </a>
            	            <a href="<?php echo esc_attr(get_option('headerRegistUrl')) ?>" class="register btn btn-warning btn-lg">
            	                立即注册
            	            </a>
            	        </div>
            	        <div class="clearfix"></div>
            	    </div>
            	    <div class="logo">
            	        <a href="<?php echo bloginfo('url')?>"><img style="height:58px" src="<?php echo get_template_directory_uri()?>/images/assets/logo.png" alt="" class="img-responsive" /></a>
            	    </div>
            	</div>
            	<!-- end container -->
            </div>
            <!-- end siteinfo -->
            <nav class="nav-wrapper"><div class="container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>'false','menu_class'=>'nav nav-justified' ) );?></div></nav>
            <!-- end nav -->
            <?php if(is_home()):;?>
            <?php
                $banner_list = get_option('bannerlist');
                $banner_control = '';
				if($banner_list):;
            ?>
            <div id="banner" class="carousel slide">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                	<?php
	                	foreach($banner_list as $key=>$item) {
		                	if($key==0) {
		                		echo '<a class="item active" href="'.$item['url'].'"><img src="'.$item['imgurl'].'" class="img-responsive" /></a>';
								$banner_control .= '<li data-target="#banner" data-slide-to="0" class="active">'.$item['title'].'</li>';
		                	}
		                	else {
		                		echo '<a class="item" href="'.$item['url'].'"><img src="'.$item['imgurl'].'" class="img-responsive" /></a>';
								$banner_control .= '<li data-target="#banner" data-slide-to="'.$key.'">'.$item['title'].'</li>';
		                	}
	                	}
                	?>
                </div>

                <!-- Indicators -->
                <ol class="carousel-nav">
                    <?php echo $banner_control; ?>
                </ol>

            </div>
            <!-- end banner -->
            <?php endif;?>
            <?php endif;?>
        </header>