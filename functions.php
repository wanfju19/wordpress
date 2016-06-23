<?php


load_plugin_textdomain( "wangfujun", false, get_template_directory()  . '/languages/' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );
	
	
function sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main right sidebar',
		'id'            => 'main_right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
                'id'          => 'before-post',
                'name'        => 'Before Posts Widget',
                'description' => __( 'Your Widget Description.', 'text_domain' ),
        ) );        

}
add_action( 'widgets_init', 'sidebar_widgets_init' );


function wpsites_before_post_widget( $content ) {
	if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
		dynamic_sidebar('before-post');
	}
	return $content;
}
add_filter( 'the_content', 'wpsites_before_post_widget' );


function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-wfjlearn' ) );
}

add_action( 'init', 'register_my_menu' );

//[foobar]
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );


//add_filter('posts_orderby', 'gloss_alphabetical' );
function gloss_alphabetical( $orderby )
{
     return "post_title ASC";
}




//add_action( 'pre_get_posts', 'foo_modify_query_exclude_category' );
function foo_modify_query_exclude_category( $query ) {
	if ( ! is_admin() && $query->is_main_query() && ! $query->get( 'cat' ) )
	    $query->set( 'cat', '-1' );
	echo var_dump($query->query);
}


function wfj_loadCssJavascript(){
         wp_enqueue_style( 'wfjmenu.css' , get_template_directory  . "menu.css" );
}

//add_action("wp_enqueue_scripts", "wfj_loadCssJavascript");
//include_once("function_walker.php");