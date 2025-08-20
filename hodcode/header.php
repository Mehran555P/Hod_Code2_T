<?php

/**
 * Main Index Template
 * 
 * @package YourThemeName
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="bg-white border-b border-gray-300">
        <div class="max-w-screen-lg mx-auto flex gap1">
            <?php if (function_exists("the_custom_logo")) {
                the_custom_logo();
            }
            ?>
            <?php wp_nav_menu([
                "theme_location" => "header",
                "menu_class" => "flex gap-3",
                "container" => false
            ])
            ?>
        </div>
    </header>