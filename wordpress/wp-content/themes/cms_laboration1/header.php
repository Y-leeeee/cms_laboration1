<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <a class="logo" href="<?php echo home_url(); ?>">Labb 1</a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <form class="searchform" action="<?php echo home_url('/'); ?>" method="get">
                    <input type="text" name="s" placeholder="Search..." value="<?php the_search_query(); ?>" />
                    <input type="submit" value="Sök" />
                </form>
            </div>
            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <nav id="nav-wrapper">
        <div id="nav">
            <div class="container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'menu',
                ));
                ?>
            </div>
        </div>
    </nav>
</header>
