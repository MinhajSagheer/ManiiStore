<?php
include_once("header.php");
?>
<main class="login-bg">
    <div class="login-form-area">
        <div class="login-form">
            <div class="login-heading">
                <span>Login</span>
                <p>Enter Login details to get access</p>
            </div>

            <div class="input-box">
                <div class="single-input-fields">
                    <label> Email Address</label>
                    <input type="text" id="loginEmail" placeholder="Email address">
                </div>
                <div class="single-input-fields">
                    <label>Password</label>
                    <input type="password" id="loginPassword" placeholder="Enter Password">
                </div>
                <div class="single-input-fields login-check">
                    <input type="checkbox" id="fruit1" name="keep-log">
                    <label for="fruit1">Keep me logged in</label>
                    <a href="#" class="f-right">Forgot Password?</a>
                </div>
            </div>



            <div class="login-footer">
                <p>Don’t have an account? <a href="signup">Sign Up</a> here</p>
                <button class="submit-btn3" id="LoginBtn">Login</button>
            </div>
        </div>
    </div>

</main>


<script>
$(document).ready(function() {
    $("#LoginBtn").click(function() {
        // Get user input values
        var loginEmail = $('#loginEmail').val();
        var loginPassword = $('#loginPassword').val();

        // Validate input (basic validation)
        if (!loginEmail || !loginPassword) {
            alert("Both fields are required");
            return;
        }

        // Ajax request
        $.ajax({
            type: 'POST',
            url: 'logic.php', // Replace with your server-side script
            data: {
                loginEmail: loginEmail,
                loginPassword: loginPassword
            },
            success: function(response) {
                // Handle the response from the server
                alert(response); // Display the status message

                if (response.trim() === "login successful") {
                    window.location.href = 'index.php'; // Redirect to the user page
                } else if (response.trim() === "Admin login successful") {
                    window.location.href =
                        'admin/index.php'; // Redirect to the admin page
                } else {
                    // Handle other scenarios if needed
                }

                // Optionally, you may clear the login form fields here
                $('#loginEmail').val('');
                $('#loginPassword').val('');
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    });
});
</script>


<?php
include("footer.php");
?>