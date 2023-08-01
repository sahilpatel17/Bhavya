<?php
require_once 'vendor/autoload.php'; 
$client = new Google_Client();
$client->setApplicationName('Car Rental App');
$client->setScopes(Google_Service_Calendar::CALENDAR_EVENTS);
$client->setAccessType('offline');

$companyname = $_POST['company_name'];
$model = $_POST['model'];
$seats = $_POST['seats'];
$startDate = $_GET['start_date']; 
$endDate = $_GET['end_date']; 

if ($result) {
    echo "<h1>Here are some best options we'v found as according to your choice!.....</h1>";
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "Company Name: " . $row['company_name'] . "<br>";
        echo "Car Model: " . $row['model'] . "<br>";
      
        echo "<br>";
    }
} else {
    echo "No cars available for the selected criteria.";
}


if ($bookingSuccess) {
    echo "Booking successful! Your car is reserved from $startDate to $endDate.";
} else {
    echo "Booking failed. The car may not be available for the selected dates.";
}
?>

