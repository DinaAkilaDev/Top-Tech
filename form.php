<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Top Tech - Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <style>


        /* body{
            background-image: url(assets/img/99.png);
            background-size: cover;
    
        } */
        h1{
            margin-top: 50px;
        }
      
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

    </style>
</head>
<body>
<?php include 'header.html';?>
  <div style="background-image: url(assets/img/99.png);background-size: cover;margin-top: -50px;" class="col-lg-12">
<div class=" col-lg-5 container" style="margin-top: 150px;background-color: whitesmoke;
box-shadow:10px 5px 20px 5px #109cd8;margin-bottom: 50px;">
    <div class=" row container align-items-center justify-content-center mt-5 ">
        <H1 class="section-title">Registration Form</H1>
    </div>
    <div class="container ">
    <form action="php/form.php" method="post">
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group mt-2">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number" required>
          </div>
        <div class="form-group mt-2">
          <label for="exampleSelect1">Course Name</label>
          <select name="Coursename[]" class="form-control" id="exampleSelect1">
          <option value="--SELECT--">--SELECT--</option>
          <option value="Gardening">Gardening</option>
          <option value="Landscaping">Landscaping</option>
          <option value="Painting & Decorating">Painting & Decorating</option>
          <option value="Decking & Fencing">Decking & Fencing</option>
          </select>
        </div>
        <button type="submit" class="get-started-btn scrollto" >Submit</button>
      </form>
      <br><br><br>
    </div>
    </div>
  </div>
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TOP TECH</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
  
      <!-- Vendor JS Files -->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/venobox/venobox.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>