<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
$post_meta = nimbus_get_option('post_meta_blog');
$reminder_images = trim(nimbus_get_option('reminder_images'));
get_header();
?>

<div id="content_wrap">
    <div id="action_text_wrap" class="gradient">
        <div class="row">
            <div id="action_text" class="span12 center none" >
                <?php echo wpautop(nimbus_get_option('action_text')); ?> 
            </div>
        </div>
    </div>
    <div id="content_frontpage">
        <?php 
        if (nimbus_get_option('fp_content_pos') == "above") { 
            if (have_posts()) : 
                while (have_posts()) : the_post(); 
                ?>
                    <div class="row">
                        <div id="frontpage_content_above"  class="editable span12 center none">
                            <?php
                            if ($top_scripts['home'] = 1) {
                                nimbus_scripts_content_top();
                            }
                            the_content();
                            if ($bottom_scripts['home'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>
                        </div>
                    </div>                
                <?php 
                endwhile;
                else:
                ?>
                <p><?php _e('Sorry, no post matches your criteria.', 'nimbus_opulus_sombre'); ?></p>
            <?php 
            endif; 
        } 
        if (nimbus_get_option('toggle_featured') == 1) {
            get_template_part('featured');
        }
        if (nimbus_get_option('fp_content_pos') == "below") { 
            if (have_posts()) : 
                while (have_posts()) : the_post(); 
                ?>
                    <div class="row">
                        <div id="frontpage_content_below" class="editable span12 center none">	
                            <?php
                            if ($top_scripts['home'] = 1) {
                                nimbus_scripts_content_top();
                            }
                            the_content(); 
                            if ($bottom_scripts['home'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>
                        </div>      
                    </div>                
                <?php 
                endwhile;
                else:
                ?>
                <p><?php _e('Sorry, no post matches your criteria.', 'nimbus_opulus_sombre'); ?></p>
            <?php
            endif;
        }
        if ( 'posts' == get_option( 'show_on_front' ) ) { 
        ?>
            <div class="row">
                <div id="content" class="span12 center none">
                    <div class="row">
                        <div id="page_content_editable"  class="editable span8">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <?php 
                                        if ($post_meta['title'] == 1) { ?><h2><a href="<?php the_permalink(); ?>">
                                        <?php  
                                            $title = get_the_title();
                                            if (strlen($title) == 0) { 
                                                ?>Post ID <?php the_ID(); 
                                            } else { 
                                                the_title();
                                            }                              
                                            ?>
                                        </a></h2><?php } ?>	
                                        <div class="clear"></div>
                                        <?php if ($post_meta['post_thumb'] == 1) { ?>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('nimbus-post', array('class' => 'blog_post_image'));
                                            } else {
                                                if ($reminder_images == "on" ) {
                                                ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/post-pgs.jpg" class="page_image wp-post-image" alt="Reminder Image" />
                                                <?php    
                                                }
                                            }
                                            ?>
                                            <div class="clear"></div>
                                        <?php } ?>	
                                        <?php if ($post_meta['categories'] || $post_meta['date'] || $post_meta['author'] == 1) { ?><p class="blog_date"><?php } ?>	
                                        <?php if ($post_meta['date'] == 1) { ?><?php the_time('F j, Y'); ?><?php } ?>	 
                                            <?php if ($post_meta['categories'] && $post_meta['date'] == 1) { ?>|<?php } ?> 
                                            <?php if ($post_meta['categories'] == 1) { ?><?php _e('Posted in', 'nimbus_opulus_sombre'); ?> <?php the_category(', '); ?><?php } ?> 
                                            <?php if ($post_meta['categories'] && $post_meta['author'] == 1) { ?>|<?php } ?> 
                                            <?php if ($post_meta['author'] == 1) { ?><?php _e('By', 'nimbus_opulus_sombre'); ?> <?php the_author_posts_link(); ?><?php } ?>
                                            <?php if ($post_meta['categories'] || $post_meta['date'] || $post_meta['author'] == 1) { ?></p><?php } ?>	
                                        <p class="blog_comment_link"><?php comments_popup_link(__('Leave a Comment', 'nimbus_opulus_sombre'), __('1 Comment', 'nimbus_opulus_sombre'), __('% Comments', 'nimbus_opulus_sombre')); ?></p>
                                        <div class="clear5"></div>
                                        <?php
                                        if ($top_scripts['blog'] = 1) {
                                            nimbus_scripts_content_top();
                                        }
                                        ?>
                                        <?php the_excerpt(); ?>
                                        <?php
                                        if ($bottom_scripts['blog'] = 1) {
                                            nimbus_scripts_content_bottom();
                                        }
                                        ?>
                                        <p class="blog_more"><a href="<?php the_permalink(); ?>"><?php echo nimbus_get_option('read_more'); ?></a></p>
                                    </div>
                                <?php endwhile; ?>
                                    <?php
                                    if (function_exists('wp_pagenavi')) {
                                        wp_pagenavi();
                                    } else {
                                        ?>
                                        <div class="pagination">
                                            <div class="alignleft"><?php next_posts_link(__('Older Entries', 'nimbus_opulus_sombre')) ?></div>
                                            <div class="alignright"><?php previous_posts_link(__('Newer Entries', 'nimbus_opulus_sombre')) ?></div>
                                        </div>

                                    <?php } ?>
                                <?php else: ?>
                                <p><?php _e('Sorry, no post matches your criteria.', 'nimbus_opulus_sombre'); ?></p>
                            <?php endif; ?>
                            <div class="clear15 visible-phone"></div>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>            
        <?php    
        } else {
            if (nimbus_get_option('toggle_blog') == 1) { 
            ?>
                <div class="row">
                    <div id="frontpage_blog_row" class="span12 center none">
                        <div class="row">
                            <div id="frontpage_blog" class="span8">
                                <?php 
                                if (nimbus_get_option('blog_feed_title') != "") { 
                                ?>
                                    <h2><?php echo nimbus_get_option('blog_feed_title') ?></h2>
                                <?php 
                                } 
                                ?>
                                <div class="clear20"></div>
                                <?php
                                $original_query = $wp_query;
                                $wp_query = null;
                                $wp_query = new WP_Query(array("post_type" => "post", "posts_per_page" => "3"));
                                if (have_posts()) : 
                                    while (have_posts()) : the_post();
                                        
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('nimbus-small');
                                        } else {
                                            if ($reminder_images == "on" ) {
                                            ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/blue-mini.jpg" class="attachment-nimbus-small wp-post-image" alt="Post Image" />
                                            <?php    
                                            }
                                        }
                                        ?>
                                        <h4><a href="<?php the_permalink(); ?>">
                                        <?php  
                                        $title = get_the_title();
                                        if (strlen($title) == 0) { 
                                            ?>Post ID <?php the_ID(); 
                                        } else { 
                                            the_title();
                                        }                              
                                        ?>
                                        </a></h4>
                                        <?php 
                                        the_excerpt(); 
                                        ?>
                                        <div class="clear10"></div>
                                        <div class="clear10 visible-phone"></div>
                                    <?php 
                                    endwhile;
                                    else:
                                    ?>
                                    <p><?php _e('Sorry, no page matched your criteria.', 'nimbus_opulus_sombre'); ?></p>
                                <?php
                                endif;
                                $wp_query = null;
                                $wp_query = $original_query;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div id="blog_row_widget" class="span4">
                            <?php 
                            if (is_active_sidebar( 'Frontpage Right' )) { 
                                dynamic_sidebar( 'Frontpage Right' );
                            } else {    
                                if (nimbus_get_option('example_widgets') == "on") {
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
                            <div class="clear"></div>
                        </div>    
                    </div>
                </div>
            <?php 
            } 
        }
        ?>		   
    </div>
</div>
<?php 
get_footer(); 
?>