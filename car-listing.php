<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Luxury Car Rental | Car Listing</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!-- OWL Carousel slider -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <!-- Slick-slider -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- Bootstrap-slider -->
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- FontAwesome Font Style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    /* General Styling */
    body {
      font-family: 'Roboto', sans-serif;
      color: #333;
      line-height: 1.6;
      background-color: #f8f9fa;
    }

    /* Page Header */
    .page-header {
      padding: 10px 0;
      color: #fff;
      text-align: center;
      position: relative;
    }

    .page-header .container {
      position: relative;
      z-index: 1;
    }

    .page-header a {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 10px;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #333;
    }

    .page-header .dark-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    /* Vehicle Listing */
    .product-listing-m {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 20px;
      overflow: hidden;
      display: inline-block;
      transition: transform 0.3s;
    }

    .product-listing-m:hover {
      transform: scale(1.02);
    }

    .product-listing-img img {
      width: 100%;
      border-right: 1px solid #ddd;
    }

    .product-listing-content {
      padding: 20px;
      flex: 1;
    }

    .product-listing-content h5 a {
      color: #0f1011;
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
    }

    .product-listing-content h5 a:hover {
      text-decoration: underline;
      color: #0056b3;
    }

    .list-price {
      color: #0f1011;
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }

    .product-listing-content ul {
      list-style: none;
      padding: 0;
      margin: 15px 0;
      display: flex;
      flex-wrap: wrap;
    }

    .product-listing-content ul li {
      margin-right: 15px;
      font-size: 14px;
    }

    .product-listing-content ul li i {
      margin-right: 5px;
      color: #007bff;
    }

    .btn {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #0056b3;
    }

    /* Sidebar Styling */
    .sidebar_widget {
      background: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 1px solid #ddd;
    }

    .widget_heading {
      margin-bottom: 15px;
      font-size: 18px;
      font-weight: 500;
    }

    .recent_post_img img {
      width: 100%;
      border-radius: 5px;
    }

    .recent_post_title {
      margin-top: 10px;
    }

    .widget_price {
      color: #28a745;
      font-weight: bold;
    }

    /* Back to Top Button */
    #back-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 99;
    }

    #back-top a {
      background: #007bff;
      color: #fff;
      padding: 10px 15px;
      border-radius: 50%;
      text-align: center;
      font-size: 18px;
    }

    #back-top a:hover {
      background: #0056b3;
    }

    /* Responsive Design for smaller screens */
    @media (max-width: 768px) {
      .page-header a {
        font-size: 30px;
      }
    }

    .sidebar-widget {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .widget-heading {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #333;
    }

    .search-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .form-group {
      width: 100%;
      padding: 2px;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      color: #555;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .sidebar-widget {
        padding: 15px;
      }

      .widget-heading {
        font-size: 18px;
      }

      .form-control {
        font-size: 14px;
        padding: 8px;
      }

      .btn-submit {
        font-size: 14px;
        padding: 10px;
      }
    }
  </style>
</head>

<body>
  <!-- Start Switcher -->
  <!-- <?php include('includes/colorswitcher.php'); ?> -->
  <!-- /Switcher -->

  <!-- Header -->
  <?php include('includes/header.php'); ?>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container text-center">
      <a href="car-listing.php">CARS</a>
    </div>
  </section>

  <!-- Sidebar -->
  <!-- Responsive Sidebar -->
  <section class="sidebar-widget">
    <h5 class="widget-heading">FIND YOUR CARS</h5>
    <form action="search-carresult.php" method="post" class="search-form">

      <!-- Brand Selection -->
      <div class="form-group">
        <label for="brand" class="form-label">SELECT BRAND</label>
        <select id="brand" class="form-control" name="brand" required>
          <option value="" disabled selected>SELECT BRAND</option>
          <?php
          $sql = "SELECT * FROM tblbrands";
          $query = $dbh->prepare($sql);
          $query->execute();
          $brands = $query->fetchAll(PDO::FETCH_OBJ);
          foreach ($brands as $brand) {
            echo "<option value='{$brand->id}'>{$brand->BrandName}</option>";
          }
          ?>
        </select>
      </div>

      <!-- Fuel Type Selection -->
      <div class="form-group">
        <label for="fueltype" class="form-label">SELECT FUEL TYPE</label>
        <select id="fueltype" class="form-control" name="fueltype" required>
          <option value="" disabled selected>SELECT FUEL TYPE</option>
          <option value="Petrol">PETROL</option>
          <option value="Diesel">DIESEL</option>
          <option value="CNG">CNG</option>
        </select>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn-submit">Search Car</button>
    </form>
  </section>

  <!-- CSS for Responsiveness -->


  <!-- Recently Listed New Cars -->
  <section style="display:inline-block">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="resentnewcar">

        <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand limit 100";
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

</html>