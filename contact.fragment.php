    <!-- Main -->
    <section id="main">
        <div class = "container" id="content">
            <header class="major">
                <h2>Contactează-ne</h2>
                <p>Ne vom bucura să te cunoaștem</p>
            </header>

            <div class="row 200%">
                <div class="4u 12u$(medium)">
                    <section>
                       <p>Poți folosi formularul de mai jos pentru a ne trimite un mesaj, ne poți suna sau cel mai bine, ne poți visita.</p>
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

                </div>
                <div class="8u$ 12u$(medium) important(medium)">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
			</script>
			<div class="contmap" style='overflow:hidden;height:550px;width:100%;'>
				<div id='gmap_canvas' style='height:100%;width:100%;'>
			</div>
				<div>
					<small><a href="http://embedgooglemaps.com">embed google maps</a>
					</small>
				</div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				</div>
				<script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(44.431592, 26.125900),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.431592, 26.125900)});infowindow = new google.maps.InfoWindow({content:'<strong>Biserica Vestea Buna</strong><br>Bucuresti<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
				</script>
                </div>
                La adresa se poate ajunge cu metroul pana la Piata Unirii si de acolo tramvaiul 40 sau 56 cu capatul la Sfanta Vineri.
                </div>


		
			<div class="container1">
            <div class="form-container">
                <h1>
                    Ne poti scrie!
                </h1>
                <form method="post" id="reused_form" >
                    <label for="name">Numele:</label>
                    <input id="name" type="text" name="Name" required maxlength="50">
                    <label for="email">Adresa Email:</label>
                    <input id="email" type="email" name="Email" required maxlength="50">
                    <label for="message">Mesajul:</label>
                    <textarea id="message" name="Message" rows="10" maxlength="6000" required></textarea>
                    <button id ="button" class="button-primary" type="submit" >Trimite</button>
                </form>
                <div id="success_message" style="display:none">
                    <h3>Mesaj trimis!</h3> 
                    <p> Revenim cu un raspuns cat de curand posibil. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Eroare!</h3> Eroare de trimitere a mesajului. </div>
            </div>
        </div>

	
        </div>
    </section>
