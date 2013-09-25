<?php
$post_meta = nimbus_get_option('nimbus_post_meta_single');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('', true); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
        <!--[if IE 8 ]>
            <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" />
        <![endif]-->
        <?php 
        wp_head(); 
        ?>
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class(); ?>>
        <div id="header<?php
            if (is_front_page()) {
                echo"_frontpage";
            } ?>">
            <div class="row" >
                <div id="contact_line"  class="span12 center none">
                    <?php 
                    if ((nimbus_get_option('public_email') || nimbus_get_option('public_phone') || nimbus_get_option('public_fax')) != "") { 
                    ?>
                    <div>
                        <ul>
                            <?php 
                            if (nimbus_get_option('public_email') != "") { 
                            ?>
                                <li><a href="mailto:<?php echo nimbus_get_option('public_email') ?>"><?php echo nimbus_get_option('public_email') ?></a></li> 
                            <?php 
                            } 
                            if (nimbus_get_option('public_fax') != "") { 
                            ?>
                                <li>Fax <span><?php echo nimbus_get_option('public_fax') ?></span></li>
                            <?php 
                            }  
                            if (nimbus_get_option('public_phone') != "") { 
                            ?>
                                <li>Call us! <span><?php echo nimbus_get_option('public_phone') ?></span></li>
                            <?php 
                            } 
                            ?>				
                        </ul>
                        <div class="clear"></div>
                    </div>
<?php } ?>
                </div>
            </div>
            <div id="ribbon_wrap">
                <div class="row">
                    <div id="ribbon" class="span12 center none">	
                        <div class="navbar navbar-inverse navbar-fixed-top">
                            <div class="navbar-inner">
                                <div class="container">
                                    <h1 class="text_logo"><a href="<?php get_home_url(); ?>"><?php echo nimbus_get_option('text_logo') ?></a></h1>
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target="#mobile_menu">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <div class="clear"></div>
                                    <?php 
                                    wp_nav_menu(array('theme_location' => 'mobile', 'menu' => 'Primary Menu', 'depth' => 3, 'menu_class' => 'collapse', 'menu_id' => 'mobile_menu', 'container' => false)); 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                        if (nimbus_get_option('image_logo') == "") { 
                        ?>
                            <h1 class="hidden-phone text_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo nimbus_get_option('text_logo') ?></a></h1>
                        <?php 
                        } else { 
                        ?> 	
                            <a class="hidden-phone" href="<?php echo esc_url(home_url('/')); ?>"><img id="image_logo" src="<?php echo nimbus_get_option('image_logo'); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" /></a>
                        <?php 
                        } 
                        wp_nav_menu(array('theme_location' => 'primary', 'menu' => 'Primary Menu', 'depth' => 3, 'menu_id' => 'menu', 'container' => 'div', 'container_class' => 'menu' )); 
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if (is_front_page()) {
                get_template_part('banner');
            } else { 
            ?>    
                <div class="row">
                    <div id="sub_title" class="span12 center none">
                        <?php if (is_page()) { ?>
                            <h1>
                            <?php  
                            $title = single_post_title('',false);
                            if (strlen($title) == 0) { 
                                ?>Post ID <?php the_ID(); 
                            } else { 
                                single_post_title();
                            }                              
                            ?>
                                </h1>
                        <?php } else if (is_single()) { ?>
                            <?php if ($post_meta['title'] == 1) { ?>
                                <h1>
                                <?php  
                                $title = single_post_title('',false);
                                if (strlen($title) == 0) { 
                                    ?>Post ID <?php the_ID(); 
                                } else { 
                                    single_post_title();
                                }                              
                                ?>
                                </h1>
                            <?php } ?>
                        <?php } else if (is_home()) { ?>    
                            <h1><?php echo nimbus_get_option('blog_title') ?></h1>
                        <?php } else if (is_author()) { 
                            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?> 
                            <h1>Posts By: <?php echo $curauth->display_name; ?></h1>
                        <?php } else if (is_post_type_archive()) { ?> 
                            <h1><?php echo nimbus_get_option('portfolio_title') ?></h1>
                        <?php } else if (is_404()) { ?>
                            <h1>404</h1>
                        <?php } else if (is_archive()){ ?>  
                            <h1><?php single_cat_title(__( 'Currently Viewing: ', 'nimbus_opulus_sombre')); ?></h1>
                        <?php } ?> 
                    </div>    
                </div>
            <?php    
            }
            ?>
            <div class="clear"></div>
        </div>
