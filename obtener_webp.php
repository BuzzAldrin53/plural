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

?>

<?php

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

	<title>Obtener webp - Plural</title>    



   
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


	<script language="javascript">
	setInterval(function(){
	   window.location.reload(1);
	}, 10000);
	</script>

	<script type="text/javascript">
		$( document ).ready(function() {
    		console.log( "ready!" );
    		//myFunctionTimerBannerTop();
    		banners_top_iniciar();
    		
		});


		function CargarColumas(t_cat,t_this){


			$(".ideas_cats_elem").css("background-color","#D3D2D3");

			$(t_this).css("background-color","#999");

			//alert(t_cat);
			//https://pluralmkt.mx/columna.php?idcat=5&col=1
				$.ajax({url: "columna.php?idcat="+t_cat+"&col=1", success: function(result){
    				$("#columna1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

  				$.ajax({url: "columna.php?idcat="+t_cat+"&col=2", success: function(result){
    				$("#columna2").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

  				$.ajax({url: "columna.php?idcat="+t_cat+"&col=3", success: function(result){
    				$("#columna3").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

		}

	</script>


 </head>

 <body>

 	<style type="text/css">
 		body{
 			background-color: #000;
 			color: #fff;
 		}
 	</style>


		<?php

		$sz = " SELECT * FROM `xml_productos` WHERE `fotowebp` = '1' ";
		$resulz = $mysqli->query($sz);
		while ($rowz = $resulz->fetch_row()){
			$conta=$rowz[0];
		}
		echo "<h1>Procesadas: ".$conta."</h1>";

		$sz = " SELECT * FROM `xml_productos` WHERE `fotowebp` = '0' ";
		$resulz = $mysqli->query($sz);
		while ($rowz = $resulz->fetch_row()){
			$conta=$rowz[0];
		}
		echo "<h1>Pendientes: ".$conta."</h1>";



						$sz = " SELECT * FROM `xml_productos` WHERE `fotowebp` = '0' ORDER BY id_producto ASC LIMIT 1";
						$resulz = $mysqli->query($sz);
						while ($rowz = $resulz->fetch_row()){

							$id_producto = $rowz[0];
							$ref = $rowz[1];
							$name = $rowz[2];
							$type = $rowz[3];
							$otherinfo = $rowz[4];
							$extendedinfo = $rowz[5];
							$brand = $rowz[6];

							echo "<h1>SKU: ".$ref."</h1>";

							$precio = number_format($rowz[30]);



								$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 20";
								$resula = $mysqli->query($sa);
								$i=0;
								while ($rowa = $resula->fetch_row()){

									$id_variante = $rowa[0];

									$imagen_local = $rowa[10];
									$folder = $rowa[13];

									$colorname = $rowa[7];

									$colorHex = ColorAHex($colorname,$mysqli);

									$img = "xmltest/".$folder."/".$imagen_local;

									$imagen400 = $img;

									$color = $rowa[7];
									$i++;



									$archivo = $img;

			                        $newFile = $img;

			                        //echo $newFile;

			                        $extension=substr($newFile,-3,3);
			                        $solonombre=substr($imagen_local,0,strrpos($imagen_local,"."));

			                        echo " <br>                       archivo: ".$archivo."        <br>";
			                        echo " <br>                       SOLO nombre: ".$solonombre."        <br>";
			                        echo " <br>                       EXT: ".$extension."       <br>";
			                        

			                        if($extension=="jpg"){
			                        	$origen = imagecreatefromjpeg($newFile);
			                        }
			                        if($extension=="png"){
			                        	$origen = imagecreatefrompng($newFile);
			                        	$archivo = $solonombre.".jpg";

			                        }

			                        $url = "http://pluralmkt.mx/".$archivo;

			                        echo " <br>                       archivo DOS: ".$archivo."        <br>";

			                        echo " <br>                       archivo URL: ".$url."        <br>";


			                        ///////
			                        ///////      CAMBIAR LA RUTA DE LAS FOTOS


			                        $ruta_para_guardar = './xmlfotos/fotos2/';


			                        $archivo = $solonombre.".".$extension;

			                        
									 // Obtener los nuevos tamaños
									list($ancho, $alto) = getimagesize($newFile);
									
									$elancho=800;
									$nuevo_ancho = $elancho;
									$nuevo_alto = ($alto/$ancho)*$elancho;
									$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
									//$origen = imagecreatefromjpeg($newFile);

									imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
									imagejpeg($thumb, $ruta_para_guardar.$elancho.'_'.$archivo ,95);

									$imagen_alta = $ruta_para_guardar.$elancho.'_'.$archivo;

									
									if($extension=="png"){
										imagejpeg($thumb, $ruta_para_guardar .$solonombre.".jpg" ,95);
									}

									
									
									//
									imagewebp($origen, $ruta_para_guardar.$solonombre.".webp" ,95);
									imagewebp($thumb, $ruta_para_guardar.$elancho.'_'.$solonombre.".webp" ,95);


									$elancho=400;
									$nuevo_ancho = $elancho;
									$nuevo_alto = ($alto/$ancho)*$elancho;
									$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
									//$origen = imagecreatefromjpeg($newFile);

									imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
									imagejpeg($thumb, $ruta_para_guardar.$elancho.'_'.$archivo ,95);
									imagewebp($thumb, $ruta_para_guardar.$elancho.'_'.$solonombre.".webp" ,95);


									$elancho=200;
									$nuevo_ancho = $elancho;
									$nuevo_alto = ($alto/$ancho)*$elancho;
									$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
									//$origen = imagecreatefromjpeg($newFile);

									imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
									imagejpeg($thumb, $ruta_para_guardar.$elancho.'_'.$archivo ,95);
									imagewebp($thumb, $ruta_para_guardar.$elancho.'_'.$solonombre.".webp" ,95);


									$elancho=100;
									$nuevo_ancho = $elancho;
									$nuevo_alto = ($alto/$ancho)*$elancho;
									$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
									//$origen = imagecreatefromjpeg($newFile);

									imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
									imagejpeg($thumb, $ruta_para_guardar.$elancho.'_'.$archivo ,95);
									imagewebp($thumb, $ruta_para_guardar.$elancho.'_'.$solonombre.".webp" ,95);
									
									



									$imgs = $imagen_alta;


									$liga = $ruta_para_guardar.$elancho.'_'.$solonombre.".webp";


$sql = "UPDATE `xml_variante` SET  `folderwebp` = '$ruta_para_guardar', `fotowebp` = '1'   WHERE `xml_variante`.`id_variante` = '$id_variante' ;";
echo $sql."<br>
";
$mysqli->query($sql);





		?>



						<div style="width: 200px; padding: 10px; background-color: #f0f; ">
							<a target="_blank" href="<?php echo $liga; ?>">
							<img style="width: 100%;" src="<?php echo $imgs; ?>" >
						</a>
						</div>




		<?php
			}
			





			$sql = "UPDATE `xml_productos` SET `fotowebp` = '1' , `rutawebp` = '$ruta_para_guardar'  WHERE `xml_productos`.`id_producto` = '$id_producto' ;";
			echo $sql."<br>
			";
			$mysqli->query($sql);


			}

		?>



	</div>

</body>