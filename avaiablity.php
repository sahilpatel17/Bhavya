<?php
$servername = "localhost";
$username = "GrpD";
$password = "010";
$database = "car_rental_system";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    
    $sql = "SELECT * FROM cars 
            WHERE id NOT IN (
                SELECT car_id FROM bookings 
                WHERE ('$start_date' BETWEEN start_date AND end_date) OR ('$end_date' BETWEEN start_date AND end_date)
            )";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Available Cars:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "Car ID: " . $row["id"] . ", Make: " . $row["make"] . ", Model: " . $row["model"] . ", Year: " . $row["year"] . "<br>";
        }
    } else {
        echo "<h2>No cars available for the selected date range.</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Rental System - Car Availability</title>
</head>
<body>
    <h1>Car Availability</h1>
    <form action="" method="post">
        <label>Start Date:</label>
        <input type="date" name="start_date" required>
        <br>
        <label>End Date:</label>
        <input type="date" name="end_date" required>
        <br>
        <input type="submit" value="Check Availability">
    </form>
</body>
</html>
