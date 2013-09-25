<?php
$left_featured = trim(nimbus_get_option('left_featured'));
$center_featured = trim(nimbus_get_option('center_featured'));
$right_featured = trim(nimbus_get_option('right_featured'));
$frontpage_option = trim(get_option('show_on_front'));
$reminder_images = trim(nimbus_get_option('reminder_images'));
?>


<div class="row">
    <div id="featured_wrap" class="span12 center none">
        <div class="row">
            <div id="featured_left" class="span4">
                <?php if ($left_featured != "") { 
                    $original_query = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query(array('page_id' => $left_featured, 'posts_per_page' => 1));
                    if (have_posts()) : 
                        while (have_posts()) : the_post();
                            if ( has_post_thumbnail() ) {
                            ?>
                            <a href="<?php the_permalink(); ?>">
                            <?php
                                    the_post_thumbnail('nimbus-feature', array('class' => 'hidden-phone'));
                            ?>
                            </a>
                            <?php         
                            } else {
                                if ($reminder_images == "on" ) {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/magenta.jpg" class="hidden-phone wp-post-image" alt="Reminder Image" />
                                <?php    
                                }
                            }
                            ?>
                            <h3><a href="<?php the_permalink(); ?>">
                            <?php  
                            $title = get_the_title();
                            if (strlen($title) == 0) { 
                            ?>Post ID <?php the_ID(); 
                            } else { 
                                the_title();
                            }                              
                            ?>
                            </a></h3>
                            <?php 
                            the_excerpt(); 
                            ?>
                            <p class="featured_more"><a href="<?php the_permalink(); ?>"><?php echo nimbus_get_option('read_more'); ?></a></p>
                            <div class="clear10"></div>
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
                <?php 
                } 
                ?>	
            </div>
            <div id="featured_center" class="span4">
                <?php 
                if ($center_featured != "") { 
                    $original_query = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query(array('page_id' => $center_featured, 'posts_per_page' => 1));
                    if (have_posts()) : 
                        while (have_posts()) : the_post();
                            if ( has_post_thumbnail() ) {
                            ?>
                            <a href="<?php the_permalink(); ?>">
                            <?php
                                    the_post_thumbnail('nimbus-feature', array('class' => 'hidden-phone'));
                            ?>
                            </a>
                            <?php         
                            } else {
                                if ($reminder_images == "on" ) {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blue-gr.jpg" class="hidden-phone wp-post-image" alt="Reminder Image" />
                                <?php    
                                }
                            }
                            ?>
                            <h3><a href="<?php the_permalink(); ?>">
                            <?php  
                                $title = get_the_title();
                                if (strlen($title) == 0) { 
                                    ?>Post ID <?php the_ID(); 
                                } else { 
                                    the_title();
                                }                              
                                ?>
                            </a></h3>
                            <?php 
                            the_excerpt(); 
                            ?>
                            <p class="featured_more"><a href="<?php the_permalink(); ?>"><?php echo nimbus_get_option('read_more'); ?></a></p>
                            <div class="clear10"></div>
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
                } 
                ?>	
            </div>
            <div id="featured_right" class="span4">
                <?php 
                if ($right_featured != "") { 
                    $original_query = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query(array('page_id' => $right_featured, 'posts_per_page' => 1));
                    if (have_posts()) : 
                        while (have_posts()) : the_post();
                            if ( has_post_thumbnail() ) {
                            ?>
                            <a href="<?php the_permalink(); ?>">
                            <?php
                                    the_post_thumbnail('nimbus-feature', array('class' => 'hidden-phone'));
                            ?>
                            </a>
                            <?php    
                            } else {
                                if ($reminder_images == "on" ) {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/orange.jpg" class="hidden-phone wp-post-image" alt="Reminder Image" />
                                <?php    
                                }
                            }
                            ?>
                            <h3><a href="<?php the_permalink(); ?>">
                            <?php  
                            $title = get_the_title();
                            if (strlen($title) == 0) { 
                                ?>Post ID <?php the_ID(); 
                            } else { 
                                the_title();
                            }                              
                            ?>
                            </a></h3>
                            <?php 
                            the_excerpt(); 
                            ?>
                            <p class="featured_more"><a href="<?php the_permalink(); ?>"><?php echo nimbus_get_option('read_more'); ?></a></p>
                            <div class="clear10"></div>
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
                } ?>				
            </div>
        </div>    
        <div class="clear"></div>
    </div>
</div>