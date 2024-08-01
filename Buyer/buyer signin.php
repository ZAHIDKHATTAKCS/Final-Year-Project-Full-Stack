<!DOCTYPE html>
<html lang="en">

<head>
  <title>Buyer Sign In</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="../assets/Bootstrap 5/css/bootstrap.min.css" />

  <!-- Bootstrap 4 link -->
  <link rel="stylesheet" href="../assets/Bootstrap 4/css/bootstrap.min.css" />

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- min.js link -->
  <script type="text/JavaScript" src="../assets/Bootstrap 5/js/bootstrap.min.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css link -->
  <link rel="stylesheet" href="../assets/Custom Css/fyp.css" />
</head>

<body class="body">
  <nav class="navbar w-100 navbar_container">
    <div class="container-fluid container-md d-flex d-sm-flex justify-content-sm-around justify-content-md-between">
      <!-- Logo -->
      <a href="../index.php">
        <img src="../assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded" />
      </a>
      <!-- User Icon -->
      <div>
        <div class="dropdown">
          <img src="../assets/Icons/User icon.png" alt="..." width="70px" class="dropdown-toggle me-sm-5" type="button"
            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
          <ul class="dropdown-menu" style="left: auto; right: 0;" aria-labelledby="dropdownMenuButton1">
            <li>
              <a class="dropdown-item" href="../Seller/seller signin.php">Seller</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  


  <!-- Sign in Form -->
  <div class="row d-flex justify-content-center w-100">
    <marquee behavior="" direction="" class="text-dark fs-5 mt-3">Enter your Details to Login as a Buyer</marquee>
    <form class="col-11 col-sm-8 col-md-4 form border border-danger mb-3 text-dark rounded-2 " method="post">
      <h3 class="mb-5 text-dark">Login as a Buyer</h3>

      <!-- Email -->
      <div class="input-group">
        <i class="fa-regular fa-envelope input-group-text"></i>
        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required />
      </div>

      <!-- Password -->
      <div class="mt-3 input-group">
        <i class="fa-solid fa-lock input-group-text"></i>
        <input type="password" name="password" class="form-control" placeholder="Enter your Password" required />
      </div>



      <!-- Sign in Button -->
      <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="mt-3 btn btn-primary w-100">
          Sign in
        </button>
      </div>

      <!-- already have account -->
      <p class="d-flex justify-content-center mt-3">
        <span>
          I have no Account ?
        </span>
        <a href="buyer.php" class="ml-2">Create Account</a>
      </p>
    </form>
  </div>


  <!-- php code -->
  <?php
  session_start();
  
  include('../DBconnection.php');

  if(isset($_POST['submit'])){
    $Buyer_Email = $_POST['email'];
    $Buyer_Password = $_POST['password'];

    $Retreive_Query = "SELECT * FROM `buyers table` WHERE Buyer_Email = '$Buyer_Email'";

    $Fire_Query=mysqli_query($conn,$Retreive_Query);

    $Email_Counts = mysqli_num_rows($Fire_Query);

    if($Email_Counts){
      // if email founds that user enter than fetch all his Correspondence data
      $Fetch_Data = mysqli_fetch_array($Fire_Query);

      $DB_Password = $Fetch_Data['Password'];

      // fetch buyer name also for using it in other pages
      $_SESSION['Buyer_Name'] = $Fetch_Data['Buyer_Name'];

      $_SESSION['Buyer_Pic'] = $Fetch_Data['Buyer_Image'];
      
      // now verifying both password check if the user password and db passwords are matching

      $Verifying_Passwords = password_verify($Buyer_Password,$DB_Password);

      if($Verifying_Passwords){
        ?>
        <script>
        alert('you are logged in as a buyer! Explore our E Commerce shop now');
        location.replace('../home.php');
        </script>
        <?php
      }else{
        ?>
        <script>alert('You enter the wrong Password! try again');</script>
        <?php
      }
    }else{
      ?>
      <script>
        alert('Your Email is not exists in buyer list! please Register yourself first');
        location.replace('buyer.php');
      </script>
      <?php
    }
  }else{
  }
  ?>

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
