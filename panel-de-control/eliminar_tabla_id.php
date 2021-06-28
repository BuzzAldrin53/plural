<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `$tabla` WHERE `$id_name` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>