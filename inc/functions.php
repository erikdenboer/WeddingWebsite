<?php
function RSVPpassword() {
    /**
     * This function creates a password-only login field.
     * 
     * Returns:
     * string: The HTML code for the password-only login popup.
     */
    
    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the password is correct
        $password = $_POST['password'];
        if ($password === 'your_password_here') {
            // Password is correct, perform login logic here
            return 'Login successful!';
        } else {
            // Password is incorrect, show error message
            return 'Incorrect password. Are you sure you\'re invited?';
        }
    }
    
    // Return the HTML code for the password-only login popup
    return '
        <form method="POST" action="">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
        </form>
    ';
}