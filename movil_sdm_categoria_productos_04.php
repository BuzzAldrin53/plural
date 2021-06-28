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

<?php
$idetiqueta = $idcat;
$sq = "SELECT * FROM `categoria` WHERE id_categoria='$idetiqueta' ";
$resultt = $mysqli->query($sq);
while ($roww = $resultt->fetch_row()){
	//echo "- ".$roww[1]." <br> ";
	$etiqueta_nombre = $roww[2];
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


    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600;700;800&display=swap" rel="stylesheet">

	<title><?php echo $etiqueta_nombre; ?> - Plural</title>    

	<link rel="stylesheet" href="movil_header_style.css">

   
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
    		console.log( "ready!" );
    		//myFunctionTimerBannerTop();
    		banners_top_iniciar();
    		
		});


	</script>


	<script type="text/javascript">

		var pagina=1;
		var numero_carga=0;

		function CargarMas(){
			//alert("-cargarmas");
			pagina++;
			//CargarMasInt();
			$("#cargar_mas_div").html("CARGANDO...");

				$.ajax({url: "categoria_productos_mini_lista_cont.php?pag="+pagina+"&idetiqueta=<?php echo $idetiqueta; ?>", success: function(result){
					//$("#div1").html(result);
					var carga = String(result);

					carga = carga.trim();

					numero_carga = parseInt(carga);

					//alert(numero);
					//$("#element"+t_id).hide(500);
					//$("#listado_de_productos").append(result);
					//ActualizarMiniLista();
					//ActualizarMiniListaCarrito();

					if(numero_carga>0){
						CargarMasInt();

						

					}else{
						$("#cargar_mas_div").hide();
					}

				}});



		}

	 	function CargarMasInt(){
	 		//alert("AgregarAlCarritoInt: "+t_idu+"  "+t_idp);
	 		$.ajax({url: "categoria_productos_mini_lista.php?pag="+pagina+"&idetiqueta=<?php echo $idetiqueta; ?>", success: function(result){
				//$("#div1").html(result);
				//alert(result);
				//$("#element"+t_id).hide(500);
				$("#listado_de_productos").append(result);
				//ActualizarMiniLista();
				//ActualizarMiniListaCarrito();

						if( numero_carga<20 ){
							$("#cargar_mas_div").hide();
						}else{
							$("#cargar_mas_div").html("CARGAR MAS");
						}

				}});
	 	}

	</script>


 </head>

 <body>
