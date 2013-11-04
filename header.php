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
  		
  		<!-- for width -->
		<header class="visible-lg hidden-md hidden-sm hidden-xs">
			<div class="siteinfo container">
				<div class="pull-right">
					<div class="share">
						<!-- JiaThis Button BEGIN -->
						<div class="jiathis_style_24x24">
							<a class="jiathis_button_qzone"></a>
							<a class="jiathis_button_tsina"></a>
							<a class="jiathis_button_tqq"></a>
							<a class="jiathis_button_weixin"></a>
							<a class="jiathis_button_renren"></a>
							<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
						</div>
						<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
						<!-- JiaThis Button END -->
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
			
			<div class="nav-wrapper container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>'false','menu_class'=>'nav nav-justified' ) );?></div>
			
			<div class="banner container">
				<div id="carousel-example-generic" class="carousel slide container" data-interval="3000" data-ride="carousel">
			      <!-- Indicators -->
				  <ol class="carousel-indicators">
			        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			      </ol>
		
			    
			      <!-- Wrapper for slides -->
			      <div class="carousel-inner">
			        <div class="item active"></div>
			        <div class="item"></div>
			        <div class="item"></div>
			      </div>
			    </div>
			</div>
		</header>
		
		<!-- for width -->
		<header class="hidden-lg visible-md visible-sm visible-xs">
			<div class="siteinfo">
				<div class="container">
					<div class="pull-right">
						<div class="share">
							<!-- JiaThis Button BEGIN -->
							<div class="jiathis_style_24x24">
								<a class="jiathis_button_qzone"></a>
								<a class="jiathis_button_tsina"></a>
								<a class="jiathis_button_tqq"></a>
								<a class="jiathis_button_weixin"></a>
								<a class="jiathis_button_renren"></a>
								<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
							</div>
							<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
							<!-- JiaThis Button END -->
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
			</div>
			
			<div class="nav-wrapper"><div class="container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>'false','menu_class'=>'nav nav-justified' ) );?></div></div>
			<div class="banner">
				<div class="container">
					<div id="carousel-example-generic" class="carousel slide container" data-interval="3000" data-ride="carousel">
								      <!-- Indicators -->
					  <ol class="carousel-indicators">
				        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				      </ol>
			
				    
				      <!-- Wrapper for slides -->
				      <div class="carousel-inner">
				        <div class="item active"></div>
				        <div class="item"></div>
				        <div class="item"></div>
				      </div>
				    </div>
				</div>
			</div>
		</header>