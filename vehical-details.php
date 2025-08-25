<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];
  $message = $_POST['message'];
  $useremail = $_SESSION['login'];
  $status = 0;
  $vhid = $_GET['vhid'];
  $bookingno = mt_rand(100000000, 999999999);
  $ret = "SELECT * FROM tblbooking where (:fromdate BETWEEN date(FromDate) and date(ToDate) || :todate BETWEEN date(FromDate) and date(ToDate) || date(FromDate) BETWEEN :fromdate and :todate) and VehicleId=:vhid";
  $query1 = $dbh->prepare($ret);
  $query1->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query1->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
  $query1->bindParam(':todate', $todate, PDO::PARAM_STR);
  $query1->execute();
  $results1 = $query1->fetchAll(PDO::FETCH_OBJ);

  if ($query1->rowCount() == 0) {

    $sql = "INSERT INTO  tblbooking(BookingNumber,userEmail,VehicleId,FromDate,ToDate,message,Status) VALUES(:bookingno,:useremail,:vhid,:fromdate,:todate,:message,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':bookingno', $bookingno, PDO::PARAM_STR);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
    $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
    $query->bindParam(':todate', $todate, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
      echo "<script>alert('Booking successfully.');</script>";
      echo "<script type='text/javascript'> document.location = 'my-booking.php'; </script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again');</script>";
      echo "<script type='text/javascript'> document.location = 'car-listing.php'; </script>";
    }
  } else {
    echo "<script>alert('Car already booked for these days');</script>";
    echo "<script type='text/javascript'> document.location = 'car-listing.php'; </script>";
  }
}

?>


<!DOCTYPE HTML>
<html lang="en">

