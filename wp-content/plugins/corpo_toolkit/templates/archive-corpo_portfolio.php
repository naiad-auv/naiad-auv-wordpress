<?php get_header(); ?>
    
    <?php 
    $args = array(
        'post_type'     => 'corpo_portfolio',
        'post_status'   => 'publish',
        'nopaging'      => true  
    );
    $query = new WP_Query( $args );
    $count = $query->post_count;
    
    if ( $query->have_posts()): 
    
    ?>
	<div id="content" class="full-width">
        <section id="main-content" role="main">
        <header class="page-title">
            <?php of_get_option( 'corpo_portfolio_title' ) == '' ? $header = __('Portfolio','corpo') : $header  = of_get_option( 'corpo_portfolio_title' ); ?>
            <h2><?php echo $header; ?></h2>
        </header>
        <?php 
        if ( of_get_option('corpo_portfolio_intro') ) :
            echo apply_filters( 'the_content', of_get_option( 'corpo_portfolio_intro' ) );
        endif; 
        ?>
        <div class="projects-slider">
            <?php $counter = 1; ?>
            <?php while ( $query->have_posts()) : $query->the_post(); ?>            
            <?php if( ($counter-1)%4 == 0 ) : ?>
            <div class="row">
            <?php endif; ?>
            <div class="project one-fourth<?php if( $counter%4 == 0 ) { echo " last"; } ?>">
                <a href="<?php the_permalink(); ?>" class="portfolio-item">
                <div class="proj-thumb">
                
                    <?php 
                        if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
                            the_post_thumbnail('portfolio-one-third'); 
                        } else { ?>
                            <img src="<?php echo CORPO_TOOLKIT_URL; ?>images/project-thumb-placeholder.png" alt="" />
                    <?php } ?>

                    <span class="image-overlay"></span>
                </div>
                <div class="proj-description">
                    <h5><?php the_title(); ?></h5>
                    <?php $terms = wp_get_object_terms ( $post->ID, 'corpo_services' ); ?>
                    <i><?php if ( $terms ) echo $terms[0]->name; ?></i>
                </div>
                </a>
            </div>    

            <?php if( $counter%4 == 0 || ($counter-1) === $count ) : ?>
            </div>
            <?php endif; ?>
            
            <?php $counter++; ?>
            
        <?php endwhile; ?>
 
    </div>
		
	
	<?php else: ?>
	
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'corpo' ); ?></h2>
			
		</article>
	
	<?php endif; ?>

	
    </section>
    </div>

<?php get_footer(); ?>