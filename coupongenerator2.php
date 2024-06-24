<?php
// Include the database connection
include 'login.php';

// Generate a random 6-digit code
$code = mt_rand(10000000, 99999999);

// Get the current date and time
$currentDate = date("Y-m-d");
$currentTime = date("H:i:s");

// Insert the data into the 'coupons' table
$sql = "INSERT INTO coupons (Code, Date, Hour) VALUES ($code, '$currentDate', '$currentTime')";

if ($conn->query($sql) === TRUE) {
    // QRCode.js library URL
    $qrcodejs_url = "https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js";

    // JavaScript to generate the QR code
    echo "<script src=\"$qrcodejs_url\"></script>";
    echo "<div id=\"qrcode\"></div>";
    echo "<script>
        var qrcode = new QRCode(document.getElementById('qrcode'), {
            text: '$code',
            width: 256,
            height: 256,
        });
        </script>";



} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
