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
        <h1>About the wedding</h1>
        <p>Hello dear guests! Here, you will find all manner of practical info about the wedding <!--couple, -->location and schedule. 
        If you have any further questions, please head over to the <a href="contact.php">Contact page</a> to find out who to ask and how to reach them.
        </p>
        
        <h3>RSVP</h3>
        <p>Please let us know if you'll join us on this festive day! Do this before 31 March by clicking on <a href=rsvp.php>this link</a>, then we'll make sure to save a seat for you. 
            Do you have any dietary restrictions or allergies? Please let us know with your RSVP.</p>

        <h3>Dresscode</h3>
        <p>The dresscode for our wedding is formal. This is an invitation for you to dress up! So think dresses for the women and a suit or nice trousers and a jacket for the men.</p>
        
        <h3>Speeches</h3>
        <p>Would you like to give a speech? We would love that! Please let Astrid know, she will reserve a moment for you in the planning of the day.</p>

        <h3>Unplugged wedding</h3>
        <p>We've hired a professional photographer to capture all special moments of this day. We would like you to enjoy it all, 
            so we ask you to keep your phone put away as much as possible during the whole day.</p>

        <h3>Gift tip</h3>
        <p>We would love to go on a honeymoon later this year. You would make us very happy with a contribution to make this trip even more special.</p>
        
        <h1>About the location</h1>
        <h3>Restaurant De Mof</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.514704099919!2d5.412400776202065!3d52.1067631667427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c645065216741f%3A0x618b5b19dd95bbd7!2sRestaurant%20De%20Mof!5e0!3m2!1sen!2sde!4v1706651816697!5m2!1sen!2sde" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        <h3>Recommended means of travel</h3>
        <p>Restaurant De Mof is easy to reach by car, situated 5-10 minutes by car from the highway A12, exit 22 towards Maarsbergen. There is plenty of free parking available on the terrain,
            making this one of the easiest ways of reaching the venue. It is also possible to come by train to Amersfoort Central Station and then transferring to bus 80 towards De Klomp/Leusden,
            which will drop you right outside the venue in about 20 minutes. However, note that the return bus runs only once an hour on Saturday evenings.
            For additional flexibility, or if you want a real taste of the Dutch way of life, it is possible to rent bikes at the train station, after which it's a 30-minute ride to the venue.
        </p>

        <h3>Hotels nearby</h3>
        <p>For those wishing to stay the night nearby, there are several options:
            <ul>
                <li><a href="https://www.hotelleusden.nl/">Van der Valk Hotel Amersfoort Leusden</a>
                - a well-known Dutch hotel chain. The happy couple will spend the wedding weekend in one of their hotels, actually!</li>
                <li><a href="https://www.fletcherhotelamersfoort.nl/en/">Fletcher Hotel-Restaurant Amersfoort</a>
                - a bit cheaper than the Van der Valk hotels, but a solid choice if you just want a good room for a good price.</li>
                <li><a href="https://www.europarcs.com/holiday-parks/the-netherlands/utrecht/de-utrechtse-heuvelrug">Europarcs De Utrechtse Heuvelrug</a>
                - rent a chalet in a rural location. Perfect for groups or those who prefer the Dutch countryside over a regular hotel.</li>
                <li>There are also several small, mostly family-run B&B's in rural settings nearby, such as 
                <a href="https://www.maarsbergseschuurtje.nl/">'t Maarsbergse Schuurtje'</a>.</li>
            </ul>
            Unable to find something you like? Contact the groom, or just call Restaurant De Mof - they certainly know which places close by are worth checking out!</p>

        <h1>About the schedule</h1>
        <p>
        <!--Create table for the schedule: -->
            <table>
                <tr>
                    <th>Time</th>
                    <th>Activity</th>
                </tr>
                <tr>
                    <td>13:00</td>
                    <td>Reception of guests</td>
                </tr>
                <tr>
                    <td>14:00</td>
                    <td>Wedding ceremony</td>
                </tr>
                <tr>
                    <td>23:00</td>
                    <td>Estimated end of day</td>
                </tr>
            </table>
        </p>
    </div>
<!--About end-->

<!--Contact start-->
    <div id='contact'>
        <h1>Contact</h1>
            <p>In case you have any questions before the wedding day, you can contact the bride or groom:
                <ul>
                    <li>Zaneera: +49 176 3746 8188</li>
                    <li>Erik: +49 172 169 9067</li>
                </ul>
            </p>
            
        <h2>Wedding coordinator</h2>
        <p>Wedding planner Astrid is our professional wedding coordinator. She is in charge of the programme during the day. 
        If you have any requests, please contact her <a href="mailto:astrid@mooistemomentweddings.nl">by email</a>. Make sure to mention it concerns our wedding. 
        If anything comes up during the day, she's also your first point of contact.</p>
    </div>
<!--Contact end -->

<!--RSVP start -->
    <div id='rsvp'>
        <h1>RSVP</h1>
        <p>Hello guests! This is the RSVP page for our wedding. 
            Here, you can let us know whether you'll be there to celebrate with us, how many guests you'll bring and what you'd like for dinner.
        </p>
        <form method="post" class="RSVPform" action="action_page.php">
        <!-- Create RSVP form -->
        <!-- Questions to ask: number of guests, name, food preference, info/comments, email for confirmation -->
            <div>
                <label for="rsvp">Will you be joining us?</label>
                <select id="rsvp" name="rsvp" onchange="didTheySayYes()" required> <!-- Function didTheySayYes() triggers follow-up questions as needed -->
                    <option value="null"></option>
                    <option value="1">Yes, I/we will be there!</option>
                    <option value="0">Sorry, I/we can't make it...</option>
                </select>
            </div>
            <div>
                <br>
                <label for="email">Enter your email address if you want receive a copy/confirmation of this form:<br></label>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src='inc/scripts_en.js'></script>