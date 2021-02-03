<?php
include('config.php');
include('newsletter.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>vvo infotech llp-Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php echo $alert;  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html"><img  src="assets/img/favicon.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
          <li><a href="index.php">Home</a></li>

          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="team.php">Team</a></li>
              
            </ul>
          </li>

          <li><a href="services.php">Services</a></li>
          <li><a href="products.php">Product</a></li>
          <li ><a href="offers.php">Offers</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>


        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.4771287970334!2d73.1292366149!3d18.99868578713229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU5JzU1LjMiTiA3M8KwMDcnNTMuMSJF!5e0!3m2!1sen!2sin!4v1611143103903!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>

    </div>
    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p><b>Register Office:</b> <br>701, Bldg. 04, Neel Sankul Society,
                        Sector 11, Kalamboli, Navi - Mumbai,
                        Maharashtra, India - 410218. <br>
                        <b>Branch Office:</b> C2/11,Pratishram Building,
                        Near St. Mary's School, Ugantak
                        Sukhapur, New Panvel-410206.
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>sales@vvoinfotech.in</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 98202 08333<br>+91 93261 39268<br>+971 55 218 6094</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control"  placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone"  placeholder="Mobile Number" data-rule="minlen:10" data-msg="Please enter a valid Mobile Number" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject"  placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button name="submit"  type="submit">Send Message</button></div>
            </form>
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

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>vvo infotech llp</h3>
            <p>
              <b>Register Office:</b> 701, Bldg. 04, Neel Sankul Society,
              Sector 11, Kalamboli, Navi - Mumbai,
              Maharashtra, India - 410218. <br><br>
              <b>Branch Office:</b> C2/11,Pratishram Building,
              Near St. Mary's School, Ugantak
              Sukhapur, New Panvel-410206.<br><br>
              <strong>Phone:</strong>  +91 98202 08333<br> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              +91 93261 39268<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              +971 55 218 6094<br>

              <strong>Email:</strong> sales@vvoinfotech.in<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Website Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Software/Hardware Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Server Maintenance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">CCTV Camera Setup and Maintenance.</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input name="subscribe" type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>


    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright © 2020. <strong><span>VVO INFOTECH LLP</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>

      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>