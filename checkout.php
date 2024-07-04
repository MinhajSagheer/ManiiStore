<?php

session_start();
if (!isset($_SESSION['userDetails']['user_id'])) {
    header("Location: index.php");
    exit();
}
// Include configuration file 
include("header.php");


date_default_timezone_set('Asia/Karachi');
//60 seconds = 1 minutes
// ini_set('max_execution_time', 60);
include("admin/config.php");
if (isset($_SESSION['userDetails'])) {
    $userId = $_SESSION['userDetails']['user_id'];

    // Display user details
    // echo "<p>Logged in as: " . $_SESSION['userDetails']['username'] . "</p>";

    // Display cart items
    $selectCartQuery = "SELECT * FROM cart_data WHERE user_id = '$userId'";
    $cartResult = mysqli_query($config, $selectCartQuery);
    $subtotal = 0;
    $productCount = 0; // Variable to store the product count

    while ($cartRow = mysqli_fetch_assoc($cartResult)) {
        // Retrieve cart data
        $product_name = $cartRow['product_name'];
        $product_price = $cartRow['price'];
        $cartImage = $cartRow['product_image'];
        $product_id = $cartRow['product_id'];
        // echo $product_id;

        // Calculate the subtotal for each product
        $quantity = 1; // Assuming the quantity is always 1 in this example
        $productSubtotal = $product_price * $quantity;
        $subtotal += $productSubtotal;
        $productCount++; // Increment the product count

    }
} else {
    // Display a message if the user is not logged in
    echo "<p>Please log in to view your Cart.</p>";
}


// $product_id = $_GET['product_id'];

// $results = $db->query("SELECT * FROM product WHERE product_id = ".$product_id); 
// $row = $results->fetch_array();

// $product_name = $row['name'];
// $product_price = $row['price'];

//$form_post_url = "localhost/jazzcash_part_2/checkout.php";
// $form_post_url = "localhost\ministore\checkout.php";
$form_post_url = "https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/";
// $form_post_url = "https://sandbox.jazzcash.com.pk/CustomerPortal/TransactionManagement/TransactionSelection";



