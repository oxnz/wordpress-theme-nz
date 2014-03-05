<?php
/**
 * The Header for WPBootstrap theme
 *
 * @package WPBootstrap
 * @since WPBootstrap 1.0
 */
 ?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name');	echo is_front_page() ?
	" | " . get_bloginfo('description') : wp_title('|', true); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href="<?php echo site_url(); ?>/favicon.png"
		rel="shortcut icon">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<?php 
		wp_register_script('custom-script', "//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js", array('jquery'));
		wp_enqueue_script('custom-script'); ?>
	<?php wp_head(); ?>
</head>
<body>

<div class="site-header">
	<div class="glob-nav">
		<div class="container">
			<ul>
				<li><a data-toggle="modal" data-target="#about" href="#">About</a></li>
				<li> | </li>
				<li><a data-target="#contact" data-toggle="modal" href="#">Contact</a></li>
				<li> | </li>
				<?php if (is_user_logged_in()) : ?>
				<li class="user">
				<?php $current_user = wp_get_current_user(); ?>
					<a href="<?php echo get_edit_user_link(); ?>">Hi, <?php echo $current_user->display_name; ?></a>
					<div class="user-pane">
						<div class="pane-body">
							<div class="avatar">
								<?php echo get_avatar($current_user->id, 100); ?>
							</div>
							<ul class="profile">
								<li><?php echo $current_user->display_name; ?></li>
								<li><?php echo $current_user->user_email; ?></li>
								<li>
									<a href="<?php echo admin_url(); ?>">Dashboard</a> --
									<a href="<?php echo get_edit_user_link(); ?>">Account</a>
								</li>
								<li><a class="view" href="<?php echo get_edit_user_link(); ?>">View Profile</a></li>
							</ul>
						</div><!-- .pane-body -->
						<div class="pane-footer">
							<a href="<?php echo admin_url(); ?>">Site Admin</a>
							<a href="<?php echo wp_logout_url(get_permalink()); ?>">Log out</a>
						</div><!-- .pane-footer -->
					</div><!-- .user-pane -->
				<?php else : ?>
				<li>
					<a href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>
				<?php endif; ?>
				</li>
			</ul>
		</div><!-- #container -->
	</div><!-- #glob-nav -->
	<div class="site-nav">
		<div class="container">
			<div class="nav-inner">
			<div class="site-name"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
				<!--
				<img class="img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></img>
				-->
			</div><!-- #site-name -->
			<?php wp_nav_menu(array('container_class' => 'nav-menu'));?>
			</div><!-- .nav-inner -->
		</div><!-- #container -->
	</div><!-- #site-nav -->
<?php //if (is_home() or is_front_page()) : ?>
	<div class="site-banner">
		<div class="container">
			<h1 class="site-title">Works, Blog, Projects and More ...</h1>
			<p class="site-description"><?php bloginfo('description'); ?>
		</div>
	</div><!-- #site-banner -->
<?php //endif; ?>
</div><!-- #site-header -->
<div class="site-content container">
