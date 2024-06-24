<?php
// Include the database connection
include 'login.php';

// Function to generate a random alphanumeric string of a specified length
function generateRandomString($length = 15) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// Generate a random 15-character alphanumeric code
$code = generateRandomString(15);

// Get the current date and time
$currentDate = date("Y-m-d");
$currentTime = date("H:i:s");

// Insert the data into the 'coupons' table
$sql = "INSERT INTO coupons (Code, Date, Hour) VALUES ('$code', '$currentDate', '$currentTime')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>QR Code Coupon</title>
        <!-- Add your CSS styles here to make it prettier -->
        <style>
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background-color: #333; /* Background color */
            }

            #qrcode-container {
                background-color: #fff; /* QR code background color */
                padding: 20px;
                border: 2px solid #333;
                text-align: center;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #logo {
                width: 256px; /* Match the QR code's width */
                height: auto;
                z-index: 1; /* Ensure the image is on top */
            }

            button {
                background-color: #007bff; /* Button background color */
                color: #fff; /* Button text color */
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                margin-top: 20px;
                font-size: 18px; /* Button font size */
                border-radius: 5px; /* Button border radius */
            }
        </style>
    </head>
    <body>
        <div id='qrcode-container'>
            <img id='logo' src='logo.png' alt='Logo'>
            <div id='qrcode'></div>
            <button id='downloadButton' onclick='downloadCapture()'>Download as Image</button>
        </div>

        <!-- Add QRCode.js library URL -->
        <script src='https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js'></script>
        <script>
            // Create the QR code
            var qrcode = new QRCode(document.getElementById('qrcode'), {
                text: '$code',
                width: 256,
                height: 256,
            });

            // Function to download the capture
            function downloadCapture() {
                var qrcodeContainer = document.getElementById('qrcode-container');
                var downloadButton = document.getElementById('downloadButton');

                // Hide the download button
                downloadButton.style.display = 'none';

                // Capture the content
                html2canvas(qrcodeContainer).then(function (canvas) {
                    // Restore the download button visibility
                    downloadButton.style.display = 'block';

                    // Create a download link
                    var link = document.createElement('a');
                    link.href = canvas.toDataURL('image/png');
                    link.download = 'qr_capture.png';
                    link.click();
                });
            }
        </script>
        <script src='https://html2canvas.hertzen.com/dist/html2canvas.min.js'></script>
    </body>
    </html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
