<?php
/* * *************************************************************************************************** */
// Define Paths
/* * *************************************************************************************************** */

$get_wp_version = get_bloginfo('version');
$theme_data = wp_get_theme();
define('OPTIONS_PATH', get_stylesheet_directory_uri() . '/nimbus/');
define('JS_PATH', get_template_directory() . '/js/');
define('CSS_PATH', get_template_directory() . '/css/');
define('THEME_NAME', $theme_data['Name']);
define('THEME_OPTIONS', str_replace(" ", "_", strtolower(THEME_NAME)) . "_options");


/* * *************************************************************************************************** */
// Load Admin Panel
/* * *************************************************************************************************** */

require_once(get_template_directory() . '/nimbus/options.php');
require_once(get_template_directory() . '/nimbus/options_arr.php');

/* * *************************************************************************************************** */

// Flush Rewrite on Activation
/* * *************************************************************************************************** */

function nimbus_rewrite_flush() {
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'nimbus_rewrite_flush');


/* * *************************************************************************************************** */
// Setup Theme
/* * *************************************************************************************************** */

add_action('after_setup_theme', 'nimbus_setup');

if (!function_exists('nimbus_setup')):

    function nimbus_setup() {
       
        // Localization
        
        $lang_local = get_template_directory() . '/lang';
        load_theme_textdomain('nimbus', $lang_local);

        // Register Thumbnail Sizes

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1160, 9999, true);
        add_image_size('nimbus-small', 140, 90, true);
        add_image_size('nimbus-feature', 370, 191, true);
        add_image_size('nimbus-post', 760, 227, true);
        add_image_size('nimbus-post-full', 1160, 221, true);
        add_image_size('full-banner', 1160, 360, true);
        add_image_size('half-banner', 660, 360, true);
        add_image_size('half-image', 670, 424, true);
        add_image_size('full-image', 1170, 424, true);
        add_image_size('nimbus-portfolio', 760, 425, true);

        // Load feed links	

        add_theme_support('automatic-feed-links');
        
        // Support Custom Background
        
        $nimbus_custom_background_defaults = array(
            'default-color' => 'ffffff'
        );
        add_theme_support( 'custom-background', $nimbus_custom_background_defaults );

        // Register Menus

        if (function_exists('register_nav_menu')) {
            register_nav_menu('primary', __( 'Primary Menu', 'nimbus'));
            register_nav_menu('mobile', __( 'Mobile Menu', 'nimbus'));
        }
    }

endif;


/* * *************************************************************************************************** */
// Set posts per page
/* * *************************************************************************************************** */


add_action( 'pre_get_posts', 'nimbus_posts_per_page', 1 );

function nimbus_posts_per_page( $query ) {

    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_home() || is_archive() ) {
        $query->set( 'posts_per_page', nimbus_get_option('posts_on_blog') );
        return;
    }

    // if ( is_post_type_archive( 'portfolio' ) ) {
        // $query->set( 'posts_per_page', 5 );
        // return;
    // }
}


/* * *************************************************************************************************** */
// Override gallery style
/* * *************************************************************************************************** */

add_filter( 'use_default_gallery_style', '__return_false' );


/* * *************************************************************************************************** */
// Set Content Width
/* * *************************************************************************************************** */

if (!isset($content_width))
    $content_width = 770;


/* * *************************************************************************************************** */
// Register Sidebars
/* * *************************************************************************************************** */

add_action('widgets_init', 'nimbus_register_sidebars');

