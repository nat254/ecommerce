<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AVECHI</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<?php
if(isset($_SESSION['userID']))
{
?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">AVECHI.com</a></h1>
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#shop">Shop</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Smartphones</a></li>
              <li><a href="#">Phone accessories</a></li>
              <li><a href="#">TVs</a></li>
              <li><a href="#">Audio</a></li>
              <li><a href="#">Cookers</a></li>
              <li><a href="#">Fridges</a></li>
              <li><a href="#">Kitchen appliances</a></li>
              <li><a href="#">Home appliances</a></li>
              <li><a href="#">Laptops</a></li>
              <li><a href="#">Computers</a></li>
              <li><a href="#">Tablets</a></li>
              <li><a href="#">Office appliances</a></li>
              <li><a href="#">Cameras</a></li>
              <li><a href="#">Camera accessories</a></li>
              <li><a href="#">Tv accessories</a></li>
            </ul>
          </li>
        <li><a class="getstarted scrollto" href="profile.php"><?php echo $_SESSION['firstname'];?></a></li>
        <li><a class="getstarted scrollto" href="logout.php">LOG OUT</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!--navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Associated Electronics, Satisfaction Guaranteed</h2>
                <p class="animate__animated animate__fadeInUp">Check out our latest products.</p>
                <div>
                  <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Beyond Basic.</h2>
                <p class="animate__animated animate__fadeInUp">For a new generation of photographers.</p>
                <div>
                  <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Electronics, the original</h2>
                <p class="animate__animated animate__fadeInUp">Don't miss out.</p>
                <div>
                  <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Avechi Kenya is a popular online electronics shop in Kenya.We offer fast, secure and convenient online shopping experience with a broad product offering.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Fast</h4>
              <p>We ensure our customers receive their purchases on time.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Secure</h4>
              <p>We safeguard customer and transaction details to guarantee a safe transaction experience.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Convenient</h4>
              <p>We offer a hassle-free shopping experience and a variety of payment options.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Latest Products</h2>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>JBL Headphones</h4>
                <p>Ksh.2,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lenovo Thinkpad p52 laptop</h4>
                <p>Ksh. 40,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>French door samsung refrigerator</h4>
                <p>Ksh. 100,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Samsung slide-in gas cooker</h4>
                <p>Ksh.102,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Iphone 6</h4>
                <p>Ksh.25,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Olympus E-30 camera</h4>
                <p>Ksh.60,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Braun JB3060 Blender</h4>
                <p>Ksh.70,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-8jpg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hp Latex 315 printer</h4>
                <p>Ksh.120,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/portfolio-9.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Samsung countertop microwave</h4>
                <p>Ksh.115,000</p>
                <div class="portfolio-links">
                  <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                  <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Pioneer House, Moi Avenue (above Quickmart Pioneer) 4th Floor Shop 402, Nairobi</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+254 701 10 10 10"> 0701 10 10 10</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:customer@avechi.com">customer@avechi.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-10">
            <div class="footer-info">
              <h3>AVECHI.com</h3>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-10">
            <div class="footer-info">
              <p>
                Pioneer House, Moi Avenue (above Quickmart Pioneer)<br>
                4th Floor Shop 402, Nairobi<br><br>
                <strong>Phone:</strong> 0701 10 10 10<br>
                <strong>Email:</strong> customer@avechi.com<br>
              </p>
            
            </div>

          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

         


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AVECHI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">David & Natalie</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

<?php
}else{
?>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.php">AVECHI.com</a></h1>
    <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#shop">Shop</a></li>
        <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Phone accessories</a></li>
            <li><a href="#">TVs</a></li>
            <li><a href="#">Audio</a></li>
            <li><a href="#">Cookers</a></li>
            <li><a href="#">Fridges</a></li>
            <li><a href="#">Kitchen appliances</a></li>
            <li><a href="#">Home appliances</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Computers</a></li>
            <li><a href="#">Tablets</a></li>
            <li><a href="#">Office appliances</a></li>
            <li><a href="#">Cameras</a></li>
            <li><a href="#">Camera accessories</a></li>
            <li><a href="#">Tv accessories</a></li>
          </ul>
        </li>
        <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        <li><a class="getstarted scrollto" href="signup.php">Registration</a></li>
        
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!--navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(../assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Associated Electronics, Satisfaction Guaranteed</h2>
              <p class="animate__animated animate__fadeInUp">Check out our latest products.</p>
              <div>
                <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Beyond Basic.</h2>
              <p class="animate__animated animate__fadeInUp">For a new generation of photographers.</p>
              <div>
                <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Electronics, the original</h2>
              <p class="animate__animated animate__fadeInUp">Don't miss out.</p>
              <div>
                <a href="#shop" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop now</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>Avechi Kenya is a popular online electronics shop in Kenya.We offer fast, secure and convenient online shopping experience with a broad product offering.</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box">
            <span>01</span>
            <h4>Fast</h4>
            <p>We ensure our customers receive their purchases on time.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>02</span>
            <h4>Secure</h4>
            <p>We safeguard customer and transaction details to guarantee a safe transaction experience.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>03</span>
            <h4> Convenient</h4>
            <p>We offer a hassle-free shopping experience and a variety of payment options.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Latest Products</h2>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>JBL Headphones</h4>
              <p>Ksh.2,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lenovo Thinkpad p52 laptop</h4>
              <p>Ksh. 40,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-3.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>French door samsung refrigerator</h4>
              <p>Ksh. 100,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Samsung slide-in gas cooker</h4>
              <p>Ksh.102,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Iphone 6</h4>
              <p>Ksh.25,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Olympus E-30 camera</h4>
              <p>Ksh.60,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Braun JB3060 Blender</h4>
              <p>Ksh.70,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-8jpg.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hp Latex 315 printer</h4>
              <p>Ksh.120,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="../assets/img/portfolio/portfolio-9.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Samsung countertop microwave</h4>
              <p>Ksh.115,000</p>
              <div class="portfolio-links">
                <a href="#shop" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Add to cart"><i class="bi bi-cart"></i></a>
                <a href="#wishlist" title="wishlist"><i class="bi bi-heart"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact Us</h2>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>Pioneer House, Moi Avenue (above Quickmart Pioneer) 4th Floor Shop 402, Nairobi</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+254 701 10 10 10"> 0701 10 10 10</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:customer@avechi.com">customer@avechi.com</a></p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-10">
          <div class="footer-info">
            <h3>AVECHI.com</h3>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-10">
          <div class="footer-info">
            <p>
              Pioneer House, Moi Avenue (above Quickmart Pioneer)<br>
              4th Floor Shop 402, Nairobi<br><br>
              <strong>Phone:</strong> 0701 10 10 10<br>
              <strong>Email:</strong> customer@avechi.com<br>
            </p>
          
          </div>

        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

       


      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>AVECHI</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    
      Designed by <a href="#">David & Natalie</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>
<?php
}
?>
</html>