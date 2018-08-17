<?php get_header(); ?>
 
<h1>Latest News</h1>     

<?php $args = array(
     'post_type' => 'post' ,
     'orderby' => 'date' ,
     'order' => 'DESC' ,
     'posts_per_page' => 6,
     'cat' => '2',
     'paged' => get_query_var('paged'),
     'post_parent' => $parent
); ?>
<?php $q = new WP_Query($args); ?>

<?php if ( $q->have_posts() ) { ?>
     <?php while ( $q->have_posts() ) {
        
        $q->the_post(); ?>

         <div class="large-4 medium-4 small-12 columns">
             <div class="latest_news_cont">
             <a href="<?php $q->the_permalink(); ?>"><?php $q->the_post_thumbnail(); ?></a>

             <a href="<?php $q->the_permalink(); ?>"><h5><?php $q->the_title(); ?></h5></a>
             <?php $q->the_excerpt(); ?>
             <p style="text-align:center;"><a href="<?php $q->the_permalink(); ?>" class="readmore_news">Read more</a></p>
<br>
<div class="clear"></div>
                </div>
             </div>

     <?php } ?>
     <?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>