<div id="salida" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>
<div id="salida2" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>




 	<div class="content_all">







 		<!--    INICIO del MENU -->

 		<?php include("movil_sdm_menu.php"); ?>

 		<!--    FIN del MENU -->




 		<!--  INICIO REGALAR  SIEMPRE ES BUENA IDEA -->


 		<style type="text/css">
 			.regalar_element{
				float: left;
				
				width: 43vw;
				height: 82vw;

				padding-top: 10px;

				background-color: #fff;
				border-radius: 10px;

				margin-left: 5px;
				margin-right: 15px;
				margin-bottom: 30px;

				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 2vw;
    			text-align: center;

    			-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.04);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.04);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.04);

 			}
 			.regalar_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 			.regalar_titulo{
 				font-weight: 600;
    			font-size: 3vw;
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
    			font-size: 3vw;
 			}
			.regalar_element_div{
				width: 95%;
				height: 40vw;

				background-color: #fff;

				overflow: hidden;
				margin: auto;

				margin-bottom: 10px;
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

				float: right;
				margin-right: 10px;
				

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



 		<div style="padding-bottom: 30px;">
 			 
 			 <div  style="padding-bottom: 60px;">


	 			<?php
					 $sq = "SELECT * FROM `categoria` WHERE id_categoria='$idetiqueta' ";
					$resultt = $mysqli->query($sq);
					 while ($roww = $resultt->fetch_row()){
					 	//echo "- ".$roww[1]." <br> ";
					 	$etiqueta_nombre = $roww[2];
					 }
					
					$sy = "SELECT count(*) FROM `categoria_xml_producto` WHERE id_categoria = '$idetiqueta' ";
					$resuly = $mysqli->query($sy);
					while ($rowy = $resuly->fetch_row()){
						$productos_totales=$rowy[0];
					}



 			 	?>

	 			 <div class="regalar_tit">
	 			 	<span style="font-weight: 600;"><?php echo $etiqueta_nombre; ?></span> 
	 			 </div>

	 			 <div style="width: 30%; margin: auto; text-align: center; " id="productos_totales" >
	 			 	<?php echo $productos_totales; ?>
	 			 </div>

	 			 <div >

	 			 	<div style="background-color: #fff;" id="listado_de_productos">



						<?php

						
						//$idetiqueta=21;


						$sy = "SELECT * FROM `categoria_xml_producto` WHERE id_categoria = '$idetiqueta' ORDER BY rank DESC LIMIT 24 ";

						//echo $sy;

						$resuly = $mysqli->query($sy);
						while ($rowy = $resuly->fetch_row()){

						$etiqueta_id_xml_producto=$rowy[0];
						
						$id_etiqueta_tmp=$rowy[1];
						$id_producto_tmp=$rowy[2];
						$xml_id_producto = $rowy[2];

						$idcat=1;


						$sz = " SELECT * FROM `xml_productos` WHERE `id_producto` = '$id_producto_tmp' LIMIT 1";
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
						$precio = $rowz[31];




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
		 			 		if(isset($_SESSION['id_login'])){
					 			$idu=$_SESSION['id_login'];
					 		}else{
					 			if(isset($usr_tmp_idu)){
					 				$idu = $usr_tmp_idu;
					 			}
					 		}

					 		if(isset($idu)){

		 			 			  $idp = $id_producto;
		 			 			  //$idu = $_SESSION['id_login'];
								  
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
		 			 		
		 			 		<div>
		 			 			<div  class="regalar_corazon" onclick="AgregarAFavoritos(<?php echo $xml_id_producto; ?>,this);"   ></div>
		 			 			<div style="clear: both;"></div>
		 			 		</div>

		 			 		<?php 
		 			 		}else{
		 			 		?>

		 			 		<div>
			 			 		<div  class="regalar_corazon" style="background-image: url('corazon-favoritos-agregado.png');" 
			 			 		 onclick="RemoverDeFavoritos(<?php echo $xml_id_producto; ?>,this);"   >
		 			 		 	
		 			 		 	</div>
		 			 		 	<div style="clear: both;"></div>
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

		 			 		<div style="font-size: 2.5vw; font-weight: 300;">
		 			 			SKU:
		 			 			<?php echo $ref; ?>
		 			 		</div>

		 			 		<div class="regalar_precio" style="font-size: 2.5vw; font-weight: 300; margin-top: 4px;">
		 			 			<span style="font-size: 2.5vw; font-weight: 600;">Precio desde: </span>
		 			 			<span style="font-size: 2.5vw; font-weight: 600;">$<?php echo $precio; ?></span>
		 			 		</div>

		 			 		<div style="height: 8px;" id="color<?php echo $id_producto; ?>" ></div>


		 			 		<?php
		 			 			if($colores_cantidad>5){
		 			 				$colores_cantidad=6;
		 			 			}
		 			 			$ancho_colores = 24*$colores_cantidad;
		 			 		?>

		 			 		

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
		 			 			

		 			 			<div class="clr" ></div>
		 			 		</div>


		 			 	</div>

		 	
						<?php
						}
						}
						}
						

						?>



		 			 	<div class="clr"></div>

	 			 	</div>

	 			 	<?php

	 			 	if($productos_totales>24){

	 			 	 ?>

	 			 	<div style="margin-top: 40px;" class="cargar_mas" onclick="CargarMas();" id="cargar_mas_div" >
	 			 		CARGAR MÁS
	 			 	</div>

	 			 	<?php
	 			 	}
	 			 	?>


	 			 </div>

 			 </div>

 		

 		</div>


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



 		<!--  FIN DE REGALAR SIEMPRE ES BUENA IDEA -->


 		<style type="text/css">
 			.cargar_mas{
 				width: 50%;

 				padding-top: 10px;
 				padding-bottom: 10px;

 				 margin: auto;
 				 text-align: center; 
 				 background-color: #ddd; 
 				 font-family: 'Poppins', sans-serif; 
 				 border-radius: 4px;
 				 cursor: pointer;

 			}
 			.cargar_mas:hover{


				-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.4);
	        	-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.4);
	        	box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.4);

 			}
 		</style>




 </div>

 <br><br>


 		<?php

 		include("movil_sdm_footer.html");

 		?>





 </body>

 </html>




















