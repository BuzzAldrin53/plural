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


		$sq = " DELETE FROM `xml_productos` WHERE kit = 1 ";
		$resul = $mysqli->query($sq);

		$sq = " DELETE FROM `xml_variante` WHERE kit = 1 ";
		$resul = $mysqli->query($sq);


	   $sql = " SELECT * FROM `TABLE 45` WHERE estatus=0 LIMIT 50";
	   echo $sql;
	   $resul = $mysqli->query($sql);
	   $conta=0;
	   while ($rows = $resul->fetch_row()){

	   	//id_producto,ref,name,type,otherinfo,extendedinfo,brand,nombre_local,type_local,Precio/Unitario,precio 5,precio10,precio50,precio100

	   		$id_producto = $rows[0];
	   		$ref = $rows[1];
	   		$name = $rows[2];
	   		$type = $rows[3];
	   		$otherinfo = $rows[4];
	   		$extendedinfo = $rows[5];
	   		$brand = $rows[6];
	   		$nombre_local = $rows[7];
	   		$type_local = $rows[8];

	   		$precio1 = $rows[9];
	   		$precio1 = trim($precio1);
	   		$precio1 = str_replace(",", "", $precio1);
	   		$precio1 = str_replace("$", "", $precio1);

	   		$precio5 = $precio1;
	   		$precio10 = $precio1;
	   		$precio50 = $precio1;
	   		$precio100 = $precio1;
	   		$precio200 = $precio1;

	   		$rutawebp = "/uploads/";

	   		   echo "<h2>Name: $name </h2>";
			   echo "<h2>Type: $type </h2>";
			   echo "<h2>extendedinfo: $extendedinfo </h2>";

	   
	
	   		echo "<h4>$precio5</h4>";

	   		

	   		$sql = "

	   		INSERT INTO `xml_productos` (`id_producto`, `ref`, `name`, `type`, `otherinfo`, `extendedinfo`, `brand`, `printcode`, `item_long`, `item_hight`, `item_width`, `item_diameter`, `item_weight`, `masterbox_long`, `masterbox_hight`, `masterbox_width`, `masterbox_weight`, `masterbox_units`, `palet_units`, `palet_boxs`, `palet_weight`, `link360`, `linkvideo`, `estatus`, `extra`, `nombre_local`, `type_local`, `precio1`, `precio10`, `precio50`, `precio100`, `precio200`, `fotowebp`, `rutawebp`, `rank`, `precio5`, `kit`) 
	   		VALUES 
	   		(NULL, '$ref', '$name', '$type', '$otherinfo', '$extendedinfo', ' ', '  ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '3', '1', '$nombre_local', '$type_local', '$precio1', '$precio10', '$precio50', '$precio100', '$precio200', '0', '$rutawebp', '0', '$precio5', '1')

	   		";

	   		echo $sql;

	   		$mysqli->query($sql);



	   		  $sq = "  SELECT * FROM xml_productos WHERE ref = '$ref' LIMIT 1 ";
	   		  $resu = $mysqli->query($sq);
			  //$conta=0;
			  while ($ro = $resu->fetch_row()){
			  		$id_producto = $ro[0];
			  }



	   		echo "<br><br>";

	   		echo "<br><br>";


	   		//id_variante,id_producto,ref,matnr,refct,colour,colftp,colourname,size,image500px,imagen_local,estatus,extra,folder,folderwebp,fotowebp

	   		$sq = "SELECT * FROM `TABLE 46` WHERE ref = '$ref' LIMIT 1 ";
	   		echo $sq;

	   		echo "<br><br>";

	   		 $resuls = $mysqli->query($sq);
			   //$conta=0;
			   while ($rowss = $resuls->fetch_row()){
			   		$id_x = $rowss[0];
			   		$id_x = $rowss[0];
			   		$ref = $rowss[2];
			   		$matnr = $rowss[3];
			   		$refct = $rowss[4];
			   		$colour = $rowss[5];
			   		$colftp = $rowss[6];
			   		$colourname = $rowss[7];
			   		$size = $rowss[8];
			   		$image = $rowss[9];
			   		$imagen_local = $rowss[10];
			   		$estatus = $rowss[11];
			   		$extra = $rowss[12];
			   		

			   }

			   echo "<h2>Ref: $ref </h2>";
			   echo "<h2>Color: $colour </h2>";
			   echo "<h2>ColorName: $colourname </h2>";


			   $folder = "/uploads/";
			   $folderwebp = "/uploads/";
			   $colftp = "";




	   		$sql = "

	   		INSERT INTO `xml_variante` (`id_variante`, `id_producto`, `ref`, `matnr`, `refct`, `colour`, `colftp`, `colourname`, `size`, `image500px`, `imagen_local`, `estatus`, `extra`, `folder`, `folderwebp`, `fotowebp`, `kit`)
	   		 VALUES 
	   		(NULL, '$id_producto', '$ref', '$matnr', '$refct', '$colour', '$colftp', '$colourname', '$size', '$image', '$imagen_local', '4', '1', '$folder', '$folderwebp', '1', '1')

	   		";


	   		 echo $sql;
	   		 $mysqli->query($sql);

	  }


	





?>



















