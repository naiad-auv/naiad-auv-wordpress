<?php get_header(); ?>

	<div id="content" class="full-width">

		<?php if ( have_posts() ) : ?>
        <section id="main-content" role="main">
						
            <header class="page-title">
				<h2>
				<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo __('Portfolio:','corpo') .' '. $term->name; ?>  
				</h2>	
			</header>

            <div class="projects-slider">
                <?php $counter = 1; ?>
                <?php while (have_posts()) : the_post(); ?>            
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
                        <i><?php echo $terms[0]->name; ?></i>
                    </div>
                    </a>
                </div>    

                <?php if( $counter%4 == 0 ) : ?>
                </div>
                <?php endif; ?>
                
                <?php $counter++; ?>
                
            <?php endwhile; ?>
     
        </div>

			
			<?php else : ?>	
            
		<section id="main-content" role="main">
		
			<article id="post-0" class="post no-results not-found">
				<header>
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'corpo' ); ?></h2>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It seems we can\'t find what you&rsquo;re looking for. Perhaps searching can help.', 'corpo' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

			<?php endif; ?>	

		</section>

	</div>


<?php get_footer(); ?>