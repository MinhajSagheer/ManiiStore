<?php
session_start();
?>
<table class="table">
    <thead>
        <tr>
            <th class="cart-romove item">Remove</th>
            <th class="cart-description item">Image</th>
            <th class="cart-product-name item">Product Name</th>
            <th class="cart-sub-total item">Product Price</th>
        </tr>
    </thead><!-- /thead -->

    <tbody>
        <?php
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

                // Display the product data from the cart_data table for the logged-in user
                echo "<tr>";
                echo "<td class='romove-item'>";
                echo "<a href='logic.php?remove_product=$cartProductId' title='cancel' class='icon'>";
                echo "<i class='fa fa-trash-o'></i></a>";
                echo "</td>";
                echo "<td class='cart-image'>";
                echo "<a class='entry-thumbnail' href='detail.html'>";
                echo "<img src='$cartImage' alt='$cartProductName'>";
                echo "</a>";
                echo "</td>";
                echo "<td class='cart-product-name-info'>";
                echo "<h4 class='cart-product-description' style='text-align:center;'>";
                echo "<a href='detail.html'>$cartProductName</a>";
                echo "</h4>";
                echo "</td>";
                echo "<td class='cart-product-grand-total'><span class='cart-grand-total-price'>$productSubtotal</span></td>";
                echo "</tr>";
            }

            // Check if there are no items in the cart
            if ($productCount === 0) {
                echo "<tr>";
                echo "<td colspan='4'>";
                echo "<h3>There are no items in your cart. <a href='home.php'>Continue Shopping</a></h3>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            // Display a message if the user is not logged in
            echo "<tr>";
            echo "<td colspan='4'>";
            echo "<h3><a href='sign-in.php'>Please log in to view your Carts.</a></h3>";
            echo "</td>";
            echo "</tr>";
        }

        ?>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="4">
                <div class="shopping-cart-btn">
                    <span class="">
                        <a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                        <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                    </span>
                </div><!-- /.shopping-cart-btn -->
            </td>
        </tr>
    </tfoot>
</table><!-- /table -->