<?php


function load_stylesheets() {

    
	wp_register_style('main_stylesheet', get_template_directory_uri() . '/style.css', array(),
	false, 'all');
	wp_enqueue_style('main_stylesheet');
// ---------
	wp_register_style('alt_stylesheet', get_template_directory_uri() . '/css/jamb-main.css',
	array(), false, 'all');
	wp_enqueue_style('alt_stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');


// function wpb_add_google_fonts() {
 
// wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,700,700i&display=swap', false ); 
// }
 
// add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
function add_google_fonts() {

wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,700,700i&display=swap" rel="stylesheet', false );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

 function load_jquery() {
 	wp_register_script('jq-file', get_template_directory_uri() . '/js/jquery-3-4-1.js', null, 1 , true);
 	wp_enqueue_script('jq-file');
 }
 add_action('wp_enqueue_scripts','load_jquery');

// function load_js() {
//   wp_register_script('js-file-two', get_template_directory_uri() . '/js/wp-javascript-v2.js',
//   '', 1 , true);
//   wp_enqueue_script('js-file-two');
//  }
//  add_action('wp_enqueue_scripts','load_js');

//can be added differently than this.
//  add_theme_support('menus');

// register_nav_menus(
//  array(
//  	'top_menu' => __('Top-Menu', 'theme'),
//  	'footer-menu' => __('Footer-Menu', 'theme')
//  )
// );
/* ============ NAV NAV NAV V2
========================= */

function menu_setup() {
  add_theme_support('menus');
  register_nav_menu('top-menu','Top Menu');
  register_nav_menu('bottom-menu','Bottom Menu');

}
add_action('init', 'menu_setup');
/* ============ adding post formats 
========================= */

/* 
aside - soundcloud
audio - mixcloud/nts
video - youtube
image - image/gif
*/

add_theme_support('post-formats', array('aside', 'image', 'video','audio'));


/* ====================== 
        widgets
 ======================== */

/*  add one more widget */
 function widget_setup() {
 	register_sidebar (
      array (
           'name' => 'View By Month',
           'id' => 'sidebar-1',
           'class' => 'sidebar-1',
           'description' => 'standard sidebar',
           'before_widget' => '<aside id="%1$s" class="widget %2$s">',
           'after_widget' => '</aside>',
           'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>',


      )        
 	);

    register_sidebar (
      array (
           'name' => 'Tags A-Z',
           'id' => 'sidebar-2',
           'class' => 'sidebar-2',
           'description' => 'standard sidebar',
           'before_widget' => '<aside id="%1$s" class="widget %2$s">',
           'after_widget' => '</aside>',
           'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>',


      )        
  );
 }

 add_action('widgets_init', 'widget_setup');

 