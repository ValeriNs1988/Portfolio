<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <svg  version="1.1" viewBox="0 0 1200 1200" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#fff">
                                    <path fill="red" d="m174 439.2c-7.1992 0-12 4.8008-12 12v274.8c0 7.1992 4.8008 12 12 12s12-4.8008 12-12v-274.8c0-7.1992-4.8008-12-12-12z"/>
                                    <path fill="blue" d="m991.2 716.4c43.199 0 76.801-48 76.801-108s-33.602-108-76.801-108-76.801 48-76.801 108 33.602 108 76.801 108zm0-193.2c28.801 0 52.801 38.398 52.801 84 0 45.602-24 84-52.801 84s-52.801-38.398-52.801-84c0-45.598 24-84 52.801-84z"/>
                                    <path fill="green" d="m264 1022.4v-867.6c0-21.602-10.801-37.199-26.398-37.199h-129.6c-14.398 0-26.398 15.602-26.398 37.199v867.6c0 21.602 10.801 37.199 26.398 37.199h129.6c14.398 0 26.398-15.602 26.398-37.203zm-158.4-867.6c0-7.1992 2.3984-12 3.6016-13.199h126c1.1992 1.1992 3.6016 6 3.6016 13.199l-0.003907 73.199h-133.2zm0 97.199h134.4v52.801h-134.4zm0 76.801h134.4v520.8h-134.4zm0 544.8h134.4v52.801l-134.4-0.003906zm3.5977 162c-1.1992-1.1992-3.6016-6-3.6016-13.199v-72l134.4-0.003906v72c0 7.1992-2.3984 12-3.6016 13.199z"/>
                                    <path fill="saddlebrown" d="m319.2 1059.6h69.602c14.398 0 26.398-15.602 26.398-37.199v-867.6c0-21.602-10.801-37.199-26.398-37.199h-69.602c-14.398 0-26.398 15.602-26.398 37.199v867.6c0 21.598 10.801 37.199 26.398 37.199zm-2.3984-904.8c0-7.1992 2.3984-12 3.6016-13.199h66c1.1992 1.1992 3.6016 6 3.6016 13.199v867.6c0 7.1992-2.3984 12-3.6016 13.199h-66c-1.1992-1.1992-3.6016-6-3.6016-13.199z"/>
                                    <path fill="orange" d="m459.6 1059.6h69.602c14.398 0 26.398-15.602 26.398-37.199v-867.6c0-21.602-10.801-37.199-26.398-37.199h-69.602c-14.398 0-26.398 15.602-26.398 37.199v867.6c-0.003906 21.598 10.797 37.199 26.398 37.199zm-2.4023-904.8c0-7.1992 2.3984-12 3.6016-13.199h66c1.1992 1.1992 3.6016 6 3.6016 13.199v867.6c0 7.1992-2.3984 12-3.6016 13.199h-66c-1.1992-1.1992-3.6016-6-3.6016-13.199z"/>
                                    <path fill="purple" d="m1092 117.6h-201.6c-10.801 0-19.199 8.3984-22.801 19.199-3.6016-3.6016-7.1992-4.8008-12-6l-127.2-18c-8.3984-1.1992-16.801 2.3984-22.801 10.801-4.8008 6-7.1992 14.398-9.6016 22.801l-121.2 859.2c-2.3984 21.602 6 38.398 20.398 40.801l128.4 18h2.3984c13.199 0 25.199-14.398 28.801-33.602l109.2-771.6v763.2c0 21.602 10.801 37.199 26.398 37.199l201.6 0.003906c14.398 0 26.398-15.602 26.398-37.199v-867.6c0-21.602-12-37.199-26.398-37.199zm-361.2 909.6c-1.1992 7.1992-3.6016 12-4.8008 13.199l-126-18c-1.1992-1.1992-2.3984-6-1.1992-14.398l10.801-72 132 19.199zm13.199-94.801-132-19.199 7.1992-51.602 132 19.199zm10.801-76.797-132-19.199 73.199-514.8 132 19.199zm76.801-538.8-132-19.199 7.1992-51.602 132 19.199zm21.598-148.8-10.801 73.199-132-19.199 10.801-73.199c1.1992-7.1992 3.6016-12 4.8008-13.199l126 19.199c0 1.1992 2.3984 6 1.1992 13.199zm241.2 854.4c0 7.1992-2.3984 12-3.6016 13.199l-199.2 0.003906c-1.1992-1.1992-3.6016-6-3.6016-13.199v-72h205.2v71.996zm0-97.199h-206.4v-52.801h205.2v52.801zm0-75.598h-206.4v-520.8h205.2v520.8zm0-544.8h-206.4v-52.801h205.2v52.801zm0-76.801h-206.4v-73.199c0-7.1992 2.3984-12 3.6016-13.199h198c1.1992 1.1992 3.6016 6 3.6016 13.199l-0.003906 73.199z"/>
                                </g>
                            </svg>
                        </a>
                    </p>
                <?php
                endif;
                $portfolio_description = get_bloginfo( 'description', 'display' );
                if ( $portfolio_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?>

                    <div class="hamburger line-one"></div>
                    <div class="hamburger line-two"></div>
                    <div class="hamburger line-three"></div>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
        </div>
	</header>
