<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `categoria_xml_producto` WHERE `id_categoria_xml_producto` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>