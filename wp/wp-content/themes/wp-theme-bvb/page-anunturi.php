<?php 
/* Template Name: Generic */
get_header(); 
?>
 
<?php 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
     'post_type' => 'post' ,
     'orderby' => 'date' ,
     'order' => 'DESC' ,
     'posts_per_page' => 7,
     'cat' => '2',
     'paged' => $paged
); 

$q = new WP_Query($args); ?>

 <section id="main">
    <div class="container">
        <header class="major">
            <h2>Anunțuri</h2>
            <p>Și evenimente</p>
        </header>
</div></section>
<section id="one">
    <div class="container">

    <!-- One -->

<?php if ( $q->have_posts() ) { ?>
     <?php while ( $q->have_posts() ) { $q->the_post();?>
            <section class="feature">
                <div class="row 200%">
                    <div class="8u 12u$(medium)">
                        <header class="major">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                            <p><i class="icon fa-pencil"></i> De <?php the_author(); ?>, în <?php the_date(); ?></p>
     </header>
                        <p><?php the_excerpt();?></p>
                        <ul class="actions">
                            <li><a href="<?php the_permalink();?>" class="button alt">Continuă lectura</a></li>
                        </ul>
                    </div>
                    <div class="4u$ 12u$(medium) important(medium)">
                        <span class="image fit rounded">
									<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" />
								</span>
                    </div>
                </div>
            </section>
            <?php } ?>
            
            <div class="pagination">
                <?php 
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $q->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 3,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<div class="button small"> %1$s </div>', __( 'Articole mai noi', 'text-domain' ) ),
                        'next_text'    => sprintf( '<div class="button small"> %1$s </div>', __( 'Articole mai vechi', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                        'before_page_number' => '<div class="button small">',
                        'after_page_number' => '</div>'
                    ) );
                ?>
            </div>
<?php

            wp_reset_postdata();
        } ?>

        </div>
    </section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>