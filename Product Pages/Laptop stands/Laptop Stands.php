<?php
session_start();
include '../../DBconnection.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase <?php echo $_SESSION['Laptop_Stand_Title']; ?> </title>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../../assets/Bootstrap 5/css/bootstrap.min.css" />

    <!-- Bootstrap 4 link -->
    <link rel="stylesheet" href="../../assets/Bootstrap 4/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- min.js link -->
    <script type="text/JavaScript" src="../../assets/Bootstrap 5/js/bootstrap.bundle.min.js"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->

    <link rel="stylesheet" href="../single-product.css" />
    <!-- Fav icon -->
    <link rel="icon" type="image/x-icon" href="../../assets/Icons/Favicons/laptop stand.png">


</head>

<body class="body">

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
        <div class="row d-flex col-12 justify-content-between p-1 mt-2 align-items-center">

            <!-- images -->
            <div class="card col-sm-10 col-md-5 col-lg-4 ">

                <!-- PHP Code starts here -->
                <?php

                // code for get id to get the details from db that attached with the same id
                $getid = $_GET['id'];

                $Select_Query = "SELECT * FROM `laptop stands table` WHERE Id = $getid";

                $Fire_Query = mysqli_query($conn, $Select_Query);

                $Result = mysqli_fetch_array($Fire_Query);

                $Laptop_Stand_Quantity = $Result['Laptop Stand Quantity'];

                ?>
                <!-- PHP Code ends here -->





                <!-- big img -->
                <img src="../../Seller/Dashboard/Add Products/<?php echo $Result['Picture 1']; ?>" class="w-100 img-fluid" id="big-img" alt="big img">


                <!-- small images -->
                <div class="card-body d-flex justify-content-between">
                    <img src="../../Seller/Dashboard/Add Products/<?php echo $Result['Picture 1']; ?>" class="small-img" alt="img1">
                    <img src="../../Seller/Dashboard/Add Products/<?php echo $Result['Picture 3']; ?>" class="small-img " alt="img2">
                    <img src="../../Seller/Dashboard/Add Products/<?php echo $Result['Picture 2']; ?>" class="small-img " alt="img3">
                </div>
            </div>

            <!-- Product Description -->
            <div class="text-center col-sm-10 col-md-6 col-lg-6 p-3">
                <h2><?php echo $Result['Laptop Stand Title']; ?></h2>
                <h4><?php echo $Result['Laptop Stand Description']; ?></h4>

                <!-- cart and button section -->
                <form action="" method="post">
                    <div class="d-block p-3 d-md-flex">

                        <input type="number" name="Quantity" class="form-control w-100" placeholder="Enter Quantity" required><br>

                        <div class="d-flex justify-content-between gap-3">

                            <!-- Add to Cart Button -->
                            <button name="Add_To_Cart" class="p-2 btn btn-danger rounded-2 ms-2">Add To Cart</button>
                            <!-- order Button -->
                            <button name="Order" class="p-2 btn btn-success rounded-2">Order</button>
                        </div>
                    </div>
                </form>

                <!-- Php code for add to cart -->
                <?php
                if (isset($_POST['Add_To_Cart'])) {
                    $Buyer_Enter_Quantity = $_POST['Quantity'];
                    $Product_Title = $Result['Laptop Stand Title'];
                    $Product_Description = $Result['Laptop Stand Description'];
                    $Product_Price = $_SESSION['Laptop_Stand_Price'];

                    $Total = $_SESSION['Laptop_Stand_Price'] * $Buyer_Enter_Quantity;

                    $Product_Picture = $Result['Picture 1'];

                    $insert_query = "INSERT INTO `add to cart`(`Product Title`, `Product Description`, `Product Quantity`, `Product Price`, `Total`, `Product Picture`) VALUES ('$Product_Title','$Product_Description','$Buyer_Enter_Quantity','$Product_Price','$Total','$Product_Picture')";

                    $run_query = mysqli_query($conn, $insert_query);
                    if ($run_query) {
                ?>
                        <script>
                            alert('Product added to cart');
                            // location.replace('../../Home-Categories/laptops.php');
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('Error in add to cart insertion query ');
                        </script>
                <?php
                    }
                }
                ?>



                <!-- Php code for Order -->
                <?php
                if (isset($_POST['Order'])) {


                    // Camera quantity fetching
                    $Buyer_Enter_Quantity = $_POST['Quantity'];
                    
                    $Available_Quantity = $Laptop_Stand_Quantity - $Buyer_Enter_Quantity;

                    if ($Available_Quantity < 0) {
                    ?>
                        <script>
                            alert('out of stock <?php echo "Product Quantity is = ". $Laptop_Stand_Quantity ?>');
                        </script>
                        <?php
                    } else {
                        
                        $Buyer_Name = $_SESSION['Buyer_Name'];
                        $Buyer_Pic = $_SESSION['Buyer_Pic'];
                        $Buyer_Enter_Quantity = $_POST['Quantity'];
                        $Product_Title = $Result['Laptop Stand Title'];
                        $Product_Description = $Result['Laptop Stand Description'];
                        $Product_Price = $_SESSION['Laptop_Stand_Price'];

                        $Total = $_SESSION['Laptop_Stand_Price'] * $Buyer_Enter_Quantity;

                        $Product_Picture = $Result['Picture 1'];

                        $insert = "INSERT INTO `orders`(`Buyer Name`,`Buyer_Image`, `Product Name`, `Product Description`, `Product Quantity`, `Product Price`, `Total`, `Product Pic 1`) VALUES ('$Buyer_Name','$Buyer_Pic','$Product_Title','$Product_Description','$Buyer_Enter_Quantity','$Product_Price','$Total','$Product_Picture')";

                        $query = mysqli_query($conn, $insert);

                        // now code for update quantity in product because someone purchase something
                        $update = "UPDATE `laptop stands table` SET `Laptop Stand Quantity`='$Available_Quantity' WHERE Id = $getid ";

                        $run = mysqli_query($conn, $update);
                        if ($run) {
                        ?>
                            <script>
                                alert('Your order has been placed!');
                                // location.replace('../../Home-Categories/laptops.php');
                            </script>
                <?Php
                        }
                    }
                }
                ?>





                <!-- Product Quantity -->
                <div class="d-flex justify-content-between p-3">

                    <!-- Product quantity not going to minus -->
                    <?php
                    $select = "select * from `laptop stands table` where Id = $getid";
                    $querrn = mysqli_query($conn, $select);
                    $fetching = mysqli_fetch_array($querrn);
                    $availableqntity = $fetching['Laptop Stand Quantity'];
                    ?>
                    <h5 class="text-center text-success bg-light rounded-2 p-1 p-md-2"> Available Quantity: <?php echo $availableqntity ?></h5>
                    <h5 class="text-center text-success bg-light rounded-2 p-1 p-md-2"><span class="">Price : <?php echo $_SESSION["Laptop_Stand_Price"]; ?></span></h5>
                </div>

                <!-- just paste upp here product quantity full div -->
            </div>
        </div>




        <!-- Explore More Products -->
        <div class="row container-fluid Explore-row d-flex align-item-center justify-content-evenly text-center mt-5">

            <h2 class="mt-4">Explore More</h2>

            <!-- row 1 -->
            <div class="container d-flex justify-content-center align-items-center mt-3 text-dark text-center">
                <div class="row d-flex justify-content-between align-items-center gap-3">
                    <!-- Card 1 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light" onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Laptops/laptop3.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Hp Core i7</p>
                            <p class="card-text text-success">Price : 550000 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light " onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Headphones/Bluedeo Headphones/2.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Bludio Headphones</p>
                            <p class="card-text text-success">Price : 3500 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light " onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Cameras/camera3.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Nikon Camera</p>
                            <p class="card-text text-success">Price : 45000 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row 2 -->
            <div class="container d-flex justify-content-center align-items-center mt-3 text-dark text-center mb-5">
                <div class="row d-flex justify-content-between align-items-center gap-3">
                    <!-- Card 4 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light" onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Mobile/mobile4.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Infinix Mobile</p>
                            <p class="card-text text-success">Price 34000 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light " onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Laptops/Apple Laptops/1.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Apple Core I 3</p>
                            <p class="card-text text-success">98000 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="card col-12 col-sm-3 col-md-3 d-flex justify-content-center align-items-center bg-light " onclick="window.location.href='../../Products.php';">
                        <img src="../../assets/Icons/Computer/Tower PC/1.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-title">Gamming PC Core I 7</p>
                            <p class="card-text text-success">55000 PKR</p>
                            <a href="../../Products.php" class="btn btn-success">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript file link -->
            <script src="../single-product.js"></script>
        </div>
    </div>


</body>

</html>