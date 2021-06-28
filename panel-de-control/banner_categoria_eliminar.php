<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `categoria_banner` WHERE `id_categoria_banner` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>