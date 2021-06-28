<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_ideas` WHERE `id_ideas` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>