function nimbus_register_sidebars() {

    register_sidebar(array(
        'name' => __('Default Page Sidebar', 'nimbus'),
        'id' => 'sidebar_pages',
        'description' => __('Widgets in this area will be displayed in the sidebar on the pages.', 'nimbus'),
        'before_widget' => '<div class="sidebar_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Default Blog Sidebar', 'nimbus'),
        'id' => 'sidebar_blog',
        'description' => __('Widgets in this area will be displayed in the sidebar in the blog.', 'nimbus'),
        'before_widget' => '<div class="sidebar_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Default Portfolio Sidebar', 'nimbus'),
        'id' => 'sidebar_portfolio',
        'description' => __('Widgets in this area will be displayed in the sidebar in the portfolio.', 'nimbus'),
        'before_widget' => '<div class="sidebar_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Left', 'nimbus'),
        'id' => 'footer-left',
        'description' => __('Widgets in this area will be shown in the left footer column.', 'nimbus'),
        'before_widget' => '<div class="footer_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Center', 'nimbus'),
        'id' => 'footer-center',
        'description' => __('Widgets in this area will be shown in the center footer column.', 'nimbus'),
        'before_widget' => '<div class="footer_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Right', 'nimbus'),
        'id' => 'footer-right',
        'description' => __('Widgets in this area will be shown in the right footer column.', 'nimbus'),
        'before_widget' => '<div class="footer_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Frontpage Right', 'nimbus'),
        'id' => 'frontpage-right',
        'description' => __('Widgets in this area will be shown on the right side of the frontpage.', 'nimbus'),
        'before_widget' => '<div class="front_right_widget sidebar sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    

    $i = 1;
    while ($i <= 20) {
        register_sidebar(array(
            'name' => __('Alternative Sidebar', 'nimbus') . $i,
            'id' => 'sidebar_' . $i,
            'description' => __('Widgets in this area will be displayed in the sidebar for any posts, pages or portfolio items that are taged with sidebar', 'nimbus') . $i . '.',
            'before_widget' => '<div class="sidebar_widget sidebar sidebar_editable">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        $i++;
    }
}

/* * *************************************************************************************************** */
// Excerpt Modifications
/* * *************************************************************************************************** */

// Excerpt Length

add_filter('excerpt_length', 'nimbus_excerpt_length');

function nimbus_excerpt_length($length) {
    return 40;
}

// Excerpt More

add_filter('excerpt_more', 'nimbus_excerpt_more');

function nimbus_excerpt_more($more) {
    return '';
}

// Add to pages

add_action('init', 'nimbus_add_excerpts_to_pages');

function nimbus_add_excerpts_to_pages() {
    add_post_type_support('page', 'excerpt');
}

/* * *************************************************************************************************** */
// Enable Threaded Comments
/* * *************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_threaded_comments');

function nimbus_threaded_comments() {
    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}

/* * *************************************************************************************************** */

// Modify Comments Output
/* * *************************************************************************************************** */

function nimbus_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li_comment_<?php comment_ID() ?>">
        <div id="comment_<?php comment_ID(); ?>" class="comment_wrap clearfix">
    <?php echo get_avatar($comment, $size = '75'); ?>
            <div class="comment_content">
                <p class="left"><strong><?php comment_author_link(); ?></strong><br />
                <?php echo(get_comment_date()) ?> <?php edit_comment_link(__('(Edit)', 'nimbus'), '  ', '') ?></p>
                <p class="right"><?php comment_reply_link(array_merge($args, array('reply_text' => __('Leave a Reply', 'nimbus'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
                <div class="clear"></div>
    <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.', 'nimbus') ?></em>
    <?php endif; ?>
        <?php comment_text() ?>
            </div>
            <div class="clear"></div>
        </div> 

        <?php
    }

/***************************************************************************************************** */
// Modify Ping Output
/***************************************************************************************************** */

    function nimbus_ping($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <li id="comment_<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?> 
    <?php
    }

/***************************************************************************************************** */
// Modify Comment Text Fields
/***************************************************************************************************** */

    add_filter('comment_form_default_fields', 'nimbus_comment_fields');

    function nimbus_comment_fields($fields) {

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $fields['author'] = '<div class="row"><div class="span3 comment_fields"><p class="comment-form-author">' . '<label for="author">' . __('Name', 'nimbus') . '</label> ' . ( $req ? '<span class="required">*</span><br />' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>';
        $fields['email'] = '<p class="comment-form-email"><label for="email">' . __('Email', 'nimbus') . '</label> ' . ( $req ? '<span class="required">*</span><br />' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>';
        $fields['url'] = '<p class="comment-form-url"><label for="url">' . __('Website', 'nimbus') . '</label><br />' . '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p></div> ';

        return $fields;
    }




/*     * *************************************************************************************************** */
// Create SEO Box
/*     * *************************************************************************************************** */

    add_action("admin_init", "nimbus_seo_meta_box");

    function nimbus_seo_meta_box() {

        add_meta_box("seo_meta_box", __('Nimbus SEO Panel', 'nimbus'), "nimbus_call_seo_meta_box", "page", "normal", "high");
        add_meta_box("seo_meta_box", __('Nimbus SEO Panel', 'nimbus'), "nimbus_call_seo_meta_box", "post", "normal", "high");
        add_meta_box("seo_meta_box", __('Nimbus SEO Panel', 'nimbus'), "nimbus_call_seo_meta_box", "portfolio", "normal", "high");
        
    }    

    function nimbus_call_seo_meta_box() {
    ?>  

        <p><span style="color:#fc7e2a;">This feature is availible to Nimbus Themes members.</span> <a href="http://www.nimbusthemes.com/?utm_source=wp_opulus&utm_medium=theme&utm_content=seo_meta_link&utm_campaign=opulus">Join today!!</a></p>

    <?php
    }


/* * *************************************************************************************************** */
// Register Featured Image Options Box
/* * *************************************************************************************************** */

add_action("admin_init", "nimbus_featured_image_options_meta_box");

function nimbus_featured_image_options_meta_box() {

    add_meta_box("featured_image_options_meta_box", __('Nimbus Featured Image Options', 'nimbus'), "nimbus_call_featured_image_options_meta_box", "page", "side", "high");
    add_meta_box("featured_image_options_meta_box", __('Nimbus Featured Image Options', 'nimbus'), "nimbus_call_featured_image_options_meta_box", "post", "side", "high");
    add_meta_box("featured_image_options_meta_box", __('Nimbus Featured Image Options', 'nimbus'), "nimbus_call_featured_image_options_meta_box", "portfolio", "side", "high");
}

function nimbus_call_featured_image_options_meta_box() {

    global $post, $wp_query;


    $custom = get_post_custom($post->ID);
    if (isset($custom["on_page_checked"])) {
        $on_page_checked = $custom["on_page_checked"][0];
    }
 

    echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    if (( 'portfolio' == get_post_type() ) || ( get_option('page_on_front') ==  $post->ID )) { 
    ?>
        <p><?php _e('There are no image options because this page is set as the Front Page', 'nimbus') ?></p>
    <?php 
    } else {
    ?>         
        <p><?php _e('Remember you need to attach a Featured Image for these setting to take effect.', 'nimbus') ?></p>
        <table>
                <tr><td><label><input type="checkbox" id="on_page_checked" name="on_page_checked" value="true" <?php if (get_post_meta($post->ID, 'include_image_on_page', true) == "true") { ?> checked="checked" <?php } ?> /></label></td><td>Include Image at the Top of the Page</td></tr>   
        </table>                
    <?php } ?>





    <?php

}

/* * *************************************************************************************************** */
// Save Featured Image Options Box
/* * *************************************************************************************************** */


add_action('save_post', 'nimbus_save_featured_image_options_meta_box');

function nimbus_save_featured_image_options_meta_box($post_id) {

    global $post;

    // verify nonce

    if (isset($_POST['meta_box_nonce'])) {
        if (!wp_verify_nonce($_POST['meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
        }
    }

    // check autosave

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if (isset($_POST['post_type'])) {

        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }


    }

    if (isset($_POST['on_page_checked'])) {
        update_post_meta($post_id, 'include_image_on_page', $_POST['on_page_checked']);   
    } else {
        delete_post_meta($post_id, 'include_image_on_page');
    }
}

/* * *************************************************************************************************** */
// Register Banner Content Metabox
/* * *************************************************************************************************** */

add_action('add_meta_boxes', 'nimbus_banner_meta_box');

function nimbus_banner_meta_box() {
    global $post;
    if (( get_option('page_on_front') ==  $post->ID )) {
        add_meta_box("banner_meta_box", __('Nimbus Frontpage Banner Panel', 'nimbus'), "nimbus_call_banner_meta_box", "page", "normal", "high");
    }
}

function nimbus_call_banner_meta_box($post) {

    wp_nonce_field(plugin_basename(__FILE__), 'banner_meta_box');

    if (get_post_meta($post->ID, 'frontpage_banner_content', true)) {
        $value = get_post_meta($post->ID, 'frontpage_banner_content', false);
    } else {
        $value[0] = '';
    }

    wp_editor($value[0], 'frontpage_banner_content');
}

/* * *************************************************************************************************** */
// Save Banner Content Metabox
/* * *************************************************************************************************** */

add_action('save_post', 'nimbus_banner_save_postdata');

function nimbus_banner_save_postdata($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (( isset($_POST['banner_meta_box']) ) && (!wp_verify_nonce($_POST['banner_meta_box'], plugin_basename(__FILE__)) ))
        return;

    if (( isset($_POST['post_type']) ) && ( 'page' == $_POST['post_type'] )) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    if (isset($_POST['frontpage_banner_content'])) {
        update_post_meta($post_id, 'frontpage_banner_content', $_POST['frontpage_banner_content']);
    }
}

/* * *************************************************************************************************** */
// Register Sidebar Select Box
/* * *************************************************************************************************** */

add_action("admin_init", "nimbus_sidebar_meta_box");

function nimbus_sidebar_meta_box() {

    add_meta_box("sidebar_meta_box", __('Nimbus Sidebar Options', 'nimbus'), "nimbus_call_sidebar_meta_box", "page", "side", "high");
    add_meta_box("sidebar_meta_box", __('Nimbus Sidebar Options', 'nimbus'), "nimbus_call_sidebar_meta_box", "post", "side", "high");
    add_meta_box("sidebar_meta_box", __('Nimbus Sidebar Options', 'nimbus'), "nimbus_call_sidebar_meta_box", "portfolio", "side", "high");
}

function nimbus_call_sidebar_meta_box() {

    global $post;

    $custom = get_post_custom($post->ID);
    if (isset($custom["alt_sidebar_select"])) {
        $alt_sidebar_select = $custom["alt_sidebar_select"][0];
    } else {
        $alt_sidebar_select = "";
    }
    echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    ?>  

    <p><?php __('Enter the number of the alternate sidebar you would like to apply. Leave blank to use default.', 'nimbus') ?></p>
    <table>
        <tr><td><label><?php _e('Sidebar #', 'nimbus') ?></label></td><td><input type="text" name="alt_sidebar_select" style="width:35px;" value="<?php echo $alt_sidebar_select; ?>" size="20" maxlength="2" /></td></tr> 
    </table>
    <?php
}

/* * *************************************************************************************************** */
// Save Sidebar Select Box
/* * *************************************************************************************************** */

add_action('save_post', 'nimbus_save_sidebar_meta_box');

function nimbus_save_sidebar_meta_box($post_id) {

    global $post;

    // verify nonce

    if (isset($_POST['meta_box_nonce'])) {
        if (!wp_verify_nonce($_POST['meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
        }
    }

    // check autosave

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if (isset($_POST['post_type'])) {
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    if (isset($_POST['alt_sidebar_select'])) {
        update_post_meta($post_id, 'alt_sidebar_select', $_POST['alt_sidebar_select']);
    }
}



/* * *************************************************************************************************** */
// Load Admin Scripts
/* * *************************************************************************************************** */

add_action('admin_print_scripts', 'nimbus_admin_scripts');

function nimbus_admin_scripts() {

    if (is_admin()) {

        wp_enqueue_script('jquery');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_register_script('charcount', get_template_directory_uri() . '/js/charCount.js', array('jquery'), '1.0');
        wp_enqueue_script('charcount');
        wp_register_script('nimbus_admin', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0');
        wp_enqueue_script('nimbus_admin');
    }
}

/* * *************************************************************************************************** */
// Load Admin CSS
/* * *************************************************************************************************** */

add_action('admin_print_styles', 'nimbus_admin_styles');

function nimbus_admin_styles() {

    if (is_admin()) {

        wp_enqueue_style('thickbox');

        wp_register_style("admin_css", get_template_directory_uri() . "/css/admin.css", array(), "1.0", "all");
        wp_enqueue_style('admin_css');
    }
}

/* * *************************************************************************************************** */
// Load Public Scripts
/* * *************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_public_scripts');

function nimbus_public_scripts() {

    if (!is_admin()) {

        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1');
        wp_enqueue_script('jquery');

        wp_register_script('jquery_ui_all', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js', array('jquery'), '1.8.16');
        wp_enqueue_script('jquery_ui_all');

        wp_register_script('nivo_slider', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array('jquery'), '1.1');
        wp_enqueue_script('nivo_slider');

        wp_register_script('jquery_xcolor', get_template_directory_uri() . '/js/jquery.xcolor.min.js', array('jquery'), '1.0');
        wp_enqueue_script('jquery_xcolor');

        wp_register_script('nibus_public', get_template_directory_uri() . '/js/nimbus_public.js', array('jquery'), '1.0' );
        wp_enqueue_script('nibus_public'); 

        wp_register_script('jquery_tools', get_template_directory_uri() . '/js/jquery.tools.min.js', array('jquery'), '1.2.6');
        wp_enqueue_script('jquery_tools');

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/jquery.bootstrap.min.js', array('jquery'), '2.2.2');
        wp_enqueue_script('bootstrap');

        wp_register_script('scrollpane', get_template_directory_uri() . '/js/jquery.jscrollpane.min.js', array('jquery'), '2.0');
        wp_enqueue_script('scrollpane');
    }
}

/* * *************************************************************************************************** */
// Load Public CSS
/* * *************************************************************************************************** */


add_action('wp_print_styles', 'nimbus_public_styles');

function nimbus_public_styles() {

    if (!is_admin()) {

        wp_register_style("nivo_css", get_template_directory_uri() . "/css/nivo-slider.css", array(), "1.0", "all");
        wp_enqueue_style('nivo_css');

        wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "1.0", "all");
        wp_enqueue_style('bootstrap');

        wp_register_style("bootstrap_responsive", get_template_directory_uri() . "/css/bootstrap-responsive.min.css", array(), "1.0", "all");
        wp_enqueue_style('bootstrap_responsive');

        wp_register_style("bootstrap_fix", get_template_directory_uri() . "/css/bootstrap-fix.css", array(), "1.0", "all");
        wp_enqueue_style('bootstrap_fix');

        wp_register_style("scrollpane", get_template_directory_uri() . "/css/jquery.jscrollpane.css", array(), "2.0", "all");
        wp_enqueue_style('scrollpane');
    }
}

/* * *************************************************************************************************** */
// Register Gravatar
/* * *************************************************************************************************** */

add_filter('avatar_defaults', 'nimbus_gravatar');

function nimbus_gravatar($avatar_defaults) {
    $myavatar = nimbus_get_option('gravatar');
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}


/* * *************************************************************************************************** */
// Add dashboard widget for registering for the Newsletter
/* * *************************************************************************************************** */

function nimbus_add_newsletter_dashboard_widget_display() {
	echo "
    <link href='http://cdn-images.mailchimp.com/embedcode/classic-081711.css' rel='stylesheet' type='text/css'>
<style type='text/css'>
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    #mc-embedded-subscribe { margin-left:0px; }
    #nimbus_add_newsletter_dashboard_widget { background:#e9f7ff!important; }
    #nimbus_add_newsletter_dashboard_widget #mc_embed_signup { background:transparent!important; }
    #nimbus_add_newsletter_dashboard_widget .hndle{ background-color:#90c9e9;background-image:-ms-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-moz-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-o-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-webkit-gradient(linear,left top,left bottom,from(#abdaf4),to(#90c9e9))!important; background-image:-webkit-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:linear-gradient(top,#abdaf4,#90c9e9)!important; color:#000; }
    #nimbus_add_newsletter_dashboard_widget .inside { background:#e9f7ff!important; }
    #nimbus_add_newsletter_dashboard_widget h1 { font-family: 'Lato', sans-serif; font-size: 24px; color: #464646; font-weight: 400; line-height: 1.6em; padding:0 20px; margin:0px; }
    #nimbus_add_newsletter_dashboard_widget h2 { font-family: 'Lato', sans-serif; font-size: 20px; color: #464646; font-weight: 400; line-height: 1.6em; padding:0 20px; }
    #nimbus_add_newsletter_dashboard_widget p { font-family: 'Lato', sans-serif;  padding:0 20px; font-size: 13px; }
</style>
   

    <h1>Sign up for the Newsletter</h1>
    <h2>Get updates about new theme features, newly released themes, and special offers.</h2>
    
  <!-- Begin MailChimp Signup Form -->

<div id='mc_embed_signup'>
<form action='http://nimbusthemes.us1.list-manage.com/subscribe/post?u=3e616577d801793e1b7a7c2d2&amp;id=819cc50436' method='post' id='mc-embedded-subscribe-form' name='mc-embedded-subscribe-form' class='validate' target='_blank' novalidate>
	
<div class='mc-field-group'>
	<label for='mce-EMAIL'>Email Address </label>
	<input type='email' value='' name='EMAIL' class='required email' id='mce-EMAIL'>
</div>
<div class='mc-field-group'>
	<label for='mce-FNAME'>First Name </label>
	<input type='text' value='' name='FNAME' class='' id='mce-FNAME'>
</div>
<div class='mc-field-group'>
	<label for='mce-LNAME'>Last Name </label>
	<input type='text' value='' name='LNAME' class='' style='' id='mce-LNAME'>
</div>
	<div id='mce-responses' class='clear'>
		<div class='response' id='mce-error-response' style='display:none'></div>
		<div class='response' id='mce-success-response' style='display:none'></div>
	</div>	<div class='clear'><input type='submit' value='Subscribe' name='subscribe' id='mc-embedded-subscribe' class='button-primary'></div>
</form>
</div>
<script type='text/javascript'>
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
head.appendChild(script);
var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    try {
        var validatorLoaded=jQuery('#fake-form').validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $('#mc-embedded-subscribe-form').validate(options);
      $('#mc-embedded-subscribe-form').unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://nimbusthemes.us1.list-manage.com/subscribe/post-json?u=3e616577d801793e1b7a7c2d2&id=819cc50436&c=?', type: 'GET', dataType: 'json', contentType: 'application/json; charset=utf-8',
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=='success'){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id=''+err_id+'' style=''+err_style+''> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->
    
  ";
} 

function nimbus_add_newsletter_dashboard_widget() {
	wp_add_dashboard_widget('nimbus_add_newsletter_dashboard_widget', 'Nimbus Themes Newsletter', 'nimbus_add_newsletter_dashboard_widget_display');
	global $wp_meta_boxes;
	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
	$example_widget_backup = array('nimbus_add_newsletter_dashboard_widget' => $normal_dashboard['nimbus_add_newsletter_dashboard_widget']);
	unset($normal_dashboard['nimbus_add_newsletter_dashboard_widget']);
	$sorted_dashboard = array_merge($example_widget_backup, $normal_dashboard);
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
} 

add_action('wp_dashboard_setup', 'nimbus_add_newsletter_dashboard_widget' );

/* * *************************************************************************************************** */
// Add dashboard widget for registering for membership
/* * *************************************************************************************************** */

function nimbus_add_support_dashboard_widget_display() {
	echo "
    <link href='http://cdn-images.mailchimp.com/embedcode/classic-081711.css' rel='stylesheet' type='text/css'>
<style type='text/css'>
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);
    #nimbus_add_support_dashboard_widget { background:#e9f7ff!important; }
    #nimbus_add_support_dashboard_widget #mc_embed_signup { background:transparent!important; }
    #nimbus_add_support_dashboard_widget .hndle{ background-color:#90c9e9;background-image:-ms-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-moz-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-o-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-webkit-gradient(linear,left top,left bottom,from(#abdaf4),to(#90c9e9))!important; background-image:-webkit-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:linear-gradient(top,#abdaf4,#90c9e9)!important; color:#000; }
    #nimbus_add_support_dashboard_widget .inside { padding-top:80px; padding-bottom:20px; background:#e9f7ff url('" . OPTIONS_PATH  . "images/nimbus-support.jpg') no-repeat top left!important; }
    #nimbus_add_support_dashboard_widget h1 { font-family: 'Lato', sans-serif; font-size: 24px; color: #464646; font-weight: 400; line-height: 1.6em; padding:0 20px; margin:0px; }
    #nimbus_add_support_dashboard_widget h2 { font-family: 'Lato', sans-serif; font-size: 20px; color: #464646; font-weight: 400; line-height: 1.6em; padding:0 20px; }
    #nimbus_add_support_dashboard_widget p { font-family: 'Lato', sans-serif;  padding:0 20px; font-size: 14px; }
</style>
    
    
    <h1>Need help with this theme?</h1>
    <h2>Get unlimited theme support as a Nimbus Member!</h2>
    <p>As a Nimbus Themes member, you will have access to hundreds of premium theme features like custom widgets and shortcodes as well as unlimited support through the Nimbus Themes support system. Not only that, you'll be able to download ALL of our Nimbus Themes!</p>
    <p style='margin-top:20px;'><a target='_blank' class='button-primary' href='http://www.nimbusthemes.com/join/?utm_source=wp_opulus&utm_medium=theme&utm_content=panel_link&utm_campaign=opulus'>Join Today</a></p>
    
    
    
  ";
} 

function nimbus_add_support_dashboard_widget() {
	wp_add_dashboard_widget('nimbus_add_support_dashboard_widget', 'Nimbus Themes Support', 'nimbus_add_support_dashboard_widget_display');
	global $wp_meta_boxes;
	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
	$example_widget_backup = array('nimbus_add_support_dashboard_widget' => $normal_dashboard['nimbus_add_support_dashboard_widget']);
	unset($normal_dashboard['nimbus_add_support_dashboard_widget']);
	$sorted_dashboard = array_merge($example_widget_backup, $normal_dashboard);
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
} 

add_action('wp_dashboard_setup', 'nimbus_add_support_dashboard_widget' );




