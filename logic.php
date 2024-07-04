<?php
session_start();

include("admin/config.php");



if (isset($_POST['SignUpBtn'])) {
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';

    // Validate and sanitize data
    $fullname = mysqli_real_escape_string($config, $fullname);
    $email = mysqli_real_escape_string($config, $email);
    $phone = mysqli_real_escape_string($config, $phone);
    $password = mysqli_real_escape_string($config, $password);
    $image = mysqli_real_escape_string($config, $image);

    // Validate if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit();
    }

    // Hash the password (improve security)
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $uploaddirectory = 'uploads/';
    $b_titleimage = $_FILES['image'];
    $imageName = $b_titleimage['name'];
    $tempImage = $b_titleimage['tmp_name'];
    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if (!in_array($imageExtension, $allowedExtensions)) {
        echo "<script>alert('Wrong file extension. Only JPG, JPEG, and PNG files are allowed.'); window.location.href='index';</script>";
        exit();
    }

    $uploadedImage = $uploaddirectory . $imageName;
    move_uploaded_file($tempImage, $uploadedImage);

    // Perform database insertion
    $sql = "INSERT INTO user_details (name, email, phone_no, image, pass, conf_pass) VALUES ('$fullname', '$email', '$phone', '$uploadedImage', '$password', '$confirmPassword')";

    if ($config->query($sql) === TRUE) {
        // Retrieve the user ID after insertion
        $userId = mysqli_insert_id($config);

        $_SESSION['userDetails'] = [
            'user_id' => $userId,
            'email' => $email,
            'fullname' => $fullname,
            'phone_no' => $phone,
            'image' => $uploadedImage,
            'pass' => $password,
            'conf_pass' => $confirmPassword
        ];


        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $config->error;
    }
}



////////////login ////////////////


if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
    // Login Logic
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    // Validate and sanitize data
    $loginEmail = mysqli_real_escape_string($config, $loginEmail);
    $loginPassword = mysqli_real_escape_string($config, $loginPassword);

    // Query to check if the user exists with the provided email in user_details
    $userQuery = "SELECT * FROM user_details WHERE email = '$loginEmail'";
    $userResult = $config->query($userQuery);

    // Query to check if the user exists with the provided email in admin_details
    $adminQuery = "SELECT * FROM admin_details WHERE admin_email = '$loginEmail'";
    $adminResult = $config->query($adminQuery);

    if ($userResult->num_rows > 0) {
        // User found in user_details table
        $row = $userResult->fetch_assoc();
        // $hashedPassword = $row['pass'];

// Verify the password
if ($loginPassword) {
    // Check if the entered password matches the one in the database
    if ($loginPassword === $row['pass']) {
        // Set user details in session
        $_SESSION['userDetails'] = array(
            'user_id' => $row['user_id'],
            'fullname' => $row['name'],
            'phone_no' => $row['phone_no'],
            'image' => $row['image'],
            'pass' => $row['pass'],
            'conf_pass' => $row['conf_pass'],                
            'email' => $row['email']
            // Add more details as needed
        );

        echo "login successful"; // Indicate login type
    } else {
        echo "Incorrect password";
    }
} else {
    echo "Invalid password"; // Handle the case where the password is empty
}


    } elseif ($adminResult->num_rows > 0) {
        // User found in admin_details table (admin login)
        $adminRow = $adminResult->fetch_assoc();
        $adminStoredPassword = $adminRow['admin_pass'];

        // Check the password without using password_verify
        if ($loginPassword === $adminStoredPassword) {
            // Set admin details in session
            $_SESSION['adminLoggedIn'] = true;

            echo "Admin login successful"; // Indicate login type
        } else {
            echo "Incorrect password for admin";
        }
    } else {
        echo "User not found";
    }
} else {
    // echo "Invalid request"; // Handle invalid requests
}








/////////order/////////////////



if (isset($_POST['orderSubmit'])) {
    // Retrieve form data
    $fullname = mysqli_real_escape_string($config, $_POST['fullname']);
    $email = mysqli_real_escape_string($config, $_POST['email']);
    $phone = mysqli_real_escape_string($config, $_POST['phone']);
    $city = mysqli_real_escape_string($config, $_POST['city']);
    $address = mysqli_real_escape_string($config, $_POST['address']);

    

    // Validate form data as needed

    // Check if the user is logged in
    if (isset($_SESSION['userDetails'])) {
        $userId = $_SESSION['userDetails']['user_id'];

        // Insert order data into user_order table
        $insertOrderQuery = "INSERT INTO user_order (user_id, fname, lname, city, address, phone_no, user_email)
                             VALUES ('$userId', '$fullname', '', '$city', '$address', '$phone', '$email')";

        if (mysqli_query($config, $insertOrderQuery)) {
            $userOrderId = mysqli_insert_id($config);

            // Retrieve cart data for the logged-in user
            $selectCartQuery = "SELECT * FROM cart_data WHERE user_id = '$userId'";
            $cartResult = mysqli_query($config, $selectCartQuery);

            while ($cartRow = mysqli_fetch_assoc($cartResult)) {
                // Retrieve cart data
                $cartProductId = $cartRow['product_id'];
                // $quantity = 1; // Assuming quantity is 1 in this example
                $cartProductId = $cartRow['product_id'];
                $quantity = isset($_POST['prod_quan'][$cartProductId]) ? intval($_POST['prod_quan'][$cartProductId]) : 1;


                // Insert cart data into orders table
                $insertOrderProductQuery = "INSERT INTO orders (user_id, product_id, product_name, product_price, product_image, product_category, product_quantity)
                                VALUES ('$userId', '$cartProductId', '{$cartRow['product_name']}', '{$cartRow['price']}', '{$cartRow['product_image']}', '{$cartRow['product_category']}', '$quantity')";
    mysqli_query($config, $insertOrderProductQuery);

            }

            // Clear the cart data for the logged-in user
            $clearCartQuery = "DELETE FROM cart_data WHERE user_id = '$userId'";
            mysqli_query($config, $clearCartQuery);

            echo "Order placed successfully";
        } else {
            echo "Error inserting order data: " . mysqli_error($config);
        }
    } else {
        echo "User not logged in";
    }
}







////////////// USER UPDATE /////////////