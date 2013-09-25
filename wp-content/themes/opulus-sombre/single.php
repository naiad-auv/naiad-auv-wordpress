<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
$post_meta = nimbus_get_option('nimbus_post_meta_single');
get_header();
?>

<div id="content_wrap">
    <div class="row">
        <div id="content" class="span12 center none">
            <div class="row">
                <div id="page_content_editable"  class="editable span8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                            <?php if (get_post_meta($post->ID, 'include_image_on_page', true) == "true") { ?>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('nimbus-post', array('class' => 'blog_post_image'));
                                }
                                ?>
                            <?php }  
                            if (($post_meta['date'] == 1) || ($post_meta['categories'] == 1)) { 
                            ?>
                                <p class="blog_date">
                            <?php
                            }
                            if ($post_meta['date'] == 1) { 
                                the_time('F j, Y'); 
                            } 
                            if ($post_meta['categories'] && $post_meta['date'] == 1) { 
                            ?> | <?php 
                            } 
                            if ($post_meta['categories'] == 1) { 
                                _e('Posted in: ', 'nimbus_opulus_sombre'); 
                                the_category(', '); 
                            } 
                             if (($post_meta['date'] == 1) || ($post_meta['categories'] == 1)) { 
                            ?>
                                </p>
                            <?php
                            }
                            ?>
                            <div class="clear5"></div>
                            <?php
                            if ($top_scripts['post'] = 1) {
                                nimbus_scripts_content_top();
                            }
                            ?>
                            <div class="clear"></div>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <div class="clear20"></div>
                            <div class="row-fluid">
                            
                                <div class="span4 offset2">
                                <?php 
                                if (is_attachment()) {
                                previous_image_link();
                                } else {
                                previous_post_link(); 
                                }                                
                                ?>
                                </div>
                                <div class="span4" style="text-align:right;">
                                <?php 
                                if (is_attachment()) {
                                next_image_link();
                                } else {
                                next_post_link();
                                }                                
                                ?>
                           
                                </div>
                                <div class="span2"></div>
                            </div>
                            <div class="clear"></div>
                            <?php
                            if ($bottom_scripts['post'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>
                            <div class="clear"></div>
                            <?php if ($post_meta['tags'] == 1) { ?>				
                                <?php if (has_tag()) { ?>
                                    <div id="tags_wrap">
                                        <?php the_tags('TAGS: ', ', ', ''); ?> 
                                    </div>
                                <?php } ?>	
                            <?php } ?>	

                            <div class="clear20"></div>
                            <?php if (nimbus_get_option('display_bio') == 1) { ?>				
                                <div class="bio_wrap">
                                    <?php echo get_avatar(get_the_author_meta('email'), '105'); ?>
                                    <h3><?php the_author_posts_link(); ?></h3>
                                    <p><?php the_author_meta('description'); ?></p>
                                    <div class="clear"></div>
                                </div>	
                            <?php } ?>		
                            <div class="clear"></div>                            
                            <?php comments_template(); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p><?php _e('Sorry, no post matches your criteria.', 'nimbus_opulus_sombre'); ?></p>
                    <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
            <div class="clear"></div>			
        </div>
    </div>
</div>

<?php get_footer(); ?>