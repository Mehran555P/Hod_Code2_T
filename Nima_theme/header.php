<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="bg-gray-50">
    <header class="w-full shadow-sm bg-white">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'flex items-center space-x-4 space-x-reverse',
                'menu_class' => 'flex space-x-4 space-x-reverse',
            ]);
            ?>

            <div>
                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>Logo.png" class="h-8" alt="Logo">
                <?php endif; ?>
            </div>
        </div>
    </header>