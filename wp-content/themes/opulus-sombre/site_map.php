<?php
/*
  Template Name: Site Map
 */
?>

<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
get_header();
?>

<div id="content_wrap">
    <div class="row">
        <div id="content" class="span12 center none">
            <div class="row">
                <div id="page_content_editable"  class="editable span8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('nimbus-post', array('class' => 'page_image'));
                            }
                            ?>
                            <?php
                            if ($top_scripts['page'] = 1) {
                                nimbus_scripts_content_top();
                            }
                            ?>
                            <?php the_content(); ?>
                            <?php
                            if ($bottom_scripts['page'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>
                        <?php
                        endwhile;
                        else:
                        ?>
                        <p><?php _e('Sorry, no post matches your criteria.', 'nimbus_opulus_sombre'); ?></p>
                        <?php endif; ?>
                    <h2>Pages</h2>
                    <ul>
                    <?php wp_list_pages('title_li='); ?>
                    </ul>
                    <div class="clear25"></div>
                    <h2>Posts</h2>
                    <ul>
                        <?php
                        $original_query = $wp_query;
                        $wp_query = null;
                        $wp_query = new WP_Query(array("post_type" => array('post'), "posts_per_page" => "-1"));
                        if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                <li><a href="<?php the_permalink(); ?>">
                            <?php  
                                $title = get_the_title();
                                if (strlen($title) == 0) { 
                                    ?>Post ID <?php the_ID(); 
                                } else { 
                                    the_title();
                                }                              
                                ?>
                            </a></li>
                            <?php endwhile;
                        else:
                            ?>
                            <li><?php _e('There are currently no posts on this website.', 'nimbus_opulus_sombre'); ?></li>
                        <?php
                        endif;
                        $wp_query = null;
                        $wp_query = $original_query;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <div class="clear25"></div>
                    <h2>Portfolio Items</h2>
                    <ul>
                        <?php
                        $original_query = $wp_query;
                        $wp_query = null;
                        $wp_query = new WP_Query(array("post_type" => array('portfolio'), "posts_per_page" => "-1"));
                        if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                <li><a href="<?php the_permalink(); ?>">
                            <?php  
                                $title = get_the_title();
                                if (strlen($title) == 0) { 
                                    ?>Post ID <?php the_ID(); 
                                } else { 
                                    the_title();
                                }                              
                                ?>
                            </a></li>
                            <?php endwhile;
                        else:
                            ?>
                            <li><?php _e('There are currently no portfolio items on this website.', 'nimbus_opulus_sombre'); ?></li>
                        <?php
                        endif;
                        $wp_query = null;
                        $wp_query = $original_query;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <div class="clear25"></div>
                </div>
                <?php get_sidebar(); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>