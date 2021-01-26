<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Top Tech - Courses</title>
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
  $sql = "SELECT * FROM `courses` where id='".$id."'";
  $result=$link->query($sql);
  while($row = $result->fetch_assoc()) {

  ?>
    <div class="shadow-lg p-3 mb-5 bg-white mx-auto" style="border:solid;border-color:#ffffff; width:80%; margin-top:150px;" > 
        <div class="container-fluid mx-auto">
            <div class="row " style="width:100%; ">
                <div class="box overlay" style="height:100px ;background-color:whitesmoke;width:77.5%">
                    <h1 class="text-center" style="color:#1e2597;font-weight:bold;padding-top:30px;"><?php  echo $row['title courses'];?> </h1>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top:10%">
            <div class="row">
                <div class="col-6 mx-auto">
                <?php echo '<img class="img-fluid animated"  style="width:400px;height:200px;" src="data:image/jpeg;base64,'.base64_encode( $row['img courses'] ).'" />';?>
                </div>
                <div class="col-6">
                    <div  class="section-title">
                        <h2>COURSE DETAILS </h2>
                    </div>
                    <div class="row content" style=" padding-top:5px;">
                        <h3 style="padding-left:20px;">Description:</h3>
                        <p style="padding-left:20px;">
                        <?php  echo $row['description courses'];?>
                        </p>
                    </div>
                    <div class=" content" >
                        <h3 >Contents:</h3>
                    </div>
                    <div class=" content">
                     
                            <p style="font-size:18px;">  <?php  echo $row['contents courses'];?> </p>
                       
                    </div>
                    <div class=" content" >
                        <h3>Trainer:</h3>
                        <h6 > <?php  echo $row['trainercourses'];?></h6>
                    </div>
                    <div class=" content" >
                        <h3 >Duration:</h3>
                        <h6 ><?php  echo $row['duration courses'];?></h6>
                    </div>
                    <div class=" content" >
                        <h3 >Price:</h3>
                        <h6 ><?php  echo $row['price courses'];
                        }?></h6>
                    </div>
                    <a  class="get-started-btn scrollto " href="form.php" style="margin-left:230px;">Get Started</a>
                </div>
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