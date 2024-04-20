<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style(Contact).css">
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var message = document.getElementById("message").value;
            if (!isNaN(parseFloat(name)) && isFinite(name)) {
                alert("Name cannot contain numeric values.");
                return false;
            }

            if (phone.length !== 10 || isNaN(phone)) {
                alert("Please enter a 10-digit phone number.");
                return false;
            }
            return true;
        }
    </script>
    
</head>
<body>
       
    <div class="container-fluid">
     <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-*">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="assets/img/LOGO.gif" class="img-fluid" alt="Logo" width="200px" height="auto"> </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item mx-4">
              <a class="nav-link " href="index.php">HOME</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#what-you-get">SERVICES</a>
            </li>
            <li class="nav-item  mx-4">
              <a class="nav-link " href="CustomaizationPage.php" >EVENT</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link " href="ContactPage.php">CONTACT</a>
            </li>
            <li class="nav-item mx-4">  
              <!-- <a class="nav-link " id="loginbtn" href="LoginPage.php">LOGIN</a> -->
              <?php
                        session_start();
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                            echo '<a class="nav-link " id="loginbtn" href="Logout.php">LOGOUT</a>';
                        } else {
                            echo '<a class="nav-link " id="loginbtn" href="LoginPage.php">LOGIN</a>';
                        }
               ?> 
            </li>
          </ul>    
         </div>
            </div>
         </nav>
    </div>
     <div class="container">
         <h2>how Can We help ?</h2>
         <p>Send Us a message!</p>
        <form action="Contact.php" class="form-contact" method="post" onsubmit="return validateForm();">
       
         <div class="row">
            <div class="col">
            <label for="name" >Name:</label><br>
            </div>
            <div class="col">
            <input type="text" id="name" name="name" placeholder="FullName" autocomplete="off" required>
            </div>
         </div>

            <div class="row"> 
            <div class="col"> <label for="email">Email:</label></div>  
            <div class="col"><input type="email" id="email" name="email" placeholder="Email-Id" autocomplete="off"  required></div> 
            </div>
       
            <div class="row"> 
                <div class="col"><label for="phone">Phone Number:</label></div>   
            <div class="col"><input type="tel" id="phone" name="phone" placeholder="Moblie-Number" autocomplete="off" ></div> 
            </div>
            <div class="row" >
            <div class="col"  >
                <label for="message">Message:</label>
            </div> 
            <div class="col">
            <textarea id="message" id="message" name="message" rows="7"; placeholder="Please Enter your message" autocomplete="off"  required></textarea>
            </div> 
            </div> 
                
            <div class="footer-btn-container ">
                <input type="submit" class="footer-button" id="btn" value="Submit">
              </div>
            </form>
     </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
