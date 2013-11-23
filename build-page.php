<?php
// ----------------------------------------
// ! add a admin page to edit the banner
//   slide images
// ----------------------------------------

add_action( 'admin_menu', 'home_images' );

function home_images() {
    add_menu_page( '首页图片', '首页图片', 'manage_options', 'homeImageOptions', 'homeImagesPageBuilder', '', 99 );
}
function homeImagesPageBuilder() {?>

    <div id="banner-option">
	    <h1>首页图片管理</h1>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" data-toggle="tab">
		  <li><a href="#home" data-toggle="tab">Home</a></li>
		  <li><a href="#profile" data-toggle="tab">Profile</a></li>
		  <li><a href="#messages" data-toggle="tab">Messages</a></li>
		  <li><a href="#settings" data-toggle="tab">Settings</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="home">...1</div>
		  <div class="tab-pane" id="profile">...2</div>
		  <div class="tab-pane" id="messages">...3</div>
		  <div class="tab-pane" id="settings">...4</div>
		</div>
    </div>

<?php } ?>