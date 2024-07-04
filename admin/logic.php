 <?php
///////////////////////////
include("config.php");

if (isset($_POST["submit"])) {

    $pName = $_POST['p_name'];
    $pPrice = $_POST['p_price'];
    $pCategory = $_POST['p_category'];
    $pDetail = $_POST['p_detail'];

    $uploadDirectory = 'upload_images/';
    $pImage = $_FILES['p_image'];
    $imageName = $pImage['name'];
    $tempImage = $pImage['tmp_name'];
    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if (!in_array($imageExtension, $allowedExtensions)) {
        echo "<script>alert('Wrong file extension. Only JPG, JPEG, and PNG files are allowed.'); window.location.href='index.php';</script>";
        exit();
    }
    $uploadedImage = $uploadDirectory . $imageName;
    move_uploaded_file($tempImage, $uploadedImage);
    $insertQuery = "INSERT INTO products (`p_name`, `p_price`, `p_image`, `p_category`,`p_details`) VALUES ('$pName', '$pPrice', '$uploadedImage', '$pCategory','$pDetail')";

    if (mysqli_query($config, $insertQuery)) {
        echo "<script>alert('Product inserted successfully.'); window.location.href='section.php?section=product';</script>";
    } else {
        echo "<script>alert('Error inserting product.'); window.location.href='section.php?section=product';</script>";
    }
  
}


///////////////////////////

if (isset($_POST["addCat"])) {
    // Retrieve the category name from the form
    $categoryName = $_POST['categories'];

    // File upload handling
    $targetDirectory = "upload_images/"; // Specify the directory where you want to store the uploaded images
    $targetFile = $targetDirectory . basename($_FILES["cate_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    if (isset($_POST["addCat"])) {
        $check = getimagesize($_FILES["cate_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script>alert('File is not an image.'); window.location.href='section.php?section=category';</script>";
            $uploadOk = 0;
        }
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "<script>alert('Sorry, the file already exists.'); window.location.href='section.php?section=category';</script>";
        $uploadOk = 0;
    }

    // Check file size (adjust the limit as needed)
    if ($_FILES["cate_image"]["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.'); window.location.href='section.php?section=category';</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG, and GIF files are allowed.'); window.location.href='section.php?section=category';</script>";
        $uploadOk = 0;
    }

    // If everything is OK, try to upload the file and insert into the database
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["cate_image"]["tmp_name"], $targetFile)) {
            // Use a prepared statement to insert the category and image into the database
            $insertQuery = "INSERT INTO categories (category, image) VALUES (?, ?)";
            $stmt = mysqli_prepare($config, $insertQuery);

            if ($stmt) {
                // Bind parameters to the prepared statement
                mysqli_stmt_bind_param($stmt, "ss", $categoryName, $targetFile);

                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('Category inserted successfully.'); window.location.href='section.php?section=category';</script>";
                } else {
                    echo "<script>alert('Error inserting category.'); window.location.href='section.php?section=category';</script>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<script>alert('Error preparing the statement.'); window.location.href='section.php?section=category';</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href='section.php?section=category';</script>";
        }
    }

    mysqli_close($config);
}



if (isset($_POST["hot_submit"])) {
    // Retrieve and sanitize the form data
    $hName = mysqli_real_escape_string($config, $_POST['h_name']);
    $hPrice = floatval($_POST['h_price']);
    $hName = mysqli_real_escape_string($config, $_POST['h_name']);
    
    $uploadDirectory = 'upload_images/';
    $pImage = $_FILES['h_image'];
    $imageName = mysqli_real_escape_string($config, $pImage['name']);
    $tempImage = $pImage['tmp_name'];
    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if (!in_array($imageExtension, $allowedExtensions)) {
        echo "<script>alert('Wrong file extension. Only JPG, JPEG, and PNG files are allowed.'); window.location.href='index.php';</script>";
        exit();
    }

    // Upload the image
    $huploadedImage = $uploadDirectory . $imageName;
    move_uploaded_file($tempImage, $huploadedImage);

    // Construct and execute the SQL query
    $insertQuery = "INSERT INTO hot_deals (`h_name`, `h_price`,`h_category`, `h_image`) VALUES ('$hName', $hPrice, '$huploadedImage')";

    if (mysqli_query($config, $insertQuery)) {
        echo "<script>alert('Hot deal inserted successfully.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error inserting hot deal.'); window.location.href='index.php';</script>";
    }
}


include("config.php");

$response = array();

if (isset($_POST["id"])) {
    $productId = $_POST['id'];
    $pName = $_POST['editName'];
    $pPrice = $_POST['editPrice'];
    $pCategory = $_POST['editCategory'];
    $pDetail = $_POST['editDetail'];
    
    // Check if a new image file has been uploaded
    if (isset($_FILES['editImage']) && $_FILES['editImage']['error'] == 0) {
        $targetDir = "upload_images/"; // Set your target directory for image uploads
        $targetFile = $targetDir . basename($_FILES["editImage"]["name"]);
        
        if (move_uploaded_file($_FILES["editImage"]["tmp_name"], $targetFile)) {
            $updateQuery = "UPDATE products SET p_name='$pName', p_price='$pPrice', p_category='$pCategory',p_details='$pDetail', p_image='$targetFile' WHERE p_id='$productId'";
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading image';
            echo json_encode($response);
            exit;
        }
    } else {
        $updateQuery = "UPDATE products SET p_name='$pName', p_price='$pPrice', p_category='$pCategory',p_details='$pDetail' WHERE p_id='$productId'";
    }

    if (mysqli_query($config, $updateQuery)) {
        $response['status'] = 'success';
        $response['message'] = 'Product updated successfully';

        // Fetch the updated product data
        $result = mysqli_query($config, "SELECT * FROM products WHERE p_id='$productId'");
        $product = mysqli_fetch_assoc($result);
        $response['product'] = $product;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error updating product: ' . mysqli_error($config);
    }

    echo json_encode($response);
}


include("config.php");

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $deleteQuery = "DELETE FROM products WHERE p_id='$productId'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=product");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}

