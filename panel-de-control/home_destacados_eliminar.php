<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_destacados` WHERE `id_home_destacado` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>