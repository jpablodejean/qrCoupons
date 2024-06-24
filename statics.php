<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Statistics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .chart-container {
            text-align: center;
            margin-top: 20px;
        }

        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coupon Statistics</h1>
        <div class="chart-container">
            <canvas id="couponChart" width="400" height="200"></canvas>
        </div>

        <?php
        // Include the database connection
        include 'login.php';

        // Query to count the total number of rows
        $totalQuery = "SELECT COUNT(*) AS total FROM coupons";

        // Query to count the number of rows where is_used is 1
        $usedQuery = "SELECT COUNT(*) AS used FROM coupons WHERE is_used = 1";

        // Execute the queries
        $totalResult = $conn->query($totalQuery);
        $usedResult = $conn->query($usedQuery);

        if ($totalResult && $usedResult) {
            $totalRow = $totalResult->fetch_assoc();
            $usedRow = $usedResult->fetch_assoc();

            // Calculate the total number of coupons
            $totalCoupons = $totalRow['total'];

            // Calculate the number of used coupons
            $used = $usedRow['used'];

            // Calculate the percentage
            if ($totalCoupons > 0) {
                $percentage = ($used / $totalCoupons) * 100;
                echo "<p>Total coupons: " . $totalCoupons . "</p>";
                echo "<p>Used coupons: " . $used . "</p>";
                echo "<p>Percentage of coupons used: " . number_format($percentage, 2) . "%" . "</p>";
            } else {
                echo "<p>No coupons in the database.</p>";
            }
        } else {
            echo "<p>Error executing queries: " . $conn->error . "</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('couponChart').getContext('2d');
        var couponChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Coupons', 'Used Coupons'],
                datasets: [{
                    label: 'Coupon Statistics',
                    data: [<?php echo $totalCoupons; ?>, <?php echo $used; ?>],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)', // Blue
                        'rgba(255, 99, 132, 0.6)'  // Red
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
