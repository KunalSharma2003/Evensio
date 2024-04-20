<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "signup";
$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
} else {
    echo "Connected Successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EventName = $_POST["team"];
    $SelectedTheme = $_POST["Theme"];
    //Food
    $foodchecked = isset($_POST["Food"]) ? $_POST["Food"] : ''; 
    $selectedDate1 = isset($_POST["Date1"]) ? $_POST["Date1"] : '';
    $selectedtime1 = isset($_POST["time1"]) ? $_POST["time1"] : '';
    $SelectedOption1 = isset($_POST["selectedOption1"]) ? $_POST["selectedOption1"] : '';
    
    // Equipment
    $Equipment = isset($_POST["Equipment"]) ? $_POST["Equipment"] : ''; 
    $selectedDate2 = isset($_POST["Date2"]) ? $_POST["Date2"] : '';
    $selectedtime2 = isset($_POST["time2"]) ? $_POST["time2"] : '';
    $SelectedOption2 = isset($_POST["selectedOption2"]) ? $_POST["selectedOption2"] : '';
    //Music
    $Music = isset($_POST["Music"]) ? $_POST["Music"] : ''; 
    $selectedDate3 = isset($_POST["Date3"]) ? $_POST["Date3"] : '';
    $selectedtime3 = isset($_POST["time3"]) ? $_POST["time3"] : '';
    $SelectedOption3 = isset($_POST["selectedOption3"]) ? $_POST["selectedOption3"] : '';
    //Photographer
    $Photographer = isset($_POST["Photographer"]) ? $_POST["Photographer"] : ''; 
    $selectedDate4 = isset($_POST["Date4"]) ? $_POST["Date4"] : '';
    $selectedtime4 = isset($_POST["time4"]) ? $_POST["time4"] : '';
    $SelectedOption4 = isset($_POST["selectedOption4"]) ? $_POST["selectedOption4"] : '';
    //Design
    $Design = isset($_POST["Design"]) ? $_POST["Design"] : ''; 
    $selectedDate5 = isset($_POST["Date5"]) ? $_POST["Date5"] : '';
    $selectedtime5 = isset($_POST["time5"]) ? $_POST["time5"] : '';
    $SelectedOption5 = isset($_POST["selectedOption5"]) ? $_POST["selectedOption5"] : '';

    $sql = "INSERT INTO custom (Event,Selectedtheme) VALUES ('$EventName','$SelectedTheme')";
    $sql1= "INSERT INTO Food (type,date,time,details) VALUES ('$foodchecked','$selectedDate1','$selectedtime1','$SelectedOption1')";
    $sql2 = "INSERT INTO Equipment  (type,date,time,details) VALUES ('$Equipment','$selectedDate2','$selectedtime2','$SelectedOption2')";
    $sql3 = "INSERT INTO Music  (type,date,time,details) VALUES ('$Music','$selectedDate3','$selectedtime3','$SelectedOption3')";
    $sql4 = "INSERT INTO Photographer  (type,date,time,details) VALUES ('$Photographer','$selectedDate4','$selectedtime4','$SelectedOption4')";
    $sql5 = "INSERT INTO Design (type,date,time,details) VALUES ('$Design','$selectedDate5','$selectedtime5','$SelectedOption5')";
    
    $success = $mysqli->query($sql) && $mysqli->query($sql1) && $mysqli->query($sql2) && $mysqli->query($sql3) && $mysqli->query($sql4) && $mysqli->query($sql5);
    $totalCost = 0;

    if (!empty($foodchecked)) {
        $totalCost += 100;
    }
    if (!empty($Equipment)) {
        $totalCost += 100;
    }
    if (!empty($Music)) {
        $totalCost += 100;
    }
    if (!empty($Photographer)) {
        $totalCost += 100;
    }
    if (!empty($Design)) {
        $totalCost += 100;
    }
    if ($success) {
        session_start();
        $_SESSION['totalCost'] = $totalCost;
        echo "<script>window.location.href = 'FinalPage.php';</script>";
    } else {
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
}

?>
