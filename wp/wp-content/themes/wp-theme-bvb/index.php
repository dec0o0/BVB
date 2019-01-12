<?php get_header('landing');?>


<?php 
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'cat' => '4',
    'posts_per_page' => 5
);
$q = new WP_Query($args);

$slideTitles = array();
$slideUrls = array();
$slidePics = array();
$slideSummary = array();
$i = 0;
while($q->have_posts()) {
    $q->the_post();
    $slidePics[$i] = get_the_post_thumbnail_url(get_the_ID(),'full');
    $slideUrls[$i] = get_permalink();
    $slideTitles[$i] = get_the_title();
    $slideSummary[$i++] = get_the_content();
}
$currentUrl = get_template_directory_uri();
?>

    <section>
        
        <div class="slideshow">
        <div class="slides slides--images">
            <?php for($i = 0; $i < count($slidePics); $i++) { 
                if($i == 0) {?>
                <div class="slide slide--current">
                <?php } else { ?>
                    <div class="slide">
                <?php } ?>
                <div class="slide__img" style="background-image: url(<?php echo $currentUrl . '/assets/css/images/overlay.png' ?>), url(<?php echo $slidePics[$i] ?>)"></div>
                <h3 class="slide__title"><?php echo $slideTitles[$i] ?></h3>
                <p class="slide__desc"><?php echo $slideSummary[$i] ?></p>
                <a class="slide__link hidden" href="<?php echo $slideUrls[$i] ?>">Deschide</a>
            </div>
                <?php
            } ?>
        </div>
        <nav class="slidenav">
					<button class="slidenav__item slidenav__item--prev icon fa-chevron-left" ><span class=""></span> Anteriorul</button>
					<span>/</span>
					<button class="slidenav__item slidenav__item--next">Următorul <span class="icon fa-chevron-right"></span></button>
				</nav>
        </div>
    
        <section id="four " class="wrapper style1 special ">
        <div class="container ">
            <header class="major ">
                <h2>Vă spunem un călduros bun venit!</h2>
                <p>Pe site-ul bisericii lui Isus Hristos „Vestea Bună” din Bucureşti</p>
            </header>
            <p>Vă suntem alături prin intermediul serviciilor divine redate în flux live, împreună cu alte informaţii utile ce vizează biserica noastră. 
De asemenea, oferim și servicii de consiliere creştină, alături de suportul social necesar.
Vă aşteptăm să participaţi alături de noi la părtăşia spirituală a bisericii „Vestea Bună”:
duminica dimineaţa 10.00 – 12.00 apoi după-amiază  18.00 – 20.00. </p>
            <ul class="actions ">
                <li><button class="button specialBvb icon fa-clock-o" onclick="scheduleChange('s')">Programul săptămânal</a></li>
                <li><button class="button alt icon fa-calendar" onclick="scheduleChange('l')">Programul lunar</a></li>
            </ul>
            <div class="table-wrapper hidden" id="programSaptamanal">
                <br/>
                <table>
                    <thead>
                        <tr>
                            <th><h3>Zi</h3></th>
                            <th><h3>Eveniment</h3></th>
                            <th><h3>Ora începerii</h3></th>
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
            <br/>
                <table>
                    <thead>
                        <tr>
                            <th><h3>Eveniment</h3></th>
                            <th><h3>Frecvență</h3></th>
                            <th><h3>Următoarea întâlnire</th>
                            <th><h3>Ora începerii</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Întâlnirea familiilor</td>
                            <td>În ultima vineri a lunii</td>
                            <td/>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <td>Întâlnirea surorilor</td>
                            <td>În prima sâmbătă a lunii</td>
                            <td/>
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
    'posts_per_page' => 3
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
                            <p>Resursă adăugată de <?php the_author();?>, în data de <?php the_time('j F, Y');?>.</p>
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
                            <p>Resursă adăugată de <?php the_author();?>, în data de <?php the_time('j F, Y');?>.</p>
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