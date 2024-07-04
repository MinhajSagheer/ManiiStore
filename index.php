<?php
session_start();
include_once("./admin/config.php");
include('./functions/common_function.php');
include('header.php');
?>



<section class="slider-area ">
    <div class="slider-active">

        <div class="single-slider slider-bg1 slider-height d-flex align-items-center">
            <div class="container">
                <div class="rowr">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8  col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">Minimal Menz Style</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">Consectetur adipisicing elit. Laborum
                                fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                earum.</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slider slider-bg2 slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">Minimal Menz Style</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">Consectetur adipisicing elit. Laborum
                                fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                earum.</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="items-product1 pt-30">
    <div class="container">
        <div class="row">
            <?php
include("admin/config.php");

// Select distinct product categories from the database
$select_categories = "SELECT * FROM categories LIMIT 3";
$result_categories = mysqli_query($config, $select_categories);

// Check if there are categories available
if (mysqli_num_rows($result_categories) > 0) {
    while ($category_row = mysqli_fetch_assoc($result_categories)) {
        $category_name = $category_row['category'];
        $category_image = $category_row['image'];

?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-items mb-20">
                    <div class="items-img">
                        <!-- You might want to dynamically load images based on the category -->
                        <img style="height:350px;object-fit: cover;" src="admin/<?php echo $category_image; ?>" alt="">
                    </div>
                    <div class="items-details">
                        <!-- Use the dynamically obtained category name and create a link -->
                        <h4><a href="category?category=<?php echo $category_name; ?>"><?php echo $category_name; ?></a>
                        </h4>
                        <!-- You can also dynamically generate the link based on the category -->
                        <a href="category?category=<?php echo $category_name; ?>" class="browse-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <?php
    }
} else {
    echo "No categories found.";
}
?>

        </div>
    </div>
</section>


<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="nav-tittle">
                            <h2>New Product</h2>
                        </div>
                        <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one"
                                    role="tab" aria-controls="nav-one" aria-selected="true">Men</a>
                                <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab"
                                    aria-controls="nav-two" aria-selected="false">Women</a>
                                <a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab"
                                    aria-controls="nav-three" aria-selected="false">Baby</a>
                                <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab"
                                    aria-controls="nav-four" aria-selected="false">Fashion</a>
                            </div> -->
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="latest-items-active">
                    <?php
                        allProducts();
                        ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href=""><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-area testimonial-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-11">
                <div class="h1-testimonial-active">

                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <h2>Customer Testimonial</h2>
                                <p>Everybody is different, which is why we offer styles for every body. Laborum fuga
                                    incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                    earum.</p>
                            </div>

                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="images/founder-img.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Petey Cruiser</span>
                                    <p>Designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <h2>Customer Testimonial</h2>
                                <p>Everybody is different, which is why we offer styles for every body. Laborum fuga
                                    incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                    earum.</p>
                            </div>

                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="images/founder-img.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Petey Cruiser</span>
                                    <p>Designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="nav-tittle">
                            <h2>Featured Product</h2>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="latest-items-active">
                    <?php
                        featured();
                        ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href=""><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="nav-tittle">
                            <h2>Health Care Product</h2>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="latest-items-active">
                    <?php
                        health();
                        ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href=""><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest1.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest3.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest2.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="images/latest4.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('footer.php');
    ?>