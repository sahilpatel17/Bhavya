<!DOCTYPE html>
<html>
<head>
    <title>PHP Table from Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Replace the database credentials with your own
$servername = "localhost";
$username = "GrpD";
$password = "010";
$dbname = "car_rental_system";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the 'users' table
$sql = "SELECT company_name, model, seat FROM cars";
$result = $conn->query($sql);

// Generate the table
if (isset($_GET['view_button'])) {
if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr>';
    echo '<th>company_name</th>';
    echo '<th>model</th>';
    echo '<th>seat</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["company_name"] . '</td>';
        echo '<td>' . $row["model"] . '</td>';
        echo '<td>' . $row["seat"] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No data found in the database.";
}
}

// Close the database connection
$conn->close();
?>

</body>
</html>