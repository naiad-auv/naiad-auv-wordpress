<?php
// Corpor Slider

/*-----------------------------------------------------------------------------------*/
/*	Regsiter Slider Post Type
/*-----------------------------------------------------------------------------------*/ 
function register_corpo_slider() {
	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'corpo' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'corpo' ),
		'menu_name'           => __( 'Slider', 'corpo' ),
		'parent_item_colon'   => __( 'Parent Product:', 'corpo' ),
		'all_items'           => __( 'All Slides', 'corpo' ),
		'view_item'           => __( 'View Slide', 'corpo' ),
		'add_new_item'        => __( 'Add New Slide', 'corpo' ),
		'add_new'             => __( 'New Slide', 'corpo' ),
		'edit_item'           => __( 'Edit Slide', 'corpo' ),
		'update_item'         => __( 'Update Slide', 'corpo' ),
		'search_items'        => __( 'Search Slides', 'corpo' ),
		'not_found'           => __( 'No slides found', 'corpo' ),
		'not_found_in_trash'  => __( 'No slides found in Trash', 'corpo' ),
	);

	$args = array(
		'description'         => __( 'Home Page Slider', 'corpo' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'corpo_slider', $args );
}

// Hook into the 'init' action
add_action( 'init', 'register_corpo_slider' );

/*-----------------------------------------------------------------------------------*/
/*	Display Slider
/*-----------------------------------------------------------------------------------*/ 


function corpo_toolkit_display_slider() {
   
    if ( of_get_option('corpo_slider_radio') == 1 ) :

        $slider = new WP_Query(array(
            'post_type'     => 'corpo_slider',
            'orderby'       => 'menu_order',
            'order'         => 'ASC',
            'post_status'   => 'publish'
        ));


        if($slider->have_posts()) :
            //echo wp_get_attachment_url( get_post_thumbnail_id($slider->post->ID) );
            
            echo '<!-- Start Slider section -->';
            echo '<section id="slider" class="slider">';

                echo '<div class="flexslider">';
                echo '<ul class="slides">';
                
                    while ($slider->have_posts()) : $slider->the_post(); 
                        echo '<li>';

                            if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :
                                echo get_the_post_thumbnail( $slider->post->ID, 'slider' );
                            else :
                                echo '<img src="'. CORPO_TOOLKIT_URL .'/images/slider-placeholder.png" />';
                            endif;

                        echo '<div class="caption-wrap">';

                            if ( get_post_meta( $slider->post->ID, 'corpo_slideURL', true ) ) echo '<a href="'. esc_url( get_post_meta( $slider->post->ID, 'corpo_slideURL', true ) ) .'">';
                            if ( get_the_title() != '' ) echo '<h3>'. get_the_title().'</h3><br/>'; 
                            if ( get_the_content() != '' ) echo '<div class="excerpt">' . get_the_content() .'</div>'; 
                            if ( get_post_meta( $slider->post->ID, 'corpo_slideURL', true ) ) echo '</a>';

                         echo '</div>';
                     echo '</li>';
                    endwhile;                
                  echo '</ul>';
                echo '</div>';
            echo '</section><!-- END #slider -->';

        endif;

    endif;
    
}
add_action('corpo_home_slider','corpo_toolkit_display_slider' );