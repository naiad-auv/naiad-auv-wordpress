<div id="footer_wrap" class="row">
    <div id="footer" class="span12 center none">
        <div id="footer_widgets_wrap">
            <div class="row">
                <div id="footer_widget_left" class="span4">
                    <?php 
                    if (is_active_sidebar( 'Footer Left' )) { 
                        dynamic_sidebar( 'Footer Left' );
                    } else {   
                        if (nimbus_get_option('example_widgets') == "on") {
                        ?>
                            <div class="footer_widget sidebar sidebar_editable">
                                <?php
                                the_widget('WP_Widget_Recent_Posts');
                                ?>
                            </div>
                        <?php    
                        } 
                    } 
                    ?>
                </div>			
                <div id="footer_widget_center" class="span4">
                    <?php 
                    if (is_active_sidebar( 'Footer Center' )) { 
                        dynamic_sidebar( 'Footer Center' );
                    } else {   
                        if (nimbus_get_option('example_widgets') == "on") {
                        ?>
                            <div class="footer_widget sidebar sidebar_editable">
                                <?php
                                    $rss_options = array( 
                                        'title' => 'WordPress News Feed',  
                                        'url' => 'http://wordpress.org/news/feed/', 
                                        'items' => 7
                                    );
                                    the_widget('WP_Widget_RSS', $rss_options); 
                                ?>
                            </div>
                        <?php    
                        } 
                    }
                    ?>
                </div>			
                <div id="footer_widget_right" class="span4">
                    <?php 
                    if (is_active_sidebar( 'Footer Right' )) { 
                        dynamic_sidebar( 'Footer Right' );
                    } else {    
                        if (nimbus_get_option('example_widgets') == "on") {
                        ?>
                            <div class="footer_widget sidebar sidebar_editable">
                                <?php
                                the_widget( 'WP_Widget_Tag_Cloud'); 
                                ?>
                            </div>
                        <?php    
                        } 
                    } 
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="footer_base">
            <div id="footer_meta">
                <ul id="contact">
                    <?php if (nimbus_get_option('image_logo') == "") { ?>
                        <li><p id="footer_text_logo"><?php echo nimbus_get_option('text_logo') ?></p></li> 
                    <?php } ?>
                    <?php if (nimbus_get_option('address') != "") { ?>
                        <li><?php echo wpautop(nimbus_get_option('address')) ?></li>
                    <?php } ?>
                    <?php if ((nimbus_get_option('public_phone') || nimbus_get_option('public_fax')) != "") { ?>
                        <li><p><?php if (nimbus_get_option('public_phone') != "") { ?>
                                    <span>t </span><?php echo nimbus_get_option('public_phone') ?><br />
                                <?php } ?><?php if (nimbus_get_option('public_fax') != "") { ?>
                                    <span>f </span><?php echo nimbus_get_option('public_fax') ?>
                                <?php } ?></p></li>
                    <?php } ?>
                </ul>
                <?php if (nimbus_get_option('display_social_buttons') == 1) { ?>
                    <ul id="social">
                        <?php if (nimbus_get_option('facebook_url') != "") { ?>
                            <li id="facebook_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('facebook_url') ?>"></a></li>
                        <?php } ?>
                        <?php if (nimbus_get_option('linkedin_url') != "") { ?>				
                            <li id="linkedin_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('linkedin_url') ?>"></a></li>
                        <?php } ?>
                        <?php if (nimbus_get_option('twitter_url') != "") { ?>						
                            <li id="twitter_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('twitter_url') ?>"></a></li>
                        <?php } ?>
                        <?php if (nimbus_get_option('youtube_url') != "") { ?>						
                            <li id="youtube_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('youtube_url') ?>"></a></li>
                        <?php } ?>	
                        <?php if (nimbus_get_option('google_plus_url') != "") { ?>						
                            <li id="google_plus_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('google_plus_url') ?>"></a></li>
                        <?php } ?>	
                        <li id="rss_footer_button"><a target="_blank" href="<?php bloginfo('rss2_url'); ?>"></a></li>
                    </ul>
                <?php } ?>	
                <div class="clear"></div>
            </div>
            <p id="copyright"><?php echo nimbus_get_option('copyright') ?></p>
            <p id="credit"><?php _e('Design by', 'nimbus'); ?> <a href="http://www.nimbusthemes.com/" rel="nofollow">Nimbus Themes</a> | <?php _e('Powered by', 'nimbus'); ?> <a href="http://wordpress.org"><?php _e('WordPress', 'nimbus'); ?></a></p>
        </div>		
    </div>
</div>
<?php wp_footer(); ?>		
</body>
</html>
