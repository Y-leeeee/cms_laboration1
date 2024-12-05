<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' />
    <link rel='stylesheet' href='css/bootstrap.css' type='text/css' />
    <link rel='stylesheet' href='css/style.css' type='text/css' />
    <script type="text/javascript" src="js/jquery.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div id="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-6">
                    <a class="logo" href="<?php echo home_url(); ?>">Labb 1</a>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <form class="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div>
                            <label class="screen-reader-text">Sök efter:</label>
                            <input type="text" name="s" />
                            <input type="submit" value="Sök" />
                        </div>
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
    </header>
    <nav id="nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </nav>
