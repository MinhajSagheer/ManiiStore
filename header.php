<?php
/* 
|  
| JAZZCASH configuration 
| 
 */

define('JAZZCASH_MERCHANT_ID', 'MC74151');
define('JAZZCASH_PASSWORD', 'hcws948794');
define('JAZZCASH_INTEGERITY_SALT', '269vw93z5y');
// define('JAZZCASH_RETURN_URL', 'localhost\ministore\order_placed.php');
// Check if merchant information is provided
// if (!empty($merchantId) && !empty($password)) {
//     echo "Merchant information is provided. Proceed with integration.";
//     // Add your integration code here
// } else {
//     echo "Please ensure you have provided correct merchant information.";
//     // Add instructions for providing correct merchant information
// }

// define('JAZZCASH_CURRENCY_CODE', 'PKR');
// define('JAZZCASH_LANGUAGE', 'EN');
// define('JAZZCASH_API_VERSION_1', '1.1');
//define('JAZZCASH_API_VERSION_2', '2.0');

// define('JAZZCASH_HTTP_POST_URL', 'https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/');
define('BASE_URL', 'http://localhost/ministore/index'); 
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/mani.png">



    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.2/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.2.0/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.2/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/price_rangs.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script defer="" referrerpolicy="origin" src="js/s.js"></script> -->


    <style>
    @media (min-width: 1400px) and (max-width: 5000px) {

        .image-container img {

            width: 300px !important;
            height: 300px !important;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .container {
            max-width: 1320px !important;
        }

        .image-container img {
            width: 100% !important;
            height: 280px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {

        .image-container img {
            height: 300px !important;

        }
    }

    @media (min-width: 768px) and (max-width: 992px) {
        .container {
            max-width: 1100px !important;
        }

        .image-container img {
            height: 300px !important;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .container {
            max-width: 1300px !important;
        }

        .image-container img {
            height: 350px !important;
        }

        .min {
            position: relative;
            bottom: 30px;
        }
    }

    @media (max-width: 575px) {
        .min {
            position: relative;
            bottom: 30px;
        }

        .container {
            max-width: 1300px !important;
        }

        .image-container img {

            width: 100% !important;
            height: 450px !important;
        }
    }
    </style>
</head>

<body>

    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="images/mani.png" alt="loder">
                </div>
            </div>
        </div>
    </div> -->
    <main>
        <header>
            <div class="header-area ">

                <div class="header-top d-sm-block ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="header-info-left">
                                        <!-- <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul> -->
                                    </div>
                                    <div class="header-info-right d-flex">
                                        <ul class="order-list">
                                            <li><a href="wishlist">My Wishlist</a></li>
                                            <?php
                                        if (isset($_SESSION['userDetails']['user_id'])) {
                                            // If user is logged in, show the profile link and logout link
                                            echo '<li><a href="myprofile">Profile</a></li>';
                                        } else {
                                            // If user is not logged in, show the login link
                                            echo '<li><a href="login">login</a></li>';
                                        }
                                        ?>

                                            <!-- <li><a href="#">Track Your Order</a></li> -->
                                        </ul>
                                        <ul class="header-social">
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                                            <!-- <li> <a href="#"><i class="fab fa-youtube"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid ">
                    <!-- <div class="header-mid"> -->

                    <div class="container ">
                        <div class="menu-wrapper ">

                            <div class="logo">
                                <a href="index"><img src="images/mani.png" width="130px" alt=""></a>
                            </div>

                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                        <li><a href="index ">Home</a></li>
                                        <!-- // displaying categories in navbar -->
                                        <?php
                                    include("admin/config.php");
                                    $select_category = "Select * from categories";
                                    $result_category = mysqli_query($config, $select_category);
                                    while ($row_data = mysqli_fetch_assoc($result_category)) {
                                        $category_id = $row_data['cat_id'];
                                        $category_title = $row_data['category'];

                                        echo "<li><a href='category?category=$category_title'>$category_title</a></li>";
                                    }
                                    ?>

                                    </ul>
                                </nav>
                            </div>

                            <div class="header-right">
                                <ul class="min">
                                    <!-- <li>
                                        <div class="nav-search search-switch hearer_icon">
                                            <a id="search_1" href="javascript:void(0)">
                                                <span class="flaticon-search"></span>
                                            </a>
                                        </div>
                                    </li> -->

                                    <?php if (isset($_SESSION['userDetails']['user_id'])) : ?>
                                    <!-- Show the Logout link -->
                                    <li class="login"><a href="logout"><span>Logout</span></a></li>
                                    <?php else : ?>
                                    <!-- Show the Login link -->
                                    <li class="login"><a href="login"><span class="flaticon-user"></span></a></li>
                                    <?php endif; ?>

                                    </li>
                                    <li class="">
                                        <a href="cart ">
                                            <span class="flaticon-shopping-cart" id="cart-count"></span>
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js">
                                            </script>
                                            <script>
                                            $(document).ready(function() {
                                                // Function to update cart count
                                                function updateCartCount() {
                                                    $.ajax({
                                                        url: 'delete.cartItem.php ',
                                                        type: 'POST',
                                                        success: function(data) {
                                                            // Update the cart count on the page
                                                            $('#cart-count').text(
                                                                data);
                                                        },
                                                        error: function() {
                                                            // Handle error, if any
                                                        }
                                                    });
                                                }

                                                // Initial cart count update
                                                updateCartCount();

                                                // Set an interval to periodically update the cart count
                                            });
                                            </script>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <!-- <div class="search_input" id="search_input_box">
                            <form class="search-inner d-flex justify-content-between ">
                                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                <button type="submit" class="btn"></button>
                                <span class="ti-close" id="close_search" title="Close Search"></span>
                            </form>
                        </div> -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>




        </header>
        <main>