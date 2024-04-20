<?php    
    $mysqli = require __DIR__ . "/database.php";   

    $sql = "INSERT INTO users (username, email,mobilenumber,hashedPassword)
        VALUES (?, ?, ?, ?)";
        
    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
    }
    $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $stmt->bind_param("ssis",
                  $_POST["username"],
                  $_POST["email"],
                  $_POST["mobilenumber"],
                  $hashedPassword);
                  
    if ($stmt->execute()) 
    {
        echo "<script>alert('Signup Successful'); window.location.href = 'LoginPage.php';</script>";
    exit;
    }
    else{

        if ($mysqli->errno === 1062) {
            echo "<script>alert('Email Already Taken');window.location.href = 'Signup.html';</script>";
           } else {
            die($mysqli->error . " " . $mysqli->errno);
        }

    }
?>