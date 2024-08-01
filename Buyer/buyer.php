<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buyer Sign up</title>
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



  <!-- Sign up Form -->
  <div class="row d-flex justify-content-center w-100">
    <form class="col-11 col-sm-8 col-md-4 form border border-danger mb-3 text-dark rounded-2 " method="POST" enctype="multipart/form-data">
      <h3 class="mb-5 text-dark">Create account as a Buyer</h3>
      <!-- Name -->
      <div class="input-group mb-3 ">
        <i class="fa-regular fa-user input-group-text"></i>
        <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required />
      </div>


      <!-- Email -->
      <div class="input-group">
        <i class="fa-regular fa-envelope input-group-text"></i>
        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required />
      </div>

      <!-- Phone -->
      <div class="input-group mt-3">
        <i class="fas fa-phone input-group-text"></i>
        <input type="phone" name="phone" class="form-control" placeholder="Enter your Phone Number" required />
      </div>


      <!-- Password -->
      <div class="mt-3 input-group">
        <i class="fa-solid fa-lock input-group-text"></i>
        <input type="password" name="password" class="form-control" placeholder="Create Password" required />
      </div>


      <!-- Confirm Password -->
      <div class="mt-3 input-group">
        <i class="fa-solid fa-lock input-group-text"></i>
        <input type="password" name="cpassword" class="form-control" placeholder="Confirm your Password" required />
      </div>

      <!-- Image -->
      <div class="input-group mt-3">
        <input type="file" name="buyerimg" class="form-control" required />
      </div>


      <!-- create account Button -->
      <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="mt-3 btn btn-primary w-100">
          Create Account
        </button>
      </div>

      <!-- already have account -->
      <p class="d-flex justify-content-center mt-3">
        <span>
          Already have an account?
        </span>
        <a href="buyer signin.php" class="ml-2">Sign in</a>
      </p>
    </form>
  </div>

  <!-- PHP code goes here -->
  <?php
  include ('../DBconnection.php');
  if(isset($_POST['submit'])){
    $Buyer_Name = $_POST['name'];
    $Buyer_Email = $_POST['email'];
    $Buyer_Phone = $_POST['phone'];
    $Password = $_POST['password'];
    $Confirm_Password = $_POST['cpassword'];
    $Buyer_Img = $_FILES['buyerimg'];

    $File_Name = $Buyer_Img['name'];
    $File_Path = $Buyer_Img['tmp_name'];
    $File_Error = $Buyer_Img['error'];

    // password encryption
    $Hash_Password = password_hash($Password,PASSWORD_BCRYPT);

    $Hash_Confirm_Password = password_hash($Confirm_Password,PASSWORD_BCRYPT);

    // Check if email already exist

    $Fetch_Email = "select * from `buyers table` where Buyer_Email = '$Buyer_Email'";

    $qry = mysqli_query($conn,$Fetch_Email);

    $Email_Counts = mysqli_num_rows($qry);

    if($Email_Counts){
      ?>
      <script>
      alert('Email already exists login please'); 
      location.replace('buyer signin.php');
      </script>
      <?php
    }else{
      if($Password === $Confirm_Password){
        $Final_Folder = 'Buyer Images/'.$File_Name;

        move_uploaded_file($File_Path,$Final_Folder);

        $Insert_Query = "INSERT INTO `buyers table`(`Buyer_Name`, `Buyer_Email`, `Buyer_Phone`, `Password`, `Confirm_Password`, `Buyer_Image`) VALUES ('$Buyer_Name','$Buyer_Email','$Buyer_Phone','$Hash_Password','$Hash_Confirm_Password','$Final_Folder')";

        $queryrn = mysqli_query($conn,$Insert_Query);
        if($queryrn){
          ?>
          <script>
          alert('Data inserted you are now a buyer! login please');
          location.replace('buyer signin.php');
          </script>
          <?php
        }else{
          ?>
          <script>alert('error in insertion query');</script>
          <?php
        }
      }else{
        ?>
        <script>alert('Double Check, Your Passwords are not matching');</script>
        <?php
      }
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

