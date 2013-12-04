<?php


add_action( 'admin_menu', 'add_setting' );

function add_setting() {
    add_menu_page( '设置', '设置', 'manage_options', 'add-setting', 'add_setting_page', '', 110 );
}
function add_setting_page() {
    //setting option
?>

<div id="add-setting" class="admin-page">
    <h1>设置</h1>

    <form action="options.php" method="post">
        <?php
    settings_fields('add-setting');
    do_settings_sections('add-setting');
    submit_button();
        ?>
    </form>
</div>

<?php }
function add_setting_func() {
    // Add the section to reading settings so we can add our
    // fields to it
    add_settings_section('add_setting',
                         '',
                         'add_setting_section',
                         'add-setting');

    // Add the field with the names and function to use for our new
    // settings, put it in our new section
    add_settings_field('51la',
                       '统计代码',
                       'add_setting_stats',
                       'add-setting',
                       'add_setting');

    // Register our setting so that $_POST handling is done for us and
    // our callback function just has to echo the <input>
    register_setting('add-setting','51la');
}// eg_settings_api_init()

add_action('admin_init', 'add_setting_func');

function add_setting_section() {
}
function add_setting_stats() {
	echo '<a target="_blank" href="http://51.la">登录 51la 网站</a>测试账户huifuyou密码huifuyou';
	echo '<textarea name="51la" value="" class="form-control" rows="3">'.esc_attr(get_option('51la')).'</textarea>';
}

?>