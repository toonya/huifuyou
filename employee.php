<?php
/**
 * Template Name: 员工页面
 */

$register_error = '';
$login_error    = '';
$update_error  = '';
$user;

// !make mail content support html code
function set_html_content_type()
{
	return 'text/html';
}

add_filter( 'wp_mail_content_type', 'set_html_content_type' );


// ! user logined, make $user usable.
if(is_user_logged_in())
	$user = wp_get_current_user();

// ! user login.
if(isset($_POST['userLogin']) && isset($_REQUEST['employeenonce']) && !is_user_logged_in()){

		$user = wp_signon();
		if ( is_wp_error($user) )
		 	$login_error = '<span class="text-danger">Error: 账户名或密码错误，请联系管理员修改</span>';
		else
			wp_redirect( get_permalink() );
}

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<div class="container">
			<?php  if ( !is_user_logged_in() ) :;?>
				<div class="login">
					<h1>登录</h1>
					<div class="error_area"><?php echo _e($login_error); ?></div>
					<form action="" id="regMenbership" method="POST">
						<fieldset>
							<label for="userName">ID:</label>
							<input type="text" name="log" id="log" class="required" />
						</fieldset>
						<fieldset>
							<label for="userPassword">password:</label>
							<input type="password" name="pwd" id="pwd" class="required" />
						</fieldset>
						<fieldset>
							<?php wp_create_nonce('employee-nonce'); ?>
							<?php wp_nonce_field('employee-nonce', 'employeenonce'); ?>
							<input type="hidden" name="userLogin" id="userLogin" value="true" />
							<button type="submit">Login</button>
						</fieldset>
					</form>
				</div> <!-- login area -->
			<?php else:; ?>
				<a class="button" href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a>
			<?php endif; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->



<?php get_footer(); ?>