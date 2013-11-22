<?php
function hfy_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 */
	//load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	//register_nav_menu( 'nav', '默认菜单' );
	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	/*
add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );
*/

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'hfy_setup' );



// ----------------------------------------
// ! add js for background
// ----------------------------------------

function load_admin_media_support() {
	wp_enqueue_style( 'admin.css', get_template_directory_uri() . '/css/admin.css' );
	wp_enqueue_script( 'admin.js', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'load_admin_media_support' );

// ----------------------------------------
// ! remove welcome information
// ----------------------------------------

remove_action( 'welcome_panel', 'wp_welcome_panel' );

// ----------------------------------------
// ! remove some role
// ----------------------------------------

remove_role( 'subscriber' );
remove_role( 'contributor' );
remove_role( 'author' );
remove_role( 'editor' );

// ----------------------------------------
// ! add custom role
// ----------------------------------------

$result = add_role(
	'员工',
	'员工',
	array(
		'read'         => true,  // True allows this capability
		'edit_posts'   => false,
		'delete_posts' => false, // Use false to explicitly deny
	)
);

// ----------------------------------------
// ! remove toolbar node
// ----------------------------------------

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_node( 'new-content' );
}

// ----------------------------------------
// ! regist some menu.
// ----------------------------------------

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( '页头' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// ----------------------------------------
// ! cunstomer system page
// ----------------------------------------

add_action( 'admin_menu', 'my_menu_pages');
function my_menu_pages() {
	//remove page
	$cc_remove_page = array(
		'edit.php',
		'tools.php',
		'index.php',
		'upload.php',
		'post-new.php?post_type=page',
		'edit-comments.php',
		'themes.php',
		'plugins.php',
		'options-general.php'
		);

	foreach($cc_remove_page as $id=>$menu){
		remove_menu_page($menu);
	}
	//remove subpage
	$remove_submenu_page = array(
		'edit.php?post_type=page' => 'post-new.php?post_type=page',
		'edit.php' => 'post-new.php',
		'users.php' => 'profile.php'
		);

	foreach($remove_submenu_page as $menu=>$submenu){
		remove_submenu_page($menu,$submenu);
	};
	remove_submenu_page('edit.php','edit-tags.php?taxonomy=category');
	remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag');
	remove_submenu_page('users.php','user-new.php');

	//add page
	add_menu_page( '新闻', '新闻', 'manage_options', 'edit.php', '', '', 6 );
	add_menu_page( '导航', '导航', 'manage_options', 'nav-menus.php', '', '', 21);
}


// ----------------------------------------
// ! remove dashboard widgets
// ----------------------------------------
function remove_dashboard_widgets(){
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// ----------------------------------------
// ! add customer dashboard widgets
// ----------------------------------------
add_action('wp_dashboard_setup','add_dashboard_widgets');

$custom_dashboard_widgets = array(
    'my-dashboard-widget' => array(
        'title' => '汇付友',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
	echo '祝全体员工工作顺利!';
}


function add_dashboard_widgets() {
    global $custom_dashboard_widgets;

    foreach ( $custom_dashboard_widgets as $widget_id => $options ) {
        wp_add_dashboard_widget(
            $widget_id,
            $options['title'],
            $options['callback']
        );
    }
}

// ----------------------------------------
// ! admin footer
// ----------------------------------------

add_action('admin_footer_text', 'my_admin_footer_function');
function my_admin_footer_function() {
	echo '同雅设计';
}

// ----------------------------------------
// ! add news for employee
// ----------------------------------------
function employee_news() {
  $default = array(
		'name' => '员工通知',
		'slug' => 'employee_news'
	);

  $labels = array(
    'name' => $default['name'],
    'singular_name' => $default['name'],
    'add_new' => '添加新'.$default['name'],
    'add_new_item' => '添加新'.$default['name'],
    'edit_item' => '编辑'.$default['name'].'信息',
    'new_item' => '添加新'.$default['name'],
    'all_items' => '全部'.$default['name'],
    'view_item' => '浏览该'.$default['name'],
    'search_items' => '查找'.$default['name'],
    'not_found' =>  '没有发现',
    'not_found_in_trash' => '垃圾箱中没有',
    'parent_item_colon' => '',
    'menu_name' => $default['name']
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
	//Provide a callback function that will be called when setting up the meta boxes for the edit form. Do remove_meta_box() and add_meta_box() calls in the callback.
	//'register_meta_box_cb' => '',
	//'with_front' => bool Should the permastruct be prepended with the front base. (example: if your permalink structure is /blog/, then your links will be: false->/news/, true->/blog/news/). Defaults to true
    'rewrite' => array( 'slug' => $default['slug'] ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor','thumbnail', 'excerpt' )
  );

  register_post_type( $default['slug'], $args );
}
if(!post_type_exists('employee_news'))
	add_action( 'init', 'employee_news' );

// ----------------------------------------
// ! custom page
// ----------------------------------------

//require_once('custom_page/custom-page.php');

// ----------------------------------------
// ! browser-check.php
// ----------------------------------------
require_once('browser-check.php');

// ----------------------------------------
// ! 首页图片
// ----------------------------------------
require_once('home-banner-images.php');

