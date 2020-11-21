<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <nav class="js-nav">
            <div class="container container-xl">
                <!-- Logo -->
                <?php 
                $headerLogo = get_field('header_logo');
                if( !empty( $headerLogo ) ): ?>
                    <img src="<?php echo esc_url($headerLogo['url']); ?>" alt="<?php echo esc_attr($headerLogo['alt']); ?>" class="header__logo"/>
                <?php endif; ?>
                <!-- Navbar Menu -->
                <?php wp_nav_menu(array(
                                'theme_location' => 'navbar-menu',
                                'menu_class' => 'navbar-menu'
                )); ?>
            </div>
        </nav>

