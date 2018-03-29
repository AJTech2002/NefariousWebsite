<?php
function EnqueueMyStyles() {
    wp_enqueue_style('headerstyle', get_template_directory_uri() . '/css/header/headerstyle.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/header/responsiveheader.css', array(), '1.0.0', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/responsive/responsive.js', array ( 'jquery' ), NULL, false);


}
add_action('wp_enqueue_scripts', 'EnqueueMyStyles');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

?>
