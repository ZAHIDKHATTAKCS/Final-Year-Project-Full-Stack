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
    <title>Frequently Ask Questions</title>

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

    <link rel="stylesheet" href="assets/Custom Css/Faq.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="Buyer/<?php echo $_SESSION["Buyer_Pic"]?>"
        type="image/x-icon">
</head>

<body class="body">

    <!-- navigation bar -->
    <div class="container-fluid navbar_container">

        <nav class="navbar navbar-expand-lg d-sm-flex d-md-flex">
            <div class="container d-flex justify-content-between">
                <!-- Logo -->
                <img src="assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo"
                    class="rounded me-5" />
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
                        <ul
                            class="navbar-nav d-md-flex justify-content-md-between align-items-center align-items-md-center">
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
                                <a class="nav-link text-center" href="FAQ.php">FAQ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-center" href="Add to cart.php">Add To Cart</a>
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

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

        <!-- banner -->
        <div class="container d-flex justify-content-center align-items-center mt-4">
            <img src="assets/Icons/FAQ/Faq-Banner.jpeg" class="img-fluid rounded-3" alt="Faq Banner">
        </div> <br>

        <!-- Questionare -->
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <!-- Question # 01 -->

            <h4>What is the 7-day Checking and Replacement Warranty?</h4>

            <p>
                Our 7-day Replacement and Checking Warranty is a service we created in order to give you
                peace of mind. You have 7 days, that’s 168 hours, to check your product for any unlikely issues.
                We’ll verify your claim and replace the product for you. In case you find any of the following
                issues, give us a call or email us:
            </p>
            <ul>
                <li> You accidentally received the wrong product</li>
                <li> You have been overcharged</li>
                <li>You found manufacturer defects </li>
            </ul> <br>

            <!-- Question # 02 -->

            <h2>Are your Products Genuine/Original? </h2>
            <p>
                At Online Shop tracking System, we believe in originality. “If it’s not original, it’s not at Online
                Shop tracking System!” is our policy and we stand by it. As such, every product you find at online Shop
                Tracking System, whether it’s for Rs. 200 or Rs. 200,000, is 100% genuine/original.
            </p> <br>

            <!-- Question # 03 -->

            <h2> Where are you Located?</h2>
            <p>
                You can enjoy shopping at any one of Online shop Tracking System 6 outlets. They are located at:

            <ul>
                <li>Peshawar Saddar </li>
                <li> Forest Bazar Shop Peshawar</li>
            </ul>
            </p>

            <!-- Question # 04 -->

            <h2>What is the Delivery Time?</h2>
            <p>
                While we try to get your product into your hands as fast as possible, all online orders usually
                take 24-72 hours to be there. In extremely rare cases, such as when we specially import a
                product for you, it may take up to 5 working days.
            </p>

            <!-- Question # 04 -->

            <h2>Do you have an Exchange Policy? </h2>
            <p>
                Yes, we do! If by some extremely rare chance the product you receive is not up to your
                standards, all you have to do is call or email us and let us know within 7 days of receiving the
                product. Once we receive your claim, we’ll wait for your product to arrive by a courier of your
                choice and payment, and we’ll exchange it for a product agreed upon.
            </p>

            <!-- Furthar clarifications -->

            <p>
                If you would like further clarification about Online Shop Tracking System payment options, feel free to
                contact us on +92 - 316-8895431 or email us at mshehzad110123@gmail.com
            </p>


        </div>

        <!-- Contact form -->
        <div
            class="row col-12 gap-2 col-md-8 d-flex flex-column justify-content-center align-items-center mt-4 text-center">
            <h2>Contact Form</h2>
            <div class="d-flex flex-column d-md-flex flex-md-row">
                <form action=""
                    class="w-100 col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <input type="text" name="" class="form-control" placeholder="Enter your Full Name" required>
                    <input type="email" name="" class="form-control mt-2 " placeholder="Enter your Email" required>
                    <input type="text" name="" class="form-control mt-2 " placeholder="Enter your Address" required>
                    <input type="text" name="" class="form-control mt-2 " placeholder="Enter your Company" required>
                    <textarea name="" class="form-control mt-2 " placeholder="Enter Message" required></textarea>
                    <button type="submit" name="submit" class="btn btn-success w-100 mt-3">Send Form</button>
                </form>

                <img src="assets/Icons/FAQ/laptop.jpeg" class="img-fluid col-md-6" alt="laptop img">
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