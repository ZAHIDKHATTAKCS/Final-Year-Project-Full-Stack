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
            <img src="../assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo" class="rounded" />
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
                <input type="password" name="password" class="form-control" placeholder="Create Password" required />
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
                $_SESSION['Seller_Pic']=$Fetch_Record['Seller_Picture'];

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
</body>

</html>