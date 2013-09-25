<?php
$banner_option = trim(nimbus_get_option('banner_option'));
$reminder_images = trim(nimbus_get_option('reminder_images'));
$frontpage_option = trim(get_option('show_on_front'));
?>

<div class="row">
    <div id="frontpage_banner" class="span12 center none">
        <?php 
        if ($banner_option == "image") { 
        ?>
            <div class="row">
                <div id="banner_content_left" class="editable span5 image_content scroll-pane">
                    <?php 
                    echo apply_filters('the_content', get_post_meta($post->ID, 'frontpage_banner_content', true)); 
                    ?>
                </div>
                <div class="span7">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('half-image');
                    }
                    ?>
                </div>
            </div>
        <?php 
        } elseif ($banner_option == "full_image") { 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('full-image');
            } 
        } elseif ($banner_option == "full_image_border") { 

            if ($frontpage_option == "posts") { 
            ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/welcome-opulus-sombre.jpg" class="attachment-full-banner wp-post-image" alt="Welcome Banner" />
            <?php
            } else {
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full-banner');
                } else {
                    if ($reminder_images == "on" ) {
                    ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/welcome-opulus-sombre.jpg" class="attachment-full-banner wp-post-image" alt="Reminder Banner" />
                    <?php    
                    }
                }
            }
        } elseif ($banner_option == "image_border") { 
        ?> 
            <div class="row">
                <div id="banner_content_left" class="editable span5 image_border_content scroll-pane">
                    <?php echo apply_filters('the_content', get_post_meta($post->ID, 'frontpage_banner_content', true)); ?>
                </div>
                <div class="span7">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('half-banner');
                    }
                    ?>
                </div>
            </div>        
        <?php 
        } elseif ($banner_option == "content_only") { 
        ?> 
            <div id="banner_content_full" class="editable">
                <?php echo apply_filters('the_content', get_post_meta($post->ID, 'frontpage_banner_content', true)); ?>
            </div>
        <?php 
        }  
        ?>	
    </div>
</div>