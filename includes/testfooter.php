<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);


    .footer-distributed {
        background: #004388;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 40%;
    }

    /* The company logo */

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
    }

    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: white;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }

    .footer-distributed .footer-center i {
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: lightseagreen;
        text-decoration: none;
        ;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        /* color: #92999f; */
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
        /* text-align: center; */
        /* Center the icons */
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 40px;
        /* Increase the width for better spacing */
        height: 40px;
        /* Increase the height for better spacing */
        cursor: pointer;
        background-color: #007bff;
        /* Change background color to blue (adjust as needed) */
        border-radius: 50%;
        /* Make the icons circular */
        font-size: 24px;
        /* Increase font size for better visibility */
        color: #ffffff;
        text-align: center;
        line-height: 40px;
        /* Center the icon vertically */
        margin-right: 10px;
        /* Increase the right margin for better spacing */
        margin-bottom: 10px;
        /* Increase the bottom margin for better spacing */
        transition: background-color 0.3s ease;
        /* Add smooth transition effect */
    }

    .footer-distributed .footer-icons a:hover {
        background-color: #0056b3;
        /* Darker blue color on hover */
    }


    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 880px) {

        .footer-distributed {
            font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }


    }

    .company-logo {
        width: 100px;
        /* Adjust size as needed */
        height: auto;
        /* To maintain aspect ratio */
    }
</style>

<footer class="footer-distributed" style="background-image: url('img/map.png')">

    <div class="footer-left">
        
        <!-- <h3>Company<span>logo</span></h3> -->
        <img src="img/logo.png" alt="Company Logo" class="company-logo">
        <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </p>
        <p class="footer-company-name">Innovatewithus© 2024</p>
        <p class="footer-links">
            <a href="#" class="link-1">Support</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy</a>
        </p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>KK 31 Ave, Kigali</span> Kazza
                Building, Gikondo, Kigali</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+250 785 383 593</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sales@innovatewithus.com">sales@innovatewithus.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about" style="color: #fff;">
            <span>About InnovateWithUs</span>
            We specialize in consultancy, digital transformation, and document management solutions. With a focus on innovation and client satisfaction, we empower businesses to thrive in today's dynamic market. 
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>
        <!-- Newsletter Section -->

    </div>

</footer>