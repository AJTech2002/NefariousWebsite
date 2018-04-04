<?php
function HomeStyleScripts() {
    //wp_enqueue_script('slideshowscript', get_template_directory_uri() . '/pages/home/javascript/index/slideshow/slideshow.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_style('globalobjects', get_template_directory_uri() . '/global/css/objects/objects.css', array(), '1.0.0', 'all');
    wp_enqueue_style('presetscss', get_template_directory_uri() . '/global/css/presets/presets.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontscss', get_template_directory_uri() . '/global/css/fonts.css', array(), '1.0.0', 'all');
      wp_enqueue_style('theheaderstyle', get_template_directory_uri() . '/pages/home/css/headerstylesheet.css', array(), '1.0.0', 'all');
        wp_enqueue_style('firsthalfstyle', get_template_directory_uri() . '/pages/home/css/firsthalf.css', array(), '1.0.0', 'all');
    wp_enqueue_style('alignmentcss', get_template_directory_uri() . '/global/css/alignment.css', array(), '1.0.0', 'all');
    wp_enqueue_style('actionscss', get_template_directory_uri() . '/global/css/presets/actionpresets.css', array(), '1.0.0', 'all');
    wp_enqueue_script('headerscripts', get_template_directory_uri() . '/global/js/header/headerscripts.js', array ( 'jquery' ), NULL, false);
}
add_action('wp_enqueue_scripts', 'HomeStyleScripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


?>
