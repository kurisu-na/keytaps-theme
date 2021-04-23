<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <?php if(!get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="header-overlay">
                <div class="container">
                    <h3 style="color: #F1F5F9; font-weight: 400;">
                        Welcome to
                    </h2>
                    <h1 class="header-link">
                        <a href="/">
                            <?php
                            if(get_theme_mod( 'header_banner_title_setting' )){
                                echo esc_attr( get_theme_mod( 'header_banner_title_setting' ) );
                            }else{
                                echo 'WordPress + Bootstrap';
                            }
                            ?>
                        </a>
                    </h1>
                    <p class="tagline">
                        <?php
                        if(get_theme_mod( 'header_banner_tagline_setting' )){
                            echo esc_attr( get_theme_mod( 'header_banner_tagline_setting' ) );
                    }else{
                            echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                        }
                        ?>
                    </p>
                </div>
                <header id="masthead" class="site-header" role="banner">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg p-0 justify-content-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fas fa-bars"></span>
                            </button>
                            <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-center',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                            ));
                            ?>
                        </nav>
                    </div>
                </header><!-- #masthead -->
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row justify-content-center">
                <?php endif; ?>