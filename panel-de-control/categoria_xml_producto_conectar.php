<?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								
								INSERT INTO `categoria_xml_producto` (`id_categoria_xml_producto`, `id_categoria`, `id_producto`, `extra`) 
								VALUES (NULL, '$idc', '$idp', '0');


					";
					echo $qt;
					$resultt = $mysqli->query($qt);


					$sql = "UPDATE `xml_productos` SET `extra` = '1' WHERE `xml_productos`.`id_producto` = '$idp' ;";
	                 $resu = $mysqli->query($sql);



	                 $sq = "UPDATE `categoria_xml_producto` SET `extra` = '1' WHERE `id_producto` = '$idp' ;";
	                 $resu = $mysqli->query($sq);



 ?>