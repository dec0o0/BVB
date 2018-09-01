<?php get_header('landing'); ?>
 
    <!-- Banner -->
    <section id="banner">
        <h2>Isus Hristos</h2>
        <p>Ne leagă, ne adună, datorită lui zâmbim.</p>
        <ul class="actions">
            <li class="button-wrap"><button href="#" class="button special trigger">Program săptămânal</button></li>
        </ul>

    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <div class="container">
            <section class="feature">
                <div class="row 200%">
                    <div class="8u 12u$(medium)">
                        <?php $args = array(
                            'post_type' => 'post' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'cat' => '2',
                            'posts_per_page' => 1,
                            'post_parent' => $parent
                        ); 
                        $q = new WP_Query($args);
                        $q->the_post() ?>
                        <header class="major">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p>Ultimul anunț, adăugat în data de <?php the_date(); ?></p>
                        </header>
                        <p><?php the_excerpt(); ?></p>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button">Continuă lectura</a></li>
                            <li><a href="<?php echo home_url(); ?>/anunturi" class="button alt">Vezi toate anunțurile</a></li>
                        </ul>
                    </div>
                    <div class="4u$ 12u$(medium) important(medium)">
                        <span class="image fit rounded">
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" />
								</span>
                    </div>
                </div>
            </section>
            <section class="feature">
                <div class="row 200%">
                    <div class="4u 12u$(medium)">
                    <?php $args = array(
                            'post_type' => 'post' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'cat' => '3',
                            'posts_per_page' => 1,
                            'post_parent' => $parent
                        ); 
                        $q = new WP_Query($args);
                        $q->the_post() ?>
                        <span class="image fit rounded">
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" />
								</span>
                    </div>
                    <div class="8u$ 12u$(medium)">
                        <header class="major">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p>Ultimul articol, adăugat în data de <?php the_date(); ?></p>
                        </header>
                        <p><?php the_excerpt(); ?></p>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button">Continuă lectura</a></li>
                            <li><a href="<?php echo home_url(); ?>/articol" class="button alt">Vezi toate articolele</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper style1 special">
        <div class="container">
            <header class="major">
                <h2>Cine suntem?</h2>
                <p>Vino să vezi</p>
            </header>
            <p>Vă spunem bun venit pe site-ul bisericii „Vestea Bună” Bucureşti</p>
            <p>Vă suntem alături prin intermediul serviciilor divine redate în flux live, împreună cu alte informaţii utile ce vizează comunitatea creştină 
Sunt oferite servicii de consiliere creştină, alături de suportul social necesar
Vă aşteptăm să participaţi alături de noi la părtăşia spirituală duhovnicească.</p>
            <ul class="actions">
                <li><a href="#" class="button special">Detalii contact</a></li>
                <li><a href="#" class="button alt">Departamente</a></li>
            </ul>
        </div>
    </section>

<?php wp_reset_postdata();?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>