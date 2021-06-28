<?php


 $DB_USER='robotics_admin'; 
 $DB_PASS='4dm1n'; 
 $DB_HOST='localhost';
 $DB_NAME='robotics_db';



 $DB_USER='pluralmk_admin'; 
 $DB_PASS='plur4l4dm1n'; 
 $DB_HOST='127.0.0.1';
 $DB_NAME='pluralmk_db';
 

 //$link = mysqli_connect('localhost', 'molcajet_admin', '4dm1n', 'molcajet_db');

 
extract($_POST);
extract($_GET); 


    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    /* check connection */
    if (mysqli_connect_errno())
                   {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
    }  
    $mysqli->query("SET NAMES 'utf8'");

//echo "db";

?>