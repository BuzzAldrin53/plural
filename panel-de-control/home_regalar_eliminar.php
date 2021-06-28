<?php
 include_once("db.php");
 ?>


 <?php 


					$qt = "
								DELETE FROM `home_regalar_siempre` WHERE `id_home_regalar` = '$id'


					";
					echo $qt;
					$resultt = $mysqli->query($qt);



 ?>