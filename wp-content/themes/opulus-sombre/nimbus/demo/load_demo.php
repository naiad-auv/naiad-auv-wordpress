<?php

function nimbus_load_demo_content() {

    global $current_user, $wp_rewrite;
    
    // Set Permalinks to /%postname%/
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
    
    // Get user info to access ids for post_author
    get_currentuserinfo();
    
    // upload and attach images to library
    $image_url = OPTIONS_PATH . "/demo/images/demo_image.jpg";
    $upload_dir = wp_upload_dir();
    $filename = basename($image_url);
    if(wp_mkdir_p($upload_dir['path']))
        $file_1 = $upload_dir['path'] . '/' . $filename;
    else
        $file_1 = $upload_dir['basedir'] . '/' . $filename;
        
    copy($image_url, $file_1) or die("Unable to copy $image_url to $file_1."); 
    $wp_filetype = wp_check_filetype($filename, null );
    $attachment_1 = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id_1 = wp_insert_attachment( $attachment_1, $file_1);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id_1, $file_1 );
    wp_update_attachment_metadata( $attach_id_1, $attach_data );
    

    /* * *************************************************************************************************** */
    // Home Page
    /* * *************************************************************************************************** */

    // Create post object
    
    if (!isset($home_id)) {
    
    $nimbus_home_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'home',
      'post_status'    => 'publish',
      'post_title'     => 'Home',
      'post_type'      => 'page',
    ); 

    // Insert the post into the database
    $home_id = wp_insert_post( $nimbus_home_demo );

    // Set as frontpage
    update_option( 'page_on_front', $home_id );
    update_option( 'show_on_front', 'page' );

    // Set page template ( new template hierarchy makes this non-relevant )
    // update_post_meta($home_id, "_wp_page_template", "frontpage.php");

    // Set Featured Image
    set_post_thumbnail( $home_id, $attach_id_1 );
    
    }
    
    
    /* * *************************************************************************************************** */
    // Demo Page One
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_sample_one_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'sample-one',
      'post_status'    => 'publish',
      'post_title'     => 'Maecenas Id Velit',
      'post_type'      => 'page',
    ); 

    // Insert the post into the database
    $sample_one_id = wp_insert_post( $nimbus_sample_one_demo );
    
    // Set page template
    update_post_meta($sample_one_id, "_wp_page_template", "full_width.php");
    
    // Set Image Display
    update_post_meta($sample_one_id, "include_image_on_page", "true");

    // Set Featured Image
    set_post_thumbnail( $sample_one_id, $attach_id_1 );
    
    
    /* * *************************************************************************************************** */
    // Demo Page Two
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_sample_two_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'sample-two',
      'post_status'    => 'publish',
      'post_title'     => 'Curabitur Hendrerit Congue',
      'post_type'      => 'page',
    ); 

    // Insert the post into the database
    $sample_two_id = wp_insert_post( $nimbus_sample_two_demo );
    
    // Set Image Display
    update_post_meta($sample_two_id, "include_image_on_page", "true");

    // Set Featured Image
    set_post_thumbnail( $sample_two_id, $attach_id_1 );
    
    
    /* * *************************************************************************************************** */
    // Demo Page Three
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_sample_three_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'sample-three',
      'post_status'    => 'publish',
      'post_title'     => 'Tristique Quis Nisl',
      'post_type'      => 'page',
    ); 

    // Insert the post into the database
    $sample_three_id = wp_insert_post( $nimbus_sample_three_demo );

    // Set Featured Image
    set_post_thumbnail( $sample_three_id, $attach_id_1 );
    
    
    /* * *************************************************************************************************** */
    // Blog Page
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_blog_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => '',
      'post_excerpt'   => '',
      'post_name'      => 'blog',
      'post_status'    => 'publish',
      'post_title'     => 'Blog',
      'post_type'      => 'page',
    ); 

    // Insert the post into the database
    $blog_id = wp_insert_post( $nimbus_blog_demo );
    update_option( 'page_for_posts', $blog_id );
    
    
    /* * *************************************************************************************************** */
    // Blog Post One
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_blog_one_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'blog-one',
      'post_status'    => 'publish',
      'post_title'     => 'Lorem Ipsum Dolor',
      'post_type'      => 'post',
    ); 

    // Insert the post into the database
    $blog_one_id = wp_insert_post( $nimbus_blog_one_demo );

    // Set Featured Image
    set_post_thumbnail( $blog_one_id, $attach_id_1 );
    
    
     /* * *************************************************************************************************** */
    // Blog Post Two
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_blog_two_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'blog-two',
      'post_status'    => 'publish',
      'post_title'     => 'Pharetra Dui a Vestibulum',
      'post_type'      => 'post',
    ); 

    // Insert the post into the database
    $blog_two_id = wp_insert_post( $nimbus_blog_two_demo );

    // Set Featured Image
    set_post_thumbnail( $blog_two_id, $attach_id_1 );
    
    
    
     /* * *************************************************************************************************** */
    // Blog Post Three
    /* * *************************************************************************************************** */

    // Create post object
    $nimbus_blog_three_demo = array(
      'menu_order'     => 0,
      'post_author'    => $current_user->ID,
      'post_content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim gravida diam rhoncus fringilla. Sed nec ipsum neque. Curabitur hendrerit congue consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus massa leo, bibendum ac laoreet id, cursus quis arcu. Quisque a ipsum sed lectus tristique tristique nec ac tortor. Duis pellentesque, purus at scelerisque laoreet, nisl orci faucibus risus, vel malesuada sem nisl nec risus. Sed in nulla vestibulum enim tempor varius. Vestibulum ultrices ipsum id mauris scelerisque et iaculis justo condimentum. Fusce ut vestibulum orci. Fusce vitae enim nisl, fringilla sagittis nunc. Nunc tristique purus vitae purus commodo accumsan.

    Curabitur feugiat pharetra dui a vestibulum. Nulla sem dolor, placerat non malesuada non, tristique quis nisl. Maecenas id velit eu orci bibendum cursus. Praesent ultrices porttitor dolor, et egestas diam dictum fringilla. Sed at tellus a augue convallis mollis. Quisque aliquet elit eget lorem tincidunt sed fermentum risus commodo. Suspendisse posuere commodo nisi vitae egestas. Pellentesque libero enim, posuere et aliquet convallis, condimentum sit amet lectus. Proin commodo ultricies felis nec elementum. Quisque id turpis et dui dapibus porttitor porta ut metus. Donec at luctus nunc. Aliquam eget diam a metus sagittis consectetur eget vitae urna. Phasellus vehicula eleifend tincidunt. Ut at lectus quis turpis pretium sagittis ut at dui. Nam malesuada ullamcorper ligula id tempor. Integer euismod, orci in molestie egestas, est tortor fringilla risus, nec feugiat urna dolor et est.',
      'post_excerpt'   => '',
      'post_name'      => 'blog-three',
      'post_status'    => 'publish',
      'post_title'     => 'Curabitur Feugiat',
      'post_type'      => 'post',
    ); 

    // Insert the post into the database
    $blog_three_id = wp_insert_post( $nimbus_blog_three_demo );

    // Set Featured Image
    set_post_thumbnail( $blog_three_id, $attach_id_1 );
    

    

    /* * *************************************************************************************************** */
    // Menu
    /* * *************************************************************************************************** */

    $nibus_menu_name = THEME_NAME . ' Main Menu';
    $nimbus_menu_location = 'primary';
    $nimbus_mobile_menu_location = 'mobile';
    $nibus_menu_exists = wp_get_nav_menu_object( $nibus_menu_name );
    if( !$nibus_menu_exists){
        $menu_id = wp_create_nav_menu($nibus_menu_name);

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Home',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));
            
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Maecenas',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $sample_one_id,
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'));           
            
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Curabitur',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $sample_two_id,
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'));    

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Blog',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $blog_id,
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'));        
            


        if( !has_nav_menu( $nimbus_menu_location ) ){
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$nimbus_menu_location] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
        
        if( !has_nav_menu( $nimbus_mobile_menu_location ) ){
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$nimbus_mobile_menu_location] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }


    }


    
}

?>