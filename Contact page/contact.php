<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!-- custom css link -->
    <link rel="stylesheet" href="contact-Style.css">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../assets/Bootstrap 5/css/bootstrap.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- min.js link -->
    <script type="text/JavaScript" src="../assets/Bootstrap 5/js/bootstrap.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="..assets/Team Members Images/Muhammad Zahid Backend Developer.JPG"
        type="image/x-icon">

    <!-- map link -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
</head>

<body class="body">

    <div class="container-fluid navbar_container">

        <nav class="navbar navbar-expand-lg d-sm-flex d-md-flex">
            <div class="container d-flex justify-content-between">
                <!-- Logo -->
                <img src="../assets/Icons/main_logo.jpeg" style="width: 80px; height: 70px" alt="logo"
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
                                <a class="nav-link text-center" href="../home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-center" href="../About.php">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-center" href="contact.php">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-center" href="../FAQ.php">FAQ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-center" href="../Add to cart.php">Add To Cart</a>
                            </li>


                            <li class="nav-item">
                                <img src="../assets/Team Members Images/Bilal.png"
                                    class="nav-link img-fluid rounded-circle" alt="login user" width="100px">
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </nav>
    </div> <br>
    <!-- the end of navbar container -->
    <div class="container my-5">
        <h1 class="text-center mb-4"><u>Contact Us</u></h1> <br>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> Mobile: +123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> Email: example@example.com</p>
                    <p><i class="fab fa-whatsapp"></i> WhatsApp: +123 456 7890</p>
                    <p><i class="fa-solid fa-location-dot"></i> Forest Bazaar, Palosai Road University Of Agriculture
                        Peshawar.</p>
                    <p><i class="fab fa-youtube"></i> YouTube: <a href="https://youtube.com/channel/YourChannel"
                            target="_blank">Your Channel</a></p>
                    <p><i class="fab fa-facebook"></i> Facebook: <a href="https://facebook.com/YourPage"
                            target="_blank">Your Page</a></p>
                    <p><i class="fa-solid fa-location-dot"></i> Location On Google Map</p>
                </div>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d584.57446747705!2d71.48496915762725!3d34.021995339993886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d9171e858de1c5%3A0x1711a7bdaed478ca!2sAmin%20General%20Store!5e0!3m2!1sen!2sus!4v1717399389641!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- location link -->
    <script src="location.js"></script>
</body>

</html>