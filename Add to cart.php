<?php
session_start(); //session start
include 'DBconnection.php';
if (!isset($_SESSION['Buyer_Pic'])) {
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to cart </title>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="assets/Bootstrap 5/css/bootstrap.min.css" />


  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- min.js link -->
  <script type="text/JavaScript" src="assets/Bootstrap 5/js/bootstrap.min.js"></script>


  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- favicon link -->
  <link rel="shortcut icon" href="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?>" type="image/x-icon">

  <!-- css link -->
  <link rel="stylesheet" href="assets/Custom Css/Add-To-Cart.css" />
</head>

<body class="body text-dark">

  <div class="container-fluid navbar_container">

    <nav class="navbar navbar-expand-lg d-sm-flex d-md-flex">
      <div class="container d-flex justify-content-between">
        <!-- Logo -->
        <img src="assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded me-5" />
        <!-- User Icon -->

        <!-- Toggler button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <img src="Buyer/<?php echo $_SESSION['Buyer_Pic']; ?>" class="nav-link img-fluid rounded-circle" alt="login user" width="100px">
              </li>
            </ul>
          </div>
        </div>

      </div>

    </nav>
  </div> <br>
  <!-- the end of navbar container -->




  <!-- Here is the PHP code for fetching Add to cart products -->
  <h2 class="text-center mb-4 fw-bolder mt-3">Your Cart Products</h2>



  <!-- PHP code for small screen -->
  <?php
  $Buyer_Name = $_SESSION['Buyer_Name'];

  $select = "SELECT * FROM `add to cart` WHERE `Buyer Name` = '$Buyer_Name'";
  $query = mysqli_query($conn, $select);
  while ($fetch = mysqli_fetch_array($query)) {
  ?>

  <!-- Add to cart Card -->
  <div class="container d-block d-md-flex mt-4 ">

    <!-- Product Info Section -->

    <!-- image, description and remove button row -->
    <div class="row d-sm-block d-md-none justify-content-md-between align-items-center p-2 m-2 bg-light shadow-lg p-0 m-0">
      <!-- image -->
      <div class="img col-md-3 col-sm-8 d-flex justify-content-center align-items-center p-3 border-primary ">
        <img src="seller/Dashboard/Add Products/<?php echo $fetch['Product Picture']; ?>"  class="img-fluid" alt="Product Image">
      </div>
      <div class="img-description d-sm-block d-md-none fw-bold text-center col-sm-8 justify-content-center align-items-center text-left w-100">
        <h6 class="fw-bold">Product Title : <?php echo $fetch['Product Title']; ?></h6>
        <p>Product Description: <?php echo $fetch['Product Description']; ?></p>
        <p>Product Quantity: <?php echo $fetch['Product Quantity']; ?></p>
        <p>Product Price : <?php echo $fetch['Product Price']; ?> PKR</p>
        <p>Total : <?php echo $fetch['Total']; ?> PKR</p>
      </div>

      <div class="remove col-md-3 col-sm-8 justify-content-center align-items-center text-center">
        <a href="remove_from_cart.php?id=<?php echo $fetch['Id']; ?>" class="btn btn-danger">Remove from Cart</a>
      </div>
    </div> <br>

    <!-- Product Summary row -->
  </div>

  <?php
  }
  ?>








  <!-- PHP code for big screen -->
  <?php
  $Buyer_Name = $_SESSION['Buyer_Name'];

  $select = "SELECT * FROM `add to cart` WHERE `Buyer Name` = '$Buyer_Name'";
  $query = mysqli_query($conn, $select);
  while ($fetch = mysqli_fetch_array($query)) {
  ?>

  <!-- Add to cart Card -->
  <div class="container d-none d-md-flex mt-4 ">

    <!-- Product Info Section -->

    <!-- image, description and remove button row -->
    <div class="row d-sm-block d-md-flex justify-content-md-between align-items-center p-2 m-2 bg-light shadow-lg p-0 m-0">
      <!-- image -->
      <div class="img col-md-3 col-sm-8 d-flex justify-content-center align-items-center p-3 border-primary ">
        <img src="seller/Dashboard/Add Products/<?php echo $fetch['Product Picture']; ?>"  class="img-fluid" alt="Product Image">
      </div>
      <div class="img-description  col-md-3 col-sm-8 justify-content-center align-items-center text-left fw-bolder w-50">
        <h5 class="fw-bold"> Product Title : <?php echo $fetch['Product Title']; ?></h5>
        <p>Product Description: <?php echo $fetch['Product Description']; ?></p>
        <p>Product Quantity: <?php echo $fetch['Product Quantity']; ?></p>
        <p>Product Price : <?php echo $fetch['Product Price']; ?> PKR</p>
        <p>Total : <?php echo $fetch['Total']; ?> PKR</p>
      </div>

      <div class="remove col-md-3 col-sm-8 justify-content-center align-items-center text-center">
        <a href="remove_from_cart.php?id=<?php echo $fetch['Id']; ?>" class="btn btn-danger">Remove from Cart</a>
      </div>
    </div> <br>

    <!-- Product Summary row -->
  </div>

  <?php
  }
  ?>
  

  <!-- Footer -->
  <div class="container-fluid p-0 m-0 ">
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