if (isset($_GET['cat_id'])) {
    $Id = $_GET['cat_id'];

    $deleteQuery = "DELETE FROM categories WHERE cat_id='$Id'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=category");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}




include("config.php");

$response = array();

if (isset($_POST["cat_id"])) {
    $categoryId = $_POST['cat_id'];
    $categoryName = $_POST['editCategoryName'];

    if (!empty($_FILES['editCategoryImage']['name'])) {
        // New image is uploaded, handle the upload
        $targetDir = "upload_images/"; // Change this to your desired upload directory
        $targetFile = $targetDir . basename($_FILES['editCategoryImage']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the uploaded file is an image
        if (getimagesize($_FILES['editCategoryImage']['tmp_name'])) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['editCategoryImage']['tmp_name'], $targetFile)) {
                // Delete the old image if it exists
                $oldImagePathQuery = "SELECT image FROM categories WHERE cat_id='$categoryId'";
                $oldImagePathResult = mysqli_query($config, $oldImagePathQuery);

                if ($oldImagePathResult && $oldImage = mysqli_fetch_assoc($oldImagePathResult)) {
                    $oldImage = $oldImage['image'];
                    if ($oldImage != $targetFile && file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }

                // Update the category with the new image path
                $updateQuery = "UPDATE categories SET category='$categoryName', image='$targetFile' WHERE cat_id='$categoryId'";

                if (mysqli_query($config, $updateQuery)) {
                    $response['status'] = 'success';
                    $response['message'] = 'Category updated successfully';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Error updating category: ' . mysqli_error($config);
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Error moving uploaded file';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Invalid file format. Only images are allowed.';
        }
    } else {
        // No new image uploaded, keep the existing image
        $updateQuery = "UPDATE categories SET category='$categoryName' WHERE cat_id='$categoryId'";

        if (mysqli_query($config, $updateQuery)) {
            $response['status'] = 'success';
            $response['message'] = 'Category updated successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error updating category: ' . mysqli_error($config);
        }
    }

    echo json_encode($response);
}









?>