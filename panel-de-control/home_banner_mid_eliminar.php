<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_banner_mid` WHERE `id_banner_mid` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>