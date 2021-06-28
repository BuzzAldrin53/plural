<?php
 include_once("./session/sesion.php");
 ?>
<?php

include "db_.php";

 ?>
<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$safari = strpos($_SERVER['HTTP_USER_AGENT'],"Safari");
//Chrome
$chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");

//echo "crome: +".$chrome."+  ---    ";

function Exx($img,$crr){
	if($crr==""){
		return $img;
	}else{
		return "webp";
	}
}



//echo $_SERVER['HTTP_USER_AGENT'];
//echo "Safari: ".$safari;

if($iphone || $ipod || $ipad){
	$esapple=1;
	//echo "<h1>Es apple:".$esapple."</h1>";
}else{
	$esapple=0;
	//echo "<h1>Es apple:".$esapple."</h1>";
}

if($safari && $chrome){
	//echo "CHROME";
	$esapple=0;
}else{
	//echo "SAFARI";
	$esapple=1;
}





if($iphone || $android || $ipad){
    $imgg="png";
    $mobile=true;
    //echo '<br/><br/><br/>';
    //echo "<h1>IPHONE</h1>";
}else{
    $imgg="";
    $mobile=false;
    //echo '<br/><br/><br/>';
    //echo "<h1>DESK</h1>";
}
if ($android || $bberry || $iphone || $ipod || $webos== true) 
{ 
//header('Location: http://www.yoursite.com/mobile');
    //$ss_movil=1;
}else{
    
}
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

<?php

if( isset($_SESSION['id_login'])  ) {
	$idu=$_SESSION['id_login'];

	//echo "<h1>IDU: ".$idu."</h1>";

	 $id_checkout = $_SESSION['id_checkout'] ;

	 //echo "<h1>".$id_checkout."</h1>";

	//update, agregar campos del post anterior

}else{
	$id_checkout=0;
}


//usuario temporal
if(isset($usr_tmp_idu)){
	$idu = $usr_tmp_idu;
	//echo "<h1>IDU temp: ".$idu."</h1>";
}


