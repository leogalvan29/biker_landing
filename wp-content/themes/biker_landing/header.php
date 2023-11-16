<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biker_landing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,500&family=Oswald:wght@300;400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'biker-landing' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="row-header centrado-desktop">

                <div class="site-branding">
                    <?php $logo_url = get_theme_mod('logo_setting', ''); ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-logo">
                        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <a href="<?php echo get_theme_mod('button_url_header')   ?>"
                        class="boton-header"><?php echo get_theme_mod('button_text_header')   ?></a>
                </nav><!-- #site-navigation -->

            </div>

        </header><!-- #masthead -->
        <style>
        .site-logo img {
            max-width: <?php echo esc_attr(get_theme_mod('logo_size_header', '100px'));
            ?>;
            height: auto;
        }

        .boton-header {
            background-color: <?php echo esc_attr(get_theme_mod('button_bg_color_header', '#3498db'));
            ?>;
            color: <?php echo esc_attr(get_theme_mod('button_text_color_header', '#ffffff'));
            ?> !important;
            text-decoration: none !important;
            cursor: pointer;
			width:<?php  echo esc_attr(get_theme_mod('button_width_header','150px'))  ?>px !important;
			height:<?php  echo esc_attr(get_theme_mod('button_height_header','150px'))  ?>px !important;
			display:flex !important;
			justify-content:center !important;
			align-items:center !important;
			border-radius:25px !important;
        }
        </style>