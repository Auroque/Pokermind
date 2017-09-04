<?php 
// Template Name: Galeria
?>

<?php get_header(); ?>
<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h1 class="title-page"><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile; else: ?>
           
            <?php endif; ?>

                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Patwentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>    			
		</div>
    </div>
</div>
<?php get_footer(); ?>