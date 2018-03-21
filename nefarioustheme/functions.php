<?php
function EnqueueMyStyles() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/customstyle.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'EnqueueMyStyles');

?>
