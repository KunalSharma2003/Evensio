<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $mysqli = require __DIR__ . "/database.php";
    $email = $mysqli->real_escape_string($_POST['email']);
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $mysqli->query($query);

    if ($result->num_rows === 1) {
        $newPassword = $_POST['password'];
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateQuery = "UPDATE users SET hashedPassword = '$hashedPassword' WHERE email = '$email'";
        $updateResult = $mysqli->query($updateQuery);

        if ($updateResult) {
            echo "<script> alert('Your password has been successfully updated.');window.location.href = 'LoginPage.php';</script> ";
        } else {
            echo "<script> alert('Failed to update the password. Please try again later'); </script>";
        }
    } else {
        echo "<script> alert('Email not found. Please enter a valid email address.');window.location.href = 'ForgotPassword.html'; </script>";
    }
    $mysqli->close();
}
?>
