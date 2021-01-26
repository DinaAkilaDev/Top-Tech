<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Top Tech - Index</title>
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
  </head>
  <body>
  <?php include 'header.html';?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Top Tech</h1>
          <h2>We are team of talanted designers making websites with Bootstrap</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
   <!-- ======= About Us Section ======= -->
   <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="#" class="btn-learn-more">Contact Us</a>
        </div>
        <div class="col-lg-6">
            <img src="assets/img/skills.png" class="img-fluid animated">
          </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-3 text-center text-lg-center">
          <i class="bx bxl-dribbble" style="color: white;font-size: 70px;"></i>
          <h3>5000</h3>
          <p>CLIENT</p>
        </div>
        <div class="col-lg-3 text-center text-lg-center">
            <i class="bx bx-file" style="color: white;font-size: 70px;"></i>
            <h3>2000</h3>
            <p>IDEAS</p>
        </div>
        <div class="col-lg-3 text-center text-lg-center">
            <i class="bx bx-tachometer" style="color: white;font-size: 70px;"></i>
            <h3>3000</h3>
            <p>TIME OF WORK</p>
        </div>
        <div class="col-lg-3 text-center text-lg-center">
            <i class="bx bx-layer" style="color: white;font-size: 70px;"></i>
            <h3>8000</h3>
            <p>PROJECT DONE</p>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->
  <!-- ======= DEPARTMENT Section ======= -->
  <section id="DEPARTMENT" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Department</h2>
      </div><div class="row">
<?php
$link = new mysqli("localhost", "root", "", "toptech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM `departments`";
$result=$link->query($sql);

  while($row=$result->fetch_assoc()){
    ?>
    
      
        <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100" >
          <div class="icon-box">
            <div class="icon"><?php echo '<img class="img-fluid animated"  style="width:400px;height:200px;" src="data:image/jpeg;base64,'.base64_encode( $row['img project'] ).'" />';?>
</div>
<form action='department.php' method='post'><h4 ><input style='background-color:white;border:1px white;color:#37517e;font-weight:bold;' type='submit' name='submit' value='<?php echo $row['title'] ;?>'></h4>
              <input type='hidden' name='id' value='<?php echo $row['id'] ;?>' ></form>
            <p><?php echo $row['description'] ;?></p>
          </div>
        </div>
        <?php
      }
      ?>      
      </div>

    </div>
  </section><!-- End DEPARTMENT Section -->
  <!-- ======= Courses Section ======= -->
  <section id="Courses" class="why-us" style="background: whitesmoke;">
      <div class="container " data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">
        <?php
$link = new mysqli("localhost", "root", "", "toptech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM `courses`";
$result=$link->query($sql);

  while($row=$result->fetch_assoc()){
    ?>
          <div class="col-lg-4 " >
            <div class=" boxx mb-5" data-aos="zoom-in" data-aos-delay="100" style="background-color:white;height:500px;width:360px;">
            <div class="icon"><?php echo '<img class="img-fluid animated"  style="width:400px;height:200px;" src="data:image/jpeg;base64,'.base64_encode( $row['img courses'] ).'" />';?></div>
              <form action='courses.php' method='post'><h4 ><input style='background-color:white;border:1px white;color:#37517e;font-weight:bold;' type='submit' name='submit' value='<?php echo $row['title courses'] ;?>'></h4>
              <p onMouseOver="this.style.color='black'" onMouseOut="this.style.color='gray'"><?php echo $row['description courses'] ;?></p>
              <input type='hidden' name='id' value='<?php echo $row['id'] ;?>' ></form>
            </div>
          </div>
          <?php
      }
      ?>  
        </div>

      </div>
    </section><!-- End Courses Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->
  
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>What they're saying about us</p>
      </div>

      <div class="owl-carousel portfolio-details-carousel testimonials-carousel " data-aos="zoom-in" data-aos-delay="100">

        <div class="testimonial-item text-center text-lg-center">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #47b2e4;"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #47b2e4;"></i>
          </p>
          <div class="row justify-content-center">
            <img src="assets/img/team/team-4.jpg" class="testimonial-img " alt="">
            <h3>Saul Goodman</h3>
            </div>
        </div>

        <div class="testimonial-item text-center text-lg-center">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #47b2e4;"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #47b2e4;"></i>
          </p>
          <div class="row justify-content-center">
            <img src="assets/img/team/team-3.jpg" class="testimonial-img " alt="" >
            <h3>Sara Wilsson</h3>
        </div>
          
        </div>

        <div class="testimonial-item text-center text-lg-center">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #47b2e4;"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #47b2e4;"></i>
          </p>
          <div class="row justify-content-center">
            <img src="assets/img/team/team-2.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
          </div>
        </div>

        <div class="testimonial-item text-center text-lg-center">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #47b2e4;"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #47b2e4;"></i>
          </p>
          <div class="row justify-content-center">
            <img src="assets/img/team/team-1.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
          </div>
        </div>

        <div class="testimonial-item text-center text-lg-center">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left" style="color: #47b2e4;"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right" style="color: #47b2e4;"></i>
          </p>
          <div class="row justify-content-center">
            <img src="assets/img/team/team-4.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="php/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->

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