<head>

  <title>Luxury Car Rental | Vehicle Details</title>
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
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<style>
  /* Sidebar Styles */
  .sidebar_widget {
    background-color: #f9f9f9;
  }

  .sidebar_widget h5 {
    color: #333;
    font-weight: bold;
  }

  .booking-form input,
  .booking-form textarea {
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
  }

  .booking-form input:focus,
  .booking-form textarea:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
  }

  .booking-form .btn {
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    padding: 10px 20px;
  }

  .share_vehicle p a {
    text-decoration: none;
    color: inherit;
  }

  .share_vehicle p a:hover {
    opacity: 0.8;
  }

  .share-vehicle p {
    font-size: 14px;
    color: #555;
  }

  .share-vehicle a {
    text-decoration: none;
  }

  .sidebar-widget {
    background-color: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .widget-heading {
    color: #333;
    font-size: 18px;
    font-weight: bold;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-label {
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
    color: #555;
  }

  .form-control {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
  }

  .btn {
    padding: 12px;
    font-size: 16px;
    text-transform: uppercase;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .btn-secondary {
    background-color: #6c757d;
    border: none;
    color: #fff;
  }

  .btn-secondary:hover {
    background-color: #565e64;
  }

  @media (max-width: 768px) {
    .sidebar-widget {
      padding: 15px;
    }

    .widget-heading {
      font-size: 16px;
    }

    .form-control {
      font-size: 14px;
      padding: 8px;
    }

    .btn {
      font-size: 14px;
      padding: 10px;
    }
  }
</style>

<body>

  <!-- Start Switcher -->
  <!-- <?php include('includes/colorswitcher.php'); ?> -->
  <!-- /Switcher -->

  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

  <!--Listing-Image-Slider-->

  <?php
  $vhid = intval($_GET['vhid']);
  $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
  $query = $dbh->prepare($sql);
  $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['brandid'] = $result->bid;
  ?>

      <section id="listing_img_slider">
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image" width="500" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2); ?>" class="img-responsive" alt="image" width="500" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3); ?>" class="img-responsive" alt="image" width="500" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4); ?>" class="img-responsive" alt="image" width="500" height="560"></div>
        <?php if ($result->Vimage5 == "") {
        } else {
        ?>
          <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage5); ?>" class="img-responsive" alt="image" width="500" height="560"></div>
        <?php } ?>
      </section>
      <!--/Listing-Image-Slider-->


      <!--Listing-detail-->
      <section class="listing-detail">
        <div class="container">
          <div class="listing_detail_head row">
            <div class="col-md-9">
              <h1><?php echo htmlentities($result->BrandName); ?> </h1>
              <h2> <?php echo htmlentities($result->VehiclesTitle); ?></h2>
            </div>
            <div class="col-md-3">
              <div class="price_info">
                <p>Rs. <?php echo htmlentities($result->PricePerDay); ?>/- </p>Per Day
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <div class="main_features">
                <ul>

                  <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                    <h5><?php echo htmlentities($result->ModelYear); ?></h5>
                    <p>Reg.Year</p>
                  </li>
                  <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h5><?php echo htmlentities($result->FuelType); ?></h5>
                    <p>Fuel Type</p>
                  </li>

                  <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <h5><?php echo htmlentities($result->SeatingCapacity); ?></h5>
                    <p>Seats</p>
                  </li>
                </ul>
              </div>
              <div class="listing_more_info">
                <div class="listing_detail_wrap">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs gray-bg" role="tablist">
                    <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Car Overview </a></li>

                    <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Vehicle Overview -->
                    <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                      <p class="text-gray-700 text-base">
                        <?php echo htmlentities($result->VehiclesOverview); ?>
                      </p>
                    </div>

                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane" id="accessories">
                      <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-sm">
                        <thead>
                          <tr class="bg-gray-100">
                            <th colspan="2" class="px-4 py-2 text-left text-gray-700 font-semibold">
                              Accessories
                            </th>
                          </tr>
                        </thead>
                        <tbody class="text-gray-700">
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Air Conditioner</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->AirConditioner == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">AntiLock Braking System</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->AntiLockBrakingSystem == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Power Steering</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->PowerSteering == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Power Windows</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->PowerWindows == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Leather Seats</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->LeatherSeats == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Central Locking</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->CentralLocking == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Power Door Locks</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->PowerDoorLocks == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Brake Assist</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->BrakeAssist == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Driver Airbag</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->DriverAirbag == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Passenger Airbag</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->PassengerAirbag == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                          <tr class="border-t border-gray-300">
                            <td class="px-4 py-2">Crash Sensor</td>
                            <td class="px-4 py-2 text-center">
                              <?php if ($result->CrashSensor == 1) { ?>
                                <i class="fa fa-check text-green-500" aria-hidden="true"></i>
                              <?php } else { ?>
                                <i class="fa fa-close text-red-500" aria-hidden="true"></i>
                              <?php } ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>

              </div>
          <?php }
      } ?>

            </div>

            <!--Side-Bar-->
            <aside class="col-md-3">
              <!-- Share Vehicle Section -->
              <div class="share-vehicle mb-4">
                <p class="text-center">
                  Share:
                  <a href="#" class="mx-1"><i class="fa fa-facebook-square fa-lg text-primary" aria-hidden="true"></i></a>
                  <a href="#" class="mx-1"><i class="fa fa-twitter-square fa-lg text-info" aria-hidden="true"></i></a>
                  <a href="#" class="mx-1"><i class="fa fa-linkedin-square fa-lg text-primary" aria-hidden="true"></i></a>
                  <a href="#" class="mx-1"><i class="fa fa-google-plus-square fa-lg text-danger" aria-hidden="true"></i></a>
                </p>
              </div>

              <!-- Booking Form Section -->
              <div class="sidebar-widget p-4 border rounded shadow-sm">
                <div class="widget-heading mb-3">
                  <h5 class="text-center">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Book Now
                  </h5>
                </div>
                <form method="post" class="booking-form">
                  <!-- From Date -->
                  <div class="form-group mb-3">
                    <label for="fromdate" class="form-label">From Date:</label>
                    <input type="date" class="form-control" name="fromdate" id="fromdate" placeholder="Select Start Date" required>
                  </div>
                  <!-- To Date -->
                  <div class="form-group mb-3">
                    <label for="todate" class="form-label">To Date:</label>
                    <input type="date" class="form-control" name="todate" id="todate" placeholder="Select End Date" required>
                  </div>
                  <!-- Message -->
                  <div class="form-group mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea rows="4" class="form-control" name="message" id="message" placeholder="Enter your message or special request" required></textarea>
                  </div>
                  <!-- Submit Button -->
                  <?php if (isset($_SESSION['login']) && $_SESSION['login']) { ?>
                    <div class="form-group text-center">
                      <input type="submit" class="btn btn-primary w-100" name="submit" value="Book Now">
                    </div>
                  <?php } else { ?>
                    <div class="form-group text-center">
                      <a href="#loginform" class="btn btn-secondary w-100 text-uppercase" data-toggle="modal" data-dismiss="modal">Login to Book</a>
                    </div>
                  <?php } ?>
                </form>
              </div>
            </aside>


            <div class="space-20"></div>
            <div class="divider"></div>


          </div>
      </section>
      <!--/Listing-detail-->

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

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/interface.js"></script>
      <script src="assets/switcher/js/switcher.js"></script>
      <script src="assets/js/bootstrap-slider.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>