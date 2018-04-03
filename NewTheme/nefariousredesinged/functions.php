<?php
function HomeStyleScripts() {
    //wp_enqueue_script('slideshowscript', get_template_directory_uri() . '/pages/home/javascript/index/slideshow/slideshow.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_style('globalobjects', get_template_directory_uri() . '/global/css/objects/objects.css', array(), '1.0.0'. 'all');
}
add_action('wp_enqueue_scripts', 'HomeStyleScripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


?>
