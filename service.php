<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Innovate</title>
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
</head>

<body style="background-image: url('img/hm/business.jpg')">
  <!-- Spinner Start -->
  <?php require 'includes/spinner.php'; ?>
  <!-- Spinner End -->

  <!-- Navbar & Hero Start -->
  <div class="container-xxl position-relative p-0">
    <!-- navbar Start -->
    <?php require 'includes/navbar2.php'; ?>
    <!-- navbar End -->
    <div class="container-xxl py-5 bg-primary hero-header">

    </div>
  </div>
  <!-- Navbar & Hero End -->
  <!-- Service Start -->
  <div class="container-xxl">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
      <p class="section-title text-secondary justify-content-center">
        <span></span>Our Services<span></span>
      </p>
      <h1 class="text-center mb-5" style="color: white;">What Solutions We Provide</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item d-flex flex-column text-center rounded" id="openPopupBtn1" onmouseenter="showPopup('popupCard1')" onmouseleave="hidePopup('popupCard1')">
          <div class="service-icon flex-shrink-0">
            <i class="bi bi-lightbulb-fill fa-2x"></i>
          </div>
          <h5 class="mb-3">Consultancy</h5>
          <p class="m-0">
            Our consultancy services cover Software and Project Management Office Consultancy, offering tailored guidance for efficient project delivery and software utilization.
          </p>
          <a class="btn btn-square" href="consmore.php"><i class="fa fa-arrow-right"></i></a>
        </div>
        <div id="popupCard1">
          <h5 style="text-align: center; color: white;">Consultancy</h5>
          <p>
            - Software consultancy <br>
            - Project management Office Consultancy
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item d-flex flex-column text-center rounded" id="openPopupBtn2" onmouseenter="showPopup('popupCard2')" onmouseleave="hidePopup('popupCard2')">
          <div class="service-icon flex-shrink-0">
            <i class="bi bi-file-earmark-binary-fill fa-2x"></i>
          </div>
          <h5 class="mb-3" style="text-align: center;">Documents Management Solutions</h5>
          <p class="m-0">
            We offer Electronic Document Management Systems and digitization services for efficient document organization and management.
          </p>
          <a class="btn btn-square" href="docmore.php"><i class="fa fa-arrow-right"></i></a>
        </div>
        <div id="popupCard2">
          <h5 style="text-align: center; color: white;">Documents Management Solutions</h5>
          <p>
            - EDMS solutions<br>
            - Digitization services <br>
            - Records management consultancy <br>
            - Document & records management training.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item d-flex flex-column text-center rounded" id="openPopupBtn3" onmouseenter="showPopup('popupCard3')" onmouseleave="hidePopup('popupCard3')">
          <div class="service-icon flex-shrink-0">
            <i class="bi bi-arrow-clockwise fa-2x"></i>
          </div>
          <h5 class="mb-3">Digital Transformation</h5>
          <p class="m-0">
            We provide strategic consultation to guide organizations
            through digital transformation, focusing on developing robust
            digital strategies aligned with business objectives.
          </p>
          <a class="btn btn-square" href="read.php"><i class="fa fa-arrow-right"></i></a>
        </div>
        <div id="popupCard3">
          <h5 style="text-align: center; color: white;"> <b>Digital Transformation</b></h5>
          <p>
            - Digital transformation consulting.<br>
            - Digital strategies development. <br>
            - Digital transformation strategy implementation. <br>
            - Change management and training. <br>
            - Business Processes improvement. <br>
            - Workflow automation.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div  class="my-5 px-lg-5"></div>
  <!-- Service End -->

  <!-- Footer Start -->
  <?php require 'includes/testfooter.php'; ?>
  <!-- Footer End -->

  <!-- Back to Top Start-->
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