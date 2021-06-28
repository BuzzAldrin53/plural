
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
		setTimeout(function () { location.reload(1); }, 10000);
	</script>
</head>
<body>
<?php


include_once("db.php");


	$qt = "  SELECT count(*) FROM `home_destacados` WHERE elestatus =1  ";
     
     $resultt = $mysqli->query($qt);
     while ($rowt = $resultt->fetch_row()){
        $tmp=$rowt[0];
        echo "<h1>Convertidos:".$tmp."</h1>";
    }

    $qt = "  SELECT count(*) FROM `home_destacados` WHERE elestatus =0  ";
     
     $resultt = $mysqli->query($qt);
     while ($rowt = $resultt->fetch_row()){
        $tmp=$rowt[0];
        echo "<h1>Por convertir:".$tmp."</h1>";
    }

    
     $qt = "  SELECT * FROM `home_destacados` WHERE elestatus =0 LIMIT 1  ";
     
     $resultt = $mysqli->query($qt);
     while ($rowt = $resultt->fetch_row()){

        $id=$rowt[0];
        $titulo=$rowt[1];
        $imagen=$rowt[2];

        echo "<h1>ID:".$id."</h1>";
        echo "<h1>Titulo:".$titulo."</h1>";
        echo "<h1>Imagen:".$imagen."</h1>";
    }

    $archivo = substr($imagen,strrpos($imagen,"/")+1);

     echo "<h1>Archivo:".$archi."</h1>";

    echo "<img src='$imagen' width='300'>";


   

    $newFile = '../uploads/'.$archivo;

    //echo $newFile;
    $extension=substr($newFile,-3,3);
    $solonombre=substr($archivo,0,strrpos($archivo,"."));

    echo " <br>                       archivo: ".$archivo."        <br>";
    echo " <br>                       SOLO nombre: ".$solonombre."        <br>";
    echo " <br>                       EXT: ".$extension."       <br>";


    //$result = move_uploaded_file($tmpFile, $newFile);
    
    //echo $_FILES['file']['name'];
    if ($result) {
        //echo ' was uploaded<br />';
    } else {
        //echo ' failed to upload<br />';
    }

    

    if($extension=="jpg"){
    	$origen = imagecreatefromjpeg($newFile);
    }
    if($extension=="png"){
    	$origen = imagecreatefrompng($newFile);
    	$archivo = $solonombre.".jpg";

    }

    $url = "http://pluralmkt.mx/uploads/".$archivo;

    echo " <br>                       archivo DOS: ".$archivo."        <br>";

	 // Obtener los nuevos tamaños
	list($ancho, $alto) = getimagesize($newFile);
	
	$elancho=800;
	$nuevo_ancho = $elancho;
	$nuevo_alto = ($alto/$ancho)*$elancho;
	$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
	//$origen = imagecreatefromjpeg($newFile);

	imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo ,95);

	if($extension=="png"){
		imagejpeg($thumb, '../uploads/'.$solonombre.".jpg" ,95);
	}
	
	//
	imagewebp($origen, '../uploads/'.$solonombre.".webp" ,95);
	imagewebp($thumb, '../uploads/'.$elancho.'_'.$solonombre.".webp" ,95);


	$elancho=400;
	$nuevo_ancho = $elancho;
	$nuevo_alto = ($alto/$ancho)*$elancho;
	$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
	//$origen = imagecreatefromjpeg($newFile);

	imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo ,95);
	imagewebp($thumb, '../uploads/'.$elancho.'_'.$solonombre.".webp" ,95);


	$elancho=200;
	$nuevo_ancho = $elancho;
	$nuevo_alto = ($alto/$ancho)*$elancho;
	$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
	//$origen = imagecreatefromjpeg($newFile);

	imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo ,95);
	imagewebp($thumb, '../uploads/'.$elancho.'_'.$solonombre.".webp" ,95);


	$elancho=100;
	$nuevo_ancho = $elancho;
	$nuevo_alto = ($alto/$ancho)*$elancho;
	$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
	//$origen = imagecreatefromjpeg($newFile);

	imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo ,95);
	imagewebp($thumb, '../uploads/'.$elancho.'_'.$solonombre.".webp" ,95);





$qt = " UPDATE `home_destacados` SET `elestatus` = '1' WHERE `home_destacados`.`id_home_destacado` = '$id'; ";
$resultt = $mysqli->query($qt);

//echo $qt;


echo "<h1>ID:".$id."</h1>";
echo "<h1>Titulo:".$titulo."</h1>";
echo "<h1>Imagen:".$imagen."</h1>";





?>
</body>
</html>
