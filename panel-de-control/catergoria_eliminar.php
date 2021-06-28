<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `categoria` WHERE `categoria`.`id_categoria` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>