<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.2/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.2.0/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.2/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include("aside.php");
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div id="product" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addProductModal">
                    Add Product
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                    aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProductModalLabel">Enter New Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Name:</label>
                                            <input type="text" class="form-control" name="p_name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Price</label>
                                            <input type="number" class="form-control" name="p_price" required>
                                        </div>
                                        <label for="name" class="form-label">Product Category</label>
                                        <select name="p_category">
                                            <option value="">Select Category</option>
                                            <option value="Featured Product">Featured Product</option>
                                            <option value="Health Care Product">Health Care Product</option>
                                            <?php
                                            include("config.php");

                                            $sql = "SELECT category FROM categories";

                                            $result = mysqli_query($config, $sql);

                                            if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option name='mini' value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                                                }
                                                mysqli_free_result($result);
                                            }

                                            mysqli_close($config);
                                            ?>
                                        </select>

                                        <div class="mb-3">
                                            <label for="user_image" class="form-label">Product Images </label>
                                            <input type="file" class="form-control mb-2" name="p_image" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Description:</label>
                                            <textarea type="text" class="form-control" name="p_detail"
                                                required></textarea>
                                        </div>

                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <style>
                .table-container {
                    overflow-x: auto;
                }

                .icon-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .icon-container a {
                    margin: 10px;
                    /* Adjust the margin as needed for spacing */
                    font-size: 20px;
                }
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            // Connect to your database (assuming $config is your database connection)
                            $result = mysqli_query($config, "SELECT * FROM products");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['p_id']}</td>";
                                    echo "<td>{$row['p_name']}</td>";
                                    echo "<td>{$row['p_price']}</td>";
                                    echo "<td><img src='{$row['p_image']}' width='100' height='120' alt='Product Image'></td>";
                                    echo "<td>{$row['p_category']}</td>";
                                    echo "<td style='width:200px;'><div style='height: 200px; overflow-y: scroll;'>{$row['p_details']}</div></td>";
                                    echo "<td>
                                    <div class='icon-container'>
                                        <a href='#' class='edit-product' 
                                            data-id='{$row['p_id']}'
                                            data-name='{$row['p_name']}'
                                            data-price='{$row['p_price']}'
                                            data-category='{$row['p_category']}'
                                            data-detail='{$row['p_details']}'
                                            data-image='{$row['p_image']}'
                                        ><i class='fas fa-edit'></i></a>
                                        <a style='color:red;' href='logic.php?id={$row['p_id']}'><i class='fas fa-trash'></i></a>
                                    </div>
                                  </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No products found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>

                <!-- Modal for Update -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!-- Add the "modal-lg" class for a larger modal -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Edit Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm">
                                    <input type="hidden" name="id" id="editProductId">
                                    <div class="form-group">
                                        <label for="editName">Name</label>
                                        <input type="text" class="form-control" id="editName" name="editName">
                                    </div>
                                    <div class="form-group">
                                        <label for="editPrice">Price</label>
                                        <input type="number" class="form-control" id="editPrice" name="editPrice">
                                    </div>
                                    <select name="editCategory" id="editCategory">
                                        <option value="">Select Category</option>
                                        <?php
                                        include("config.php");
                                        $sql = "SELECT category FROM categories";
                                        $result = mysqli_query($config, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option name='mini' value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                                            }
                                            mysqli_free_result($result);
                                        }
                                        mysqli_close($config);
                                        ?>
                                    </select>
                                    <div class="form-group">
                                        <label for="editImage">Image</label>
                                        <input type="file" class="form-control-file" id="editImage" name="editImage">
                                        <img src="" id="editImagePreview" width="100" height="120" alt="Product Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="editDetail">Description</label>
                                        <input type="text" class="form-control" id="editDetail" name="editDetail">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="updateProduct" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="category" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addCategoryModal">
                    Add Categories
                </button>
                <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <!-- Modal content here -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Modal body content here -->
                                <div class="container">

                                    <form method="POST" action="logic.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Add Category:</label>
                                            <input type="text" class="form-control" name="categories" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Add Image:</label>
                                            <input type="file" class="form-control" name="cate_image" required>
                                        </div>

                                        <button name="addCat" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- Additional buttons or actions here -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include("config.php");

                            // Connect to your database (assuming $config is your database connection)
                            $result = mysqli_query($config, "SELECT * FROM categories");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['cat_id']}</td>";
                                    echo "<td>{$row['category']}</td>";
                                    echo "<td><img src='{$row['image']}' width='100' height='120' alt='category Image'></td>";
                                    echo "<td>
                                            <div class='icon-container'>
                                                <a href='#' class='edit-category' 
                                                    data-cat_id='{$row['cat_id']}'
                                                    data-category='{$row['category']}'
                                                    data-cato_image='{$row['image']}'
                                                    
                                                ><i class='fas fa-edit'></i></a>
                                                <a style='color:red;' href='logic.php?cat_id={$row['cat_id']}'><i class='fas fa-trash'></i></a>
                                            </div>
                                        </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No Category found</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>


                <!-- Modal for Editing Categories -->
                <div class="modal fade" id="cateModal" tabindex="-1" role="dialog" aria-labelledby="cateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cateModalLabel">Edit Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editCategoryForm">
                                    <input type="hidden" name="cat_id" id="editCategoryId">
                                    <div class="form-group">
                                        <label for="editCategoryName">Category Name</label>
                                        <input type="text" class="form-control" id="editCategoryName"
                                            name="editCategoryName">
                                    </div>
                                    <div class="form-group">
                                        <label for="editCategoryImage">Image</label>
                                        <input type="file" class="form-control-file" id="editCategoryImage"
                                            name="editCategoryImage">
                                        <img src="" id="editCateImagePreview" width="100" height="120"
                                            alt="Category Image">
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="updateCategory" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="order" style="padding:20px 10px 0px 10px;">

                <!-- orders -->
                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Id</th>
                                <th>Product Id</th>
                                <th>Price</th>
                                <!-- <th>Image</th> -->
                                <th>Category</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <style>
                            .icon-container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .icon-container a {
                                margin: 50px 10px;
                                font-size: 20px;
                            }
                            </style>
                            <?php
                            include("config.php");

                            // Connect to your database (assuming $config is your database connection)
                            $result = mysqli_query($config, "SELECT * FROM orders");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['order_id']}</td>";
                                    echo "<td>{$row['user_id']}</td>";
                                    echo "<td>{$row['product_id']}</td>";
                                    echo "<td>{$row['product_price']}</td>";
                                    // echo "<td><img src='{$row['product_image']}' width='100' height='120' alt='Product Image'></td>";
                                    echo "<td>{$row['product_category']}</td>";
                                    echo "<td>{$row['product_quantity']}</td>";;
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No products found</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

                <!-- Modal for Update -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!-- Add the "modal-lg" class for a larger modal -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Edit Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm">
                                    <input type="hidden" name="id" id="editProductId">
                                    <div class="form-group">
                                        <label for="editName">Name</label>
                                        <input type="text" class="form-control" id="editName" name="editName">
                                    </div>
                                    <div class="form-group">
                                        <label for="editPrice">Price</label>
                                        <input type="text" class="form-control" id="editPrice" name="editPrice">
                                    </div>
                                    <select name="editCategory" id="editCategory">
                                        <option value="">Select Category</option>
                                        <?php
                                        include("config.php");
                                        $sql = "SELECT category FROM categories";
                                        $result = mysqli_query($config, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option name='mini' value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                                            }
                                            mysqli_free_result($result);
                                        }
                                        mysqli_close($config);
                                        ?>
                                    </select>
                                    <div class="form-group">
                                        <label for="editImage">Image</label>
                                        <input type="file" class="form-control-file" id="editImage" name="editImage">
                                        <img src="" id="editImagePreview" width="100" height="120" alt="Product Image">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="updateProduct" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order -->
            </div>

            <!-- <div class="text-center" style="padding-bottom:30px;">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link btn-primary" href="#" id="previousButton" onclick="previousPage()">Previous</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" id="nextButton" onclick="nextPage()">Next</a>
            </li>
          </ul>
        </nav>
      </div> -->
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2024 <a href="https://evodyna.com/">Evodyna.com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>
    let currentPage = 1;
    const rowsPerPage = 8; // Adjust the number of rows per page as needed
    const table = document.querySelector(".table tbody");
    const rows = table.rows;

    function showPage(pageNumber) {
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        if (pageNumber < 1) pageNumber = 1;
        if (pageNumber > totalPages) pageNumber = totalPages;

        for (let i = 0; i < rows.length; i++) {
            if (i < (pageNumber - 1) * rowsPerPage || i >= pageNumber * rowsPerPage) {
                rows[i].style.display = "none";
            } else {
                rows[i].style.display = "";
            }
        }

        document.getElementById("previousButton").disabled = pageNumber === 1;
        document.getElementById("nextButton").disabled = pageNumber === totalPages;
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    }

    function nextPage() {
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    }

    // Initial page display
    showPage(currentPage);
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to get URL parameters by name
        function getParameterByName(name) {
            var url = new URL(window.location.href);
            return url.searchParams.get(name);
        }

        // Get the section parameter from the URL
        var sectionParam = getParameterByName("section");

        // Default to "product" section if no parameter is provided
        sectionParam = sectionParam || "product";

        // Show/hide sections based on the sectionParam
        var sections = ['product', 'category', 'order'];
        for (var i = 0; i < sections.length; i++) {
            var section = document.getElementById(sections[i]);
            if (sections[i] === sectionParam) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        }
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI 1.12.1 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
$(document).ready(function() {
    $('.edit-category').on('click', function() {
        var catId = $(this).data('cat_id');
        var categoryName = $(this).data('category');
        var cateImage = $(this).data('cato_image');

        $('#editCategoryId').val(catId);
        $('#editCategoryName').val(categoryName);
        $('#editCateImagePreview').attr('src', cateImage);

        $('#cateModal').modal('show');
    });

    $('#updateCategory').on('click', function() {
        var formData = new FormData();
        formData.append('cat_id', $('#editCategoryId').val());
        formData.append('editCategoryName', $('#editCategoryName').val());
        formData.append('editCategoryImage', $('#editCategoryImage')[0].files[0]);
        $.ajax({
            type: 'POST',
            url: 'logic.php',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    alert(response.message);
                    $('#cateModal').modal('hide');
                    // $('#editCateImagePreview').attr('src', response.categories.image);
                    console.log('Redirecting to section.php?section=category');
                    window.location.href = 'section.php?section=category'; // Redirect after successful update
                } else {
                    alert(response.message);
                }
            }
        });
    });
});



    $(document).ready(function() {
        $('.edit-product').on('click', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            var category = $(this).data('category');
            var detail = $(this).data('detail');
            var image = $(this).data('image');

            $('#editProductId').val(id);
            $('#editName').val(name);
            $('#editPrice').val(price);
            $('#editImagePreview').attr('src', image);
            $('#editCategory').val(category);
            $('#editDetail').val(detail);

            $('#updateModal').modal('show');
        });

        $('#updateProduct').on('click', function() {
            var formData = new FormData($('#editForm')[0]);
            $.ajax({
                type: 'POST',
                url: 'logic.php',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert(response.message);
                        $('#updateModal').modal('hide');
                        // Update the table row with the new values
                        $('#editName').val(response.product.p_name);
                        $('#editPrice').val(response.product.p_price);
                        $('#editCategory').val(response.product.p_category);
                        $('#editDetail').val(response.product.p_details);
                        $('#editImagePreview').attr('src', response.product.p_image);
                        // Redirect to index.php
                        window.location.href = 'section.php?section=product';
                    } else {
                        alert(response.message);
                    }
                }
            });
        });
    });
    </script>

    </script>

    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/pages/dashboard.js"></script>
    <!-- Bootstrap JS CDN, Popper.js CDN, and jQuery CDN -->


</body>

</html>