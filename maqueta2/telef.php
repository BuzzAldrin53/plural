<?php 


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$ip = $ip ."  -   " . $_SERVER['HTTP_USER_AGENT']; 


 $DB_USER='pluralmk_admin'; 
 $DB_PASS='plur4l4dm1n'; 
 $DB_HOST='127.0.0.1';
 $DB_NAME='pluralmk_db';
 
    extract($_POST);
    extract($_GET); 
 

    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    /* check connection */


    $mysqli->query("SET NAMES 'utf8'");
    $sql="

INSERT INTO `telefono` (`id_telefono`, `ip`, `fecha`, `extra`) VALUES (NULL, '$ip', now(), '0');
    ";


     $result=$mysqli->query($sql);

  
    //echo '{"status":"true","message":"Data fetched successfully!","data":""}';
  


  
  $mysqli->close(); 



    ?>