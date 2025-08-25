<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">

<head>

  <title>Luxury Car Rental</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
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
  <!-- /Header -->
  <!-- Banners -->
  <section id="banner" class="banner-section">
    <div class="container">
      <div class="div_z-index">
        <div class="row">
          <div class="col-md-5 col-md-push-7">
            <div class="banner_content">
              <h1>Find the ideal car for you.</h1>
              <p>We have more cars for you to choose. </p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /Banners -->
  <!-- Resent Cat-->
  <section class="section-padding gray-bg">
    <div class="container" style="padding: 40px 0;">
      <!-- Section Header -->
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <h2 style="font-size: 32px; font-weight: bold; color: #333;">Find the Best <span style="color: #007bff;">Cars For You</span></h2>
        <p style="font-size: 16px; line-height: 1.8; color: #555;">
          Renting a car has never been easier! Whether you're traveling for business, leisure, or need a temporary ride,
          we provide a wide range of options to suit your needs. Choose from luxury sedans, spacious SUVs, fuel-efficient
          compacts, or even eco-friendly electric cars.
        </p>
      </div>

      <!-- Section Content -->
      <div class="row" style="gap: 20px;">

        <!-- Car Information Section -->
        <div class="col-md-6">
          <h4 style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 20px;">Why Rent a Car With Us?</h4>
          <ul style="list-style: none; padding: 0; line-height: 1.8; font-size: 16px; color: #555;">
            <li><i class="fa fa-check-circle" style="color: #007bff; margin-right: 10px;"></i> Easy Booking and Flexible Pickup Options</li>
            <li><i class="fa fa-check-circle" style="color: #007bff; margin-right: 10px;"></i> Affordable Pricing with No Hidden Charges</li>
            <li><i class="fa fa-check-circle" style="color: #007bff; margin-right: 10px;"></i> Wide Selection of Vehicles for Every Need</li>
            <li><i class="fa fa-check-circle" style="color: #007bff; margin-right: 10px;"></i> 24/7 Roadside Assistance for Peace of Mind</li>
            <li><i class="fa fa-check-circle" style="color: #007bff; margin-right: 10px;"></i> Clean, Well-Maintained, and Reliable Cars</li>
          </ul>
          <p style="margin-top: 20px; font-size: 16px; color: #555;">Your perfect car is just a few clicks away! Whether you’re exploring a new city, embarking on a road trip, or need a replacement car, we’ve got you covered.</p>
        </div>

        <!-- Image Section -->
        <div class="col-md-6">
          <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
            <img src="assets/images/Rolls Royce/2015 Rolls Royce Ghost Series II1.jpeg" alt="Luxury Car" style="width: 48%; height: auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="assets/images/lexus/2018 Lexus LX5701.jpg" alt="SUV" style="width: 48%; height: auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="assets/images/Lamborghini/2017 Lamborghini Aventador S MY20181.jpg" alt="sport Car" style="width: 48%; height: auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="assets/images/FERRARI/2013 Ferrari California.jpeg" alt="hyper car" style="width: 48%; height: auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
          </div>
        </div>
      </div>

      <!-- Quote Section -->
      <div class="row" style="margin-top: 40px; text-align: center;">
        <div class="col-12">
          <blockquote style="font-size: 20px; font-style: italic; color: #555; background-color: #f8f9fa; padding: 20px; border-left: 4px solid #007bff; margin: 0 auto; width: 80%; line-height: 1.6;">
            "The cars are always in great condition, and the booking process is a breeze. It's my go-to rental service whenever I travel!"
            <br><span style="font-size: 16px; font-weight: bold; color: #333;">– Happy Customer</span>
          </blockquote>
        </div>
      </div>
    </div>

    <div class="row">

      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="car-listing.php" role="" data-toggle="">New Vehicles</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

          <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand limit 21";
          $query = $dbh->prepare($sql);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          $cnt = 1;
          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
          ?>

              <div class="col-list-3">
                <div class="recent-car-list">
                  <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image"></a>
                    <ul>
                      <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType); ?></li>
                      <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear); ?> Model</li>
                      <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity); ?> seats</li>
                    </ul>
                  </div>
                  <div class="car-title-m">
                    <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?> <?php echo htmlentities($result->VehiclesTitle); ?></a></h6>
                    <span class="price">Rs. <?php echo htmlentities($result->PricePerDay); ?> /Day</span>
                  </div>
                  <div class="inventory_info_m">
                    <p><?php echo substr($result->VehiclesOverview, 0, 70); ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>

        </div>
      </div>
    </div>
  </section>
  <!-- /Resent Cat -->

  <!-- Fun Facts-->
  <section class="fun-facts-section">
    <div class="container div_z-index">
      <div class="row">
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>
              <p>Years In Business</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
              <p>New Cars For Rent</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
              <p>Cars For Rent </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
              <p>Satisfied Customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Fun Facts-->



  <!--Footer -->
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->

</html>