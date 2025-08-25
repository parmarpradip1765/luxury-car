<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>

  <title>Luxury Car Rental | Page details</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <!--Custome Style -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!--OWL Carousel slider-->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <!--slick-slider -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!--bootstrap-slider -->
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <!--FontAwesome Font Style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- SWITCHER -->
  <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
  <!-- Start Switcher -->
  <!-- <?php include('includes/colorswitcher.php'); ?> -->
  <!-- /Switcher -->

  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /end -->
  <?php
  $pagetype = $_GET['type'];
  $sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
  $query = $dbh->prepare($sql);
  $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    foreach ($results as $result) { ?>

  <?php }
  } ?>
  </div>
  </section>
  <!-- About-us-->
  <section class="about_us section-padding">
    <div class="container">
      <div class="section-header text-center">
        <h2><a href="page.php">About Us</a></h2>
        <p>Welcome to our premium vehicle rental service. Whether you need a luxury car for a special occasion, a reliable car for a family trip, or a sports car for an unforgettable experience, we’ve got you covered. Learn more about us below.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h3>Who We Are</h3>
          <p>We are a leading car rental company with a large fleet of vehicles ranging from luxury sedans to spacious SUVs. Our goal is to provide our customers with the best vehicle options at the most competitive prices. With over 10 years of experience, we have earned a reputation for reliability, exceptional customer service, and a diverse range of vehicles for all occasions.</p>
          <p>Our services are designed to meet the needs of both individuals and businesses, offering flexibility and convenience. From daily rentals to long-term leasing, we ensure that your rental experience is hassle-free and memorable.</p>
        </div>
        <div class="col-md-6">
          <h3>Why Choose Us?</h3>
          <ul>
            <li><i class="fa fa-check-circle" aria-hidden="true"></i> A wide selection of vehicles to choose from.</li>
            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Affordable pricing without compromising quality.</li>
            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Flexible rental periods to suit your needs.</li>
            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Easy online booking with instant confirmation.</li>
            <li><i class="fa fa-check-circle" aria-hidden="true"></i> 24/7 customer support and roadside assistance.</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Our Mission</h3>
          <p>Our mission is to deliver the finest car rental services by providing an unparalleled experience to our clients. We aim to offer the most up-to-date fleet of vehicles, with excellent customer service at every touchpoint. Whether you are renting for business or leisure, we ensure that every journey is a memorable one.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h3>Our Values</h3>
          <p>Integrity, trust, and customer satisfaction are at the heart of everything we do. We are committed to providing the highest standards of service, offering transparency in our pricing, and ensuring that every rental is a smooth, enjoyable experience.</p>
        </div>
        <div class="col-md-6">
          <h3>Contact Us</h3>
          <p>If you have any questions, feel free to reach out to us. Our customer service team is available 24/7 to assist you with any inquiries or booking needs.</p>
          <p><strong>Email:</strong> support@luxurycarrental.com</p>
          <p><strong>Phone:</strong> +7016703480</p>
        </div>
      </div>

    </div>
  </section>





  <<!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <!-- <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div> -->
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>
    <!--/Forgot-password-Form -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>