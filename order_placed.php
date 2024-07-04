<?php
session_start();
// Include configuration file 
include("admin/config.php");


include("header.php");
?>


<?php

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
include("admin/config.php");


// If transaction data is available in the URL 
if (
    !empty($_POST['pp_Amount']) && !empty($_POST['pp_AuthCode']) && !empty($_POST['pp_ResponseCode']) && !empty($_POST['pp_MerchantID']) &&
    !empty($_POST['pp_SecureHash']) && !empty($_POST['pp_TxnRefNo']) && !empty($_POST['pp_RetreivalReferenceNo'])
) {
    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    //Get transaction information from URL 
    $Transaction_id     = $_POST['pp_TxnRefNo'];
    $Amount             = $_POST['pp_Amount'];
    $AuthCode             = $_POST['pp_AuthCode'];
    $ResponseCode         = $_POST['pp_ResponseCode'];
    $ResponseMessage     = $_POST['pp_ResponseMessage'];
    $MerchantID         = $_POST['pp_MerchantID'];
    $SecureHash         = $_POST['pp_SecureHash'];
    $RetreivalReferenceNo = $_POST['pp_RetreivalReferenceNo'];

    //add period(.) before the last two digits of $Amount
    $Amount = substr($Amount, 0, -2) . '.00';
    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN



    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    //Insert tansaction data into the database
    if ($ResponseCode == '000') {
        $payment_status = 1;
    } else {
        $payment_status = 0;
    }

    $sql = "INSERT INTO payments(transaction_id,product_price,total,created_date,status) 
		VALUES('" . $Transaction_id . "','" . $Amount . "','" . $Amount . "','" . date("Y-m-d H:i:s") . "','" . $payment_status . "')";

    if ($config->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $config->error;
    }

    $payment_id = $config->insert_id;
    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
} else {
    $ResponseCode = 'error';
    $ResponseMessage = 'Some Serious error occurs please check transaction logs for more detail';
}
?>

<div class="container">
    <div class="status">
        <?php if ($ResponseCode == '000') { ?>
            <!-- --------------------------------------------------------------------------- -->
            <!-- Payment successful -->
            <h1 class="success">Your Payment has been Successful</h1>
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $Transaction_id; ?></p>
            <p><b>Paid Amount:</b> <?php echo $Amount; ?></p>
            <p><b>Payment Status:</b> Success</p>
            <!-- --------------------------------------------------------------------------- -->


            <!-- --------------------------------------------------------------------------- -->
            <!-- Payment not successful -->
        <?php } else { ?>
            <h1 class="error">Your Payment has Failed</h1>
            <p><b>Message: </b><?php echo $ResponseMessage; ?></p>
        <?php } ?>
        <!-- --------------------------------------------------------------------------- -->


    </div>
    <a href="index.php" class="btn-link">Back to Products</a>
</div>



<?php include("footer.php"); ?>