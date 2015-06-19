<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper">
        <div id="leftsidebar"><?php get_sidebar(); ?></div>
            <header id="masthead" role="banner">
                <?php get_template_part( 'shorty-nav' ); ?>
                    <figure class="logo">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    </figure>
            </header>
                <div class="hgroup">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>/"><?php bloginfo('name'); ?></a></h1>
	            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                </div>
          

