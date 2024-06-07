<?php

function register_my_menus() {
    register_nav_menus(
      array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Main Manu',
        'second_footer_menu' => 'Second Footer Menu',
      )
    );
  }

add_action( 'init', 'register_my_menus' );

function header_nav() {
    wp_nav_menu(array(
        'theme_location' => 'header_menu',
        'container' => 'ul',
        'menu_class' => 'nav-ul',
    ));
}

function footer_main_nav(){
    wp_nav_menu(array(
        'theme_location' => 'footer_menu',
        'container' => 'ul',
        'menu_class' => 'footer_nav_ul',
    ));
}
function second_footer_menu(){
    wp_nav_menu(array(
        'theme_location' => 'second_footer_menu',
        'container' => 'ul',
        'menu_class' => 'footer_nav_ul',
    ));
}