//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//1.
//get formatted price. remove period(.) from the price
$temp_amount     = $subtotal;
$amount_array     = explode('.', $temp_amount);
$pp_Amount         = $amount_array[0];
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//2.
//get the current date and time
$DateTime         = new DateTime();
$pp_TxnDateTime = $DateTime->format('YmdHis');
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//3.
//to make expiry date and time add one hour to current date and time
$ExpiryDateTime = $DateTime;
$ExpiryDateTime->modify('+' . 1 . ' hours');
$pp_TxnExpiryDateTime = $ExpiryDateTime->format('YmdHis');
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//4.
//make unique transaction id using current date
$pp_TxnRefNo = 'T' . $pp_TxnDateTime;
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//--------------------------------------------------------------------------------
// $post_data
$post_data =  array(
    // "pp_Version" 			=> JAZZCASH_API_VERSION_1,
    "pp_Version"             => '1.1',
    "pp_TxnType"             => "MWALLET",
    // "pp_Language" 			=> JAZZCASH_LANGUAGE,
    "pp_Language"             => "EN",
    "pp_MerchantID"         => JAZZCASH_MERCHANT_ID,
    // "pp_MerchantID"         => "MC74151",
    "pp_SubMerchantID"         => "",
    "pp_Password"             => JAZZCASH_PASSWORD,
    // "pp_Password"             => "hcws948794",
    "pp_BankID"             => "TBANK",
    // "pp_ProductID" 			=> "RETL",
    "pp_ProductID"             => $product_id,
    "pp_TxnRefNo"             => $pp_TxnRefNo,
    "pp_Amount"             => $pp_Amount,
    // "pp_TxnCurrency"         => JAZZCASH_CURRENCY_CODE,
    "pp_TxnCurrency"         => "PKR",
    "pp_TxnDateTime"         => $pp_TxnDateTime,
    "pp_BillReference"         => "billRef",
    "pp_Description"         => "Description of transaction",
    "pp_TxnExpiryDateTime"     => $pp_TxnExpiryDateTime,
    // "pp_ReturnURL"             => JAZZCASH_RETURN_URL,
    "pp_ReturnURL"             => "https://localhost\ministore\order_placed.php",
    "pp_SecureHash"         => "",
    "ppmpf_1"                 => "1",
    "ppmpf_2"                 => "2",
    "ppmpf_3"                 => "3",
    "ppmpf_4"                 => "4",
    "ppmpf_5"                 => "5",
);
// --------------------------------------------------------------------------------


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//5.
//$sorted_string
//make an alphabetically ordered string using $post_data array above
//and skip the blank fields in $post_data array
$sorted_string  = JAZZCASH_INTEGERITY_SALT . '&';
$sorted_string .= $post_data['pp_Amount'] . '&';
$sorted_string .= $post_data['pp_BankID'] . '&';
$sorted_string .= $post_data['pp_BillReference'] . '&';
$sorted_string .= $post_data['pp_Description'] . '&';
$sorted_string .= $post_data['pp_Language'] . '&';
$sorted_string .= $post_data['pp_MerchantID'] . '&';
$sorted_string .= $post_data['pp_Password'] . '&';
$sorted_string .= $post_data['pp_ProductID'] . '&';
$sorted_string .= $post_data['pp_ReturnURL'] . '&';
$sorted_string .= $post_data['pp_TxnCurrency'] . '&';
$sorted_string .= $post_data['pp_TxnDateTime'] . '&';
$sorted_string .= $post_data['pp_TxnExpiryDateTime'] . '&';
$sorted_string .= $post_data['pp_TxnRefNo'] . '&'; 
$sorted_string .= $post_data['pp_TxnType'] . '&';
$sorted_string .= $post_data['pp_Version'] . '&';
$sorted_string .= $post_data['ppmpf_1'] . '&';
$sorted_string .= $post_data['ppmpf_2'] . '&';
$sorted_string .= $post_data['ppmpf_3'] . '&';
$sorted_string .= $post_data['ppmpf_4'] . '&';
$sorted_string .= $post_data['ppmpf_5'];

// sha256 hash encoding
$pp_SecureHash = hash_hmac('sha256', $sorted_string, JAZZCASH_INTEGERITY_SALT);
// NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

$post_data['pp_SecureHash'] =  $pp_SecureHash;

// echo $sorted_string; 
// echo '<br>'; 
// echo $pp_SecureHash; 
// echo '<br>';
// exit;

// insert $post_data array into database for validating secure hash
// $sql = "INSERT INTO payment_validation(
// 	pp_TxnRefNo,
// 	pp_TxnDateTime,
// 	product_id,
// 	product_price,
// 	pp_TxnCurrency,
// 	pp_SecureHash)

// 	VALUES(

// 	'".$post_data['pp_TxnRefNo']."',
// 	'".$post_data['pp_TxnDateTime']."',
// 	'".$product_id."',
// 	'".$product_price."',
// 	'".$post_data['pp_TxnCurrency']."',
// 	'".$post_data['pp_SecureHash']."')"; 


// if($config->query($sql) === FALSE)
// 	{ echo "Error: " . $sql . "<br>" . $config->error; }
?>



