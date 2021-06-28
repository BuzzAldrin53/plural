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
 			.contenido h1{
 					font-family: 'Raleway', sans-serif;
					font-weight: 500;
 			}
 			.carrito_element{
 					font-family: 'Raleway', sans-serif;
					font-weight: 500;
					border-bottom: 1px #ddd solid;
					width: 90%;
					margin: auto;
					margin-bottom: 10px;
 			}
 			.carrito_element:hover{
 				  -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
 			}
 			.carrito_img{
 				float: left;
 				width: 200px;
 			}
 			.carrito_img img{
 				width: 100%;
 			}
 			.carrito_tit{
 				border-bottom: 1px #ddd solid;
 				margin-top: 50px;
 				margin-bottom: 50px;
 				padding-bottom: 20px;
 				font-weight: 600;

 				width: 90%;
					margin: auto;
 			}
 			.boton_borrar{
 				cursor: pointer;
 				border-radius: 12.5px;
 				overflow: hidden;
 				width: 25px;
 				height: 25px;
 			}
 			.boton_borrar:hover{
 				  -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 		</style>



 		
 		<div class="contenido">

 			<div class="carrito_tit">
 				<h1>Mi propuesta para mi cliente</h1>
 			</div>


 			<?php 
		 		if(isset($_SESSION['id_login'])){
		 			$idu=$_SESSION['id_login'];
		 		}else{
		 			if(isset($usr_tmp_idu)){
		 				$idu = $usr_tmp_idu;
		 			}
		 		}

		 		if(isset($idu)){

		 			  	  $qt = "SELECT * FROM usuario_carrito WHERE id_usuario = '$idu'  ";
                          $resulttt = $mysqli->query($qt);
                          while ($rowtt = $resulttt->fetch_row()){
                          		$idp = $rowtt[2];


                          		$sz = "SELECT * FROM xml_productos_clon WHERE id_producto = '$idp' LIMIT 24";

								$resulz = $mysqli->query($sz);
								while ($rowz = $resulz->fetch_row()){

									$id_producto = $rowz[0];
									$ref = $rowz[1];
									$name = $rowz[2];
									$type = $rowz[3];
									$otherinfo = $rowz[4];
									$extendedinfo = $rowz[5];
									$brand = $rowz[6];


									$precio = number_format($rowz[30]);


									//$idcat=1;
								}

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
								}
                          
		 		?>

		 		<div class="carrito_element" id="bigcarrito<?php echo $id_producto; ?>">

		 				<div style="float: left; width: 200px;">
		 					<a href="/sdm_detalle_03.php?xml_id_producto=<?php echo $id_producto; ?>&idcat=1">
		 						<img src="<?php echo $imagen400; ?>" style="width: 100%;">
		 					</a>
		 				</div>


		 				<div style="float: left; width: 840px; margin-top: 50px;">

			 				<div style=" height: 20px; width: 840px; ">
			 					<span style="font-size: 17px;">	<?php echo $type." ".$name; ?></span>
			 				</div>

			 				<div>

				 				<div style="float: right; width: 25px; margin-left: 20px;">
				 					<div style="margin-top: 2px;" class="boton_borrar"
				 					 onclick="BorrarCarritoListado('bigcarrito<?php echo $id_producto; ?>',<?php echo $idu; ?>,<?php echo $id_producto; ?>);">

				 						<img src="/graficos/borrar_icon_carrito.png" style="width: 25px; height: 25px;" />

				 					</div>

				 				</div>

				 				<div style="clear: both;"></div>

			 				</div>

			 				<div>

			 					<div style="float: left; width: 50px; margin-left: 0px; ">
				 					<div style="margin-top: 15px; font-size: 11px;">
				 						Color:
				 					</div>
				 				</div>

				 				<div style="float: left; width: 100px; margin-left: 0px; ">
				 					<div style="margin-top: 10px;">

				 					<select style="width: 95px; border-radius: 10px; padding-right: 10px; padding-left: 10px; border:solid 1px #ddd;">

				 						<?php
				 						$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 20";
										$resula = $mysqli->query($sa);
										$i=0;
										while ($rowa = $resula->fetch_row()){

											$imagen_local = $rowa[10];
											$folder = $rowa[13];

											$colorname = $rowa[7];

											$colorHex = ColorAHex($colorname,$mysqli);
				 						?>

				 						<option value="<?php echo $colorname; ?>" > <?php echo $colorname; ?></option>

				 						<?php
				 						}
				 						?>
				 						
				 					</select>
				 					</div>

				 				</div>

				 				<div style="float: left; width: 70px; margin-left: 25px; ">
				 					<div style="margin-top: 15px; font-size: 11px;">
				 						Cantidad:
				 					</div>
				 				</div>

				 				<div style="float: left; width: 100px; margin-left: 5px; ">
				 					<div style="margin-top: 10px;">

				 						<input type="text" name="cantidad" value="30"
				 						 style="width: 40px;  padding-left: 20px; padding-right: 20px; border-radius: 10px; border:solid 1px #ddd; " >

				 					</div>

				 				</div>

				 				<div style="float: left; width: 100px; margin-left: 10px; ">
				 					<div style="margin-top: 15px; font-size: 11px;">
				 						% Sobre producto:
				 					</div>
				 				</div>

				 				<div style="float: left; width: 90px; margin-left: 10px; ">
				 					<div style="margin-top: 10px;">
				 						<input type="text" name="sobre_producto" value=""
				 						 style="width: 40px;  padding-left: 20px; padding-right: 20px; border-radius: 10px; border:solid 1px #ddd; " >
				 					</div>

				 				</div>


								<div style="float: left; width: 100px; margin-left: 10px; ">
				 					<div style="margin-top: 15px; font-size: 11px;">
				 						% Sobre impresión:
				 					</div>
				 				</div>

				 				<div style="float: left; width: 90px; margin-left: 10px; ">
				 					<div style="margin-top: 10px;">
				 						<input type="text" name="sobre_producto" value=""
				 						 style="width: 40px;  padding-left: 20px; padding-right: 20px; border-radius: 10px; border:solid 1px #ddd; " >
				 					</div>

				 				</div>






				 				<div style="clear: both;"></div>

				 			</div>

		 				</div>







		 				<div style="clear: both;"></div>
		 		</div>

		 		<?php 
		 				}
		 		}
		 		?>


		 		<div style="height: 300px;">

		 			<div style="float: right; width: 600px; margin-right: 50px;">
		 				
		 				<div style="float: left; width: 50%;">
		 					<a href="sdm_carrito_03.php" style="text-decoration: none;">
		 						<div class="boton_negro">Volver al carrito</div>
		 					</a>
		 				</div>

		 				<div style="float: left; width: 50%;">
		 					<a href="sdm_compra_datos_03.php" style="text-decoration: none;">
		 					  <div class="boton_azul">Proceder al pago</div>
		 				    </a>
		 				</div>

		 				<div style="clear: both;">


		 			</div>

		 			<div style="clear: both;">


		 		</div>



 		</div>





<style type="text/css">
 			.contenido{
 				font-family: 'Raleway', sans-serif;
 			}
			.boton_azul{
		 		background-color: #2D72B5; 
		 		height: 30px; 
		 		width: 75%; 
		 		margin: auto; text-align: center; 
		 		border-radius: 20px; 
		 		color: #ffF; 
		 		padding-top: 10px; 
		 		margin-top: 20px;
		 		cursor: pointer;
		 		font-weight: 600;
		 	}	
		 	.boton_azul:hover{
		 			-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
		 	}
		 	/*
		 	#1E1E1C
		 	*/
		 	.boton_negro{
		 		background-color: #1E1E1C; 
		 		height: 30px; 
		 		width: 75%; 
		 		margin: auto; text-align: center; 
		 		border-radius: 20px; 
		 		color: #ffF; 
		 		padding-top: 10px; 
		 		margin-top: 20px;
		 		cursor: pointer;
		 		font-weight: 600;
		 	}	
		 	.boton_negro:hover{
		 			-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
		 	}
 		</style>









</div>
 </div>
</div>


 		<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















