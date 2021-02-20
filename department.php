<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Top Tech - Department</title>
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
  <?php extract($_POST);
$link = new mysqli("localhost", "root", "", "toptech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM `department` where id='".$id."'";
$result=$link->query($sql);

  while($row=$result->fetch_assoc()){
    ?> 
        <section id="portfolio" class="portfolio" style="margin-top: 150px;">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="text-align: center;">
                  <h2><?php echo $row['title'] ;?></h2>
                  <p><?php echo $row['description'] ;?></p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
     
                <?php } 
                $sql2 = "SELECT * FROM `projects` where fk='".$id."'";
                $result2=$link->query($sql2);
                while($rw=$result2->fetch_assoc()){
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app h-400 w-400"><div class="portfolio-img">
                    <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $rw['img'] ).'"/>';?>

                        </div>
                    <div class="portfolio-info">
                    <h4><?php echo $rw['title'] ;?></h4>
                    <p><?php echo $rw['discrption'] ;?></p>
                    <a href="assets/img/WhatsApp Image 2020-12-28 at 11.33.41 AM.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i>
                    </a>
                </div>
          </div>
<?php } ?>
        </div>
        
      </div>
    </section>
<div style="background-color: whitesmoke;">
<?php 
$sql1 = "SELECT * FROM `members` where id='".$id."'";
$result1=$link->query($sql1);

  
?>
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">
        <div class="section-title" style="text-align: center;">
          <h2>Members</h2>
          <p >Our Proffesional Members</p>
        </div>
        
        <div class="row">
        <?php while($row=$result1->fetch_assoc()){ ?>
          <div class="col-lg-4 col-md-6" >
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $row['imgmember'] ).'"/>';?>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $row['namemember'] ;?></h4>
                </div>
                <div class="social">
                  <a href="<?php echo $row['Facebook'] ;?>"><i class="icofont-facebook"></i></a>
                  <a href="<?php echo $row['Instagram'] ;?>"><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
<?php }?>
         

        </div>
</div>
      </div>
    </section>
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