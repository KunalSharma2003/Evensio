<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "signup";
$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

$sql1 = "SELECT Event FROM custom WHERE Id = (SELECT MAX(Id) FROM custom)";
$result1 = $mysqli->query($sql1);
if ($result1->num_rows > 0) {
    $row = $result1->fetch_assoc();
    $eventType = $row["Event"];
} else {
    $eventType = "NoSelected";
}

// Select the selected theme
$sql2 = "SELECT Selectedtheme FROM custom WHERE Id = (SELECT MAX(Id) FROM custom)";
$resultTheme = $mysqli->query($sql2);
if ($resultTheme->num_rows > 0) {
    $rowTheme = $resultTheme->fetch_assoc();
    $selectedtheme = $rowTheme["Selectedtheme"];
} else {
    $selectedtheme = "Theme Not Selected";
}
//Food
$sql3 = "SELECT date, time, details FROM food WHERE Id = (SELECT MAX(Id) FROM food)";
$resultFood = $mysqli->query($sql3);

// Fetch and display the food details
if ($resultFood->num_rows > 0) {
    $rowFood = $resultFood->fetch_assoc();
    $Fooddate = $rowFood["date"];
    // $Foodtime = $rowFood["time"];
    $Foodtime = date("H:i", strtotime($rowFood["time"]));
    $Fooddetails = $rowFood["details"];

    if ($Fooddate === null || $Fooddate === "" || $Fooddate === "0000-00-00" ||
        $Foodtime === null || $Foodtime === "" || $Foodtime === "00:00:00.000000" ||
        $Fooddetails === null || $Fooddetails === "") {
        $Fooddate = "Not Selected";
        $Foodtime = "Not Selected";
        $Fooddetails = "Not Selected";
    }

 }
//Eq
$sql4 = "SELECT date, time, details FROM equipment WHERE Id = (SELECT MAX(Id) FROM equipment)";
$resultequipment = $mysqli->query($sql4);

// Fetch and display the food details
if ($resultequipment->num_rows > 0) {
    $rowequipment = $resultequipment->fetch_assoc();
    $equipmentdate = $rowequipment["date"];
    // $Foodtime = $rowFood["time"];
    $equipmenttime = date("H:i", strtotime($rowequipment["time"]));
    $equipmentdetails = $rowequipment["details"];

    if ($equipmentdate === null || $equipmentdate === "" || $equipmentdate === "0000-00-00" ||
        $equipmenttime === null || $equipmenttime === "" || $equipmenttime === "00:00:00.000000" ||
        $equipmentdetails === null || $equipmentdetails === "") {
        $equipmentdate = "Not Selected";
        $equipmenttime = "Not Selected";
        $equipmentdetails = "Not Selected";
    }

} 
//Music
$sql5 = "SELECT date, time, details FROM music WHERE Id = (SELECT MAX(Id) FROM music)";
$resultmusic = $mysqli->query($sql5);

// Fetch and display the music details
if ($resultmusic->num_rows > 0) {
    $rowmusic = $resultmusic->fetch_assoc();
    $musicdate = $rowmusic["date"];
    $musictime = date("H:i", strtotime($rowmusic["time"]));
    $musicdetails = $rowmusic["details"];

    if ($musicdate === null || $musicdate === "" || $musicdate === "0000-00-00" ||
        $musictime === null || $musictime === "" || $musictime === "00:00") {
        $musicdate = "Not Selected";
        $musictime = "Not Selected";
        $musicdetails = "Not Selected";
    }
}
//Photo

$sql6 = "SELECT date, time, details FROM photographer WHERE Id = (SELECT MAX(Id) FROM photographer)";
$resultphoto = $mysqli->query($sql6);

// Fetch and display the music details
if ($resultphoto->num_rows > 0) {
    $rowphoto = $resultphoto->fetch_assoc();
    $photodate = $rowphoto["date"];
    $phototime = date("H:i", strtotime($rowphoto["time"]));
    $photodetails = $rowphoto["details"];

    if ($photodate === null || $photodate === "" || $photodate === "0000-00-00" ||
        $phototime === null || $phototime === "" || $phototime === "00:00") {
        $photodate = "Not Selected";
        $phototime = "Not Selected";
        $photodetails = "Not Selected";
    }
}
//design
$sql7 = "SELECT date, time, details FROM design WHERE Id = (SELECT MAX(Id) FROM design)";
$resultdesign = $mysqli->query($sql7);

// Fetch and display the music details
if ($resultdesign->num_rows > 0) {
    $rowdesign = $resultdesign->fetch_assoc();
    $designdate = $rowdesign["date"];
    $designtime = date("H:i", strtotime($rowdesign["time"]));
    $designdetails = $rowdesign["details"];

    if ($designdate === null || $designdate === "" || $designdate === "0000-00-00" ||
        $designtime === null || $designtime === "" || $designtime === "00:00") {
        $designdate = "Not Selected";
        $designtime = "Not Selected";
        $designdetails = "Not Selected";
    }
}

?>