<!-- container -->
<section class="showcase">
    <div class="container">
        <div class="pb-2 mt-4 mb-2 border-bottom">
            <h2 style="text-align: center; margin-bottom: 50px;"><?php ?> JAZZCASH Payment Gateway Integration in PHP - Checkout</h2>
        </div>
        <span id="success-msg" class="payment-errors"></span>


        <!-- JAZZCASH payment form -->
        <form action="<?php echo $form_post_url; ?>" method="POST" id="myCCForm" style="background-color: aliceblue;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <div class="row"></div>
                    <!--Form with header-->
                    <div class="card border-gray rounded-0" style="padding: 20px; box-shadow: 2px 5px 10px rgba(0,0,0,0,5);">
                        <div class="card-header p-0">
                            <div class="bg-gray text-left py-2">
                                <h5 class="pl-2"><strong>Product Name: </strong><?php echo $product_name; ?></h5>
                                <h6 class="pl-2"><strong>Product Price: </strong> <?php echo $subtotal; ?> PKR</h6>
                            </div>
                        </div>

                        <input type="hidden" name="amount" value="<?php echo $subtotal; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

                        <input type="hidden" name="pp_Version" value="<?php echo $post_data['pp_Version']; ?>">
                        <input type="hidden" name="pp_TxnType" value="<?php echo $post_data['pp_TxnType']; ?>">
                        <input type="hidden" name="pp_Language" value="<?php echo $post_data['pp_Language']; ?>">
                        <input type="hidden" name="pp_MerchantID" value="<?php echo $post_data['pp_MerchantID']; ?>">
                        <input type="hidden" name="pp_SubMerchantID" value="<?php echo $post_data['pp_SubMerchantID']; ?>">
                        <input type="hidden" name="pp_Password" value="<?php echo $post_data['pp_Password']; ?>">
                        <input type="hidden" name="pp_BankID" value="<?php echo $post_data['pp_BankID']; ?>">
                        <input type="hidden" name="pp_BankID" value="<?php echo $product_id ?>">



                        <input type="hidden" name="pp_TxnRefNo" value="<?php echo $post_data['pp_TxnRefNo']; ?>">
                        <input type="hidden" name="pp_Amount" value="<?php echo $post_data['pp_Amount']; ?>">
                        <input type="hidden" name="pp_TxnCurrency" value="<?php echo $post_data['pp_TxnCurrency']; ?>">
                        <input type="hidden" name="pp_TxnDateTime" value="<?php echo $post_data['pp_TxnDateTime']; ?>">
                        <input type="hidden" name="pp_BillReference" value="<?php echo $post_data['pp_BillReference']; ?>">
                        <input type="hidden" name="pp_Description" value="<?php echo $post_data['pp_Description']; ?>">
                        <input type="hidden" name="pp_TxnExpiryDateTime" value="<?php echo $post_data['pp_TxnExpiryDateTime']; ?>">
                        <input type="hidden" name="pp_ReturnURL" value="<?php echo $post_data['pp_ReturnURL']; ?>">
                        <input type="hidden" name="pp_SecureHash" value="<?php echo $post_data['pp_SecureHash']; ?>">
                        <input type="hidden" name="ppmpf_1" value="<?php echo $post_data['ppmpf_1']; ?>">
                        <input type="hidden" name="ppmpf_2" value="<?php echo $post_data['ppmpf_2']; ?>">
                        <input type="hidden" name="ppmpf_3" value="<?php echo $post_data['ppmpf_3']; ?>">
                        <input type="hidden" name="ppmpf_4" value="<?php echo $post_data['ppmpf_4']; ?>">
                        <input type="hidden" name="ppmpf_5" value="<?php echo $post_data['ppmpf_5']; ?>">


                        <div class="card-body p-3">
                            <div class="input-group-text">Pay With <img width="120px" src="<?php  ?>./images/jazzcash_logo.jpeg"></div>
                            <p>JazzCash Mobile Account can be registered on any Jazz or Warid number</p>
                            <p>Biometric-verified Jazz and Warid customers can self-register their Mobile Account simply by dialing *786#.</p>

                            <div class="text-right">
                                <a href="index.php" id="payBtn" class="btn btn-primary py-2">Back</a>
                                <button type="submit" id="payBtn" class="btn btn-info py-2">Pay</button>
                            </div>

                        </div>

                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



<?php include("footer.php"); ?>