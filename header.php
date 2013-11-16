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
            	    <div class="pull-right">
            	        <div class="share">
            	            <?php require_once("sharejiathis.php"); ?>
            	        </div>
            	        <div class="user">
            	            <a href="http://www.yeahka.com/login.html?return_url=http%3A%2F%2Fwww.yeahka.com%2F" class="login">
            	                <span class="glyphicon glyphicon-user"></span>
            	                登录
            	            </a>
            	            <a href="http://www.yeahka.com/register.html?return_url=http%3A%2F%2Fwww.yeahka.com%2F" class="register btn btn-warning btn-lg">
            	                立即注册
            	            </a>
            	        </div>
            	        <div class="clearfix"></div>
            	    </div>
            	    <div class="logo">
            	        <a href="<?php echo bloginfo('url')?>"><img src="<?php echo get_template_directory_uri()?>/images/assets/logo.png" alt="" class="img-responsive" /></a>
            	    </div>
            	</div>
            	<!-- end container -->
            </div>
            <!-- end siteinfo -->
            <nav class="nav-wrapper"><div class="container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>'false','menu_class'=>'nav nav-justified' ) );?></div></nav>
            <!-- end nav -->
            <div id="banner" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div data-bg-src="<?php echo get_template_directory_uri();?>/images/assets/banner-1.jpg" class="item auto-add-bg active"></div>
                    <div data-bg-src="<?php echo get_template_directory_uri();?>/images/assets/banner-1.jpg" class="item auto-add-bg"></div>
                    <div data-bg-src="<?php echo get_template_directory_uri();?>/images/assets/banner-1.jpg" class="item auto-add-bg"></div>
                    <div data-bg-src="<?php echo get_template_directory_uri();?>/images/assets/banner-1.jpg" class="item auto-add-bg"></div>
                    <div data-bg-src="<?php echo get_template_directory_uri();?>/images/assets/banner-1.jpg" class="item auto-add-bg"></div>
                </div>
                
                <!-- Indicators -->
                <ol class="carousel-nav">
                    <li data-target="#banner" data-slide-to="0" class="active">小生意POS机</li>
                    <li data-target="#banner" data-slide-to="1">新潮老板最爱</li>
                    <li data-target="#banner" data-slide-to="2">聪明你的生意</li>
                    <li data-target="#banner" data-slide-to="3">销售明星的故事</li>
                    <li data-target="#banner" data-slide-to="4">郑州第一刷卡哥</li>
                </ol>
                
            </div>
            <!-- end banner -->	
        </header>