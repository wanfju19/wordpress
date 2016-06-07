<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>
        <div id="container">
            
            <div id="header">
                
                <div id="site-header-menu" class="site-header-menu">
                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'twentysixteen'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'primary-menu',
                        ));
                        ?>
                    </nav><!-- .main-navigation -->
                </div>	
                
                <div id="logo"> 
                 Web Developer Study
                </div>
                <div id="bread-search">
                    <span id="bread"> 
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">

    <?php if(function_exists('bcn_display'))

    {

        bcn_display();

    }?>

</div>

                    </span>
                    <span id="search"> <?php get_search_form();  ?> </span>
                    <span style="clear:both;">&nbsp;</span>
                </div>
<div>
<?php echo do_shortcode("[wpcrl_login_form]"); ?>
</div>

            </div>