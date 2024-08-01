<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seller Sign In</title>
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
                    <img src="../assets/Icons/User icon.png" alt="..." width="70px" class="dropdown-toggle me-sm-5"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />
                    <ul class="dropdown-menu" style="left: auto; right: 0;" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="../Buyer/buyer.php">Buyer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sign in Form -->
    <div class="row d-flex justify-content-center w-100">
        <marquee behavior="" direction="" class="text-dark fs-5 mt-3">Enter your Details to Login as a Seller</marquee>
        <form class="col-11 col-sm-8 col-md-4 form border border-danger mb-3 text-dark rounded-2 " method="post">
            <h3 class="mb-5 text-dark">Login as a Seller</h3>

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
        </form>
    </div>

        <!-- PHP Code goes here -->
        <?php
        include "../DBconnection.php";

        if(isset($_POST['submit'])){
            $Email = $_POST['email'];
            $Password = $_POST['password'];

            // now fetching database password and email to compare with the user typed one
            $Email_Search= "SELECT * FROM `seller_table` WHERE Seller_Email = '$Email'";

            $run_query= mysqli_query($conn,$Email_Search);

            $Email_counts=mysqli_num_rows($run_query);

            // echo $Email_counts;
            
            if($Email_counts){

                // if emails found so fetch full details of the correspondence email from db
                $Fetch_Record=mysqli_fetch_array($run_query);

                // now fetch password from db
                $DB_Password = $Fetch_Record['Password'];

                // now fetch Seller name from db
                $_SESSION['Seller_Name'] = $Fetch_Record['Seller_Name'];


                // now fetch his picture
                $_SESSION['Seller_Pic'] = $Fetch_Record['Seller_Picture'];

                // now verifying db and user enter password
                $Password_verify = password_verify($Password,$DB_Password);

                if($Password_verify){
                    ?>
                        <script>
                            alert('You are Logged in!');
                            location.replace('Dashboard/dashboard.php');
                        </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("You Enter Wrong Password!");
                    </script>
                    <?php
                }
            }else{
                ?>
                    <script>
                        alert('You are not a Seller!');
                    </script>
                <?php
            }
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