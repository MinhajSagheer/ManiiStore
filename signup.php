<?php
include_once("header.php");
?>

<main class="login-bg">

    <div class="register-form-area" >
        <div class="register-form text-center" >

            <div class="register-heading">
                <span>Sign Up</span>
                <p>Create your account to get full access</p>
            </div>
            <form >
                <div class="input-box">
                    <div class="single-input-fields">
                        <label>Full name</label>
                        <input type="text" id="fullname" placeholder="Enter full name">
                    </div>
                    <div class="single-input-fields">
                        <label>Email Address</label>
                        <input type="email" id="email" placeholder="Enter email address">
                    </div>
                    <div class="single-input-fields">
                        <label>Phone Number</label>
                        <input type="number" id="phone" placeholder="Enter phone number">
                    </div>
                    <div class="single-input-fields">
                        <label>Image</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="single-input-fields">
                        <label>Password</label>
                        <input type="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="single-input-fields">
                        <label>Confirm Password</label>
                        <input type="password" id="confirmPassword" placeholder="Confirm Password">
                    </div>
                </div>
            </form>

            <div class="register-footer">
                <p> Already have an account? <a href="login.html"> Login</a> here</p>
                <button id="SignUpBtn" class="submit-btn3" onclick="submitForm()">Sign Up</button>
            </div>
        </div>
    </div>

</main>

<div style="padding-bottom:300px;"></div>


<script>
    $(document).ready(function() {
        $("#SignUpBtn").click(function() {
            var formdata = new FormData();
            // Get user input values
            var fullname = $('#fullname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmPassword = $('#confirmPassword').val();
            var phone = $('#phone').val();
            var image = $('#image')[0].files[0]; // get the file object

            // Validate input (basic validation)
            if (!fullname || !email || !password || !confirmPassword) {
                alert("All fields are required");
                return;
            }

            // Validate email using a regular expression pattern
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Invalid email address");
                return;
            }

            // Validate if passwords match
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return;
            }

            // Append data to FormData object
            formdata.append('SignUpBtn', 1);
            formdata.append('fullname', fullname);
            formdata.append('email', email);
            formdata.append('password', password);
            formdata.append('confirmPassword', confirmPassword);
            formdata.append('phone', phone);
            formdata.append('image', image);

            // Ajax request
            $.ajax({
                type: 'POST',
                url: 'logic.php', // Replace with your server-side script
                data: formdata,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the response from the server
                    alert(response); // or perform other actions based on the response
                    if (response.trim() === "User registered successfully") {
                        window.location.href = 'index.php';
                        $('#fullname').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#confirmPassword').val('');
                        $('#phone').val('');
                        $('#image').val(''); // Clear the file input
                    } else {}
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error(xhr.responseText);
                }
            });
        });

        // Ajax request
        // $.ajax({
        //     type: 'POST',
        //     url: 'logic.php', // Replace with your server-side script
        //     data: {
        //         SignUpBtn: 1,
        //         fullname: fullname,
        //         email: email,
        //         password: password,
        //         confirmPassword: confirmPassword,
        //         phone: phone
        //     },
        //     success: function(response) {
        //         // Handle the response from the server
        //         alert(response); // or perform other actions based on the response
        //         if (response.trim() === "User registered successfully") {
        //             window.location.href = 'index.php';
        //             $('#fullname').val('');
        //             $('#email').val('');
        //             $('#password').val('');
        //             $('#confirmPassword').val('');
        //             $('#phone').val('');
        //         } else {}
        //     },
        //     error: function(xhr, status, error) {
        //         // Handle errors
        //         console.error(xhr.responseText);
        //     }
        // });
    });
</script>



<?php
include("footer.php");
?>