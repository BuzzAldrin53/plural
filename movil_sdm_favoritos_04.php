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
 				border-radius: 15px;
 				overflow: hidden;
 				width: 30px;
 				height: 30px;
 			}
 			.boton_borrar:hover{
 				  -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 		</style>



 		
 		<div class="contenido">

 			<div class="carrito_tit" style="margin-top: 30px; margin-bottom: 60px; padding-bottom: 20px; font-size: 25px;">
 				Tus favoritos <span style="font-weight: 300;">Esto es lo que te ha gustado</span>
 				<br><br>
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

		 			  	  $qt = "SELECT * FROM usuario_favoritos WHERE id_usuario = '$idu'  ";
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

		 		<div class="carrito_element" id="bigfavorito<?php echo $id_producto; ?>">

		 				<div style="float: left; width: 300px;">
		 					<a href="/sdm_detalle_03.php?xml_id_producto=<?php echo $id_producto; ?>&idcat=1">
		 						<img src="<?php echo $imagen400; ?>" style="width: 100%;">
		 					</a>
		 				</div>

		 				<div style="float: left; width: 250px; padding-top: 70px; margin-left: 40px;">
				 					<br>
				 				<span style="font-size: 25px;">	<?php echo $type." ".$name; ?></span>
				 					<br>
				 					SKU: <?php echo $ref; ?><br>
				 					Precio desde: <?php echo $precio; ?> <br><br>


				 					<select style="width: 140px; border-radius: 10px; padding-right: 10px; padding-left: 10px; border:solid 1px #ddd;">

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


				 					<input type="text" name="cantidad" value="30"
		 						 style="width: 40px;  padding-left: 20px; padding-right: 20px; border-radius: 10px; border:solid 1px #ddd; " >


		 				</div>




		 				<div style="float: left; width: 290px; margin-left: 60px;">
		 					
		 					<div class="boton_azul" style="margin-top: 110px;"
		 					 onclick="AgregarAlCarritoInt(<?php echo $idu; ?>,<?php echo $id_producto; ?>);">Agregar al carrito</div>

		 				</div>


		 				<div style="float: left; width: 30px; margin-left: 30px;">
		 					<div style="margin-top: 110px;" class="boton_borrar"
		 					 onclick="BorrarFavoritoListado('bigfavorito<?php echo $id_producto; ?>',<?php echo $idu; ?>,<?php echo $id_producto ?>);">

		 						<img src="/graficos/borrar_icon_carrito.png" style="width: 30px; height: 30px;" />

		 					</div>

		 				</div>

		 				



		 				<div style="clear: both;"></div>
		 		</div>

		 		<?php 
		 				}
		 		}
		 		?>


		



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


 		<?php

 		include("movil_sdm_footer.html");

 		?>





 </body>

 </html>




















