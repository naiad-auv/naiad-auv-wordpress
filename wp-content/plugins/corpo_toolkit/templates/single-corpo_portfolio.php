<?php get_header(); ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
	<div id="content" class="full-width">
        <section id="main-content" role="main">
        
        <header class="page-title">
        
            <h2><?php the_title(); ?></h2>
            <div class="project-nav">
                <?php echo previous_post_link('%link', __('&larr; Previous','corpo') ); ?>&nbsp;
                <a href="<?php echo get_post_type_archive_link('corpo_portfolio'); ?>" title="<?php _e('View all projects','corpo'); ?>"><i class="icon-th-large"></i></a>&nbsp;
                <?php next_post_link('%link', __('Next &rarr;', 'corpo') ); ?>
            </div>
            
        </header>
        
        <?php   ?>
		
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="entry-content">
            
                <div class="project-media alignleft">
                <?php 
                    $images = rwmb_meta( 'corpo_imgadv', 'type=image', $post->ID );

                    if ( count( $images ) ) :
                    
                    echo '<div class="flexslider portfolio-gallery">';
                    echo '<ul class="slides">';                    
                    
                    foreach ($images as $image) :
                        if ( wp_get_attachment_image_src( $image['ID'], 'fullwidth' ) ) :
                            $img = wp_get_attachment_image_src($image['ID'], 'fullwidth');
                        endif;  
                        echo '<li><img src="'. $img[0] .'" alt="'. $post->post_title .'" /></li>';
                    endforeach;
                    
                    echo '</ul>';
                    echo '</div>';
                    
                    else :
                    
                        if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :
                            the_post_thumbnail('fullwidth');
                        else :
                            echo '<img src="'. CORPO_TOOLKIT_URL .'images/project-full-placeholder.png" alt="" />';
                        endif;
                    
                    endif;
                ?>
                </div>
                
                <div class="project-info">
                    <h5><?php _e('Overview','corpo'); ?></h5>
                    <?php the_content(); ?>
                    <h5><?php _e('Services','corpo'); ?></h5>
                    
                    <p>
                    <?php 
                    echo get_the_term_list( $post->ID, 'corpo_services', '', ' / ', '' );
                    ?>
                    </p>
                    <?php 
                    $project_meta = array(
                        get_post_meta($post->ID, 'corpo_projectClient', true),
                        get_post_meta($post->ID, 'corpo_projectDate',true ),
                        get_post_meta($post->ID, 'corpo_projectURL',true ),                        
                    );

                    if (strlen(implode('', $project_meta)) != 0):
                    ?>
                    <h5><?php _e('Project details','corpo'); ?></h5>
                    <div class="project-meta">
                        <ul>
                            <?php if ( get_post_meta($post->ID, 'corpo_projectClient' ) ) : ?>
                            <li><b><?php _e('Client','corpo'); ?>:</b> <?php echo get_post_meta($post->ID, 'corpo_projectClient', true); ?></li>
                            <?php endif; ?>
                            <?php if ( get_post_meta($post->ID, 'corpo_projectDate' ) ) : ?>
                            <li><b><?php _e('Date','corpo'); ?>:</b> <?php echo get_post_meta($post->ID, 'corpo_projectDate', true); ?></li>
                            <?php endif; ?>
                            <?php if ( get_post_meta($post->ID, 'corpo_projectURL' ) ) : ?>
                            <li><b><?php _e('Project URL','corpo'); ?>:</b> <a href="<?php echo get_post_meta($post->ID, 'corpo_projectURL', true); ?>"><?php echo get_post_meta($post->ID, 'corpo_projectURL', true); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php edit_post_link(); ?>    
                </div>

            </div>
			
		</article>
        <?php $terms = wp_get_object_terms ( $post->ID, 'corpo_services' ); ?>
		<?php if( $terms ) : ?>
		<section id="portfolio">
			<?php
			corpo_portfolio_loop(
				__('Related Projects', 'corpo'),
				array(
					'posts_per_page' => 4,
					'post_type' => 'corpo_portfolio',
					'post__not_in' => array($post->ID),
					'corpo_services' => $terms[0]->slug
				)
			);
			?>
		</section>
		<?php endif; ?>
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'corpo' ); ?></h2>
			
		</article>
	
	<?php endif; ?>
	
	</section>
    </div>

<?php get_footer(); ?>