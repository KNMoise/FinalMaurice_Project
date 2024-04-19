<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Innovate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/Favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body >
    <div class="container-xxl p-0" style="background-image: url('img/business.jpg'); ">
        <!-- Spinner Start -->
        <?php require 'includes/spinner.php'; ?>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <!-- navbar Start -->
            <?php require 'includes/navbar2.php'; ?>
            <!-- navbar End -->
            <div class="container-xxl" >
                <div class="container my-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <div class="container px-lg-5">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <h1 class="text-center mb-5" style="color: white;">Contact For Any Query</h1>
                                </div>
                                <div class="row justify-content-center"style="background-image: url(''); ">
                                    <div class="col-lg-7">
                                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                                            <p class="text-center mb-4" style="color: white;">Reach out to Innovate<span style="color: #f26722;">with</span>Us where your questions find our answers—connecting you to solutions.</p><br>
                                            <form action="PHPMailer.php" method="POST">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                                            <label for="name">Your Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email" required>
                                                            <label for="email">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                                            <label for="subject">Subject</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                                            <label for="message">Message</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 py-3" type="submit" name="contactUsForm">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl">

        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php require 'includes/testfooter.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <?php require 'includes/back2top.php'; ?>
        <!-- Back to Top End -->
    </div>

    <!-- Whatsapp Hover Button Start -->
    <?php require 'includes/whatsButton.php'; ?>
    <!-- Whatsapp Hover Button End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>