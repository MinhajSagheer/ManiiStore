<div class="categories-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="images/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast &amp; Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="images/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Secure Payment</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="images/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Money Back Guarantee</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="images/services4.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Online Support</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<footer>
    <div class="footer-wrapper gray-bg">
        <div class="footer-area footer-padding">

            <!-- <section class="subscribe-area">
                <div class="container">
                    <div class="row justify-content-between subscribe-padding">
                        <div class="col-xxl-3 col-xl-3 col-lg-4">
                            <div class="subscribe-caption">
                                <h3>Subscribe Newsletter</h3>
                                <p>Subscribe newsletter to get 5% on all products.</p>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                            <div class="subscribe-caption">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-4">

                            <div class="footer-social">
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-20">

                                <div class="footer-logo mb-35">
                                    <a href="index"><img src="images/mani.png" style="height:150px;border-radius:100px;" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
include("admin/config.php");

$select_categories = "SELECT DISTINCT p_category FROM products LIMIT 3";
$result_categories = mysqli_query($config, $select_categories);

while ($category_row = mysqli_fetch_assoc($result_categories)) {
    $category_name = $category_row['p_category'];

    echo '<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">';
    echo '<div class="single-footer-caption mb-50">';
    echo '<div class="footer-tittle">';
    echo '<h4>' . $category_name . '</h4>';
    echo '<ul>';

    $select_products = "SELECT * FROM products WHERE p_category = '$category_name' ORDER BY p_id LIMIT 4";
    $result_products = mysqli_query($config, $select_products);

    while ($row = mysqli_fetch_assoc($result_products)) {
        $product_id = $row['p_id'];
        $product_name = $row['p_name'];
        echo '<li><a href="detail?detail_id=' . $product_id . '">' . $product_name . '</a></li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

?>





                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright ©<script>
                                    document.write(new Date().getFullYear());
                                    </script>2024 All rights reserved | This template is made with <i
                                        class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                        href="https://evodyna.com/" target="_blank"
                                        rel="nofollow noopener">Evodynamics</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top">
    <a class="wrapper" title="Go to Top" href="#">
        <div class="arrows-container">
            <div class="arrow arrow-one">
            </div>
            <div class="arrow arrow-two">
            </div>
        </div>
    </a>
</div>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Chart.js 3.7.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<!-- jQuery Sparklines 2.1.2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<!-- JQVMap 1.5.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob 1.2.11 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.11/jquery.knob.min.js"></script>
<!-- Moment.js 2.29.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<!-- DateRangePicker 3.1.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1.3/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.2.0/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote 0.8.18 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- OverlayScrollbars 1.11.2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.2/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/pages/dashboard.js"></script>
<!-- Bootstrap JS CDN, Popper.js CDN, and jQuery CDN -->


<script src="js/modernizr-3.5.0.min.js"></script>
<!-- <script src="js/jquery-1.12.4.min.js"></script> -->
<script src="js/popper.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->

<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/price_rangs.js"></script>

<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>





<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
<script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    data-cf-beacon="{" rayid":"845cfc4faf29b8ae","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}"=""
    crossorigin="anonymous"></script>

</body>

</html>