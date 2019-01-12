<?php 
/* Template Name: Generic */
get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();
/*
the_content();
*/
?>
<section id="main">
    <div class="container">
        <header class="major">
        <h2>Contactează-ne</h2>
                <p>Ne vom bucura să te cunoaștem</p>
        </header>

            <!-- Content -->
            <section id="content">
                    
        <div class="row 200%">
                <div class="4u 12u$(medium) important(medium)">
                    <ul class="labeled-icons">
                        <li>
                            <h4 class="icon fa-phone"><span class="label">Telefon</span></h4>
                            Pastor Emil Meștereagă<br/>(+40) 732 672 704
                        </li>
                        <li>
                            <h4 class="icon fa-phone"><span class="label">Telefon</span></h4>
                            Pastor Adrian Jurj<br/>(+40) 743 595 146
                        </li>
                        <li>
                            <h4 class="icon fa-home"><span class="label">Adresă</span></h4>
                            Str. Popa Nan nr. 106, <br/> București, sector 2, 030167
                        </li>
                        <li>
                            <h4 class="icon fa-envelope"><span class="label">Email</span></h4>
                            <a href="mailto:contact@bisericavesteabuna.ro?Subject=">contact@bisericavesteabuna.ro</a>
                        </li>
                        <li>
                            <h4 class="icon fa-facebook"><span class="label">Facebook</span></h4>
                            <a target="_blank" href="https://www.facebook.com/BisericaVB.ro">facebook.com/BisericaVB.ro</a>
                        </li>
                        <li>
                            <h4 class="icon fa-youtube"><span class="label">Youtube</span></h4>
                            <a href="https://www.youtube.com/channel/UCEP7EO7Fso88QlA1A0YfuJg">BisericaPenticostalaVesteaBuna</a>
                        </li>
                    </ul>
                </div>
                <div class="8u$ 12u$(medium)">
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.0729410075946!2d26.12364131531884!3d44.43166597910234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff264e1706bf%3A0xabc547def6e972de!2sBiserica+Vestea+Buna!5e0!3m2!1sen!2sro!4v1543089718464" width="600" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p>Cea mai aproapiată stație STB este Universitatea Hyperion, iar cea mai aproapiată stație de metrou este Piața Muncii.</p>

                </div>
            </div>
            <hr/>
            <div class="row 200%">
            <div class="4u 12u$(medium)">
            <p>Pentru a ne trimite un mesaj, folosește fără rezerve formularul alăturat. <br/>Încercăm să răspundem pe cât se poate de prompt.</p>
                    </div>
                    <div class="8u$ 12u$(medium)">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfupA31lFJacsyYGuoDPVRZ5qla07yKE9er6_IzdUOK5__PXQ/viewform?embedded=true" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0">Se încarcă formularul ...</iframe>
                    </div>
                    </div>
        </div>
    </section>
</div>
</section>

<?php
endwhile;
endif;
get_sidebar();
get_footer('contact'); ?>