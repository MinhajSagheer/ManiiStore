<?php
include_once("./admin/config.php");

// getting unique categories 
function get_unique_categories()
{
    global $config;
    // condition to check isset or not 
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];

        $select_query = "Select * from `products` where p_category='$category_id'";
        $result_query = mysqli_query($config, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['p_id'];
            $product_name = $row['p_name'];
            $product_price = $row['p_price'];
            $product_p_image = $row['p_image'];
            $product_category = $row['p_category'];
            $product_details = $row['p_details'];

            echo "<div class='col-xl-4 col-lg-6 col-md-6 col-sm-6 pb-2 cate'>
            <div class='properties pb-30'>
                <div class='properties-card'>
                    <div class='properties-img image-container'>
                        <a href='detail?detail_id=$product_id'><img style='height:auto; width:100%;'  class='responsive-image' src='./admin/$product_p_image' alt='Image'></a>
                        <div class='socal_icon'>
                        <a href='cart?product_id=$product_id'><i class='ti-shopping-cart'></i></a>
                            <a href='wishlist?wish_id=$product_id'><i class='ti-heart'></i></a>
                            <a href='detail?detail_id=$product_id'><i class='ti-zoom-in'></i></a>
                        </div>
                    </div>
                    <div class='properties-caption properties-caption2'>
                        <h3><a href='detail?detail_id=$product_id'>$product_name</a></h3>
                        <div class='properties-footer'>
                            <div class='price'>
                            <span>$product_price rs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        }
    }
}

// display all products in index.php Page
function allProducts()
{
    global $config;
    $select_product = "SELECT * FROM products WHERE p_category <> 'Featured Product' ORDER BY p_id DESC";

    $result_product = mysqli_query($config, $select_product);
    while ($row = mysqli_fetch_assoc($result_product)) {
        $product_id = $row['p_id'];
        $product_name = $row['p_name'];
        $product_price = $row['p_price'];
        $product_p_image = $row['p_image'];
        $product_category = $row['p_category'];
        $product_details = $row['p_details'];

        echo "<div class='properties pb-30'>
        <div class='properties-card'>
            <div class='properties-img image-container'>
                <a href='detail?detail_id=$product_id'><img src='./admin/$product_p_image' alt='Image'></a>
                <div class='socal_icon'>
                    <a href='cart?product_id=$product_id'><i class='ti-shopping-cart'></i></a>
                    <a href='wishlist?wish_id=$product_id'><i class='ti-heart'></i></a>
                    <a href='detail?detail_id=$product_id'><i class='ti-zoom-in'></i></a>
                </div>
            </div>
            <div class='properties-caption properties-caption2'>
                <h3><a href='detail?detail_id=$product_id'>$product_name</a></h3>
                <div class='properties-footer'>
                    <div class='price'>
                    <span>$product_price rs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }
}



function featured()
{
    global $config;
    $select_product = "SELECT * FROM products WHERE p_category = 'Featured Product' ORDER BY p_id DESC";
    $result_product = mysqli_query($config, $select_product);
    while ($row = mysqli_fetch_assoc($result_product)) {
        $product_id = $row['p_id'];
        $product_name = $row['p_name'];
        $product_price = $row['p_price'];
        $product_p_image = $row['p_image'];
        $product_category = $row['p_category'];
        $product_details = $row['p_details'];

        echo "<div class='properties pb-30'>
        <div class='properties-card'>
            <div class='properties-img image-container'>
                <a href='detail?detail_id=$product_id'><img src='./admin/$product_p_image' alt='Image'></a>
                <div class='socal_icon'>
                    <a href='cart?product_id=$product_id'><i class='ti-shopping-cart'></i></a>
                    <a href='wishlist?wish_id=$product_id'><i class='ti-heart'></i></a>
                    <a href='detail?detail_id=$product_id'><i class='ti-zoom-in'></i></a>
                </div>
            </div>
            <div class='properties-caption properties-caption2'>
                <h3><a href='detail?detail_id=$product_id'>$product_name</a></h3>
                <div class='properties-footer'>
                    <div class='price'>
                    <span>$product_price rs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }
}




function health()
{
    global $config;
    $select_product = "SELECT * FROM products WHERE p_category = 'Health Care Product' ORDER BY p_id DESC";
    $result_product = mysqli_query($config, $select_product);
    while ($row = mysqli_fetch_assoc($result_product)) {
        $product_id = $row['p_id'];
        $product_name = $row['p_name'];
        $product_price = $row['p_price'];
        $product_p_image = $row['p_image'];
        $product_category = $row['p_category'];
        $product_details = $row['p_details'];

        // Extracting first 15 words from product details
        $short_details = implode(' ', array_slice(str_word_count($product_details, 1), 0, 15));

        echo "<div class='properties pb-30'>
        <div class='properties-card'>
            <div class='properties-img image-container'>
                <a href='detail?detail_id=$product_id'><img src='./admin/$product_p_image' alt='Image'></a>
                <div class='socal_icon'>
                    <a href='cart?product_id=$product_id'><i class='ti-shopping-cart'></i></a>
                    <a href='wishlist?wish_id=$product_id'><i class='ti-heart'></i></a>
                    <a href='detail?detail_id=$product_id'><i class='ti-zoom-in'></i></a>
                </div>
            </div>
            <div class='properties-caption properties-caption2'>
            <h3><a href='detail?detail_id=$product_id'>$product_name</a></h3>
                <p>$short_details <a href='detail?detail_id=$product_id' class='read-more' style='color:red;'>Read More</a></p>
                <div class='properties-footer'>
                    <div class='price'>
                        <span>$product_price rs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }
}
