<?php
  session_start();
  include ('DBconnection.php');
  if(!isset($_SESSION['Buyer_Pic'])){
    ?>
    <script>
      alert("Please Login First");
      location.replace('Buyer/buyer signin.php');
    </script>
    <?php
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="assets/Bootstrap 5/css/bootstrap.min.css" />

    <!-- Bootstrap 4 link -->
    <link rel="stylesheet" href="assets/Bootstrap 4/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- min.js link -->
    <script type="text/JavaScript" src="assets/Bootstrap 5/js/bootstrap.min.js"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->

    <link rel="stylesheet" href="assets/Custom Css/About.css" />

      <!-- Favicon -->
  <link rel="shortcut icon" href="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?>" type="image/x-icon">


</head>

<body class="body">
    <div class="container-fluid navbar_container">

        <nav class="navbar navbar-expand-lg d-sm-flex d-md-flex">
          <div class="container d-flex justify-content-between">
            <!-- Logo -->
            <img src="assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded me-5" />
            <!-- User Icon -->
    
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon ">
                <div class="bg-dark" style="width: 20px; height:2px;">
                </div>
                <div class="bg-dark mt-2" style="width: 20px; height:2px;">
                </div>
                <div class="bg-dark mt-2" style="width: 20px; height:2px;">
                </div>
              </span>
            </button>
    
            <!-- Navbar items for mobile views-->
            <div class="collapse navbar-collapse navbar" id="navbarNav">
              <div class="w-100">
                <ul class="navbar-nav d-md-flex justify-content-md-between align-items-center align-items-md-center">
                  <li class="nav-item">
                    <a class="nav-link text-center" href="home.php">Home</a>
                  </li>
    
                  
    
                  <li class="nav-item">
                    <a class="nav-link text-center" href="About.php">About Us</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link text-center" href="./Contact page/contact.php">Contact Us</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link text-center" href="./FAQ.php">FAQ</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link text-center" href="./Add to cart.php">Add To Cart</a>
                  </li>

                  <li class="nav-item">
                <a class="nav-link text-center" href="Logout.php">Log Out</a>
              </li>
    
                  
                  <li class="nav-item">
                    <img src="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?>"
                      class="nav-link img-fluid rounded-circle" alt="login user" width="100px">
                  </li>
                </ul>
              </div>
            </div>

          </div>
    
        </nav>
      </div> <br>
      <!-- the end of navbar container -->

    <div class="container-fluid mb-5"> 
        <!-- banner -->
        <div>
            <img src="assets/Icons/About-Us/About-us-Banner.png" class="img-fluid w-100 d-flex" alt="Banner img">
        </div> <br>
        
        <!-- Our Vision & our Mission -->
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-success text-center">
                Our Vision 
            </h2>
            <p class="text-center">
                To become the most loved Brand of Pakistan.
            </p> 

            <h2 class="text-success text-center">Our Mission</h2>
            <p class="text-center">
                Online Shop Tracking System is on a mission to offer the best possible E-commerce marketplace and retail experience for both online and offline shoppers of all ages around Pakistan with the widest range of quality brands and products. we put the 
                customers first as we strive to grow and scale through our top-notch tailored 
                technology. Online Shop Tracking System team adheres to the belief that good 
                ethics is good  Business.
            </p>
        </div>


        <!-- Team members -->

        <h1 class="text-center text-success mt-4">The Online Store Builders</h1>
        <div class="container d-flex flex-column justify-content-center align-items-center gap-5  d-sm-flex justify-content-sm-center d-md-flex justify-content-md-center flex-md-row  text-center mt-4">
            <!-- Team member 1 Shahzad -->
            <div class="">
                <img src="assets/Team Members Images/shehzad.png" class="img-fluid bg-primary rounded-circle w-50" alt="">
                <h3>Muhammad Shahzad</h3>
                <h5>Designation : Graphic Designer</h5>
                <h5>Roll No : 30</h5>
            </div>


            <!-- Team member 2 Bilal -->
            <div class="">
                <img src="assets/Team Members Images/Bilal.png" class="img-fluid bg-primary rounded-circle w-50" alt="">
                <h3>Bilal Ahmad</h3>
                <h5>Designation : Front End Developer</h5>
                <h5>Roll No : 2</h5>
            </div>

            <!-- Team member 3 Zahid Khattak -->
            <div class="">
                <img src="assets/Team Members Images/zahid.png" class="img-fluid bg-primary rounded-circle w-50" alt="">
                <h3>Zahid Khattak</h3>
                <h5>Designation : Backend Developer</h5>
                <h5>Roll No : 474</h5>
            </div>

        </div>

        </div>


    </div>

      <!-- Footer -->
  <div class="container-fluid p-0 m-0">
    <!-- Footer -->
    <footer class="text-center text-white w-100" style="background-color: #36cad1;">
      <!-- Grid container -->
      <div class="container">
        <!-- Section: Links -->
        <section class="mt-5">
          <!-- Grid row-->
          <div class="row text-center d-flex justify-content-center pt-5">
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class=" font-weight-bold">
                <a href="home.php" class="text-white text-decoration-none">Home</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="About.php" class="text-white text-decoration-none">About Us</a>
              </h6>
            </div>
            <!-- Grid column -->
            
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="Contact page/contact.php" class="text-white text-decoration-none">Contact Us</a>
              </h6>
            </div>
            <!-- Grid column -->
            

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="FAQ.php" class="text-white text-decoration-none">FAQ</a>
              </h6>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="Add to cart.php" class="text-white text-decoration-none">Add To Cart</a>
              </h6>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="Logout.php" class="text-white text-decoration-none">Log Out</a>
              </h6>
            </div>
            <!-- Grid column -->
            

          </div>
          <!-- Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-5" />



        <!-- Section: Social -->
        <section class="text-center mb-5">
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </section>
        <!-- Section: Social -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright:
        <a class="text-white " href="https://zahidkhattak.vercel.app/" target="_blank">Zahidkhattak.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of Footer -->

</body>

</html>