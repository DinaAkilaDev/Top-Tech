<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Top Tech - Admin</title>
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

<?php session_start();
if(isset($_SESSION["name"])){
    echo '<div class="section-title mt-5"> <h2> Welcome ',$_SESSION["name"],'</h2></div>';
}
else{
    header("location: http://".$_SERVER['HTTP_HOST']."/TopTech/login.php",true,303);
    exit;
}
$link = mysqli_connect("localhost", "root", "", "toptech");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM `registration form` ORDER BY `Course-Name`";
$result=$link->query($sql);
$sql2 = "SELECT `Course-Name` as course,COUNT(`id`) as number FROM `registration form` GROUP BY `Course-Name`";
$result2=$link->query($sql2);
?>
<section  class="d-flex align-items-center mt-5 ">
    <div class="container ">
        <div class="row">
            <table  class="table">
                <thead>
                    <th>Course Name</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </thead>
                <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php  echo $row['Course-Name'];?></td>
                    <td><?php  echo $row['First-Name'],$row['Last-Name'];?></td>
                    <td><?php  echo $row['Email-address'];?></td>
                    <td><?php  echo $row['Phone-Number'];?></td>
                    <?php }?>
                </tr>
                </tbody>
            </table>
            <table  class="table mt-5">
                <thead>
                <th>Course Name</th>
                <th>Student Number</th>
                </thead>
                <tbody>
                <?php while($row2 = $result2->fetch_assoc()) { ?>
                <tr>
                    <td><?php  echo $row2['course'];?></td>
                    <td><?php  echo $row2['number'];?></td>
                    <?php }?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>



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