if( isset($idu) && isset($nombre) && isset($apellido)  ){

	$sql = " UPDATE `usuario` SET `nombre` = '$nombre', `apellido` = '$apellido', `correo` = '$correo', `telefono` = '$telefono'
	 WHERE `usuario`.`id_usuario` = '$idu' ;  ";
	 //echo $sql;
	$resultt = $mysqli->query($sql);

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

	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-color: #fff;
		}
		.content_all{
			width: 1180px;
			margin: auto;
			background-color: #fff;
		}
		.top{
			width: 100%;
			height: 82px;
			background-color: #fff;
			border-bottom:  1px solid #F0F0F0;
			padding-top: 10px;
		}
		.top_logo{
			width: 104px;
			float: left;
			margin-left: 120px;
			background-color: #fff;
		}
		.top_logo img{
			width: 90%;
		}

		.top_buscador{
			width: 45%;
			
			margin: auto;
			padding-top: 20px;
			
		}
		.top_buscador_int{
			width: 100%;
			background-color: #F5F5F5;
			border-radius: 20px;
			height: 35px;
		}
		.top_buscador_txt{
			float: left;
			border-right: 1px solid #B2B2B2;
			height: 35px;
			width: 280px;
		}
		.top_buscador_txt input{
			border: none;
			width: 260px;
			height: 20px;
			font-size: 12px;
			margin-top: 6px;
			margin-left: 16px;
			background-color: #F5F5F5;
		}

		.top_buscador_cats{
			float: left;
			border-right: 1px solid #B2B2B2;
			height: 35px;
			width: 170px;
			padding-left: 15px;
		}
		.top_buscador_cats select{
			margin-top: 6px;
			height: 20px;
			border: none;
			width: 150px;
			font-size: 12px;
			color: #727272;
			background-color: #F5F5F5;
			text-align: center;
		}
		.top_buscador_icono{
			float: left;
			width: 30px;
			margin-left: 6px;   
			margin-top: 3px;
			cursor: pointer;
		}
		.top_buscador_icono img{
			width: 100%;
		}
		.top_menu_full{
			width: 100%;

			font-size: 13px;
			padding-top: 15px;

			font-family: 'Poppins', sans-serif;

			border-bottom:  1px solid #F0F0F0;
			background-color: #fff;
			padding-bottom: 15px;
		}
		.top_menu_full_int{
			width: 70%;
			margin: auto;
			background-color: #fff;
		}
		.top_menu_full_element{
			width: auto;
			float: left;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
		}
		.top_menu_full_element:hover{
			font-weight: bolder;
			cursor: pointer;
			color: #43A1F1;
		}

		.top_banners{
			width: 100%;
			height: 400px;
			overflow: hidden;
			margin-top: 10px;
			margin-bottom: 50px;
			border-radius: 10px;
			background-color: #ccc;
		}

		.top_banners img{
			width: 100%;
			border-radius: 10px;
		}

		.novedades{
			width: 70%;
			margin: auto;
			height: 320px;
			margin-bottom: 30px;
			overflow: hidden;
			/*background-color: #f0f;*/
			padding-bottom: 20px;

			font-family: 'Poppins', sans-serif;
			margin-top: 30px;
		}
		.novedades_tit{
			text-align: center;
			font-size: 20px;

			text-align: center;
			margin-bottom: 30px;
			

			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			color: #2b2b2b;

		}
		.novedades_elem{
			width: 23%;
			height: 280px;
			overflow: hidden;
			float: left;
			margin-right: 10px;
			margin-bottom: 20px;

			border-radius: 8px;


		  			background-position: center top;
    				background-size: 100% 100%;
    				background-repeat: no-repeat;
		}


		.novedades_elem:hover{

	        -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
	        -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
	        box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);

		}

		.novedades_elem_tit{
			text-align: center;
			color: #fff;
			font-weight: 600;

			width: 95%;
			margin: auto;
			
			margin-top: 19px;

			text-decoration: none;

			font-size: 18px;
			font-family: 'Raleway',sans-serif;
			font-weight: 800;
		}
		.novedades_elem_tit:hover{
			text-decoration: underline;
		}
		.regalar{
			width: 100%;
			margin: auto;
			padding-top: 35px;
			padding-bottom: 55px;
			border-radius: 8px;
		}
		.regalar_int{
			width: 75%;
			margin: auto;
			padding-bottom: 20px;
			/*background-color: #f0f;*/
		}
		.regalar_tit{
			text-align: center;
			font-size: 15px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 18px;
			text-transform: uppercase;

			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			color: #2b2b2b;

		}
		

		.banner_dos{
			width: 100%;
			height: 345px;
			overflow: hidden;
			margin-top: 30px;
			margin-bottom: 50px;
			border-radius: 10px;
			background-color: #ccc;
		}

		.banner_dos img{
			width: 100%;
			border-radius: 10px;
		}


		.encuentra{
			width: 100%;
			height: 305px;
			overflow: hidden;
			margin: auto;
			padding-top: 35px;
			padding-bottom: 35px;

			margin-top: 50px;
		}
		.encuentra_int{
			width: 72%;
			margin: auto;

			/*background-color: #f0f;*/
		}
		.encuentra_tit{
			text-align: center;
			font-size: 15px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 18px;
			text-transform: uppercase;

			font-family: 'Raleway', sans-serif;
			color: #333;

		}
		.encuentra_element{
			float: left;
			width: 200px;
			height: 290px;
			margin-bottom: 50px;

			
			margin-right: 10px;
			border-radius: 8px;


			/*
			 background-repeat: no-repeat;
  			background-size: contain, cover;
  			*/

  			background-position: center top;
    				background-size: 100% 100%;
    				background-repeat: no-repeat;
		}


		.encuentra_element:hover{

	        -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
	        -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
	        box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);

		}


		.encuentra_element_tit{
			width: 70%;
			margin: auto;
			height: auto;
			background-color: #25E092;
			border-radius: 20px;
			color: #fff;

			font-family: 'Raleway', sans-serif;
			font-weight: 700;


			font-size: 13px;
			margin-top: 15px;
			text-align: center;

			padding: 9px;
			line-height: 13px;
		}
		.encuentra_element_ini{
			float: left;
			width: 200px;
			height: 290px;
			overflow: hidden;
			
			margin-right: 10px;
			background-color: #25E092;
			color: #fff;

			border-radius: 8px;



		}
		.encuentra_element_ini_int{
			width: 80%;
			margin: auto;
			margin-top: 30px;

			font-family: 'Raleway', sans-serif;
			font-weight: 800;

			line-height: 21px;
			text-transform: uppercase;
			font-size: 21px;
		}


		.clr{
			clear: both;
		}

	</style>


   
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

 		<?php include("sdm_menu.php"); ?>

 		<!--    FIN del MENU -->

 		<style type="text/css">
 			.contenido{
 				min-height: 400px;
 			}
 			.class_input{
 				width: 90%;
 				border: none;
 				border-bottom: 1px #333 solid;
 				font-size: 16px;
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

			.titulo_de_pagina{
				font-size: 25px; 
				width:85%; 
				margin: auto;
				height: 50px;

				font-family: 'Raleway', sans-serif;
				font-weight: 500;
				padding-top: 10px;
				margin-top: 30px;
			}


 		</style>


 		<?php 

 		if(  isset($idu) ) {

 			//echo "<h1>".$_SESSION['id_login']."</h1>";

 			$idd = $idu;

 				$sql = " SELECT * FROM `usuario` WHERE id_usuario = '$idd' ";

 				$resultt = $mysqli->query($sql);
			  while ($rowt = $resultt->fetch_row()){
				    $id_usuario=$rowt[0];
				    $t_nombre=$rowt[1];
				    $t_apellido=$rowt[2];
				    $t_correo=$rowt[3];
				    $t_pass=$rowt[4];
				    //echo $id_usuario." ".$nombre;

					$domicilio = $rowt[15];
					$cp =  $rowt[16];
					$colonia = $rowt[17];
					$referencias = $rowt[18];

					$ciudad = $rowt[21];
					$estado = $rowt[22];
			   }


 		}

 		?>


 		<script type="text/javascript">
 			function Validar(){
 				
 				$("#alertas").html("<b>Mensajes de alerta</b> <br>");

 				var error=0;

 				
 				if($("#domicilio").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar tu domicilio <br>");
 				}
 				if($("#codigo_postal").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar tu código postal <br>");
 				}

 				if($("#colonia").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar tu colonia <br>");
 				}

 				if($("#referencias").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar alguna referencia para ayudar a la entrega <br>");
 				}

 				if($("#ciudad").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar tu ciudad <br>");
 				}

 				if($("#estado").val()==""){
 					error=1;
 					$("#alertas").append("- Debes ingresar tu estado<br>");
 				}


 				if(error==0){
 					$("#elform").submit();
 				}else{
 					$("#alertas").show(200);
 				}
 			}
 		</script>




<?php





//if(!isset($correo)){



 ?>


 		
 		<div class="contenido">
 			<form id="elform" action="sdm_compra_tarjeta_03.php" method="POST">

 			<input type="hidden" name="id_checkout" value="<?php echo $id_checkout; ?>">

 			<div style="background-color: #fff;" class="titulo_de_pagina">
 				¿A dónde enviamos tu pedido?
 			</div>

 			<div style="width: 60%; margin: auto; background-color: #fff; margin-bottom: 40px;">
 				<img src="/graficos/compra_envio_banner.png" style="width: 100%;">
 			</div>

 			<br>
 			
 			<div style="width: 100%; border-top: 1px solid #dedede;"></div>


 			<br>
 			<br>
 			<br>

 			<div style="width: 60%; margin: auto;">
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text"
 					 name="domicilio" id="domicilio" placeholder="Domicilio" value="<?php if(isset($domicilio)){  echo $domicilio;    } ?>" >
 				</div>
 				<div style="width: 50%; float: left;">
 					<input class="class_input"
 					 type="text" name="codigo_postal" id="codigo_postal" placeholder="Código Postal" value="<?php if(isset($cp)){  echo $cp;    } ?>" >
 				</div>
 				<div style="clear: both;"></div>
 			</div>

 			<br><br><br>

 			<div style="width: 60%; margin: auto;">
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="colonia" id="colonia" placeholder="Colonia" value="<?php if(isset($colonia)){  echo $colonia;    } ?>" >
 				</div>
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="referencias" id="referencias" placeholder="Referencias" value="<?php if(isset($referencias)){  echo $referencias;    } ?>" >
 				</div>
 				<div style="clear: both;"></div>
 			</div>

 			<br><br><br>
 			
 			<div style="width: 60%; margin: auto;">
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="estado" id="estado" placeholder="Estado" value="<?php if(isset($estado)){  echo $estado;    } ?>" >
 				</div>
 				<div style="width: 50%; float: left;">
 					<input class="class_input" type="text" name="ciudad" id="ciudad" placeholder="Ciudad" value="<?php if(isset($ciudad)){  echo $ciudad;    } ?>" >
 				</div>
 				<div style="clear: both;"></div>
 			</div>


 			<br><br>

 			<div id="alertas"
 			 style="display:none; border-radius: 5px; font-size: 11px; background-color: #E7F0FE; font-family: 'Raleway', sans-serif; width: 30%; margin: auto; padding: 10px; text-align: center;">
 				<b>Mensajes de alerta</b> <br>
 			</div>

 			<br>



 			<div style="width: 50%; margin: auto;">
 				<div class="boton_blanco" style="float: left; width: 45%">
 					<div style="float: left; margin-left: 20px;">
 						<img src="/graficos/carrito_flecha_atras.png" style="width: 28px;">
 					</div>

 					<a href="sdm_compra_datos_03.php" style="color: #000;">
 					<div style="float: left; margin-left: 10px; margin-top: 4px;">Paso anterior</div>
 				    </a>
 					
 					<div style="clear: both;"></div>
 				</div>
 				<input class="boton_negro" type="button" onclick="Validar();" style="float: right; width: 45%; border: none; padding-top: 5px; height: 40px; " value="Siguiente paso">
 				<div style="clear: both;"></div>
 			</div>

 			<br>

 		


 			<br><br>


			 			
			</form>

 		</div>

 		<?php
 		//}
 		?>


 		<style type="text/css">
 			
 			.boton_negro{
		 		background-color: #1E1E1C; 
		 		height: 30px; 
		 		width: 75%; 
		 		margin: auto; text-align: center; 
		 		border-radius: 20px; 
		 		color: #fff; 
		 		padding-top: 10px; 
		 		margin-top: 20px;
		 		cursor: pointer;
		 		font-weight: 600;

		 		font-family: 'Raleway', sans-serif;
		 	}	
		 	.boton_negro:hover{
		 			-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
		 	}

		 	 .boton_blanco{
		 		background-color: #fff; 
		 		height: 30px; 
		 		width: 75%; 
		 		margin: auto; text-align: center; 
		 		border-radius: 20px; 
		 		color: #000; 
		 		padding-top: 10px; 
		 		margin-top: 20px;
		 		cursor: pointer;
		 		font-weight: 600;

		 		font-family: 'Raleway', sans-serif;
		 	}	
		 	.boton_blanco:hover{
		 			-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
		 	}

 		</style>









 </div>


 		<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















