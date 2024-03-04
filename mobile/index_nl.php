<?php include('inc/header.php')?>

<!--Main Content Start -->
<main>
<!--Home start-->
    <div id="home">
        <!-- /used to add the background image, which is done in style.css rather than here -->
    </div>
<!--Home end-->

<!--About start-->
    <div id='about'>
        <h1>Info</h1>
        <p>Hallo lieve gasten! Hier kunnen jullie allerlei praktische informatie vinden over de bruiloft, zoals de locatie en planning. 
            Mochten er toch nog vragen zijn, kijk even op de <a href="contact.php">Contactpagina</a> om te zien bij wie je het beste kunt zijn daarvoor.</p>
        
        <h3>RSVP</h3>
        <p>Laat ons alsjeblieft weten of je/jullie erbij kunnen zijn op onze grote dag! Geef dit door via de <a href=rsvp.php>RSVP-pagina</a> voor 31 maart, 
        zodat we kunnen zorgen dat er voor iedereen plek is. Heb je dieetwensen of allergieën? Laat het ons weten bij jouw RSVP.</p>

        <h3>Dresscode</h3>
        <p>De dresscode voor de bruiloft is formeel. Dat betekent dat we je graag in je beste outfit zien! Denk aan een mooie jurk voor de dames en een pantalon of een pak voor de heren.</p>
        
        <h3>Speeches</h3>
        <p>Tijdens het diner is er gelegenheid voor speech. Ben je dit van plan, laat dit aan Astrid weten. Dan houdt zij een plekje voor je vrij in de planning.</p>

        <h3>Unplugged wedding</h3>
        <p>Wij hebben een professionele fotograaf ingehuurd om alle bijzondere momenten van deze dag vast te leggen. 
            Wij willen graag dat jij er volop van kan genieten, daarom vragen wij je jouw telefoon de hele dag zoveel mogelijk opgeborgen te houden.</p>

        <h3>Cadeautip</h3>
        <p>Wij willen graag later dit jaar op huwelijksreis. Je maakt ons heel blij met een bijdrage om deze reis nog specialer te maken.</p>
    </div>
        
    <div id='venue'>
        <h1>Over de locatie</h1>

        <h3>Restaurant De Mof</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.514704099919!2d5.412400776202065!3d52.1067631667427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c645065216741f%3A0x618b5b19dd95bbd7!2sRestaurant%20De%20Mof!5e0!3m2!1sen!2sde!4v1706651816697!5m2!1sen!2sde" 
            width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <h3>Aanreisopties</h3>
        <p>Restaurant De Mof is per auto goed te bereiken, gelegen op 5-10 minuten van de A12, afslag 22 (Maarsbergen). Er zijn voldoende gratis parkeerplekken bij het restaurant beschikbaar,
            dus dit is een van de makkelijkste manieren om te komen. Ook kun je per trein naar Amersfoort CS reizen en dan bus 80 (ri. De Klomp via Leusden) nemen, 
            dan ben je in 20 minuten ook op de locatie. Let daarbij wel op dat deze buslijn zaterdagavond slechts 1x per uur rijdt! 
            Voor meer flexibiliteit kun je natuurlijk ook een OV-fiets huren op Amersfoort CS.
        </p>

        <h3>Hotels in de buurt</h3>
        <p>Mocht je graag dichtbij overnachten, dan zijn er ook genoeg opties:
            <ul>
                <li><a href="https://www.hotelleusden.nl/">Van der Valk Hotel Amersfoort Leusden</a></li>
                <li><a href="https://www.fletcherhotelamersfoort.nl/en/">Fletcher Hotel-Restaurant Amersfoort</a></li>
                <li><a href="https://www.europarcs.com/holiday-parks/the-netherlands/utrecht/de-utrechtse-heuvelrug">Europarcs De Utrechtse Heuvelrug</a></li>
                <li>Er zijn ook meerdere kleine B&B's in de buurt, zoals bijvoorbeeld <a href="https://www.maarsbergseschuurtje.nl/">'t Maarsbergse Schuurtje'</a>.</li>
            </ul>
        </p>
    </div>

    <div id='planning'>
        <h1>Planning</h1>
        <p>
        <!--Create table for the schedule: -->
            <table>
                <tr>
                    <th>Tijd</th>
                    <th>Activiteit</th>
                </tr>
                <tr>
                    <td>13:00</td>
                    <td>Ontvangst gasten</td>
                </tr>
                <tr>
                    <td>14:00</td>
                    <td>Trouwceremonie</td>
                </tr>
                <tr>
                    <td>23:00</td>
                    <td>Geschatte eindtijd</td>
                </tr>
            </table>
        </p>
    </div>
<!--About end-->

<!--Contact start-->
    <div id='contact'>
        <h1>Contact</h1>
        <p>In geval van vragen voor de dag van de bruiloft, kun je een berichtje sturen naar de bruid of bruidegom:
            <ul>
                <li>Zaneera: +49 176 3746 8188</li>
                <li>Erik: +49 172 169 9067</li>
            </ul>
        </p>
            
        <h2>Ceremoniemeester</h2>
        <p>Wedding planner Astrid is onze professionele ceremoniemeester. Zij is op de dag zelf de baas. 
        Mocht je vragen hebben, dan kun je haar het beste <a href="mailto:astrid@mooistemomentweddings.nl">emailen</a>. Geef dan wel even aan dat het om onze bruiloft gaat. 
        Ook op de bruiloft kun je haar natuurlijk altijd even aanspreken.</p>
    </div>
<!--Contact end -->

<!--RSVP start -->
    <div id='rsvp'>
        <h1>RSVP</h1>
        <p>Hallo gasten! Dit is de RSVP-pagina voor onze bruiloft. Hier kun je laten weten of je onze bruiloft mee komt vieren, met hoeveel je komt en wat je graag wil eten.</p>
        <form method="post" class="RSVPform" action="action_page.php">
        <!-- Create RSVP form -->
        <!-- Questions to ask: number of guests, name, food preference, info/comments, email for confirmation -->
            <div>
                <label for="rsvp">Ben je erbij?<br></label>
                <select id="rsvp" name="rsvp" onchange="didTheySayYes()" required> <!-- Function didTheySayYes() triggers follow-up questions as needed -->
                    <option value="null"></option>
                    <option value="1">Ik ben/wij zijn van de partij!</option>
                    <option value="0">Voor mij/ons lukt het helaas niet...</option>
                </select>
            </div>
            <div>
                <br>
                <label for="email">Voer hier je emailadres in als je een kopie/bevestiging van het ingevulde formulier wilt ontvangen:<br></label>
                <input type="email" id="email" name="email" placeholder="zaneera.den@boer.nl">
                <br><br>
                <input type="submit">
            </div>
        </form>
    </div>
<!--RSVP end -->        
</main>
<!--Main Content End -->
<?php include('inc/footer.php');?>
<script src='inc/scripts_nl.js'></script>