<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
$post_meta = nimbus_get_option('post_meta_blog');
get_header();
?>

<div id="content_wrap">
    <div class="row">
        <div id="content" class="span12 center none">
            <div class="row">
                <div id="page_content_editable"  class="editable span8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php if ($post_meta['title'] == 1) { ?><h2><a href="<?php the_permalink(); ?>">
                            <?php  
                                $title = get_the_title();
                                if (strlen($title) == 0) { 
                                    ?>Post ID <?php the_ID(); 
                                } else { 
                                    the_title();
                                }                              
                                ?>
                            </a></h2><?php } ?>	
                            <?php if ($post_meta['post_thumb'] == 1) { ?>

                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('nimbus-post', array('class' => 'blog_post_image'));


                                }
                                ?>
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
                            <?php the_content(''); ?>
                            <div class="clear"></div>
                            <?php
                            if ($bottom_scripts['blog'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>
                            <p class="blog_more"><a href="<?php the_permalink(); ?>"><?php echo nimbus_get_option('read_more'); ?></a></p>


                        <?php endwhile; ?>
                        <?php
                        if (function_exists('wp_pagenavi')) {
                            wp_pagenavi();
                        } else {
                            ?>
                            <div class="pagination">
                                <?php next_posts_link(__('Older Entries', 'nimbus_opulus_sombre')) ?>
                            <?php previous_posts_link(__('Newer Entries', 'nimbus_opulus_sombre')) ?>
                            </div>
                        <?php } ?>
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