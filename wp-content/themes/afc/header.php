<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AFC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'afc' ); ?></a>
        <header>
           <!--NAV BAR-->
            <nav class="navbar">
              <!--Navbar header-->
               <div class="navbar-header">
                 <div class="container">
                        <?php the_custom_logo(); ?> 
                        <?php get_search_form(); ?>
                        <!--data-toggle="collapse"-->
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <img src="<?php bloginfo("template_directory")?>/images/bars.png" class="img-responsive"  alt="">
                        </button>
                    </div>
                </div>
                <?php
                   create_bootstrap_menu("menu-1");
                ?>
            </nav><!--NAV BAR END-->
            <?php if(!is_front_page()): ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <div class="container">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>
            <?php endif;?>
        </header><!-- #HEADER END -->
	<div id="content" class="site-content">
