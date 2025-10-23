<?php

function pablothemess_menus_register(){
    register_nav_menus(array(
        'main-menu' => 'Menú principal',
        'footer-menu' => 'Menú de pie de página',
        'lateral-menu'=> 'Menú Lateral',
    ));
    add_theme_support('tittle-tag');
}
add_action('after_setup_theme','pablothemess_menus_register');

function pablothemess_scripts_style(){
    wp_enqueue_style('pablothemess-style', get_stylesheet_uri() .'', array(),'1.0', 'all');
}
add_action('wp_enqueue_scripts','pablothemess_scripts_style');
?>