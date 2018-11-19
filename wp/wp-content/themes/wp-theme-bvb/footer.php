

    <section class="style1">
        <div id="somedialog" class="dialog">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
                                                <rect x="2" y="2" fill="none" width="556" height="276"/>
                                            </svg>
                </div>
                <div class="dialog-inner">
                    <h3>Programul
                        <select name="category" id="program" onchange="scheduleChange(this)">
                                <option value="s">SĂPTĂMÂNAL</option>
                                <option value="l">LUNAR</option>
                            </select></h3>
                    <a href="#" class="dialog__close icon fa-times fa-lg" data-dialog-close><span class="label">Închide</span></a>
                    <br/>
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
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row 200% uniform">

                <section class="4u 6u(medium) 12u$(small)">
                    <header class="major">
                        <h3>Contact</h3>
                    </header>
                    <ul class="labeled-icons">
                        <li>
                            <h4 class="icon fa-envelope"><span class="label">Email</span></h4>
                            <a href="mailto:contact@bisericavesteabuna.ro?Subject=">contact@bisericavesteabuna.ro</a>
                        </li>
                        <li>
                            <h4 class="icon fa-phone"><span class="label">Phone</span></h4>
                            (004) 021 322 4278
                        </li>
                        <li>
                            <h4 class="icon fa-home"><span class="label">Adresă</span></h4>
                            Str. Popa Nan nr. 106, <br/> București, sector 2, 030167
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

                </section>
                <section class="4u$ 6u$(medium) 12u$(small)">
                    <!--<header class="major"><h3>Adresă</h3></header>	-->
                    <!-- Google API key AIzaSyDUzsXHkCxhQhOfsbmTgkACRjP7_42uf3I -->
                    <iframe style="border-radius: 4px" width="600" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDUzsXHkCxhQhOfsbmTgkACRjP7_42uf3I
							    &q=Biserica+Vestea+buna,Bucharest" allowfullscreen>
							</iframe>
                </section>
            </div>
        </div>
        <div class="copyright">
            &copy; Vestea Bună București
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/skel.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.poptrox.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/util.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/classie.js'?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/modernizr.custom.js'?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/dialogFx.js'?>"></script>

    <script>
        (function() {
            var dlgtrigger = document.querySelector('[data-dialog]'),
                somedialog = document.getElementById(dlgtrigger.getAttribute('data-dialog')),
                dlg = new DialogFx(somedialog);
            dlgtrigger.addEventListener('click', dlg.toggle.bind(dlg));
        })();
    </script>
    <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri() . '/assets/js/ie/respond.min.js'; ?>"></script><![endif]-->
    

</body>

</html>