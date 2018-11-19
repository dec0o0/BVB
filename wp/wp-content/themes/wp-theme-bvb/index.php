<?php get_header('landing');?>

    <section class="slideshow">
        <div class="slides slides--images">
            <div class="slide slide--current">
                <div class="slide__img" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/css/images/overlay.png' ?>), url(http://ro.zooverresources.com/images/E58754L2B614902D0W900H675/Gent.jpg)"></div>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(assets/css/images/overlay.png), url(http://ro.zooverresources.com/images/E58754L2B614902D0W900H675/Gent.jpg)"></div>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(assets/css/images/overlay.png), url(http://ro.zooverresources.com/images/E58754L2B614902D0W900H675/Gent.jpg)"></div>
            </div>
            <div class="slide">
                <div class="slide__img" style="background-image: url(assets/css/images/overlay.png), url(http://ro.zooverresources.com/images/E58754L2B614902D0W900H675/Gent.jpg)"></div>
            </div>
        </div>
        <div class="slides slides--titles">
            <div class="slide slide--current">
                <h2 class="slide__title">Isus Hristos</h2>
                <p>Ne vindeca</p>
            </div>
            <div class="slide">
                <h2 class="slide__title">Duhul Sfant</h2>
                <p>Ne conduce</p>
            </div>
            <div class="slide">
                <h2 class="slide__title">Design</h2>
            </div>
            <div class="slide">
                <h2 class="slide__title">Create</h2>
            </div>
            <div class="slide">
                <h2 class="slide__title">Invent</h2>
            </div>
        </div>
        <nav class="slidenav">
            <button class="slidenav__item slidenav__item--prev button"><span class="icon fa-chevron-left fa-lg"></span></button>
            <button class="slidenav__item__like button"><span class="icon fa-search-plus fa-lg"></span></button>
            <button class="slidenav__item slidenav__item--next button"><span class="icon fa-chevron-right fa-lg"></span></button>
        </nav>
    </section>

    <!-- Four -->
    <section id="one" class="wrapper style1 special">
        <div class="container">
            <header class="major">
                <h2>Programul
                        <select name="category" id="program" onchange="scheduleChange(this)">
                                <option value="s">SĂPTĂMÂNAL</option>
                                <option value="l">LUNAR</option>
                            </select></h2>
            </header>
                    <div class="table-wrapper" id="programSaptamanal">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ziua săptămânii</th>
                                    <th>Eveniment</th>
                                    <th>Ora începerii</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan=" 2 ">Duminică</td>
                                    <td>Slujba de dimineața</td>
                                    <td>10:00</td>
                                </tr>
                                <tr>
                                    <td>Slujba de seară</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Marți</td>
                                    <td>Seară de rugăciune</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Miercuri</td>
                                    <td>Întâlnirea adolescenților</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Joi</td>
                                    <td>Întâlnire de la mijlocul săptămânii</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Vineri</td>
                                    <td>Întâlnirea grupurilor de tineri</td>
                                    <td>18:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-wrapper hidden" id="programLunar">
                        <table>
                            <thead>
                                <tr>
                                    <th>Eveniment</th>
                                    <th>Periodicitate</th>
                                    <th>Oră începere</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Întâlnirea familiilor</td>
                                    <td>În ultima vineri a lunii</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Întâlnirea surorilor</td>
                                    <td>În prima sâmbătă a lunii</td>
                                    <td>18:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        </div>
    </section>

<?php $args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'cat' => '2',
    'posts_per_page' => 3,
    'post_parent' => $parent,
);
$q = new WP_Query($args);
?>

    <!-- One -->
    <section id="two" class="wrapper style1">
        <div class="container">

        <?php if ($q->have_posts()) {
            $count = 0; ?>
            
             <?php while ($q->have_posts()) {
            $q->the_post();
            if($count++ % 2 == 0) {?>

            <section class="feature">
                <div class="row 200%">
                    <div class="8u 12u$(medium)">
                        <header class="major">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <p>Anunț adăugat de <?php the_author();?>, în data de <?php the_date();?>.</p>
                        </header>
                        <p><?php the_excerpt();?></p>
                        <ul class="actions">
                            <li><a href="<?php the_permalink();?>" class="button">Continuă lectura</a></li>
                        </ul>
                    </div>
                    <div class="4u$ 12u$(medium) important(medium)">
                        <span class="image fit rounded">
                        <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="" />
						</span>
                    </div>
                </div>
            </section>
            <?php } else { ?>
            <section class="feature">
                <div class="row 200%">
                    <div class="4u 12u$(medium)">
                        <span class="image fit rounded">
                        <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="" />
								</span>
                    </div>
                    <div class="8u$ 12u$(medium)">
                        <header class="major">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <p>Ultimul articol, adăugat în data de <?php the_date();?></p>
                        </header>
                        <p><?php the_excerpt();?></p>
                        <ul class="actions">
                            <li><a href="<?php the_permalink();?>" class="button">Continuă lectura</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php }}}?>
        </div>
    </section>

<?php wp_reset_postdata();?>
<?php get_sidebar();?>
<?php get_footer('landing');?>