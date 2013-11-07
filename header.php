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
        <header>
            <div class="container">
                <div id="siteinfo" class="siteinfo">
                    <div class="pull-right">
                        <div class="share">
                            <?php require_once("sharejiathis.php"); ?>
                            <?php  ?>
                        </div>
                        <div class="user">
                            <a href="#" class="login">
                                <span class="glyphicon glyphicon-user"></span>
                                登录
                            </a>
                            <a class="register btn btn-warning btn-lg">
                                立即注册
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <!-- end siteinfo -->
                <nav id="nav" class="nav-wrapper"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>'false','menu_class'=>'nav nav-justified' ) );?></nav>
                <!-- end nav -->
                <div id="banner" class="banner">
                    <div id="carousel-example-generic" class="carousel slide container" data-interval="3000" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-nav-type">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">Lorem ipsum.</li>
                            <li data-target="#carousel-example-generic" data-slide-to="1">Lorem ipsum dolor.</li>
                            <li data-target="#carousel-example-generic" data-slide-to="2">Lorem ipsum.</li>
                        </ol>
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>
                <!-- end banner -->
            </div>	
        </header>