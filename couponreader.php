<?php
// Include your database connection code here
include('login.php');

// Retrieve the scanned QR code from the POST request
$data = json_decode(file_get_contents('php://input'));
$scannedCode = $data->code;

// Check if the code is in the database
$query = "SELECT * FROM coupons WHERE code = '$scannedCode'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($row['is_used'] == 0) {
        // Mark the coupon as used
        $updateSql = "UPDATE coupons SET is_used = 1 WHERE code = '$scannedCode'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Coupon code redeemed";
        } else {
            echo "Error updating coupon status: " . mysqli_error($conn);
        }
    } else {
        echo "This code has already been used";
    }
} else {
    echo "This code is not valid";
}

mysqli_close($conn);
?>
