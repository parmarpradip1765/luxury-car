<?php
if (isset($_POST['emailsubscibe'])) {
  $subscriberemail = $_POST['subscriberemail'];
  $sql = "SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
  $query = $dbh->prepare($sql);
  $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    echo "<script>alert('Already Subscribed.');</script>";
  } else {
    $sql = "INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
      echo "<script>alert('Subscribed successfully.');</script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
}
?>


<footer>
  <!-- Footer Top -->
  <div class="footer-top" style="background-color: #333; padding: 40px 0; border-top: 1px solid #ddd;">
    <div class="container">
      <div class="row">

        <!-- About Us Section -->
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul style="list-style: none; padding: 0; line-height: 2;">
            <li><a href="page.php?type=aboutus">About Us</a></li>
            <li><a href="page.php?type=privacy">Privacy Policy</a></li>
            <li><a href="page.php?type=terms">Terms of Use</a></li>
            <li><a href="contact-us.php?type=contact">Contact Us</a></li>
          </ul>
        </div>

        <!-- Customer Services Section -->
        <div class="col-md-3 col-sm-6">
          <h6>Customer Services</h6>
          <ul style="list-style: none; padding: 0; line-height: 2;">
            <li><a href="page.php?type=how-it-works">How It Works</a></li>
            <li><a href="page.php?type=insurance">Insurance Policy</a></li>
            <li><a href="page.php?type=cancellation">Cancellation Policy</a></li>
            <li><a href="page.php?type=contact">Help Center</a></li>
          </ul>
        </div>

        <!-- Subscribe Section -->
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe to Our Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Your Email" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-primary btn-block" style="padding: 10px; background-color: #007bff; border: none; border-radius: 4px;">
                Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              </button>
            </form>
            <p class="subscribed-text" style="margin-top: 10px; font-size: 12px; color: #555;">
              *Stay updated with the latest deals and offers.
            </p>
          </div>
        </div>

        <!-- Social Media Section -->
        <div class="col-md-3 col-sm-6">
          <h6>Follow Us</h6>
          <ul style="list-style: none; padding: 0; display: inline-flex; gap: 10px;">
            <li><a href="https://www.facebook.com/BBToyz" style="text-decoration: none; color: #e5e1e1;"><i class="fa fa-facebook fa-1.5x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/user/bigboytoyzindia" style="text-decoration: none; color: #e5e1e1;"><i class="fa fa-youtube fa-1.5x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/bigboytoyz_india/" style="text-decoration: none; color: #e5e1e1;"><i class="fa fa-instagram fa-1.5x" aria-hidden="true"></i></a></li>
          </ul>
          <h6>Contact Us</h6>
          <p style="margin: 10px 0; font-size: 14px;">Phone:+91 7016703480</p>
          <p style="margin: 10px 0; font-size: 14px;">Email: support@luxurycarrental.com</p>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom" style="background-color: #333; color: #fff; padding: 20px 0; text-align: center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="copy-right" style="margin: 0;">&copy; 2024 Luxury Car Rental. All Rights Reserved. Created by <a href="#top" style="color: #007bff; text-decoration: none;">Pradip&Kaushik</a>.</p>
        </div>
      </div>
    </div>
  </div>
</footer>