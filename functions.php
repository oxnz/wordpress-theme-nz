<?php

function wpbootstrap_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	register_widget( 'NZPlayer_Widget' );
	register_widget( 'Follow_Me_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'wpbootstrap' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'wpbootstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s panel panel-primary">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h1 class="widget-title panel-heading">',
		'after_title'   => '</h1><div class="panel-body">',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'wpbootstrap' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'wpbootstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'wpbootstrap' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'wpbootstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
}
add_action( 'widgets_init', 'wpbootstrap_widgets_init' );


function register_site_menu() {
	register_nav_menus(
		array('header-menu' => __('Header Menu'), 'extra-menu' => __('Extra Menu'))
	);
}

add_action('init', 'register_site_menu');
//remove_filter('the_content', 'wpautop');
//remove_filter('the_excerpt', 'wpautop');
//remove_filter('the_content', 'wptexturize');
//remove_filter('the_excerpt', 'wptexturize');
//remove_filter('comment_text', 'wptexturize');
//remove_filter('the_title', 'wptexturize');

/*
if (function_exists('register_sidebar'))
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

 */

/*
 * alter login style
 */
function wplogin() {
	add_filter('login_headerurl', 'get_site_url');
}
add_action('login_enqueue_scripts', 'wplogin');
function wplogin_title() {
	return get_bloginfo('description');
}
add_filter('login_headertitle', 'wplogin_title');
function wplogin_style() { ?>
	<link rel="stylesheet" id="wplogin_css" href="<?php echo get_bloginfo('stylesheet_directory') . '/login.css'; ?>" type="text/css" media="all" />
	<link rel="shortcut icon" href="<?php echo get_site_url() . '/favicon.png'; ?>">
<?php }
add_action('login_enqueue_scripts', 'wplogin_style');

require get_template_directory() . '/inc/template-tags.php';

/*
 * alter the editor style
*/
function alter_editor_style() {
	add_editor_style(); // this will use editor-style.css in this dir
}
add_action('init', 'alter_editor_style');

?>
