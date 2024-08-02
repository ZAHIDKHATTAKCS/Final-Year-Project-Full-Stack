<?php
session_start();
if(!isset($_SESSION['Seller_Pic'])){
  ?>
  <script>
    alert('First Login Please!');
    location.replace('../seller signin.php');
  </script>
  <?php
}

include ('../../DBconnection.php');

//  Fetch all orders data to show in order page and store in global variables

          $selectqry = "SELECT * FROM `orders`";

          $fireqry = mysqli_query($conn,$selectqry);

          while($fetch = mysqli_fetch_array($fireqry)){

            $_SESSION['Product_Name'] = $fetch['Product Name'];

            $_SESSION['Product_Quantity'] = $fetch['Product Quantity'];

            $_SESSION['Product_Price'] = $fetch['Product Price'];
            
            $_SESSION['Product_Pic'] = $fetch['Product Pic 1'];

          }

          $slctqry = "select Id from `orders`";
          $firequry = mysqli_query($conn,$slctqry);
          $orders_Numbers = mysqli_num_rows($firequry);
          ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="../../assets/Bootstrap 5/css/bootstrap.min.css" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- min.js link -->
  <script type="text/JavaScript" src="../../assets/Bootstrap 5/js/bootstrap.min.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css link -->
  <link rel="stylesheet" href="../../assets/Custom Css/fyp.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="Icons/dashboard.png" type="image/x-icon">

  <style>
    body{
      height: 100vh;
    }
    .maindiv{
      height: 100vh;
    }
    .main{
      height: 100vh;
    }

    ul {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0;
      margin: 0;
    }

    ul li {
      list-style-type: none;
    }

    ul li a {
      text-decoration: none;
    }

    @media screen and (min-width: 320px) and (max-width: 768px) {
      h4 {
        font-size: medium;
      }
    }

    @media screen and (min-width: 1024px) and (max-width: 1440px) {
      h4 {
        font-size: 30px;
      }
    }

    @media screen and (min-width: 768px) and (max-width: 1024px) {
      .link {
        font-size: 27px;
      }
    }
  </style>
</head>

