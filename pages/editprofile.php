<?php
include_once('../function.php');

session_start();
$id=$_SESSION['userID'];
$userdata = new DB_con();
$row = $userdata->profile($id);

if (isset($_POST['edit'])) {
  //access Values
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['emailAddress'];
  $gender = $_POST['gender'];


  $sql = $userdata->editProfile($id,$fname, $lname, $email,$gender);
  if ($sql == TRUE) {
    echo "<script>alert('Update successfull!');</script>";
    echo "<script>window.location.href='profile.php'</script>";
  } else {
    // Message for unsuccessfull insertion
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='editprofile.php'</script>";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT PROFILE</title>

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
                <p class="text-muted mb-4">EDIT PROFILE!</p>
                <form   method="post">
                  <div class="form-group mb-3">
                    <input id="inputFirstName" type="text" placeholder="First Name" name="fname" id="fname" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" value="<?php echo $row['first_name']; ?>" required>
                  </div>
                  <div class="form-group mb-3">
                    <input id="inputLasttName" type="text" placeholder="Last Name" name="lname" id="lname" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" value="<?php echo $row['last_name']; ?>"required>
                  </div>
                  <div class="form-group mb-3">
                    <input id="inputEmail" type="email" placeholder="Email address" name="emailAddress"  autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" value="<?php echo $row['email']; ?>"required>
                    <!-- <span id="emailAvailability"></span> -->
                  </div>
                  <div class="form-group mb-4 px-3">
                    <p class="text-muted mb-3">Gender</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" <?php if($row['gender']== 'male'){echo 'checked="checked"';}; ?> />
                      <label class="form-check-label" for="gender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" <?php if($row['gender']== 'female'){echo 'checked="checked"';}; ?> />
                      <label class="form-check-label" for="gender">Female</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill shadow px-3" name="edit" >Edit</button>
                  <div class="text-center d-flex justify-content-between mt-4">
                    <p><a href="profile.php" class="font-italic text-danger">Cancel</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- End -->

        </div>
      </div><!-- End -->

    </div>
  </div>

  <!-- <script>
function checkEmail(va) {
  $.ajax({
  type: "POST",
  url: "../check_availability.php",
  data:'emailAddress='+va,
  success: function(data){
  $("#emailAvailblty").html(data);
  }
  });
 
}
</script> -->
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