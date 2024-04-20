<?php
session_start();
include('Final.php');
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
    <title>FinalPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/newfinal.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-*">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="assets/img/LOGO.gif" class="img-fluid" alt="Logo" width="150px" height="auto"> </a>
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
    <form action="Submit.php" method="post">
        <div class="container big-container">
            <h4>Your Order :</h4>
            <div class="container row-con">
                <div class="row">
                    <div class="col">
                     <label>Customer Name:</label>
                    </div>
                    <div class="col">
                        <label> <?php echo $_SESSION['username']; ?></label>
                     </div>
                </div>
                <!-- Row 2 -->
                <div class="row">
                    <div class="col">
                     <label>Event Type:</label>
                    </div>
                    <div class="col">
                        <label> <?php echo $eventType; ?> </label> <input type="hidden" name="eventType" value="<?php echo $eventType; ?>" > 
                    </div>
                </div>
                <!-- Row 3 -->
                <div class="row">
                    <div class="col">
                     <label>SelectedTheme:</label>
                    </div>
                    <div class="col">
                       <img src="<?php echo $selectedtheme; ?>" class="img-fluid">
                    </div>
                </div>
             </div>
             <!-- final rows -->
             <div class="container t-container">

              <div class="row">
                <div class="col">
                  <h5> Vendor </h5>
                 </div>
                <div class="col">
                 <h5>Date </h5>
                </div>
                <div class="col">
                 <h5>Time</h5> 
                </div>
                <div class="col">
                 <h5>Details</h5>  
                </div>
              </div>

              <!-- Food -->
              <div class="row">
                <div class="col">
                  <label>Food/Catering</label>
                 </div>
                <div class="col">
                  <label for="Fooddate"><?php echo $Fooddate; ?> </label> <input type="hidden" name="Fooddate" value="<?php echo $Fooddate; ?>" >
                </div>
                <div class="col">
                  <label for="Foodtime"> <?php echo $Foodtime; ?></label> <input type="hidden" name="Foodtime" value="<?php echo $Foodtime; ?>" > 
                </div>
                <div class="col">
                  <label  for="Fooddetails"> <?php echo $Fooddetails; ?></label> <input type="hidden" name="Fooddetails" value="<?php echo $Fooddetails; ?>" >
                </div>
              </div>
              <!-- Equipment rental -->

              <div class="row">
                <div class="col">
                  <label >Equipment-rental</label>
                 </div>
                <div class="col">
                  <label for="equipmentdate" ><?php echo $equipmentdate; ?></label> <input type="hidden" name="equipmentdate" value="<?php echo $equipmentdate; ?>" >
                </div>
                <div class="col">
                  <label for="equipmenttime"> <?php echo $equipmenttime; ?></label>  <input type="hidden" name="equipmenttime" value="<?php echo $equipmenttime; ?>" >
                </div>
                <div class="col">
                  <label for="equipmentdetails"> <?php echo $equipmentdetails; ?></label> <input type="hidden" name="equipmentdetails" value="<?php echo $equipmentdetails; ?>" >
                </div>
              </div>

              <!-- Music -->
             <div class="row">
              <div class="col">
                <label>Music and entertainment</label> 
               </div>
              <div class="col">
                <label for="musicdate"><?php echo $musicdate; ?></label> <input type="hidden" name="musicdate" value="<?php echo $musicdate; ?>" >
              </div>
              <div class="col">
                <label for="musictime"> <?php echo $musictime; ?></label>  <input type="hidden" name="musictime" value="<?php echo $musictime; ?>" >
              </div>
              <div class="col">
                <label for="musicdetails"> <?php echo $musicdetails; ?></label> <input type="hidden" name="musicdetails" value="<?php echo $musicdetails; ?>" >
              </div>
               </div>
               

               <!-- Photo -->
            <div class="row">
              <div class="col">
                <label>Photographer <br>/Videogarpher</label>
               </div>
              <div class="col">
                <label for="photodate"><?php echo $photodate; ?></label> <input type="hidden" name="photodate" value="<?php echo $photodate; ?>" >
              </div>
              <div class="col">
                <label for="phototime"> <?php echo $phototime; ?></label> <input type="hidden" name="phototime" value="<?php echo $phototime; ?>" > 
              </div>
              <div class="col">
                <label for="photodetails"> <?php echo $photodetails; ?> </label> <input type="hidden" name="photodetails" value="<?php echo $photodetails; ?>" >
              </div>
            </div>
             
             <!-- Design -->

             <div class="row">
              <div class="col">
                <label>Design,decore, & floristry</label>
               </div>
              <div class="col">
                <label for="designdate"><?php echo $designdate; ?></label> <input type="hidden" name="designdate" value="<?php echo $designdate; ?>" >
              </div>
              <div class="col">
                <label for="designtime"> <?php echo $designtime; ?></label>  <input type="hidden" name="designtime" value="<?php echo $designtime; ?>" > 
              </div>
              <div class="col">
                <label for="designdetails"> <?php echo $designdetails; ?> </label> <input type="hidden" name="designdetails" value="<?php echo $designdetails; ?>" >
              </div>
              </div>
             
             <!-- Service  -->
             
             <div class="row">
                <div class="col">
                  <label>ServiceCharge: </label>
                </div>
                <div class="col" style="text-align: center;">
                  <label><?php echo $_SESSION['totalCost'],"Rs"; ?></label> <input type="hidden" name="ServiceCharge" value="<?php echo $_SESSION['totalCost']; ?>" >
                </div>
             </div>

                  
              <div class="container footer-btn-container ">
                <!-- <button class="footer-button">Done</button> -->
                <input type="submit" class="footer-button" value="Book">
              </div>
           </div>

            </div>           
        
           </div>    
        </div>
      </div>
</form>
      <!-- Footer -->
      <footer class="container-fluid footer-container">
      </div>
      <div class="footer-last">
          <ul class="mr-5">
               <h4><b> CONTENT</b></h4>
               <li>Calendar Of Festivals</li>
               <li>New Assets</li>
               <li>The Most Popular Content</li>
               <li>Search Trends</li>
               <li>Blog</li>
           </ul>
          <ul class="m-5">
               <h4 class="pt-2"><b> INFORMATION</b></h4>
               <li>Pricing</li>
               <li>About Us</li>
               <li>Press Room</li>
               <li>Business</li>
               <li>Jobs</li>
               <li>Sell Your Content</li>
           </ul>
          <ul class="ml-5 ">
               <h4 class="pt-2"><b> LEGAL</b></h4>
               <li>Terms and Conditions</li>
               <li>Privacy Policy</li>
               <li>Copyright Information</li>
               <li>Cookies Policy</li>
               <li>Support</li>
               <li>Contact</li>
           </ul>
       </div>    
   </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>