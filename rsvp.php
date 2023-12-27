<?php include('templates/header.php')?>

<!--Main Content Start -->
		<main>
            <h2>RSVP</h2>
            <p>
            Hello guests! This is the RSVP page for our wedding! 
            Here, you can let us know whether you'll be there to celebrate with us, how many guests you'll bring and what you'd like for dinner.
            </p>
            <form method="post" class="RSVPform">
            <!-- Create RSVP form -->
            <!-- Questions to ask: Name (for seating chart), number food preference, info/comments, email for confirmation -->
                <label for="guest">Name:</label>
                <input type="text" id="guest" name="guest" placeholder="Zaneera den Boer" required autofocus>
                <br><br>

                <label for="food">What would you like to eat?</label>
                <select id="food" name="food" required>
                    <option value="meat">Meat</option>
                    <option value="fish">Fish</option>
                    <option value="veg">Vegetarian</option>
                    <option value="other">Other</option>
                </select>
                <br><br>

                <textarea name="message" id="message" cols=50 rows=3 
                placeholder="Please let us know if you have any allergy info or other dietary requests and we'll do our best to accommodate you!"></textarea>
                <br><br>

                <label for="email">Enter your email address if you want receive a copy/confirmation of this form:</label>
                <input type="email" id="email" name="email" placeholder="zaneera.den@boer.nl">
                <br><br>
                <input type="submit">
            </form>
        </main>
	</div>
<!--Main Content Start -->
<?php include('templates/footer.php');?>