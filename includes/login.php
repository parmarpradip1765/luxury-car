<?php
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    $_SESSION['login'] = $_POST['email'];
    $_SESSION['fname'] = $results->FullName;
    $currentpage = $_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
  } else {

    echo "<script>alert('Invalid Details');</script>";
  }
}

?>

<!-- Updated Login Modal -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center w-100">Welcome Back!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login_wrap">
          <div class="col-md-12">
            <form method="post" class="login-form">
              <!-- Email Input -->
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
              </div>
              <!-- Password Input -->
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
              </div>
              <!-- Remember Me Checkbox -->
              <div class="form-group checkbox">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
              </div>
              <!-- Login Button -->
              <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p class="w-100">Don't have an account?
          <a href="#signupform" data-toggle="modal" data-dismiss="modal" class="text-primary">Signup Here</a>
        </p>
        <p class="w-100">
          <a href="#forgotpassword" data-toggle="modal" data-dismiss="modal" class="text-danger">Forgot Password?</a>
        </p>
      </div>
    </div>
  </div>
</div>