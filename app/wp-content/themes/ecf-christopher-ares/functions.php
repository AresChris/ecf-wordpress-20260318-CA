<?php

function ca_add_thumbnail() {
    add_theme_support('post-thumbnails');
}
add_action('after_theme_setup', 'ca_add_thumbnail');

function ca_theme_menu(){
    register_nav_menus([
        'main' => 'top-menu'
    ]);
}
add_action('after_setup_theme', 'ca_theme_menu');

function ca_left_sidebar() {
	register_sidebar( array(
		'id'            => 'left-sidebar',
		'name'          => 'ecf-left-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="site_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widgettitle">',
		'after_title'   => '</p>'
	) );
}
add_action('widgets_init', 'ca_left_sidebar');
