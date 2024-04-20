<?php
session_start();
include('Final.php');
// include('Submit.php');
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>alert('Please LogIn First');window.location.href = 'LoginPage.php';</script>";
    exit;
}
if (isset($_SESSION['totalCost'])) {
    $totalCost = $_SESSION['totalCost'];
} else {
    echo "Total Cost not found in the session.";
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/Payment.css">
</head>
<body>

   <div class="container-fluid">
        <div class="container">
            <h2>Secure Checkout</h2>
                <div class="row">
                    <img src="assets/img/PaymentQr.jpeg"  class="img-fluid" alt="Qr-code" >
                    <br>
                    <span class="span">Scan&Pay!</span>
                </div>  
                    <div class="row">
                        <div class="col"> <label> CustomerName : </label></div>
                        <div class="col"> <?php echo $_SESSION['username']; ?> </div>
                    </div>

                    <div class="row">
                        <div class="col"> <label> Amount : </label></div>
                        <div class="col"> <label > <?php echo $_SESSION['totalCost']; ?> </label> </div>
                    </div>

                    <div class="row" id="btn">
                        <a href="Logout.php">LogOut</a>
                    </div>
                
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>