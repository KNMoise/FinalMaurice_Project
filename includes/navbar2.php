<?php include 'includes/functions.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0">
        <!-- <h1 class="m-0">Innovate</h1> -->
        <img src="img/Logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php if (strpos($current_url, "index")) {echo "active";}?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php if (strpos($current_url, "about")) {echo "active";}?>">About</a>
            <a href="service.php" class="nav-item nav-link <?php if (strpos($current_url, "service")) {echo "active";}?>">Service</a>
            <a href="contact.php" class="nav-item nav-link <?php if (strpos($current_url, "contact")) {echo "active";}?>">Contact</a>
        </div>
    </div>
</nav>
