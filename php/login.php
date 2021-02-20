<?php
extract($_POST);
if (COUNT($_POST)==0){
    header("location: http://".$_SERVER['HTTP_HOST']."/TopTech/login.php",true,303);
    exit;
}
else{
    if(strcmp($name,'admin')==0 and strcmp($password,'ahmedjarada')==0){
    header("location: http://".$_SERVER['HTTP_HOST']."/TopTech/admin.php",true,303);
    exit;
    }
}

?>