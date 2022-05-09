<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIGN UP</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../assets/css/style1.css" rel="stylesheet">

</head>

<body>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-10 col-lg-7 col-xl-6">
        <img src="../assets/img/portfolio/portfolio-1.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="../process_register.php" method="post">
         
          <!-- First Name -->
          <div class="form-outline mb-4">
            <input type="text" id="firstname" class="form-control form-control"
              placeholder="Enter your first name" name="fname" />
            <label class="form-label" for="fname">First Name</label>
          </div>

           <!-- Last Name -->
           <div class="form-outline mb-2">
            <input type="text" id="lastname" class="form-control form-control"
              placeholder="Enter your last name" name="lname" />
            <label class="form-label" for="lname">Last Name</label>
          </div>

           <!-- Email input -->
           <div class="form-outline mb-2 ">
            <input type="email" id="email" class="form-control form-control"
              placeholder="Enter a valid email address" name="emailAddress" />
            <label class="form-label" for="emailAddress">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control"
              placeholder="Enter password" name="pass" />
            <label class="form-label" for="pass">Password</label>
          </div>

           <!-- Password input -->
           <div class="form-outline mb-3">
            <input type="password" id="cpassword" class="form-control form-control"
              placeholder="Confirm password" name="cpass" />
            <label class="form-label" for="cpass">Confirm password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-danger btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; " name="submit">Sign up</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                class="link-danger">Log in</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-danger">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="bi bi-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="bi bi-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

</body>

</html>