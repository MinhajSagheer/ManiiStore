<?php
session_start();
include("admin/config.php");

if (isset($_SESSION['userDetails'])) {
    $userId = $_SESSION['userDetails']['user_id'];

    if (isset($_GET['product_id'])) {
        $productId = $_GET['product_id'];

        // Delete the item from the cart_data table
        $deleteQuery = "DELETE FROM cart_data WHERE user_id = '$userId' AND product_id = '$productId'";
        $deleteResult = mysqli_query($config, $deleteQuery);

        if ($deleteResult) {
            header("Location: cart.php"); // Redirect back to the cart page after deletion
            exit();
        } else {
            die("Error deleting item from cart_data: " . mysqli_error($config));
        }
    }
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: sign-in.php");
    exit();
}


if (isset($_SESSION['userDetails'])) {
    $userId = $_SESSION['userDetails']['user_id'];
    $selectCartQuery = "SELECT COUNT(*) AS product_count FROM cart_data WHERE user_id = '$userId'";
    $cartResult = mysqli_query($config, $selectCartQuery);
    $cartRow = mysqli_fetch_assoc($cartResult);
    $productCount = $cartRow['product_count'];
    echo $productCount;
} else {
    echo '0';
}
?>
