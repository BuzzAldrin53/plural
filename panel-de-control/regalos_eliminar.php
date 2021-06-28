<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_regalo_perfecto` WHERE `id_regalo_perfecto` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>