<?php
 include_once("./session/sesion.php");
 ?>
<?php

include "db_.php";

 ?>


<?php

include "header_movil.php";

?>


<?php 

function TomarFotoThumb($foto,$val){
	//echo "TomarFotoThumb: ";
	$solo_imagen = substr($foto, strrpos($foto,"/")+1);
	$ruta = substr($foto, 0,strrpos($foto,"/"));

	//echo "Ruta: ".$ruta."   <br>";

	//echo "Imagen: ".$solo_imagen."   <br>";

	//echo "Salida: ". $ruta."/".$val."_".$solo_imagen;

	return $ruta."/".$val."_".$solo_imagen;
}

function ColorAHex($color,$mysqli){

	
	if($color=="AZUL"){
		return "#00f";
	}
	if($color=="NEGRO"){
		return "#000";
	}
	if($color=="ROJO"){
		return "#f00";
	}
	if($color=="VERDE"){
		return "#0f0";
	}
	if($color=="BLANCO"){
		return "#fff";
	}
	if($color=="AMARILLO"){
		return "#FFFF00";
	}
	if($color=="VIOLETA"){
		return "#FF99FF";
	}
	if($color=="VERDE CLARO"){
		return "#99FF99";
	}
	if($color=="FUCSIA"){
		return "#FF00FF";
	}
	


	$sq = "SELECT * FROM `colores_base` WHERE color LIKE '$color' ";
	//echo $sq;
	$resultt = $mysqli->query($sq);
	 while ($rowt = $resultt->fetch_row()){

  	    $id=$rowt[0];
        $nombre=$rowt[1];
        $color_d=$rowt[2];
		
		return $color_d;

	}


	$sq = "SELECT * FROM `colores_base` WHERE color LIKE '%$color%' LIMIT 1 ";
	//echo $sq;
	$resultt = $mysqli->query($sq);
	 while ($rowt = $resultt->fetch_row()){

  	    $id=$rowt[0];
        $nombre=$rowt[1];
        $color_d=$rowt[2];
		
		return $color_d;

	}
		


	return "#DDD";


}

?>


<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es-MX">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-STQLBQTQ5B"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-STQLBQTQ5B');
	</script>
	

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;300;800;400&display=swap" rel="stylesheet">

	<title>Inicio - Plural</title>    

	<link rel="stylesheet" href="movil_header_style.css">

   
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
    		console.log( "ready!" );
    		//myFunctionTimerBannerTop();
    		banners_top_iniciar();
    		
		});


	</script>


 </head>

 <body>
<div id="salida" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>
<div id="salida2" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>




 	<div class="content_all">





 		<!--    INICIO del MENU -->

 		<?php include("movil_sdm_menu.php"); ?>

 		<!--    FIN del MENU -->


 		<style type="text/css">
 			.contenido{
 				min-height: 400px;
 			}
 			.class_input{
 				width: 90%;
 				border: none;
 				border-bottom: 1px #333 solid;
 			}
 			.container{
 				font-family: 'Raleway', sans-serif;
				font-weight: 300;
				font-size: 12px;
 			}
 			.tienes_cuenta{
 				font-family: 'Raleway', sans-serif;
				font-weight: 300;
				font-size: 12px;
				text-align: center;
 			}
 			.boton_submit_azul{
 				width: 100%;
 				margin: auto;
 				color: #fff;
 				background-color: #4305FA;
 				border: none;
 				height: 40px;
 				border-radius: 20px;
 				cursor: pointer;
 			}
 				.boton_submit_azul:hover{

			        -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);

				}
 		</style>




<?php



if(!isset($correo)){



 ?>


 		
 		<div class="contenido">
 			<form action="

 			" method="POST">
 			<div style="width: 80%; margin: auto;">
 				<img src="/graficos/registro_banner.png" style="width: 100%;">
 			</div>

 			<div style="width: 80%; margin: auto;">
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="nombre" placeholder="Nombre">
 				</div>
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="apellido" placeholder="Apellido">
 				</div>
 				<div style="clear: both;"></div>
 			</div>

 			<br><br>

 			<div style="width: 80%; margin: auto;">
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="correo" placeholder="Correo electrónico">
 				</div>
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="password" name="pass" placeholder="Contraseña">
 				</div>
 				<div style="clear: both;"></div>
 			</div>

 			<br><br>

 			<div style="width: 24%; margin: auto;">
 				<input type="checkbox" >
 				<label class="container">He leido y acepto los 
 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
 						<a href="/terminos.php" style="color: #4305FA; text-decoration: none;">Términos y condiciones.</a>
 					</span></label>
 			</div>

 			<br><br><br>

 			<div style="width: 30%; margin: auto;">
 				<input type="submit" name="" value="¡Comenzar ahora!" class="boton_submit_azul">
 			</div>

 			<br>

 			<div style="width: 30%; margin: auto;" class="tienes_cuenta">
 				
 				¿Ya tienes cuenta?
 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
 						<a href="/sdm_login_03.php" style="color: #4305FA; text-decoration: none;">Iniciar sesión.</a>
 					</span>
 			</div>



 			<br><br>


			 			
			</form>

 		</div>

 		<?php
 		}
 		?>





 		<?php 


 		if(isset($correo)){
	 		$sql = "SELECT count(*) FROM usuario WHERE correo = '$correo' ";
	 		$resulz = $mysqli->query($sql);
	 		$existe=0;
			while ($rowz = $resulz->fetch_row()){
				$existe=$rowz[0];
			}
		

			if($existe>0){
				echo "<h1>Este correo ya ha sido registrado</h1>";
			}else{
				$sql="INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `pass`, `extra`, `estatus`, `fecha_alta`, `datos`, `confirmacion`) 
	 		VALUES (NULL, '$nombre', '$apellido', '$correo', '$pass', '0', '0', now(), '0', '0');";
	 		//echo $sql;
	 		$resulz = $mysqli->query($sql);
			

 		}
 		




 		?>

 		<style type="text/css">
 			.completo{
 					font-family: 'Raleway', sans-serif;
				font-weight: 400;
				
				text-align: center;
 			}
 		</style>

 		<div>
 			
 			<div style="width: 80%; margin: auto;">
 				<img src="/graficos/registro_banner.png" style="width: 100%;">
 			</div>


 			<br><br>



	 		<div  style="width: 50%; margin: auto;" class="completo">

	 			<h1>Registro completo</h1>
	 			<h2>Gracias por registrarte con nosotros</h2>



	 			<br><br><br>
	 		</div>





 		</div>



 		<?php
 		}
 		?>








 </div>


 		<?php

 		include("movil_sdm_footer.html");

 		?>





 </body>

 </html>




















