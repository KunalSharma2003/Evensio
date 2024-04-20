<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
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
            <a class="nav-link" href="#section">SERVICES</a>
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
<!-- section -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <p class="p1"><b>START PLANNING</b></p>
            <p class="p2"><b>EVENT <br> CUSTOMIZER</b></p>

          <div class="row para">
              <div class="col-6">
              <p>
                Our team is made up of experienced professionals who are dedicated to making your event a success. We have worked with a wide range of clients, from small businesses to large corporations. We are committed to providing personalized services that meet your specific needs.Thank you for visiting our website, and we look forward to working with you to create an unforgettable event!
              </p>
              </div>

              <div class="col-6">
                <p>
                Welcome to our website! We are a team of event management professionals who are passionate about creating unforgettable experiences for our clients. Our mission is to provide high-quality event management services that exceed the expectations of our clients. We specialize in customized event planning, where we work closely with our clients to bring their vision to life.
                Our vision is to become the leading event management company in our region, known for our creativity and attention to detail. We value teamwork, innovation, and customer satisfaction.
                </p>
                </div>
              </div>
          </div>
          <div class="col-6 ">
            <img src="assets/img/1.png" class="img-fluid" alt="">
          </div>
          
        </div>        
      </div>
      <!-- Section -->
      
      <div class="container-fluid" id="section">
        <h1>What you get Here :</h1>
        <div class="container">
          <div class="row card-container">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h3 class="card-title">Freelance Vendors</h3> <hr>
                          <p class="card-text">Our Freelance Vendors page connects clients with talented professionals who specialize in catering, decor, entertainment, and more. Our carefully selected network of experienced freelance vendors helps us provide high-quality services and unforgettable events. If you're a freelance vendor interested in working with us, please contact us to learn more.</p>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h3 class="card-title">Event Customization</h3> <hr>
                          <p class="card-text">Make your event truly special with our event customization services. From venue selection to decor and food, we offer a wide range of options to help you create an event that is uniquely tailored to your needs and preferences. Our team of experts will work with you every step of the way to ensure that your event is a success. Contact us today to learn more and start planning your dream event!</p>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h3 class="card-title">Utility Management</h3> <hr>
                          <p class="card-text">Our Utility Management service helps you save time and money by managing your utility bills for you. We work with a network of trusted providers to ensure that you get the best rates for your electricity, water, and gas bills. Our team of experts will monitor your bills, manage payments, and provide you with regular updates on your usage and costs. With our Utility Management service, you can focus on what matters most while we take care of the rest. Contact us to learn more about how we can help you manage your utility bills!</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row card-container">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Expert Advice</h3> <hr>
                        <p class="card-text">Planning an event can be stressful, but it doesn't have to be. Our team of event professionals is here to help you every step of the way. We offer expert advice on everything from design to execution, so you can be confident that your event will be a success. Whether you're planning a wedding, a corporate event, or a private party, we're here to help you make it a memorable experience. With our expert advice, you'll be able to create an event that's exactly what you want it to be.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Competitive Pricing</h3> <hr>
                        <p class="card-text">At our event customization website, we believe that everyone should have access to affordable event planning services. That's why we offer competitive pricing on all of our packages. We'll work with you to create a package that fits your budget and your needs, so you can have the event of your dreams without breaking the bank. Our pricing is transparent and straightforward, so you'll know exactly what you're getting and how much it will cost. With our competitive pricing, you can have the event you've always wanted without sacrificing quality or service.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Memorable Experiences</h3> <hr>
                        <p class="card-text">Creating a memorable experience is what we do best. From stunning decor to innovative entertainment, we'll work with you to create an event that your guests will never forget. Our team of experienced event planners will take care of every detail, so you can relax and enjoy the moment. We'll work with you to create a unique and personalized event that reflects your style and personality. With our help, you can create a memorable experience that you and your guests will cherish for years to come</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
      <div class="container" id="last-section">

        <div class="row">
          <div class="col-md-6 col-lg-9 ">
            <img class="img-fluid" src="assets/img/3.png" alt="">
          </div>
          <div class="col-md-6 col-lg-3">
            <h4>Follow These Steps :</h4>
            <ul class="container" id="last-ul" >
           <li><button class="step-btn btn-md ">Register</button> </li> 
           <li><button class="step-btn btn-md ">Define Event</button></li> 
           <li><button class="step-btn btn-md ">Date and Time</button></li> 
           <li><button class="step-btn btn-md ">Add Utilities</button> </li>
           <li><button class="step-btn btn-md ">Select Vendors</button> </li>
           <li><button class="step-btn btn-md ">Pay</button></li> 
          </ul>
          </div>
        </div>

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
    </body>
    </html>