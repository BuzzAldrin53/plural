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




	$sql = " SELECT * FROM `xml_productos` WHERE `estatus` = '0' LIMIT 500 ";
	$resultt = $mysqli->query($sql);
	while ($row = $resultt->fetch_row()){
	   $id_producto = $row[0];
	   $ref = $row[1];
	   $precio = $row[27];

	   echo "<h2>$ref</h2>";
	   echo "<h2>Precio: $precio</h2>";

	   $sql = " SELECT * FROM `TABLE 41` WHERE `REF` LIKE '$ref' ";
	   echo $sql;
	   $resul = $mysqli->query($sql);
	   $conta=0;
	   while ($rows = $resul->fetch_row()){
	   		$precio1 = $rows[4];
	   		$precio10 = $rows[5];
	   		$precio50 = $rows[6];
	   		$precio100 = $rows[7];
	   		$precio200 = $rows[8];
	   		$conta++;
	   }

	   if($conta>0){
	   		echo "<h4>$precio1</h4>";

	   		$precio1 = str_replace(",", "", $precio1);
	   		$precio10 = str_replace(",", "", $precio10);
	   		$precio50 = str_replace(",", "", $precio50);
	   		$precio100 = str_replace(",", "", $precio100);
	   		$precio200 = str_replace(",", "", $precio200);


	   		$sql = "UPDATE `xml_productos`
	   		 SET `precio1` = '$precio1',
	   		 `precio10` = '$precio10' ,
	   		 `precio50` = '$precio50' ,
	   		 `precio100` = '$precio100' ,
	   		 `precio200` = '$precio200' ,
	   		 `estatus` = '1' 

	   		 WHERE `xml_productos`.`id_producto` = '$id_producto' ;";



	   		 echo $sql;
	   		 $res = $mysqli->query($sql);

	   }else{
	   		$sql = " UPDATE `xml_productos` SET `estatus` = '1' WHERE `xml_productos`.`id_producto` = '$id_producto' ;  ";
	   		echo $sql;
	   		$resu = $mysqli->query($sql);
	   }


	}





?>



















