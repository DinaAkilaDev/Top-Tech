<?php
extract($_POST);
$link = mysqli_connect("localhost", "root", "", "toptech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO `registration form`(`First-Name`, `Last-Name`, `Email-address`, `Phone-Number`, `Course-Name`) VALUES ('".$fname."', '".$lname."', '".$email."','".$phone."','".$Coursename[0]."')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>