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
    body {
      height: 100vh;
    }

    .maindiv {
      height: 100vh;
    }

    .main {
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

    ::-webkit-scrollbar {
      display: none;
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
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          Menu
        </button>

        <!-- Offcanvas component -->
        <div class="offcanvas offcanvas-start" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Admin! Welcome to Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class=" h-100">
              <ul class="d-flex flex-column justify-content-between fs-3">
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="buyers.php">Buyers</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="Add product.php">Add Product</a></li>
                <li><a href="">Log out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <img src="../../assets/Team Members Images/Muhammad Zahid Backend Developer.JPG" alt="" class="w-25 img-fluid">
    </header>

    <!-- Add product -->
    <div class="d-blcok text-dark text-center bg-white p-4">
      <h3>Hi Admin Select Category to Add Products</h3>
      <!-- category section -->
      <div class=" w-100 overflow-scroll p-3 rounded-3">
        <div class="d-flex flex-column gap-4  ">
          <!-- Card 1 -->
          <div class="card d-flex justify-content-center align-items-center ">
            <img src="../../assets/Icons/Laptops/laptop.png" class="card-img-top img-fluid" alt="Card top image" />
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h5 class="card-title text-dark">Laptops</h5>
            </div>
            <a href="Add Products/laptops.php" class="btn btn-outline-success mb-3">Add Product</a>
          </div>
          <!-- Card 1 End -->

          <!-- Card 2 -->
          <div class="card d-flex justify-content-center align-items-center">
            <img src="../../assets/Icons/Cameras/camera1.png" class="card-img-top img-fluid w-75 mt-3"
              alt="Card top image" />
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h5 class="card-title text-dark">Cameras</h5>
            </div>
            <a href="Add Products/Camera.php" class="btn btn-outline-success mb-3">Add Product</a>
          </div>
          <!-- Card 2 End -->

          <!-- Card 3 -->
          <div class="card d-flex justify-content-center align-items-center">
            <img src="../../assets/Icons/Headphones/headphones.jpg" class="card-img-top img-fluid"
              alt="Card top image" />
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h5 class="card-title text-dark">Headphones</h5>
            </div>
            <a href="Add Products/Headphone.php" class="btn btn-outline-success mb-3">Add Product</a>
          </div>
          <!-- Card 3 End -->
        </div>
      </div>
      <br>

      <!-- row 2 starts here -->
      <div class="d-flex flex-column gap-4 p-3">
        <!-- Card 4 -->
        <div class="card d-flex justify-content-center align-items-center">
          <img src="../../assets/Icons/LCD/Dell LCD/1.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Monitors</h5>
          </div>
          <a href="Add Products/Monitors.php" class="btn btn-outline-success mb-3">Add Product</a>
        </div>
        <!-- Card 4 End -->

        <!-- Card 5 -->
        <div class="card d-flex justify-content-center align-items-center ">
          <img src="../../assets/Icons/Laptop Stands/Normal Stand/1.jpg" class="card-img-top img-fluid w-75 mt-3"
            alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Laptops Stand</h5>
          </div>
          <a href="Add Products/Laptops Stands.php" class="btn btn-outline-success mb-3">Add Product</a>
        </div>
        <!-- Card 5 End -->

        <!-- Card 6 -->
        <div class="card d-flex justify-content-center align-items-center">
          <img src="../../assets/Icons/Computer/Tower PC/1.jpg" class="card-img-top img-fluid" alt="Card top image" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-dark">Personal Computers</h5>
          </div>
          <a href="Add Products/Personal Computers.php" class="btn btn-outline-success mb-3">Add Product</a>
        </div>
        <!-- Card 6 End -->
      </div>
    </div>
  </div>
  </div>


  <!-- for Laptop and big screens -->
  <div class="row d-md-flex align-items-md-center d-none w-100 main">
    <!-- admin div -->
    <div class="col-md-3 bg-dark d-md-flex flex-md-column justify-content-md-center align-items-md-center h-100">
      <img src="../../assets/Team Members Images/Muhammad Zahid Backend Developer.JPG" alt=""
        class="w-50 rounded-circle img-fluid mt-1 border border-3 border-white">
      <h3>Welcome Admin</h3>
      <ul class="text-decoration-none w-100 h-100 fs-4">
        <li><a href="./dashboard.php" class="btn btn-outline-info mt-4">Home</a></li>
        <li><a href="./buyers.php" class="btn btn-outline-info mt-4">Buyers</a></li>
        <li><a href="./order.php" class="btn btn-outline-info mt-4">Orders</a></li>
        <li><a href="./Add product.php" class="btn btn-outline-info mt-4">Add Product</a></li>
        <li><a href="" class="btn btn-outline-info mt-4">Logout</a></li>
      </ul>
    </div>

    <!-- Content div -->
    <div
      class="col-md-9 d-none d-md-flex flex-md-column justify-content-md-between align-items-md-center text-dark text-center h-100 bg-white p-4">
      <h3>Hi Admin Select Category to Add Products</h3>
      <!-- category section -->
      <div class="border border border-dark w-100 overflow-scroll p-3 rounded-3">
        <div class="popular-categories-cards gap-4 d-md-flex flex-column justify-content-between">
          <div class="d-md-flex  justify-content-md-between ">
            <!-- Card 1 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center col-sm-8">
              <img src="../../assets/Icons/Laptops/laptop.png" class="card-img-top img-fluid" alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Laptops</h5>
              </div>
              <a href="Add Products/laptops.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 1 End -->

            <!-- Card 2 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center col-sm-8">
              <img src="../../assets/Icons/Cameras/camera1.png" class="card-img-top img-fluid w-75 mt-3"
                alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Cameras</h5>
              </div>
              <a href="Add Products/Camera.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 2 End -->

            <!-- Card 3 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center">
              <img src="../../assets/Icons/Headphones/headphones.jpg" class="card-img-top img-fluid"
                alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Headphones</h5>
              </div>
              <a href="Add Products/Headphone.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 3 End -->
          </div>

          <div class="d-md-flex justify-content-md-between">
            <!-- Card 4 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center col-sm-8">
              <img src="../../assets/Icons/LCD/Dell LCD/1.jpg" class="card-img-top img-fluid" alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Monitors</h5>
              </div>
              <a href="Add Products/Monitors.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 4 End -->

            <!-- Card 5 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center col-sm-8">
              <img src="../../assets/Icons/Laptop Stands/Normal Stand/1.jpg" class="card-img-top img-fluid w-75 mt-3"
                alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Laptops Stand</h5>
              </div>
              <a href="Add Products/Laptops Stands.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 5 End -->

            <!-- Card 3 -->
            <div class="card col-md-3 d-flex justify-content-center align-items-center col-sm-8">
              <img src="../../assets/Icons/Computer/Tower PC/1.jpg" class="card-img-top img-fluid"
                alt="Card top image" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title text-dark">Personal Computers</h5>
              </div>
              <a href="Add Products/Personal Computers.php" class="btn btn-outline-success mb-3">Add Product</a>
            </div>
            <!-- Card 3 End -->
          </div>




        </div>
      </div>
    </div>
  </div>

</body>

</html>