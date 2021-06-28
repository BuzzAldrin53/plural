<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_novedades` WHERE `id_novedades` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>