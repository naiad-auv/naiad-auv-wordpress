<div id="sidebar" class="span3 offset1">
    <?php 
    if (is_front_page()) {
    } else if (is_page()) { 
    ?>
        <div id="side_menu">
            <?php
            if ($post->post_parent) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                $first_parent = get_page($ancestors[0]);
                $children = wp_list_pages("title_li=&child_of=" . $ancestors[0] . "&echo=0");
                $first_parent_title = $first_parent->post_title;
                $first_parent_url = get_permalink($first_parent);
            } else {
                $children = wp_list_pages("title_li=&child_of=" . $post->ID . "&echo=0");
                $first_parent_title = get_the_title($post->ID);
                $first_parent_url = get_permalink($post->ID);
            }
            ?>
            <?php 
            if ($children) { 
            ?>
                <h2 id="side_nav_title"><a href="<?php echo $first_parent_url; ?>"><?php echo $first_parent_title; ?></a></h2>
                <ul id="side_nav_children">
                    <?php 
                    echo $children; 
                    ?>
                </ul>
            <?php 
            } 
            ?>
        </div>
    <?php 
    } elseif (is_single()) { 
    ?>
            <div id="side_menu">
                <h2 id="side_nav_title"><?php _e('Categories', 'nimbus_opulus_sombre'); ?></h2>
                <ul id="side_nav_children">
                    <?php wp_list_categories('orderby=name&title_li='); ?>
                </ul>
            </div>
    <?php 
    } else if (is_home()) { 
    ?>
            <div id="side_menu">
                <h2 id="side_nav_title">Categories</h2>
                <ul id="side_nav_children">
                    <?php wp_list_categories('orderby=name&title_li='); ?>
                </ul>
            </div>
    <?php 
    } else if (is_archive()) { 
    ?>
            <div id="side_menu">
                <h2 id="side_nav_title">Categories</h2>
                <ul id="side_nav_children">
                    <?php wp_list_categories('orderby=name&title_li='); ?>
                </ul>
            </div>
    <?php 
    } 
    ?>
    
    <div class="clear30"></div>


    <?php
    global $wp_query;
    $i = 1;
    if (is_404()) {
        
    } else if ( is_page() || is_single() || is_singular( 'portfolio' )) {
        $postid = $wp_query->post->ID;
        if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) != "") {
            while ($i <= 20) {
                if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) == $i) {
                    if (is_active_sidebar( "sidebar_" . $i )) {   
                        dynamic_sidebar( "sidebar_" . $i );
                    }
                }
                $i++;
            }
        } else if ((trim(get_post_meta($postid, 'alt_sidebar_select', true)) == "") && is_page()) {
            if (is_active_sidebar( "sidebar_pages" )) {
                dynamic_sidebar( "sidebar_pages" );
            }
        } else if ((trim(get_post_meta($postid, 'alt_sidebar_select', true)) == "") && is_single()) {
            if (is_active_sidebar( "sidebar_blog" )) {
                dynamic_sidebar( "sidebar_blog" );   
            }
        }
    } else if (is_home() || is_archive() || is_front_page()) {
        if (is_active_sidebar( "sidebar_blog" )) {
            dynamic_sidebar( "sidebar_blog" );
        } else {    
        ?>
            <div class="footer_widget sidebar sidebar_editable">
                <?php
                the_widget('WP_Widget_Calendar'); 
                ?>
            </div>
        <?php  
        }  
    }
    ?>




</div>