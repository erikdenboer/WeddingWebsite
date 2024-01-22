<?php include('templates/header.php')?>

<!--Main Content Start -->
		<main>
            <h2>RSVP</h2>
            <p>
            Hello guests! This is the RSVP page for our wedding! 
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
                    <label for="email">Enter your email address if you want receive a copy/confirmation of this form:</label>
                    <input type="email" id="email" name="email" placeholder="zaneera.den@boer.nl">
                    <br><br>
                    <input type="submit">
                </div>
            </form>
        </main>
	</div>
<!--Main Content End -->

<?php include('templates/footer.php');?>
<script src='inc/scripts.js'></script>