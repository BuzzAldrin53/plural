<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_logos` WHERE `id_home_logos` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>