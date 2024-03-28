<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Innovate Get Started</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

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
  <style>
    li,
    ul {
      list-style: none;
      padding: 0;
      margin: 0
    }

    .sec-title {
      position: relative;
      padding-bottom: 40px
    }

    .sec-title .title {
      position: relative;
      color: #004388;
      font-size: 18px;
      font-weight: 700;
      padding-right: 50px;
      margin-bottom: 15px;
      display: inline-block;
      text-transform: capitalize;
      text-align: center;
    }

    .sec-title .title:before {
      position: absolute;
      content: '';
      right: 0;
      bottom: 7px;
      width: 40px;
      height: 1px;
      background-color: #bbb
    }

    .sec-title h2 {
      position: relative;
      color: #252525;
      font-size: 36px;
      font-weight: 700;
      line-height: 1.5em;
      display: block
    }

    .sec-title.light h2 {
      color: #fff
    }

    .contact-page-section {
      position: relative;
      padding-top: 110px;
      padding-bottom: 110px;
    }

    .contact-page-section .inner-container {
      position: relative;
      z-index: 1;
      background-color: #004388;
      box-shadow: 0 0 15px 5px rgba(0, 0, 0, .1)
    }

    .contact-page-section .form-column {
      position: relative;
      padding: 0 0 0 15px
    }

    .contact-page-section .form-column .inner-column {
      position: relative;
      padding: 60px 45px 30px;
      background-color: #fff
    }

    .contact-page-section .info-column {
      position: relative
    }

    .contact-page-section .info-column .inner-column {
      position: relative;
      padding: 60px 35px
    }

    .contact-page-section .info-column h2 {
      position: relative;
      color: #fff;
      font-size: 30px;
      font-weight: 700;
      line-height: 1.4em;
      margin-bottom: 45px
    }

    .contact-page-section .info-column .list-info {
      position: relative;
      margin-bottom: 60px
    }

    .contact-page-section .info-column .list-info li {
      position: relative;
      margin-bottom: 25px;
      font-size: 18px;
      color: #fff;
      line-height: 1.8em;
      padding-left: 45px
    }

    .contact-page-section .info-column .list-info li:last-child {
      margin-bottom: 0
    }

    .contact-page-section .info-column .list-info li i {
      position: absolute;
      left: 0;
      top: 8px;
      color: #fff;
      font-size: 30px
    }

    .contact-form {
      position: relative
    }

    .contact-form .form-group {
      position: relative;
      margin-bottom: 20px
    }

    .contact-form input[type=text],
    select,
    .contact-form input[type=email],
    select,
    .contact-form textarea {
      position: relative;
      border-radius: 15px;
      display: block;
      width: 100%;
      height: 60px;
      color: #222;
      font-size: 14px;
      line-height: 38px;
      padding: 10px 30px;
      border: 1px solid #ddd;
      background-color: #fff;
      transition: all .3s ease;
      -ms-transition: all .3s ease;
      -webkit-transition: all .3s ease
    }

    .contact-form input[type=text]:focus,
    select,
    .contact-form input[type=email]:focus,
    select,
    .contact-form textarea:focus {
      border-color: #f26722;
    }

    .contact-form textarea {
      height: 250px;
      resize: none
    }

    .contact-form .theme-btn {
      border-radius: 15px;
      ;
      font-size: 16px;
      font-weight: 700;
      margin-top: 10px;
      text-transform: capitalize;
      padding: 16px 39px;
      border: 2px solid #004388;
      font-family: Arimo, sans-serif;
      background: #004388;
      display: inline-block;
      position: relative;
      line-height: 24px;
      cursor: pointer;
      color: #fff
    }

    .contact-form .theme-btn:hover {
      color: #004388;
      border-color: #004388;
      background: 0 0
    }

    .contact-form input.error,
    .contact-form select.error,
    .contact-form textarea.error {
      border-color: red !important
    }

    .contact-form label.error {
      display: block;
      line-height: 24px;
      padding: 5px 0 0;
      margin: 0;
      text-transform: uppercase;
      font-size: 12px;
      color: red;
      font-weight: 500
    }

    .social-icon-four {
      position: relative
    }

    .social-icon-four li {
      position: relative;
      margin-right: 18px;
      display: inline-block
    }

    .social-icon-four li.follow {
      color: #fff;
      font-weight: 600;
      font-size: 24px;
      display: block;
      margin-bottom: 20px
    }

    .social-icon-four li a {
      position: relative;
      font-size: 20px;
      color: #fff;
      -webkit-transition: all .3s ease;
      -ms-transition: all .3s ease;
      -o-transition: all .3s ease;
      -moz-transition: all .3s ease;
      transition: all .3s ease
    }

    .social-icon-four li a:hover {
      color: #222
    }
  </style>
</head>

<body>
  <div class="container-xxl bg-white p-0" style="background-image: url('img/hm/business.jpg');">
    <!-- Spinner Start -->
    <?php require 'includes/spinner.php'; ?>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      <!-- Navbar Start -->
      <?php require 'includes/navbar.php'; ?>
      <!-- Navbar end -->
      <section class="contact-page-section">
        <div class="container">
          <div class="sec-title">
            <div class="" style="text-align: center; color:#004388;">Contact Us</div>
            <h2 style=" text-align: center; color:#fff;">Let's Get in Touch.</h2>
          </div>
          <div class="inner-container">
            <div class="row clearfix">

              <!--Form Column-->
              <div class="form-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">

                  <!--Contact Form-->
                  <div class="contact-form">
                    <form method="post" action="mail.php" id="contact-form">
                      <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <input type="text" name="name" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <input type="email" name="email" value="" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <input type="text" name="subject" value="" placeholder="Subject" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <input type="text" name="organization" value="" placeholder="Organization" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <select class="form-control" name="company" required>
                            <option value="" disabled selected>Company Size</option>
                            <option value="1-10">1-10 Employees</option>
                            <option value="11-50">11-50 Employees</option>
                            <option value="51-100">51-100 Employees</option>
                            <option value="101-500">101-500 Employees</option>
                            <option value="501+">501+ Employees</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                          <input type="text" name="phone" value="" placeholder="Phone" required>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                          <textarea name="message" placeholder="Massage"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                          <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!--End Contact Form-->

                </div>
              </div>

              <!--Info Column-->
              <div class="info-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                  <h2>Contact Info</h2>
                  <ul class="list-info">
                    <li> <i class="fa fa-globe"></i> www.innovatedtc.com</li>
                    <li><i class="fa fa-map-marker"></i><span>KK 31 Ave, Kigali</span> Kazza
                      Building, Gikondo, Kigali.</li>
                    <li><i class="far fa-envelope"></i>sales@innovate.com</li>
                    <li><i class="fas fa-phone"></i>+250 785 383 593<br>+250 785 383 593</li>
                  </ul>
                  <ul class="social-icon-four">
                    <li class="follow">Follow Us on: </li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class=" "></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- Footer Start -->
      <?php require 'includes/testfooter.php'; ?>
      <!-- Footer End -->
      <!-- Back to Top -->
      <?php require 'includes/back2top.php'; ?>
    </div>

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
    <!-- formsubmission to email start -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- formsubmission to email ends -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>

</html>