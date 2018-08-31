<?php
/*
 * Template Name: Single Article
 * Template Post Type: post, page, product
 */
  
 get_header(); 
 
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section id="main">
    <div class="container">
        <header class="major">
            <h2><?php the_title();?></h2>
            <p><?php the_author();?>, <?php the_date();?><br/></span></p>
        </header>
        <div class="row 200%">
        <div class="4u 12u$(medium)">
            <span class="image fit"><img src="<?php the_post_thumbnail_url('medium');?>" class="img fit"/></span>
        </div>
        <div class="8u 12u$(medium)">
            <section id="content">
                <?php the_content(); ?>
            </section>
        </div>
        </div>
    </div>
</section> 

<?php endwhile;
endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>