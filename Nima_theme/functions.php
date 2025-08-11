<?php
function mytheme_enqueue_scripts()
{
    // Tailwind from CDN for quick setup
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

    // Your custom styles (optional)
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function mytheme_setup()
{
    add_theme_support('custom-logo', [
        'height'      => 40,
        'width'       => 160,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
    register_nav_menus([
        'primary' => __('فهرست اصلی', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');
