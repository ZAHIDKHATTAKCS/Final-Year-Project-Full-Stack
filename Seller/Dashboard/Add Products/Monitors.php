<?php
    session_start();
    include('../../../DBconnection.php');
    if(!isset($_SESSION['Seller_Pic'])){
        ?>
        <script>
        alert('First Login Please!');
        location.replace('../../seller signin.php');
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Monitors</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../../../assets/Bootstrap 5/css/bootstrap.min.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- min.js link -->
    <script type="text/JavaScript" src="../../../assets/Bootstrap 5/js/bootstrap.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->
    <link rel="stylesheet" href="../../../assets/Custom Css/fyp.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../Icons/tv-solid.svg" type="image/x-icon" />

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
            <a href="../../../home.php" class="w-25">
                <img src="../../../assets/Icons/main_logo.jpeg" alt="" class="w-100 h-100 img-fluid" />
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
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                        <?php echo $_SESSION['Seller_Name']; ?>! Welcome to Menu
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="h-100">
                            <ul class="d-flex flex-column justify-content-between fs-3">
                                <li><a href="../dashboard.php" class="btn btn-outline-info mt-2">Home</a></li>
                                <li><a href="../buyers.php" class="btn btn-outline-info mt-2">Buyers</a></li>
                                <li><a href="../order.php" class="btn btn-outline-info mt-2">Orders</a></li>
                                <li><a href="../Add product.php" class="btn btn-outline-info mt-2">Add Product</a></li>
                                <li><a href="../Delete product.php" class="btn btn-outline-info mt-2">Delete Product</a></li>
                                <li><a href="../Logout.php" class="btn btn-outline-info mt-2">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img src="../../<?php echo $_SESSION['Seller_Pic']; ?>" alt=""
                class="w-25 img-fluid" />
        </header>

        <!-- Content div -->
        <div class="d-block text-dark text-center h-100 bg-white overflow-scroll p-3 ">
            <h4>Add Product to Monitors Category</h4>
            <!-- Add product section -->
            <div class="border border border-dark w-100  rounded-3 shadow-lg mb-3">
                <img src="../../../assets/Icons/LCD/Dell LCD/Dell LCD 1.jpg" alt="" class="w-100" />
                <!-- Add product Form -->
                <form class="mb-3 text-dark rounded-2 mt-3 p-2" method="post" enctype="multipart/form-data">
                    <!-- Monitor title -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-tv input-group-text"></i>
                        <input type="text" name="Monitor_Title" class="form-control" placeholder="Monitor Title" required />
                    </div>

                    <!-- Monitor Description -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-tv input-group-text"></i>
                        <input type="text" name="Monitor_Description" class="form-control" placeholder="Monitor Description" required />
                    </div>

                    <!-- Monitor quantity -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-plus-minus input-group-text"></i>
                        <input type="number" name="Monitor_Quantity" class="form-control" placeholder="Enter quantity" required />
                    </div>

                    <!-- Monitor price -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-dollar-sign input-group-text"></i>
                        <input type="number" name="Monitor_Price" class="form-control" placeholder="Enter Price" required />
                    </div>


                    <!-- Monitor pic 1 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_1" class="form-control" required />
                    </div>

                    <!-- Monitor pic 2 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_2" class="form-control" required />
                    </div>

                    <!-- Monitor pic 3 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_3" class="form-control" required />
                    </div>

                    <!-- Add product Button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="mt-3 btn btn-success w-100">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- for Laptop and big screens -->
    <div class="row d-md-flex align-items-md-center d-none w-100 main">
        <!-- admin div -->
        <div class="col-md-3 bg-dark d-md-flex flex-md-column justify-content-md-center align-items-md-center h-100">
            <img src="../../<?php echo $_SESSION['Seller_Pic']; ?>" alt=""
                class="w-50 rounded-circle img-fluid mt-1 border border-3 border-white" />
            <h3>Welcome <?php echo $_SESSION['Seller_Name']; ?></h3>
            <ul class="text-decoration-none w-100 h-100 fs-4">
                <li>
                    <a href="../dashboard.php" class="btn btn-outline-info mt-4">Home</a>
                </li>
                <li>
                    <a href="../buyers.php" class="btn btn-outline-info mt-4">Buyers</a>
                </li>
                <li><a href="../order.php" class="btn btn-outline-info mt-4">Orders</a></li>
                <li>
                    <a href="../Add product.php" class="btn btn-outline-info mt-4">Add Product</a>
                </li>
                <li><a href="../Delete product.php" class="btn btn-outline-info mt-4">Delete Product</a></li>
                <li><a href="../Logout.php" class="btn btn-outline-info mt-4">Logout</a></li>
            </ul>
        </div>

        <!-- Content div -->
        <div class="col-md-9 d-none d-md-flex flex-md-column justify-content-md-between align-items-md-center text-dark text-center h-100 bg-white overflow-scroll ">
            <h3>Add Product to Monitors Category</h3>
            <!-- Add product section -->
            <div class="border border border-dark w-50  rounded-3 shadow-lg mb-3">
                <img src="../../../assets/Icons/LCD/Dell LCD/Dell LCD 1.jpg" alt="" class="w-100" />
                <!-- Add product Form -->
                <form class="mb-3 text-dark rounded-2 mt-3 p-2" method="post" enctype="multipart/form-data">
                    <!-- Monitor title -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-tv input-group-text"></i>
                        <input type="text" name="Monitor_Title" class="form-control" placeholder="Monitor Title" required />
                    </div>

                    <!-- Monitor Description -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-tv input-group-text"></i>
                        <input type="text" name="Monitor_Description" class="form-control" placeholder="Monitor Description" required />
                    </div>

                    <!-- Monitor quantity -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-plus-minus input-group-text"></i>
                        <input type="number" name="Monitor_Quantity" class="form-control" placeholder="Enter quantity" required />
                    </div>

                    <!-- Monitor price -->
                    <div class="input-group mb-3">
                        <i class="fa-solid fa-dollar-sign input-group-text"></i>
                        <input type="number" name="Monitor_Price" class="form-control" placeholder="Enter Price" required />
                    </div>

                    <!-- Monitor pic 1 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_1" class="form-control" required />
                    </div>

                    <!-- Monitor pic 2 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_2" class="form-control" required />
                    </div>

                    <!-- Monitor pic 3 -->
                    <div class="input-group mb-3">
                        <input type="file" name="Monitor_Pic_3" class="form-control" required />
                    </div>

                    <!-- Add product Button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="mt-3 btn btn-success w-100">
                            Add Product
                        </button>
                    </div>
                </form>

                <!-- PHP Code for form submission -->
                <?php
                    if (isset($_POST['submit'])) {

                        $Monitor_Title = $_POST['Monitor_Title'];
                        $Monitor_Description = $_POST['Monitor_Description'];
                        $Monitor_Quantity = $_POST['Monitor_Quantity'];
                        $Monitor_Price = $_POST['Monitor_Price'];

                        // To deals with pictures we must used $_FILES
                        $Monitor_Pic_1 = $_FILES['Monitor_Pic_1'];
                        $Monitor_Pic_2 = $_FILES['Monitor_Pic_2'];
                        $Monitor_Pic_3 = $_FILES['Monitor_Pic_3'];

                        // Details of Pic 1
                        $Monitor_Pic_1_Name = $Monitor_Pic_1['name'];
                        $Monitor_Pic_1_Path = $Monitor_Pic_1['tmp_name'];
                        $Monitor_Pic_1_Error = $Monitor_Pic_1['error'];

                        // Details of Pic 2
                        $Monitor_Pic_2_Name = $Monitor_Pic_2['name'];
                        $Monitor_Pic_2_Path = $Monitor_Pic_2['tmp_name'];
                        $Monitor_Pic_2_Error = $Monitor_Pic_2['error'];

                        // Details of Pic 3
                        $Monitor_Pic_3_Name = $Monitor_Pic_3['name'];
                        $Monitor_Pic_3_Path = $Monitor_Pic_3['tmp_name'];
                        $Monitor_Pic_3_Error = $Monitor_Pic_3['error'];

                        if ($Monitor_Pic_1_Error == 0 && $Monitor_Pic_2_Error == 0 && $Monitor_Pic_3_Error == 0) {

                            $Final_Destination_Monitor_Pic_1 = 'Add Monitors/' . $Monitor_Pic_1_Name;

                            $Final_Destination_Monitor_Pic_2 = 'Add Monitors/' . $Monitor_Pic_2_Name;

                            $Final_Destination_Monitor_Pic_3 = 'Add Monitors/' . $Monitor_Pic_3_Name;

                            move_uploaded_file($Monitor_Pic_1_Path, $Final_Destination_Monitor_Pic_1);

                            move_uploaded_file($Monitor_Pic_2_Path, $Final_Destination_Monitor_Pic_2);

                            move_uploaded_file($Monitor_Pic_3_Path, $Final_Destination_Monitor_Pic_3);

                            $insertqry = "INSERT INTO `monitors table`(`Monitor Title`, `Monitor Description`, `Monitor Quantity`, `Monitor Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES ('$Monitor_Title','$Monitor_Description','$Monitor_Quantity','$Monitor_Price','$Final_Destination_Monitor_Pic_1','$Final_Destination_Monitor_Pic_2','$Final_Destination_Monitor_Pic_3')";

                            $firqery = mysqli_query($conn, $insertqry);
                            if ($insertqry) {
                                ?>
                                                <script>
                                                    alert('New Monitors Added to Monitors Category!');
                                                </script>
                                                <?php
                    } else {
                                ?>
                                                <script>
                                                    alert('Error in Monitors Insertion Query');
                                                </script>
                                                <?php
                    }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>