<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $servername = $_POST['servername'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbname = $_POST['dbname'];

    // Prepare the new configuration data
    $config_data = '<?php
$servername = "' . $servername . '";
$username = "' . $username . '";
$password = "' . $password . '";
$dbname = "' . $dbname . '";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>';

    // Write the new configuration data to login.php
    file_put_contents('login.php', $config_data);

    echo "Configuration updated successfully.";
} else {
    echo "Invalid request.";
}
?>
