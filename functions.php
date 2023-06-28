<?php
function mytheme_enqueue_styles()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css', array(), '4.3.1');
    wp_enqueue_style('mytheme-styles', get_stylesheet_directory_uri() . '/styles/index.css', array(), '1.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


function mytheme_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array('jquery'), '1.14.7', true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array('jquery', 'popper'), '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

?>