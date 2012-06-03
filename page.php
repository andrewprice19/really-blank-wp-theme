<?php get_header(); ?>

	<?php if (have_posts()) : ?>
    
        <?php while (have_posts()) : the_post(); ?>

        	<article>  
    
	            <h1><?php the_title(); ?></h1>
	            
	            <?php the_content(); ?>

       		</article>
    
        <?php endwhile; ?>
    
    <?php endif; ?>
    
    <p><?php the_tags(); ?></p>
 
<?php get_sidebar(); ?>

<?php get_footer(); ?>