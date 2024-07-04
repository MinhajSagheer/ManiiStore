<?php
session_start();

include("header.php");


?>

<style>
body {
    background-color: #f9f9fa
}

.padding {
    padding: 2rem !important;
    margin-top:50px;
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}



h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px;
    }
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
</style>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <?php
    $userDetails = array(
        'user_id' => $_SESSION['userDetails']['user_id'],
        'email' => $_SESSION['userDetails']['email'],
        'fullname' => $_SESSION['userDetails']['fullname'],
        'phone_no' => $_SESSION['userDetails']['phone_no'],
        'image' => $_SESSION['userDetails']['image'],
        'pass' => $_SESSION['userDetails']['pass'],
        'conf_pass' => $_SESSION['userDetails']['conf_pass']
    );

    echo '<script>var userDetails = ' . json_encode($userDetails) . ';</script>';
    ?>
                                <div class="m-b-25">
                                    <img width="200px" height="150px" src="<?php
                                                                                if (isset($_SESSION['userDetails']['image'])) {
                                                                                    echo $_SESSION['userDetails']['image'];
                                                                                }
                                                                                ?>" class="img-radius"
                                        alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600"><?php
                                                        if (isset($_SESSION['userDetails']['fullname'])) {
                                                            echo $_SESSION['userDetails']['fullname'];
                                                        }
                                                        ?></h6>
                                <p>Web Designer</p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php
                                                                            if (isset($_SESSION['userDetails']['email'])) {
                                                                                echo $_SESSION['userDetails']['email'];
                                                                            }
                                                                            ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php 
                                            if (isset($_SESSION['userDetails']['phone_no'])) {
                                                                                echo $_SESSION['userDetails']['phone_no'];
                                                                            }
                                                                            ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Recent</p>
                                        <h6 class="text-muted f-w-400">Sam Disuja</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                        <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="edit-blog m-b-10 f-w-600 btn btn-primary"
                                            style="margin-top:20px;">Edit</a>

                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                                data-original-title="facebook" data-abc="true"></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                                data-original-title="twitter" data-abc="true"><i
                                                    class="mdi mdi-twitter feather icon-twitter twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                                data-original-title="instagram" data-abc="true"><i
                                                    class="mdi mdi-instagram feather icon-instagram instagram"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="updateBlogModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"
                style="background-color:#fff;padding-top:30px;padding-bottom:30px;padding-right:10px;padding-left:10px;border-radius:10px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        id="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="line-height:50px;">
                    <form id="editForm">
                        <input type="hidden" name="id" id="editBlogId">
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" name="user_email" id="user_email" value=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" required value=""
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="user_number" id="user_number" value=""
                                required>

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Image</label>
                            <input type="file" class="form-control" name="user_image" id="user_image" value="" required>
                            <img width="80px" height="100px" id="editTitleImagePreview" src="" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Password</label>
                            <input type="text" class="form-control" name="user_password" id="user_password" required>

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Confirm Password</label>
                            <input type="text" class="form-control" name="user_confirmpassword" id="user_Conpassword"
                                required>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="updateBlog" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog -->

<?php


// Fetch user details and orders
if (isset($_SESSION['userDetails']['user_id'])) {
    $user_id = $_SESSION['userDetails']['user_id'];

    // Fetch user details
    $userDetails = array(
        'user_id' => $_SESSION['userDetails']['user_id'],
        'email' => $_SESSION['userDetails']['email'],
        'fullname' => $_SESSION['userDetails']['fullname'],
        'phone_no' => $_SESSION['userDetails']['phone_no'],
        'image' => $_SESSION['userDetails']['image'],
        'pass' => $_SESSION['userDetails']['pass'],
        'conf_pass' => $_SESSION['userDetails']['conf_pass']
    );

    // Fetch user orders
    $query = "SELECT * FROM orders WHERE user_id = $user_id";
    $result = mysqli_query($config, $query);

    // Check if the query was successful
    if ($result) {
        $orders = array();

        // Fetch each row from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            $orders[] = $row;
        }

        // Merge user details and orders
        $userDetails['orders'] = $orders;
    } else {
        // Handle the case where the query fails
        echo "Error executing query: " . mysqli_error($config);
    }

    echo '<script>var userDetails = ' . json_encode($userDetails) . ';</script>';
}
?>

<!-- Display user details -->
<div class="page-content page-container" id="page-content">
    <!-- Existing HTML content -->

    <!-- Display orders -->
    <h2 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="padding-left:10px;">Orders</h2>
    <div class="row" style="margin:0;padding:0;">
        <div class="col-sm-12">
            <?php
            // Check if orders are available
            if (is_array($userDetails['orders']) && count($userDetails['orders']) > 0) {
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Order ID</th>';
                echo '<th>Product Name</th>';
                echo '<th>Product Price</th>';
                echo '<th>Product Image</th>';
                echo '<th>Product Category</th>';
                echo '<th>Quantity</th>';
                // Add more table headers as needed
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                foreach ($userDetails['orders'] as $order) {
                    echo '<tr>';
                    echo '<td>' . $order['order_id'] . '</td>';
                    echo '<td>' . $order['product_name'] . '</td>';
                    echo '<td>' . $order['product_price'] . '</td>';
                    echo '<td><img src="' . $order['product_image'] . '" alt="Product Image" width="50"></td>';
                    echo '<td>' . $order['product_category'] . '</td>';
                    echo '<td>' . $order['product_quantity'] . '</td>';
                    // Add more table cells as needed
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<h3>No orders available.</h3>';
            }
            ?>
        </div>
    </div>
</div>










<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
///////blog/////////
$(document).ready(function() {
    $('.edit-blog').on('click', function() {
        // Fetch user information from session
        var UserId = userDetails.user_id;
        var userEmail = userDetails.email;
        var userName = userDetails.fullname;
        var userPhone = userDetails.phone_no;
        var userImage = userDetails.image;
        var userPassword = userDetails.pass;
        var userConfirmPassword = userDetails.conf_pass;

        $('#editBlogId').val(UserId);
        $('#user_email').val(userEmail);
        $('#user_name').val(userName);
        $('#user_number').val(userPhone);
        $('#editTitleImagePreview').attr('src', userImage);
        $('#user_password').val(userPassword);
        $('#user_Conpassword').val(userConfirmPassword);

        $('#updateBlogModal').modal('show');
    });

    $('#updateBlog').on('click', function() {
        var formData = new FormData($('#editForm')[0]);
        $.ajax({
            type: 'POST',
            url: 'update_user_data.php',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);

                if (response.status === 'success') {
                    alert(response.message);
                    $('#updateBlogModal').modal('hide');

                    // Update the UI with the new values
                    $('#user_email').val(response.user.user_email);
                    $('#user_name').val(response.user.user_name);
                    $('#user_number').val(response.user.user_number);
                    $('#editTitleImagePreview').attr('src', response.user.user_image);
                    $('#user_password').val(response.user.user_password);
                    $('#user_Conpassword').val(response.user.user_confirmpassword);
                    window.location.href = 'myprofile';
                } else {
                    alert(response.message);
                }
            },

            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log the full error response
                alert('Error updating user data.');
            }

        });
    });
});
</script>



<?php
include('footer.php')
?>