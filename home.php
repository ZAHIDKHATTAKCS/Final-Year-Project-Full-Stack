<?php
session_start(); //session start
include ('DBconnection.php');
if(!isset($_SESSION['Buyer_Pic'])){
  ?>
  <script>
    alert("Please Login first");
    location.replace('Buyer/buyer signin.php');
  </script>
  <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="assets/Bootstrap 5/css/bootstrap.min.css" />

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- min.js link -->
  <script type="text/JavaScript" src="assets/Bootstrap 5/js/bootstrap.min.js"></script>

  <!-- css link -->
  <link rel="stylesheet" href="assets/Custom Css/fyp.css" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?>" type="image/x-icon">
</head>

<body class="body">

  <!-- Navbar starts here -->
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
                <a class="nav-link text-center" href="Contact page/contact.php">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-center" href="FAQ.php">FAQ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-center" href="Add to cart.php">Add To Cart</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-center" href="Logout.php">Log Out</a>
              </li>

              
              <li class="nav-item">

                <img src="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?> " class="nav-link img-fluid rounded-circle" alt="login user" width="100px">

              </li>
            </ul>
          </div>
        </div>


      </div>

    </nav>
  </div>
  <!-- the end of navbar container -->

  <br><br>
  <!-- main -->
  <div class="container-fluid">
    <div class="row">
      <!-- animation -->
      <div class="col-sm-12 col-md-6 col-lg-4 d-sm-block align-items-center text-center m-auto">
        <h1 class="animate__animated animate__slideInLeft animated-h1 mt-sm-4">
          Online Shop Tracking System
        </h1>
        <br />
        <p class="animate__animated animate__slideInDown animated-p">
          Welcome to Online Shop Tracking system, your ultimate online
          shopping tracking solution! Here at Track It, we understand the
          anticipation and excitement that comes with online shopping. Waiting
          for your precious purchases to arrive can be an anxious time, and
          that's where we step in. Our platform offers real time tracking,
          updates, and notifications for all your online shopping orders
          across various retailers and couriers, all in one place
        </p>
      </div>

      <!-- video -->
      <div class="video  col-md-6 col-sm-12 col-lg-8 d-md-flex justify-content-center mt-2">
        <video width="95%" controls autoplay loop muted>
          <source src="assets/video.mp4" type="video/mp4" />
        </video>
      </div>
    </div>

    <!-- features row -->
    <div class="row text-center mt-5 text-dark">
      <h2 class="text-dark fw-bolder text-center">Features</h2>
      <div class="card-body col-sm-6 col-md-3 col-lg-3 align-items-center justify-content-center p-5 text-center">
        <i class="fa-solid fa-truck-fast"></i>
        <p class="text-dark fw-bolder">Fast Shipping</p>
      </div>

      <div class="card-body col-sm-6 col-md-3 col-lg-3 align-items-center justify-content-center p-5 text-center">
        <i class="fa-solid fa-wallet"></i>
        <p class="text-dark fw-bolder">Money Guarntee</p>
      </div>

      <div class="card-body col-sm-6 col-md-3 col-lg-3 align-items-center justify-content-center p-5 text-center">
        <i class="fa-solid fa-mobile"></i>
        <p class="text-dark fw-bolder">Payment Method</p>
      </div>

      <div class="card-body col-sm-6 col-md-3 col-lg-3 align-items-center justify-content-center p-5 text-center">
        <i class="fa-solid fa-chalkboard-user"></i>
        <p class="text-dark fw-bolder">Online Support</p>
      </div>
    </div>
  </div>

  <!-- popular categories -->
  <h2 class="Catogories fw-bolder text-dark text-center" id="Popular categories">
    Popular Categories
  </h2>

  <!-- Row 1 -->
  <div class="container d-sm-block d-md-flex justify-content-md-between align-items-center p-3">
    <div class="row popular-categories-cards gap-3 d-flex justify-content-between">
      <!-- Card 1 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Laptops/laptop.png" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Laptops</h5>
        </div>
        <a href="Home-Categories/laptops.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 1 End -->

      <!-- Card 2 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Cameras/Nikon Camera/Nikon 1.jpg" class="card-img-top img-fluid w-75 mt-3" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Cameras</h5>
        </div>
        <a href="Home-Categories/Cameras.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 2 End -->

      <!-- Card 3 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Headphones/headphones.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Headphones</h5>
        </div>
        <a href="Home-Categories/Headphones.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 3 End -->
    </div>
  </div>


  <!-- Row 2 -->
  <div class="container d-sm-block d-md-flex justify-content-md-between align-items-center p-3">
    <div class="row popular-categories-cards gap-3 d-flex justify-content-between">
      <!-- Card 4 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/LCD/Dell LCD/Dell LCD 1.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Monitors</h5>
        </div>
        <a href="Home-Categories/Monitors.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 4 End -->

      <!-- Card 5 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Laptop Stands/Normal Stand/Normal Stand 1.jpg" class="card-img-top img-fluid w-75 mt-3"
          alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Laptop Stands</h5>
        </div>
        <a href="Home-Categories/Laptop Stands.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 5 End -->

      <!-- Card 6 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Computer/Tower PC/Tower 1.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Personal Computers</h5>
        </div>
        <a href="Home-Categories/Personal Comptuers.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 6 End -->
    </div>
  </div>

  <br />
  <br />



  <!-- New Arrivals -->
  <div class="container" id="newarrivals">
    <h2 class="New-arrivals text-center">
      <span class="fw-bolder text-dark p-3 rounded-2">New Arrivals</span>
    </h2>
    <h2 class="mt-4 text-dark fw-bolder text-center">Products</h2>

    <!-- i make this md block because we have two main containers inside it -->
    <div class="container d-sm-block d-md-block justify-content-md-between align-items-center p-3">
      <!-- row 1 in New Arrivals -->
      <div class="row new-arrivals-cards gap-3 d-flex justify-content-between">
        <!-- Card 1 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Laptops/laptop.png" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Laptop core i 7</h5>
            <p class="card-text text-success">Price 50000 Rs</p>
          </div>
        </div>
        <!-- Card 1 End -->

        <!-- Card 2 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center text-center">
          <img src="assets/Icons/Headphones/headphone5.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">
              Wireless Headphones for Apple
            </h5>
            <p class="card-text text-success">Price 4000 Rs</p>
          </div>
        </div>
        <!-- Card 2 End -->

        <!-- Card 3 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Cameras/camera7.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Video Camera</h5>
            <p class="card-text text-success">Price 30000 Rs</p>
          </div>
        </div>
        <!-- Card 3 End -->
      </div>

      <!-- row 2 in New Arrivals -->
      <div class="row new-arrivals-cards gap-3 d-flex justify-content-between mt-5">
        <!-- Card 4 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Headphones/wirless1.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Tiktok Airpods</h5>
            <p class="card-text text-success">Price 1200 Rs</p>
          </div>
        </div>
        <!-- Card 4 End -->

        <!-- Card 5 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center text-center">
          <img src="assets/Icons/Laptops/laptop3.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Core i 5</h5>
            <p class="card-text text-success">Price 25000 Rs</p>
          </div>
        </div>
        <!-- Card 5 End -->

        <!-- Card 6 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Mobile/lucian-alexe-yh0UtueiZ-I-unsplash.jpg" class="card-img-top img-fluid"
            alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">4 in 1 Cable</h5>
            <p class="card-text text-success">Price 1000 Rs</p>
          </div>
        </div>
        <!-- Card 6 End -->
      </div>

      <!-- row 3 in New Arrivals -->
      <div class="row new-arrivals-cards gap-3 d-flex justify-content-between mt-5">
        <!-- Card 7 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Mobile/mobile5.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">ZERO Mobile</h5>
            <p class="card-text text-success">Price 2200 Rs</p>
          </div>
        </div>
        <!-- Card 7 End -->

        <!-- Card 8 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center text-center">
          <img src="assets/Icons/Cameras/Nikon Camera/Nikon 2.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">High Resolution Nikon Camera</h5>
            <p class="card-text text-success">Price 50000 Rs</p>
          </div>
        </div>
        <!-- Card 8 End -->

        <!-- Card 9 -->
        <div class="card col-10 col-md-3 col-sm-8 d-flex justify-content-center align-items-center">
          <img src="assets/Icons/Headphones/headphone3.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Headphone</h5>
            <p class="card-text text-success">Price 800 Rs</p>
          </div>
        </div>
        <!-- Card 9 End -->
      </div>

      <br /><br />
    </div>
  </div>






  <!-- Mega Sales Banner -->
  <div class="row col-11 Banner-row text-dark d-flex align-items-center justify-content-center text-center p-3 pb-3 m-4 rounded shadow">

    <div class="col-sm-6 col-md-4 col-lg-4">
      <h2>Mega Sales Online Shop Tracking System</h2> <br>
      <p> Unbelievable deals and Massive Discounts Await You At our Mega Sales Online Shop Tracking System</p>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-4">
      <img src="assets/Icons/Banner's-mobile.png" class="w-100 img-fluid d-none d-sm-flex d-md-flex" alt="...">
    </div>

    <div class=" Promo col-sm-6 col-md-4 col-lg-4">
      <h2>Promo</h2>
      <h5>Friday Deals</h5><br>
      <a href="" class="btn btn-success">Start Shopping</a>
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