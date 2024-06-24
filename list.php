<?php
// Include the database connection
include 'login.php';

// Query to fetch data from the 'coupons' table
$query = "SELECT Code, Date, Hour, is_used FROM coupons";

$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    // Output the table header
    echo "<table id='couponTable' class='display'>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>Is Used</th>
                </tr>
            </thead>
            <tbody>";

    // Output data rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Code'] . "</td>
                <td>" . $row['Date'] . "</td>
                <td>" . $row['Hour'] . "</td>
                <td>" . $row['is_used'] . "</td>
              </tr>";
    }

    // Close the table
    echo "</tbody></table>";
} else {
    echo "No coupons found.";
}

// Close the database connection
$conn->close();
?>
