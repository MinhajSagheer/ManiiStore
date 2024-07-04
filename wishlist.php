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
                                        <li class="breadcrumb-item"><a href="#">Wishlist</a></li>
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
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <?php
echo "<tbody>";

// Check if product_id is set in the URL
include("admin/config.php");

if (isset($_GET['wish_id'])) {
    $productId = $_GET['wish_id'];

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
                $existingProductQuery = "SELECT * FROM wishlist_data WHERE user_id = '$userId' AND product_id = '$productId'";
                $existingProductResult = mysqli_query($config, $existingProductQuery);

                // Check for query execution and if the product already exists in the cart
                if ($existingProductResult) {
                    if (mysqli_num_rows($existingProductResult) == 0) {
                        // Insert product into cart_data table
                        $insertQuery = "INSERT INTO wishlist_data (user_id, product_id, product_name, product_image, price, product_category) 
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
    $selectCartQuery = "SELECT * FROM wishlist_data WHERE user_id = '$userId'";
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
        echo "<h5><a href='logic.php?product_id=$cartProductId'>Delete</a></h5>";
        echo "</td>";
        echo "</tr>";
    }

} else {
    // Display a message if the user is not logged in
    echo "<tr><td colspan='4'><h3><a href='sign-in.php'>Please log in to view your Carts.</a></h3></td></tr>";
}


echo "</tbody>"
;
?>

                    </table>
                </div>
            </div>
        </div>
    </section>

</main>



<?php
include("footer.php");
?>