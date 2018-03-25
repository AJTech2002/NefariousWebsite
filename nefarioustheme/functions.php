<?php
function EnqueueMyStyles() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/customstyle.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'EnqueueMyStyles');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

?>
