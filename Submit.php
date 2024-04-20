<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "signup";
$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the required fields are set
    // Retrieve form data
        $customerName = $_SESSION['username'];
        $eventType = $_POST['eventType'];
        $foodDate = $_POST['Fooddate'];
        $foodTime = $_POST['Foodtime'];
        $foodDetails = $_POST['Fooddetails'];
        $equipmentDate = $_POST['equipmentdate'];
        $equipmentTime = $_POST['equipmenttime'];
        $equipmentDetails = $_POST['equipmentdetails'];
        $musicDate = $_POST['musicdate'];
        $musicTime = $_POST['musictime'];
        $musicDetails = $_POST['musicdetails'];
        $photoDate = $_POST['photodate'];
        $photoTime = $_POST['phototime'];
        $photoDetails = $_POST['photodetails'];
        $designDate = $_POST['designdate'];
        $designTime = $_POST['designtime'];
        $designDetails = $_POST['designdetails'];
        $charge=$_POST['ServiceCharge'];

        // Prepare and execute the SQL query
        $stmt = $mysqli->prepare("INSERT INTO `orders` (`customer_name`, `event_type`, `food_date`, `food_time`, `food_details`, `equipment_date`, `equipment_time`, `equipment_details`, `music_date`, `music_time`, `music_details`, `photo_date`, `photo_time`, `photo_details`, `design_date`, `design_time`, `design_details`,`Service_Charge`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssssssssi", $customerName, $eventType, $foodDate, $foodTime, $foodDetails, $equipmentDate, $equipmentTime, $equipmentDetails, $musicDate, $musicTime, $musicDetails, $photoDate, $photoTime, $photoDetails, $designDate, $designTime, $designDetails,$charge);

        if ($stmt->execute()) {
            echo "<script>alert('Your Order Submitted');window.location.href = 'Payment.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    }


// Close the database connection
$mysqli->close();
?>
