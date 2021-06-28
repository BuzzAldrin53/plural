<?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `categoria_xml_categoria` WHERE `categoria_xml_categoria`.`id_categoria_xml_categoria` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>