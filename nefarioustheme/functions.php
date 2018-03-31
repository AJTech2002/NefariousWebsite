<?php
function HomeStyleScripts() {
    wp_enqueue_style('headerstyle', get_template_directory_uri() . '/pages/home/css/header/headerstyle.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/pages/home/css/header/responsiveheader.css', array(), '1.0.0', 'all');
    wp_enqueue_script('responsivescript', get_template_directory_uri() . '/pages/home/javascript/responsive/responsive.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_style('slideshowstyle', get_template_directory_uri() . '/pages/home/css/index/slideshow.css', array(), '1.0.0', 'all');
    wp_enqueue_script('slideshowscript', get_template_directory_uri() . '/pages/home/javascript/index/slideshow/slideshow.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_style('indextophalf', get_template_directory_uri() . '/pages/home/css/index/indextophalf.css', array(), '1.0.0', 'all');
    wp_enqueue_style('indextutorials', get_template_directory_uri() . '/pages/home/css/index/indextutorials.css', array(), '1.0.0', 'all');
    wp_enqueue_style('indexbottomhalfstyle', get_template_directory_uri() . '/pages/home/css/index/indexbottomhalf.css', array(), '1.0.0', 'all');
    wp_enqueue_style('globalobjects', get_template_directory_uri() . '/global/css/objects/objects.css', array(), '1.0.0'. 'all');
}
add_action('wp_enqueue_scripts', 'HomeStyleScripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


?>
