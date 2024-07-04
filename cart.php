<?php
session_start();
include("header.php");
?>
<!-- <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>

</div>
</header>
<main> -->

<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Cart</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Cart</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive " style="width: 100%; overflow-x: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <?php
echo "<tbody>";

// Check if product_id is set in the URL
include("admin/config.php");

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Retrieve the product details
    $selectQuery = "SELECT * FROM products WHERE p_id = '$productId'";
    $result = mysqli_query($config, $selectQuery);

    // Check for query execution and fetch product details
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $imagePath = 'admin/' . $row['p_image'];
            $productName = $row['p_name'];
            $price = $row['p_price'];
            $category = $row['p_category'];

            // Check if the user is logged in
            if (isset($_SESSION['userDetails'])) {
                $userId = $_SESSION['userDetails']['user_id'];
                $existingProductQuery = "SELECT * FROM cart_data WHERE user_id = '$userId' AND product_id = '$productId'";
                $existingProductResult = mysqli_query($config, $existingProductQuery);

                // Check for query execution and if the product already exists in the cart
                if ($existingProductResult) {
                    if (mysqli_num_rows($existingProductResult) == 0) {
                        // Insert product into cart_data table
                        $insertQuery = "INSERT INTO cart_data (user_id, product_id, product_name, product_image, price, product_category) 
                                        VALUES ('$userId', '$productId', '$productName', '$imagePath', '$price', '$category')";
                        $insertResult = mysqli_query($config, $insertQuery);

                        // Check for query execution
                        if (!$insertResult) {
                            die("Error inserting product into cart_data: " . mysqli_error($config));
                        }
                    }
                } else {
                    die("Error executing existing product query: " . mysqli_error($config));
                }
            }
        } else {
            echo "<tr><td colspan='4'><p>No product found.</p></td></tr>";
        }
    } else {
        die("Error executing product details query: " . mysqli_error($config));
    }
}

// Display products in the cart for the logged-in user
if (isset($_SESSION['userDetails'])) {
    $userId = $_SESSION['userDetails']['user_id'];
    $selectCartQuery = "SELECT * FROM cart_data WHERE user_id = '$userId'";
    $cartResult = mysqli_query($config, $selectCartQuery);
    $subtotal = 0; // Variable to store the subtotal
    $productCount = 0; // Variable to store the product count

    while ($cartRow = mysqli_fetch_assoc($cartResult)) {
        // Retrieve cart data
        $cartProductName = $cartRow['product_name'];
        $cartPrice = $cartRow['price'];
        $cartImage = $cartRow['product_image'];
        $cartProductId = $cartRow['product_id'];

        // Calculate the subtotal for each product
        $quantity = 1; // Assuming the quantity is always 1 in this example
        $productSubtotal = $cartPrice * $quantity;
        $subtotal += $productSubtotal; // Add the product subtotal to the overall subtotal
        $productCount++; // Increment the product count

        // Display product details
        echo "<tr>";
        echo "<td>";
        echo "<div class=\"media\">";
        echo "<div class=\"d-flex\">";
        echo "<img src=\"$cartImage\" alt=\"$cartProductName\">";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "<td class=\"media-body\">";
        echo "<p>$cartProductName</p>";
        echo "</td>";
        echo "<td>";
        echo "<h5>$productSubtotal</h5>";
        echo "</td>";
        echo "<td>";
        $currentQuantity = isset($_POST['prod_quan'][$cartProductId]) ? intval($_POST['prod_quan'][$cartProductId]) : 1;
        echo "<input class='quantity-input' name='prod_quan[$cartProductId]' type='number' value='$currentQuantity'>";
        echo "</td>";
        


        
        echo "<td>";
        echo "<h5><a href='delete.cartItem.php?product_id=$cartProductId'>Delete</a></h5>";
        echo "</td>";
        echo "</tr>";
    }

    // Check if there are no items in the cart
    if ($productCount === 0) {
        echo "<tr><td colspan='4'><h3>There are no items in your cart. <a href='home.php'>Continue Shopping</a></h3></td></tr>";
    }

    // Display subtotal and shipping details
    echo "<tr class=\"bottom_button\">";
    echo "<td><a class=\"btn\" href=\"#\">Update Cart</a></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><h5>Subtotal</h5></td>";
    echo "<td><h5>$subtotal</h5></td>";
    echo "</tr>";
    echo "<tr class=\"shipping_area\">";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><h5>Shipping</h5></td>";
    echo "<td>";
    echo "<div class=\"shipping_box\">";
    echo "<ul class=\"list\">";
    echo "<li>100</li>";
    // ... (continue with the rest of the code)
    echo "</ul>";
    echo "</div>";
    echo "</td>";
    echo "</tr>";
} else {
    // Display a message if the user is not logged in
    echo "<tr><td colspan='4'><h3><a href='sign-in'>Please log in to view your Carts.</a></h3></td></tr>";
}

echo "</tbody>";
?>

                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn" href="index">Continue Shopping</a>
                    <a class="btn checkout_btn" href="checkout.php">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<!-- //// -->


<main class="login-bg" style="padding-bottom:900px;">

    <div class="register-form-area">
        <div class="register-form text-center">

            <div class="register-heading">
                <span>PROCEED TO PLACE THE ORDERS</span>
            </div>

            <div class="input-box">
                <div class="single-input-fields">
                    <label>Full Name</label>
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
                    <label>City</label>
                    <select id="city" name="city">
                        <option value="city1">City 1</option>
                        <option value="city2">City 2</option>
                        <!-- Add more cities as needed -->
                    </select>
                </div>
                <div class="single-input-fields">
                    <label>Address</label>
                    <input type="text" id="address" placeholder="Enter address">
                </div>
            </div>

            <div class="register-footer">
                <button id="OrderBtn" class="submit-btn3" name="orderSubmit" onclick="submitForm()">Order</button>

            </div>
        </div>
    </div>


</main>

<script src="js/jquery-1.12.4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // Event listener for quantity input fields
    $('.quantity-input').on('input', function() {
        var currentValue = $(this).val();
        $(this).val(currentValue); // Ensure the value is updated
    });

    // Event listener for order button
    $("#OrderBtn").click(function() {
        var fullname = $('#fullname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var city = $('#city').val();
        var address = $('#address').val();

        // Validate email using a regular expression pattern
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Invalid email address");
            return;
        }

        // Collect quantity data
        var quantities = {};
        $('.quantity-input').each(function() {
            var productId = $(this).attr('name').match(/\[(.*?)\]/)[1];
            var quantity = $(this).val();
            quantities[productId] = quantity;
        });

        // Ajax request
        $.ajax({
            type: 'POST',
            url: 'logic.php',
            data: {
                orderSubmit: 1,
                fullname: fullname,
                email: email,
                phone: phone,
                city: city,
                address: address,
                prod_quan: quantities // Include quantities in the data
            },
            success: function(response) {
                alert(response); // Handle the response as needed
                if (response.trim() === "Order placed successfully") {
                    window.location.href = 'cart.php'; // Redirect to a thank-you page
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>



<?php
include("footer.php");
?>