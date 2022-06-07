<?php
session_start();
include_once('../function.php');

$usercred = new DB_con();

if (isset($_POST['login'])) {
  $email = $_POST['emailAddress'];
  $password = $_POST['pass'];

  $results = $usercred->signIn($email);
  $num = mysqli_fetch_array($results);
  if ($num > 0) {
    $_SESSION['userID'] = $num['user_id'];
    $_SESSION['firstname'] = $num['first_name'];
    $_SESSION['lastname'] = $num['last_name'];

    echo "<script>window.location.href='index.php'</script>";
  } else {
    // Message for unsuccessfull login
    echo "<script>alert('Invalid details. Please try again');</script>";
    echo "<script>window.location.href='login.php'</script>";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOG IN</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="../font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->

  <link href="../assets/css/style1.css" rel="stylesheet">

</head>

<body>

  <div class="container-fluid">
    <div class="row no-gutter">
      <!-- The image half -->
      <div class="col-md-6 d-none d-md-flex bg-image"></div>


      <!-- The content half -->
      <div class="col-md-6 bg-light">
        <div class="login d-flex align-items-center py-5">

          <!-- Demo content-->
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-7 mx-auto">
                <h3 class="display-4">AVECHI</h3>
                <p class="text-muted mb-4">WELCOME BACK!</p>
                <form method="post">
                  <div class="form-group mb-3">
                    <input id="inputEmail" type="email" placeholder="Email address" name="emailAddress" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                  </div>
                  <div class="form-group mb-3">
                    <input id="inputPassword" type="password" placeholder="Password" name="pass" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                  </div>

                  <button type="submit" class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill shadow px-3" name="login" id="login">Log in</button>
                  <div class="text-center d-flex justify-content-between mt-4">
                    <p>Not a member?<a href="signup.php" class="font-italic text-danger">
                        <u>Register here</u></a></p>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- End -->

        </div>
      </div><!-- End -->

    </div>
  </div>

  <script src="../jquery/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

</body>

</html>