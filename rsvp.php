<?php include('inc/header.php')?>

<!--Main Content Start -->
<main>
    <div class='universal'>
        <h1>RSVP</h1>
        <p class='en'>
            Hello guests! This is the RSVP page for our wedding.
            Here, you can let us know whether you'll be there to celebrate with us, how many guests you'll bring and what you'd like for dinner.
        </p>
        <p class = 'nl'>
            Hallo gasten! Dit is de RSVP-pagina voor onze bruiloft. 
            Hier kun je laten weten of je onze bruiloft mee komt vieren, met hoeveel je komt en wat je graag wil eten.
        </p>
    </div>
    <div class='universal'>
        <form method="post" class="RSVPform" action="action_page.php">
        <!-- Create RSVP form -->
        <!-- Questions to ask: number of guests, name, food preference, info/comments, email for confirmation -->
            <div>
                <label for="rsvp">Will you be joining us? Ben je erbij?<br></label>
                <select id="rsvp" name="rsvp" onchange="didTheySayYes()" required> <!-- Function didTheySayYes() triggers follow-up questions as needed -->
                    <option value="null"></option>
                    <option value="1">Yes, I/we will be there! - Ik ben/wij zijn van de partij!</option>
                    <option value="0">Sorry, I/we can't make it... - Helaas, voor mij/ons lukt het helaas niet...</option>
                </select>
            </div>
            <div>
                <br>
                <label for="email">Enter your email address if you want receive a copy/confirmation of this form:<br>
                Voer hier je emailadres in als je een kopie/bevestiging van het ingevulde formulier wilt ontvangen:<br></label>
                <input type="email" id="email" name="email" placeholder="zaneera.den@boer.nl">
                <br><br>
                <input type="submit">
            </div>
        </form>
    </div>
</main>
<!--Main Content End -->

<?php include('inc/footer.php');?>
<script src='inc/scripts.js'></script>