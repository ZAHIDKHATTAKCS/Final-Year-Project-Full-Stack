<?php
session_start();
include '../DBconnection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Stands</title>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../assets/Bootstrap 5/css/bootstrap.min.css" />

    <!-- Bootstrap 4 link -->
    <link rel="stylesheet" href="../assets/Bootstrap 4/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- min.js link -->
    <script type="text/JavaScript" src="../assets/Bootstrap 5/js/bootstrap.min.js"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->

    <link rel="stylesheet" href="../assets/Custom Css/products.css" />

    <!-- Fav icon -->
    <link rel="icon" type="image/x-icon" href="../assets/Icons/Favicons/laptop stand.png">

    <!-- css link -->
    <link rel="stylesheet" href="../assets/Custom Css/fyp.css" />
</head>

<body class="body">

    <!-- navbar starts here -->
    <nav class="navbar w-100 navbar_container">
        <div class="container-fluid container-md d-flex d-sm-flex justify-content-sm-around justify-content-md-between">
            <!-- Logo -->
            <img src="../assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded" />
            <!-- User Icon -->
            <div>
                <div class="dropdown">
                    <img src="../assets/Icons/User icon.png" alt="..." width="70px" class="dropdown-toggle me-sm-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
                    <ul class="dropdown-menu" style="left: auto; right: 0;" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="../Seller/seller signin.php">Seller</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="../Buyer/buyer signin.php">Buyer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- the end of navbar container -->






    <!-- Here are the Products  -->
    <div class="container justify-content-center align-items-center">
        <!-- Products -->

        <!-- row 1 -->
        <div class="container d-flex justify-content-center align-items-center mt-3 text-dark text-center">
            <div class="row d-flex justify-content-between align-items-center gap-3">

                <!-- Here is the PHP code for fetching the laptop stands from laptop stand Table -->
                <?php
                $Select_Query = "SELECT * FROM `laptop stands table`";
                $Fire_Query = mysqli_query($conn, $Select_Query);
                while ($Result = mysqli_fetch_array($Fire_Query)) {


                    $_SESSION['Laptop_Stand_Picture'] = $Result['Picture 1'];


                ?>
                    <!-- Card -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light">
                        <img src="../Seller/Dashboard/Add Products/<?php echo $_SESSION['Laptop_Stand_Picture']; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title"><?php echo $Result['Laptop Stand Title']; ?></p>
                            <p class="bg-success text-white fs-6 p-1 rounded-3 ">Quantity : <?php echo $Result['Laptop Stand Quantity']; ?></p>

                        </div>
                    </div>

                <?php

                }

                ?>

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
                <a href="../Seller/seller signin.php" class="text-white text-decoration-none">Seller</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="font-weight-bold">
                <a href="../Buyer/buyer.php" class="text-white text-decoration-none">Buyer</a>
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