<?php 



//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


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

INSERT INTO `reciente` (`id_reciente`, `categoria`, `url_categoria`, `nombre`, `estrellas`, `imagen`, `url`, `clicks`) VALUES (NULL, 'ddd', 'd', 'd', '2', 'dd', 'd', '2');

    ";


     //$result=$mysqli->query($sql);

  
    //echo '{"status":"true","message":"Data fetched successfully!","data":""}';
  


  
  //$mysqli->close(); 



    ?>