<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home - InnovateWithUs</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="author" name="nmoise" />

    <!-- Favicon -->
    <link href="img/Favicon.png" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/slideshow.css" />

    <link rel="stylesheet" href="https://sherpabrokerage.com/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://sherpabrokerage.com/assets/css/owl.carousel.min.css" />

</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->
        <?php require 'includes/spinner.php'; ?>
        <!-- Spinner End -->

        <div class="container-xxl position-relative p-0">
            <!-- navbar Start -->
            <?php require 'includes/navbar.php'; ?>
            <!-- navbar End -->

            <!-- Start Hero Slider Area -->
            <?php require 'includes/slider.php'; ?>
            <!-- Start Hero End -->

            <!-- About Start -->
            <?php require 'includes/aboutSmall.php'; ?>
            <!-- About End -->
            <!-- Facts Start -->
            <?php require 'includes/facts.php'; ?>
            <!-- Facts End -->
            <div class="small-div" style="margin: 50px;">
            </div>
            <!-- Service Start -->
            <?php require 'includes/services.php'; ?>
            <!-- Service End -->
            <div class="small-div" style="margin: 50px;">
            </div>
            <!-- choose us Start -->
            <!-- changes in colors is coming from choose bootstrap which is corrupting the main boostrap -->
            <?php require '<includes/choose.php'; ?>

            <!-- choose us End -->

            <!-- Footer Start -->
            <?php require 'includes/testfooter.php'; ?>
            <!-- Footer End -->

            <!-- Back to Top Start-->
            <?php require 'includes/back2top.php'; ?>
            <!-- Back to Top End-->
        </div>
    </div>

    <!-- Whatsapp Hover Button Start -->
    <?php require 'includes/whatsButton.php'; ?>
    <!-- Whatsapp Hover Button End -->

    <!-- End Hero Slider Area -->
    <script src="https://sherpabrokerage.com/assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle  MinJS -->
    <script src="https://sherpabrokerage.com/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu Min JS -->
    <script src="https://sherpabrokerage.com/assets/js/meanmenu.min.js"></script>
    <!-- Wow Min JS -->

    <!-- Owl Carousel Min JS -->
    <script src="https://sherpabrokerage.com/assets/js/owl.carousel.min.js"></script>
    <!-- Owl Magnific Min JS -->

    <!-- Nice Select Min JS -->
    <script src="https://sherpabrokerage.com/assets/js/nice-select.min.js"></script>

    <!-- Odometer Min JS -->
    <script src="https://sherpabrokerage.com/assets/js/custom.js"></script>

    <script src="js/main.js"></script>

</body>

</html>