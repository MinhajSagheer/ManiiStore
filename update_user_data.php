<?php
session_start();
include("admin/config.php");

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $userId = $_POST['id'];
        $email = $_POST['user_email'];
        $name = $_POST['user_name'];
        $number = $_POST['user_number'];
        $password = $_POST['user_password'];
        $confirmPassword = $_POST['user_confirmpassword'];

        // Validate data
        if (empty($email) || empty($name) || empty($number)) {
            throw new Exception('Email, Name, and Phone Number are required fields.');
        }

        // Check if a new password is provided
        if (!empty($password) || !empty($confirmPassword)) {
            // Validate passwords
            if ($password !== $confirmPassword) {
                throw new Exception('Passwords do not match.');
            }

            // Hash the new password
            // $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            // If passwords are not provided, keep the existing hashed password
            $password = $_SESSION['user_pass'];
        }

        // Check if a new image file has been uploaded
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["user_image"]["name"]);

        if ($_FILES['user_image']['error'] == 0) {
            if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $targetFile)) {
                $imagePath = $targetFile;
            } else {
                throw new Exception('Error uploading image.');
            }
        } else {
            // Keep the existing image if no new file is uploaded
            $imagePath = $_SESSION['userDetails']['image'];
        }

        // Update user data in the database
        $updateQuery = "UPDATE user_details SET email=?, name=?, phone_no=?, pass=?, image=?, conf_pass=? WHERE user_id=?";
        $stmt = $config->prepare($updateQuery);
        $stmt->bind_param("ssssssi", $email, $name, $number, $password, $imagePath, $confirmPassword, $userId);

        if ($stmt->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'User data updated successfully.';
            $response['user'] = array(
                'user_email' => $email,
                'user_name' => $name,
                'user_number' => $number,
                'image' => $imagePath,
                'user_password' => $password,
                'user_confirmpassword' => $confirmPassword
            );

            // Update session data with the edited values
            $_SESSION["userDetails"]["email"] = $email;
            $_SESSION["userDetails"]["fullname"] = $name;
            $_SESSION["userDetails"]["phone_no"] = $number;
            $_SESSION["userDetails"]["image"] = $imagePath;
            $_SESSION["userDetails"]["pass"] = $password;
            $_SESSION["userDetails"]["conf_pass"] = $confirmPassword;

        } else {
            throw new Exception('Error updating user data: ' . $stmt->error);
        }

        $stmt->close();
        $config->close();

        echo json_encode($response);
    } catch (Exception $e) {
        $response['status'] = 'error';
        $response['message'] = 'Exception: ' . $e->getMessage();
        echo json_encode($response);
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
    echo json_encode($response);
}
// Example debugging statement
error_log('Reached point X in the script.');
?>
