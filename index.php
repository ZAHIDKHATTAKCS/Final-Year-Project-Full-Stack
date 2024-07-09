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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- min.js link -->
  <script type="text/JavaScript" src="assets/Bootstrap 5/js/bootstrap.min.js"></script>

  <!-- css link -->
  <link rel="stylesheet" href="assets/Custom Css/fyp.css" />
</head>

<body class="body d-sm-block d-md-flex">
  <nav class="navbar w-100 navbar_container">
    <div class="container-fluid container-md d-flex d-sm-flex justify-content-sm-around justify-content-md-between">
      <!-- Logo -->
      <img src="assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded" />
      <!-- User Icon -->
      <div>
        <div class="dropdown">
          <img src="assets/Icons/User icon.png" alt="..." width="70px" class="dropdown-toggle me-sm-5" type="button"
            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
          <ul class="dropdown-menu" style="left: auto; right: 0;" aria-labelledby="dropdownMenuButton1">
            <li>
              <a class="dropdown-item" href="./Seller/seller signin.php">Seller</a>
            </li>
            <li class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="./Buyer/buyer.php">Buyer</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- the end of navbar container -->

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
    <div class="row popular-categories-cards gap-3 d-flex justify-content-between" >
      <!-- Card 1 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Laptops/laptop.png" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Laptops</h5>
        </div>
        <a href="Index-Categries/laptops.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 1 End -->

      <!-- Card 2 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Cameras/camera1.png" class="card-img-top img-fluid w-75 mt-3" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Cameras</h5>
        </div>
        <a href="Index-Categries/Cameras.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 2 End -->

      <!-- Card 3 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Headphones/headphones.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Headphones</h5>
        </div>
        <a href="Index-Categries/Headphones.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 3 End -->
    </div>
  </div>


  <!-- Row 2 -->
  <div class="container d-sm-block d-md-flex justify-content-md-between align-items-center p-3">
    <div class="row popular-categories-cards gap-3 d-flex justify-content-between">
      <!-- Card 4 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/LCD/Dell LCD/1.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Monitors</h5>
        </div>
        <a href="Index-Categries/Monitors.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 4 End -->

      <!-- Card 5 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Laptop Stands/Normal Stand/1.jpg" class="card-img-top img-fluid w-75 mt-3"
          alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Laptop Stands</h5>
        </div>
        <a href="Index-Categries/Laptop Stands.php" class="btn btn-outline-primary mb-3">Details</a>
      </div>
      <!-- Card 5 End -->

      <!-- Card 6 -->
      <div class="card col-9 col-md-3 d-flex justify-content-center align-items-center col-sm-8">
        <img src="assets/Icons/Computer/Tower PC/1.jpg" class="card-img-top img-fluid" alt="Card top image" />
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
          <h5 class="card-title text-dark">Personal Computers</h5>
        </div>
        <a href="Index-Categries/Personal Comptuers.php" class="btn btn-outline-primary mb-3">Details</a>
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
          <img src="assets/Icons/Cameras/camera2.jpg" class="card-img-top img-fluid" alt="Card top image" />
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


  <!-- Footer -->
  <footer class="container-fluid" style="background-color: #36cad1;">
    <div class="row border border-success text-dark text-center">
      <h2 class="fw-bolder">Online Shop Tracking System</h2>
      <div class="d-block justify-content-between d-md-flex g-3">

        <!-- Social Links -->
        <div class="w-100">
          <h2>Social Links</h2><br><br>
          <div class="d-flex justify-content-between align-items-center w-100">
            <i class="fa-brands fa-facebook"><a href=""></a></i>
            <i class="fa-brands fa-linkedin"><a href=""></a></i>
            <i class="fa-brands fa-instagram"><a href=""></a></i>
            <i class="fa-brands fa-twitter"><a href=""></a></i>
            <i class="fa-brands fa-tiktok">
            </i>
          </div>
        </div><br><br>

        <!-- Pagination -->
        <div class="w-100">
          <h2>Links</h2><br>
          <a href="#Popular categories" class="text-dark fw-bolder fs-5 ">Popular Categories</a><br><br>
          <a href="#newarrivals" class="text-dark fw-bolder fs-5">New Arrivals</a><br><br>
        </div>
      </div>

      <!-- Copyright -->
      <div class="d-flex justify-content-center align-items-center">
        <p class="fs-5 fw-bolder">&copy; Copyright 2024</p>
      </div>
    </div>
  </footer>
</body>

</html>