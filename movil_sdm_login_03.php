<?php
 include_once("./session/sesion.php");
 ?>
<?php
//@session_start();
include "db_.php";



if(isset($_SESSION['login'])){
	if($_SESSION['login']  == "ok"){
	  //header("location: ../videos/index.php");
		//header("location: ./entrar.php");
	}
}


if( isset($correo) && isset($pass) ){

			  $qt = "SELECT * FROM usuario WHERE correo='$correo' AND pass='$pass' LIMIT 1";
			  //echo $qt;             
			  $resultt = $mysqli->query($qt);
			  $cf=0;
			  while ($rowt = $resultt->fetch_row()){
			    $id_usuario=$rowt[0];
			    $nombre=$rowt[1];
			    $t_apellido=$rowt[2];
			    $t_correo=$rowt[3];
			    $t_pass=$rowt[4];
			    $cf++;
			    //echo $id_usuario." ".$nombre;
			   }

			if(isset($_SESSION['login'])){

				if($_SESSION['login']  == "ok"){
				  //header("location: ../videos/index.php");
					//header("location: ./entrar.php");

				}else{
				  $_SESSION['login'] = "out";
				}

			}

			extract($_POST);
			extract($_GET);

			$login = false;

			//echo "<h1>Usuario:".$usuario."   Email:".$email."        Password: ".$password."    Pass: ".$pass;

		if($cf>0){

			if($t_correo==$correo && $t_pass==$pass && $correo!="" && $pass!=""){
			  $_SESSION['login']  = "ok";
			  $_SESSION['id_login']  = $id_usuario;
			  $_SESSION['nombre']  = $nombre;
			  $login = true;
			  $index = 1;
			  //echo "<h2>OK TRUE</h2>";
			  //header("location: ../videos/index.php?l=1");
			  //header("location: ./entrar.php");
			}else{
			  //echo "<h2>FALSE</h2>";
			  $login = false;
			  $index=1;
			}
		}

}

//echo "<h1>".$nombre."</h1>";

//echo "<h1>".$login."</h1>";
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

	<title>Login - Plural</title>    

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

if( !isset($correo) OR $cf==0 ){

 ?>

 		
 		<div class="contenido">
 			<form action="" method="POST">

 			<div style="width: 80%; margin: auto; text-align: center; font-size: 25px; font-family: 'Raleway', sans-serif; font-weight: 500; margin-top: 80px; margin-bottom: 40px;">
 				LOGIN
 			</div>

 			<div style="width: 40%; margin: auto;">
 				<input class="class_input" type="text" name="correo" placeholder="Correo electrónico">
 			</div>

 			<br><br>

 			<div style="width: 40%; margin: auto;">
 				<input class="class_input" type="password" name="pass" placeholder="Contraseña">
 			</div>

 			<br><br><br>

 			<div style="width: 30%; margin: auto;">
 				<input type="submit" name="" value="Entrar" class="boton_submit_azul">
 			</div>

 			<br>

 			<div style="width: 30%; margin: auto;" class="tienes_cuenta">
 				
 				¿Aún no tienes cuenta?
 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
 						<a href="/sdm_registro_03.php" style="color: #4305FA; text-decoration: none;">Registrate.</a>
 					</span>
 			</div>



 			<br><br>


			 			
			</form>

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




















