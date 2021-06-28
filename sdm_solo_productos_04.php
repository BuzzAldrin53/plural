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



//echo $_SERVER['HTTP_USER_AGENT'];

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

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;300;800&display=swap" rel="stylesheet">

	<title><?php echo $etiqueta_nombre; ?> - Plural</title>    

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




 		<!--  INICIO REGALAR  SIEMPRE ES BUENA IDEA -->


 		<style type="text/css">
 			.regalar_element{
				float: left;
				width: 280px;
				height: 420px;
				background-color: #fff;
				border-radius: 10px;
				margin-right: 15px;
				margin-bottom: 20px;

				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 11px;
    			text-align: center;

 			}
 			.regalar_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 			.regalar_titulo{
 				font-weight: 600;
    			font-size: 17px;
    			margin-bottom: 3px;
 			}
 			.regalar_titulo a{
    			color: #000;
    			text-decoration: none;
 			}
 			.regalar_titulo a:hover{
    			color: #000;
    			text-decoration: underline;
 			}

 			.regalar_precio{
 				font-weight: 400;
    			font-size: 11px;
 			}
			.regalar_element_div{
				width: 95%;
				height: 250px;

				background-color: #fff;

				overflow: hidden;
				margin: auto;
				margin-top: 10px;
				margin-bottom: 20px;
			}
			.regalar_element_div img{
				width: 100%;
			}
			.regalar_circulo_color{
				width: 14px;
				height: 14px;
				border-radius: 7px;
				float: left;
				margin-right: 6px;

				-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);
	        	box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);

	        	border: solid 1px rgba(0,0,0,0.2);
			}

			.regalar_circulo_color:hover{
				border: solid 1px rgba(0,0,0,0.4);
				width: 14px;
				height: 14px;
			}


			.regalar_colores{
				width: 60px;
				margin: auto;
				margin-top: 6px;
			}
			.regalar_corazon{
				width: 30px; 
				height: 30px; 
				position: relative; 
				top: 10px; 
				left: 230px;
				border-radius: 15px;
				overflow: hidden;
				cursor: pointer;
				border: solid 1px rgba(0,0,0,0.0);

				background-size: 100% 100%;
				background-repeat: no-repeat;
				background-position: center center;
				background-image: url("corazon-favorito-sin-agregar.png");
			}
			.regalar_corazon:hover{
				/*opacity: 0.5;*/

				background-image: url("corazon-favoritos-agregado.png");


				-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.1);
	        	-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.1);
	        	box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.1);


				border: solid 1px rgba(0,0,0,0.1);
			}
 		</style>


		<?php
 			  $qt = "SELECT count(*) FROM home_regalar_siempre ";   
			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){
			  	    $regalar_siempre_tot=$rowt[0];
			  }
 		?>

 		<script type="text/javascript">
 			function VerColor(t_color,t_id){
 				//$("#color"+t_id).html(t_color);
 			}
 		</script>



 		<div class="regalar">
 			 
 			 <div class="regalar_int">


	 			

	 			 <div class="regalar_tit"><span style="font-weight: 600;"> INDICE: <?php echo $num; ?></span> </div>

	 			 <div >
	 			 	<div style="background-color: #fff;">



						<?php

						
						//$idetiqueta=21;



						$sz = " SELECT * FROM `xml_productos` WHERE `id_producto` > $num LIMIT 500";

						$resulz = $mysqli->query($sz);
						while ($rowz = $resulz->fetch_row()){

						$id_producto = $rowz[0];
						$ref = $rowz[1];
						$name = $rowz[2];
						$type = $rowz[3];
						$otherinfo = $rowz[4];
						$extendedinfo = $rowz[5];
						$brand = $rowz[6];


						//$precio = number_format($rowz[30]);
						$precio = $rowz[30];


						//////tomar colores variantes
						$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 24";
						$resula = $mysqli->query($sa);
						$i=0;
						$colores_nom = array();
						$colores = array();

						while ($rowa = $resula->fetch_row()){
							$colores_nom[$i] = $rowa[7];
							$colores[$i] = ColorAHex($rowa[7],$mysqli);
							$i++;
						}
						////////////////Tomar colores variantes fin

						$colores_cantidad = count($colores);

						$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 1";
						$resula = $mysqli->query($sa);
						$i=0;
						while ($rowa = $resula->fetch_row()){

						$imagen_local = $rowa[10];
						$folder = $rowa[13];

						$colorname = $rowa[7];

						$colorHex = ColorAHex($colorname,$mysqli);

						$img = "/xmltest/".$folder."/".$imagen_local;

						$imagen400 = $img;




						$imagen_local = $rowa[10];
						$folderwebp = $rowa[14];
						$fotowebp = $rowa[15];

						if($fotowebp=="1"){
							///./xmlfotos/fotos4/
							$imagen400 = $folderwebp."400_".$imagen_local;
							///////version webp ///////
							$extension=substr($imagen_local,-3,3);
							$solonombre=substr($imagen_local,0,strrpos($imagen_local,"."));
							if($esapple==0){
								$imagen400 = $folderwebp."400_".$solonombre.".webp";
							}
						}








						$color = $rowa[7];
						$i++;

						?>

		 			 	<div class="regalar_element">


		 			 		<?php
		 			 		$ccc=0;
		 			 		if( isset($_SESSION['id_login']) ){
		 			 			  $idp = $id_producto;
		 			 			  $idu = $_SESSION['id_login'];
								  
		 			 			  $qt = "SELECT * FROM usuario_favoritos WHERE id_usuario = '$idu' AND id_producto = '$idp'  ";
		                          $resd = $mysqli->query($qt);
		                          $ccc=0;
		                          while ($rod = $resd->fetch_row()){
		                          		$ccc++;
		                          }
		 			 		}
		 			 		?>

		 			 		<?php 
		 			 		if($ccc==0){
		 			 		?>
		 			 		
		 			 		<div  class="regalar_corazon" onclick="AgregarAFavoritos(<?php echo $xml_id_producto; ?>,this);"   ></div>

		 			 		<?php 
		 			 		}else{
		 			 		?>

		 			 		<div  class="regalar_corazon" style="background-image: url('corazon-favoritos-agregado.png');" 
		 			 		 onclick="RemoverDeFavoritos(<?php echo $xml_id_producto; ?>,this);"   >
		 			 		 	
		 			 		 </div>

		 			 		<?php 
		 			 		}
		 			 		?>


		 			 		<div class="regalar_element_div">
		 			 			<a href="sdm_detalle_03.php?xml_id_producto=<?php echo $xml_id_producto; ?>&idcat=<?php echo $idcat; ?>">
		 			 				<img src="<?php echo $imagen400; ?>" >
		 			 			</a>
		 			 		</div>
		 			 		<div class="regalar_titulo">
		 			 			<a href="sdm_detalle_03.php?xml_id_producto=<?php echo $xml_id_producto; ?>&idcat=<?php echo $idcat; ?>">
		 			 				<?php echo $type." ".$name; ?>
		 			 			</a>
		 			 		</div>

		 			 		<div style="font-size: 15px; font-weight: 300;">
		 			 			SKU:
		 			 			<?php echo $ref; ?>
		 			 		</div>

		 			 		<div class="regalar_precio" style="font-size: 15px; font-weight: 300; margin-top: 4px;">
		 			 			<span style="font-size: 15px; font-weight: 600;">Precio desde: </span>
		 			 			<span style="font-size: 15px; font-weight: 600;">$<?php echo $precio; ?></span>
		 			 		</div>

		 			 		<div style="height: 8px;" id="color<?php echo $id_producto; ?>" ></div>


		 			 		<?php
		 			 			if($colores_cantidad>5){
		 			 				$colores_cantidad=6;
		 			 			}
		 			 			$ancho_colores = 24*$colores_cantidad;
		 			 		?>

		 			 		<style type="text/css">
		 			 			.mas_circulo{
		 			 				-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);
						        	-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);
						        	box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.3);
						        	
						        	border: solid 1px rgba(0,0,0,0.2);
		 			 			}
		 			 			.mas_circulo{
		 			 				border: solid 1px rgba(0,0,0,0.4);
		 			 			}
		 			 		</style>

		 			 		<div style="margin: auto; width: <?php echo $ancho_colores; ?>px; margin-top: 0px;">
		 			 			
		 			 			<?php 
		 			 					$j=0;
		 			 					foreach ($colores as $valor) {
		 			 						
		 			 						if($j>4 && $colores_cantidad>5){

		 			 							?>
		 			 							<div class="mas_circulo" style="width: 14px; height: 14px; float: left; border-radius: 7px; " >
		 			 								<img src="mas_mas_icon_20.png" style="width: 100%;">
		 			 							</div>
		 			 							<?php

		 			 							break;
		 			 						}
		 			 			?>

		 			 					<div onmouseleave="VerColor('-',<?php echo $id_producto ?>);"
		 			 					 onmouseover="VerColor('<?php echo $colores_nom[$j]; ?>',<?php echo $id_producto ?>);" 

		 			 					 class="regalar_circulo_color" 
		 			 					 style="background-color: <?php echo $valor; ?>;">
		 			 					 	
		 			 					 </div>

		 			 			<?php 
		 			 						$j++;
		 			 					}
		 			 			?>
		 			 			

		 			 			<div class="clr"></div>
		 			 		</div>


		 			 	</div>

		 	
						<?php
						}
						}
						
						

						?>



		 			 	<div class="clr">
		 			 </div>		
	 			 	</div>


	 			 </div>

 			 </div>

 		

 		</div>


 		<!--  FIN DE REGALAR SIEMPRE ES BUENA IDEA -->



 </div>


 		<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















