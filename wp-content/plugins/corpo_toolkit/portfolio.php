<?php
// Portfolio

/*-----------------------------------------------------------------------------------*/
/*	Register Portfolio Custom Post Type
/*-----------------------------------------------------------------------------------*/ 
function corpo_register_portfolio_post_type() {
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'corpo' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'corpo' ),
		'menu_name'           => __( 'Portfolio', 'corpo' ),
		'parent_item_colon'   => __( 'Parent Product:', 'corpo' ),
		'all_items'           => __( 'All Projects', 'corpo' ),
		'view_item'           => __( 'View Project', 'corpo' ),
		'add_new_item'        => __( 'Add New Project', 'corpo' ),
		'add_new'             => __( 'New Project', 'corpo' ),
		'edit_item'           => __( 'Edit Project', 'corpo' ),
		'update_item'         => __( 'Update Project', 'corpo' ),
		'search_items'        => __( 'Search Projects', 'corpo' ),
		'not_found'           => __( 'No projects found', 'corpo' ),
		'not_found_in_trash'  => __( 'No projects found in Trash', 'corpo' ),
	);

	$rewrite = array(
		'slug'                => 'project',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'description'         => __( 'Portfolio pages', 'corpo' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);

	register_post_type( 'corpo_portfolio', $args );
}

// Hook into the 'init' action
add_action( 'init', 'corpo_register_portfolio_post_type', 0 );


// Register Services Taxonomy
function corpo_register_services_taxonomy()  {
	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'corpo' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'corpo' ),
		'menu_name'                  => __( 'Services', 'corpo' ),
		'all_items'                  => __( 'All Services', 'corpo' ),
		'parent_item'                => __( 'Parent Genre', 'corpo' ),
		'parent_item_colon'          => __( 'Parent Genre:', 'corpo' ),
		'new_item_name'              => __( 'New Service Name', 'corpo' ),
		'add_new_item'               => __( 'Add New Service', 'corpo' ),
		'edit_item'                  => __( 'Edit Service', 'corpo' ),
		'update_item'                => __( 'Update Service', 'corpo' ),
		'separate_items_with_commas' => __( 'Separate services with commas', 'corpo' ),
		'search_items'               => __( 'Search services', 'corpo' ),
		'add_or_remove_items'        => __( 'Add or remove services', 'corpo' ),
		'choose_from_most_used'      => __( 'Choose from the most used services', 'corpo' ),
	);

	$rewrite = array(
		'slug'                       => 'project-services',
		'with_front'                 => true,
		'hierarchical'               => true,
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'corpo_services', 'corpo_portfolio', $args );
}
// Hook into the 'init' action
add_action( 'init', 'corpo_register_services_taxonomy', 0 );

// Flush rewrite rules on theme activation
function corpo_rewrite_flush() {

    corpo_register_services_taxonomy();
    corpo_register_portfolio_post_type();

    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'corpo_rewrite_flush' );

/*-----------------------------------------------------------------------------------*/
/*	Register Portfolio Templates
/*-----------------------------------------------------------------------------------*/ 

function corpo_get_single_portfolio_template($single_template) {
    global $post;

    if ($post->post_type == 'corpo_portfolio') {

        if ( file_exists( get_stylesheet_directory() . '/single-corpo_portfolio.php' ) )
                return get_stylesheet_directory() . '/single-corpo_portfolio.php';    
        
        return $single_template = dirname( __FILE__ ) . '/templates/single-corpo_portfolio.php';
    }
    return $single_template;
}

add_filter( "single_template", "corpo_get_single_portfolio_template" ) ;

function corpo_get_archive_portfolio_template($archive_template) {
    global $post;

    if ($post->post_type == 'corpo_portfolio') {
     
        if ( file_exists( get_stylesheet_directory() . '/archive-corpo_portfolio.php' ) )
                return get_stylesheet_directory() . '/archive-corpo_portfolio.php';
    
        return $archive_template = dirname( __FILE__ ) . '/templates/archive-corpo_portfolio.php';
    
    }
}

add_filter( "archive_template", "corpo_get_archive_portfolio_template" ) ;

function corpo_get_taxonomy_portfolio_template($taxonomy_template) {
     global $post;

    if ($post->post_type == 'corpo_portfolio') {
    
        if ( file_exists( get_stylesheet_directory() . '/taxonomy-corpo_services.php' ) )
                return get_stylesheet_directory() . '/taxonomy-corpo_services.php';
    
        return $taxonomy_template = dirname( __FILE__ ) . '/templates/taxonomy-corpo_services.php';
    }
}

add_filter( "taxonomy_template", "corpo_get_taxonomy_portfolio_template" ) ;

/*-----------------------------------------------------------------------------------*/
/*	Display Portfolio Projects on Home Page
/*-----------------------------------------------------------------------------------*/ 
function corpo_toolkit_display_projects () {

    if ( of_get_option('corpo_hp_projects') == 1 ) : 

        echo '<!-- Start Portfolio section -->';
        echo '<section id="portfolio">';
        corpo_portfolio_loop(
            __('Latest Projects', 'corpo'),
            array(
                'posts_per_page' => 4,
                'post_type' => 'corpo_portfolio',
                'post_status' => 'publish'
            )
        );
        
        echo '</section><!-- END #portfolio -->';

    endif;

}
add_action( 'corpo_home_projects','corpo_toolkit_display_projects', 10 );

if(!function_exists('corpo_portfolio_loop')) :
function corpo_portfolio_loop ( $title, $query ){
	$query = new WP_Query($query);
	$GLOBALS['corpo_loop'] = compact('title', 'query');
    include( dirname( __FILE__ ) .'/templates/projects-loop.php' );
}
endif;