<body class="body">



  <!-- for Mobile View -->
  <div class="maindiv d-md-none">
    <header class="border border-dark d-flex justify-content-between bg-dark align-items-center">
      <a href="../../home.php" class="w-25">
        <img src="../../assets/Icons/main_logo.jpeg" alt="" class="w-100 h-100 img-fluid">
      </a>
      <!-- <p class="text-center d-flex align-self-center fs-6">Admin Welcome to Dashboard</p> -->

      <div class="container mt-2 text-dark w-25 h-25">
        <!-- Button to trigger offcanvas -->
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          Menu
        </button>

        <!-- Offcanvas component -->
        <div class="offcanvas offcanvas-start"  id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Hi ! <?php echo $_SESSION['Seller_Name']; ?> Welcome to the Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class=" h-100">
              <ul class="d-flex flex-column justify-content-between fs-3">
                <li><a href="dashboard.php" class="btn btn-outline-info mt-2">Home</a></li>
                <li><a href="buyers.php" class="btn btn-outline-info mt-2" >Buyers</a></li>
                <li><a href="order.php" class="btn btn-outline-info mt-2">Orders</a></li>
                <li><a href="Add product.php" class="btn btn-outline-info mt-2">Add Product</a></li>
                <li><a href="./Delete product.php" class="btn btn-outline-info mt-2">Delete Product</a></li>
                <li><a href="Logout.php" class="btn btn-outline-info mt-2" >Log out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- code for rendering seller pic -->
      <img src="../<?php echo $_SESSION['Seller_Pic'];?>" alt="seller image" class="w-25 img-fluid"> 
    </header>


    <!-- cards div -->
    <div class="row d-md-none mt-3 w-100 d-flex flex-column justify-content-between align-items-center text-dark gap-3">
      <!-- card 1 -->
      <div class="card col-10 d-flex flex-column justify-content-center align-items-center bg-light">
        <img class="card-img-top w-25 mt-3" src="Icons/buyers.jpeg" alt="">
        <div class="card-body">
          <!-- php code for rendering total users -->
          <?php
          $Fetch = "SELECT * FROM `buyers table`";
          
          $result = mysqli_query($conn,$Fetch);

          $Total_Users = mysqli_num_rows($result);

            
          ?>
          <h4 class="card-title">Total Users</h4>
          <p class="card-text text-center"><?php echo $Total_Users ;?></p>
        </div>
      </div>

      <!-- card 2 -->
      <div class="card col-10 d-flex flex-column justify-content-center align-items-center bg-light">
        <img class="card-img-top w-25 mt-3" src="Icons/categories icon.svg" alt="">
        <div class="card-body">
          <h4 class="card-title">Total Categories</h4>
          <p class="card-text text-center">6</p>
        </div>
      </div>

      <!-- card 3 -->
      <div class="card col-10 d-flex flex-column justify-content-center align-items-center bg-light mb-3">
        <img class="card-img-top w-25 mt-3" src="Icons/shopify.svg" alt="">
        <div class="card-body">
          <h4 class="card-title">Total Orders</h4>
          <p class="card-text text-center"><?php echo $orders_Numbers; ?></p>
        </div>
      </div>
    </div>
  </div>



  <!-- for Laptop and big screens -->
  <div class="row d-md-flex align-items-md-center d-none w-100 main">
    <!-- admin div -->
    <div class="col-md-3 bg-dark d-md-flex flex-md-column justify-content-md-center align-items-md-center h-100">
      <img src="../<?php echo $_SESSION['Seller_Pic']; ?>" alt="" class="w-50 rounded-circle img-fluid border border-3 border-white mt-1">
      <h3>Welcome <?php echo $_SESSION['Seller_Name']; ?></h3>
      <ul class="text-decoration-none w-100 h-100 fs-4">
        <li><a href="./dashboard.php" class="btn btn-outline-info mt-4">Home</a></li>
        <li><a href="./buyers.php" class="btn btn-outline-info mt-4">Buyers</a></li>
        <li><a href="./order.php" class="btn btn-outline-info mt-4">Orders</a></li>
        <li><a href="./Add product.php" class="btn btn-outline-info mt-4">Add Product</a></li>
        <li><a href="./Delete product.php" class="btn btn-outline-info mt-4">Delete Product</a></li>
        <li><a href="Logout.php" class="btn btn-outline-info mt-4">Logout</a></li>
      </ul>
    </div>

    <!-- Content div -->
    <div class="col-md-9 d-none d-md-flex justify-content-md-between align-items-md-center text-dark text-center h-100">
      <!-- card 1 -->
      <div class="card col-md-3 d-flex flex-column justify-content-center align-items-center bg-light">
        <img class="card-img-top w-25 mt-3" src="Icons/buyers.jpeg" alt="">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text text-center"><?php echo $Total_Users ?></p>
        </div>
      </div>

      <!-- card 2 -->
      <div class="card col-md-3 d-flex flex-column justify-content-center align-items-center bg-light">
        <img class="card-img-top w-25 mt-2" src="Icons/categories icon.svg" alt="">
        <div class="card-body">
          <h5 class="card-title">Total Categories</h5>
          <p class="card-text text-center">6</p>
        </div>
      </div>

      <!-- card 3 -->
      <div class="card col-md-3 d-flex flex-column justify-content-center align-items-center bg-light mb-3">
        <img class="card-img-top w-25 mt-2" src="Icons/shopify.svg" alt="">
        <div class="card-body">
          <h5 class="card-title">Total Orders</h5>
          <p class="card-text text-center"><?php echo $orders_Numbers ;?></p>


          
        </div>
      </div>
    </div>
  </div>



</body>

</html>