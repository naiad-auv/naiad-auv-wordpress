<?php 
/*
Template Name: Full-width
*/

get_header(); ?>

	<div id="content" class="full-width">
        <section id="main-content" role="main">
	
		<h2><?php the_title(); ?></h2>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
            
                <?php the_content(); ?>
                <?php edit_post_link(); ?>
            
            </div>
			<?php comments_template( '', true ); ?>
			
			<br class="clear">
			
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'corpo' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
    </div>
	

<?php get_footer(); ?>