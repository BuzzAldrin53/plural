<?php
 include_once("./session/sesion.php");


include "db_.php";



include "header_movil.php";




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



require('./Openpay/Openpay.php');

/*
SANDBOX
ID: mnwc1r21c551tosmkfpp
Privada: sk_091f7eaeda03462c93a4e0d62e6351b1
Publica: pk_f951e5657f294a3e82d84574e59e6dad
*/


/*

PLURAL

	ID
motqmmu4blky4u0h3vjy

Llave privada
sk_02a2bdfb6056456ebb1d1330e14f930a

Llave pública
pk_469b2b63f7654414ab3b9e046124ba0b


*/

Openpay::setId('mnwc1r21c551tosmkfpp');
Openpay::setApiKey('sk_091f7eaeda03462c93a4e0d62e6351b1');

$openpay = Openpay::getInstance('mnwc1r21c551tosmkfpp', 'sk_091f7eaeda03462c93a4e0d62e6351b1', 'MX');

Openpay::setProductionMode(false);




if( isset($_SESSION['id_login'])  ) {
	$idu=$_SESSION['id_login'];


	 $id_checkout = $_SESSION['id_checkout'] ;

	 //echo "<h1>ID checout: ".$id_checkout."</h1>";

	//update, agregar campos del post anterior

}else{
	$id_checkout=0;
}


if( isset($_SESSION['id_login'])  ) {
	$idu=$_SESSION['id_login'];
}

//usuario temporal
if(isset($usr_tmp_idu)){
	$idu = $usr_tmp_idu;
	//echo "<h1>IDU temp: ".$idu."</h1>";
}




if(isset($idu)){
	$sql = " SELECT * FROM `usuario` WHERE id_usuario = '$idu'  ";
	 $result = $mysqli->query($sql);
	  while ($rowt = $result->fetch_row()){
	  		$id_usuario = $rowt[0];
	  		//echo "<h1>IDU DB: ".$id_usuario."</h1>";
	  		$u_nombre = $rowt[1];
	  		$u_apellido = $rowt[2];
	  		$u_correo = $rowt[3];
	  		$u_telefono = $rowt[14];
	  		$u_domicilio = $rowt[15];
	  		$u_cp = $rowt[16];
	  		$u_colonia = $rowt[17];
	  		$u_referencias = $rowt[18];

	  		$u_id_openpay = $rowt[19];
			//echo "<h1>ID openpay: ".$u_id_openpay."</h1>";


			$domicilio = $rowt[15];
			$cp =  $rowt[16];
			$colonia = $rowt[17];
			$referencias = $rowt[18];

			$ciudad = $rowt[21];
			$estado = $rowt[22];
	  }


	  $sql = " SELECT * FROM `usuario_tarjetas` WHERE id_usuario = '$idu'  ";
	  $result = $mysqli->query($sql);
	  $tarjeta_key = "";
	  while ($rowt = $result->fetch_row()){
	  	//$tarjeta_key = $rowt[2];
	  }



	  if($u_id_openpay!=""){
	  		
	  		$customer = $openpay->customers->get($u_id_openpay);

	  }


}


if(isset($idu) && $tarjeta_key==""){


	$cardData = array(
		'holder_name' => "$card_name",
		'card_number' => "$card",
		'cvv2' => "$ccv",
		'expiration_month' => "$card_date_mm",
		'expiration_year' => "$card_date_aa",
		'address' => array(
			'line1' => "$domicilio",
			'line2' => "$colonia",
			'line3' => "$referencias",
			'postal_code' => "$cp",
			'state' => "$estado",
			'city' => "$ciudad",
			'country_code' => 'MX'));

	//echo "<h1>Card Data</h1>";
	//var_dump($cardData);
	//echo "<br><br><br>";

	$elerror = "";

	try {
		
		$card = $customer->cards->add($cardData);

	} catch (OpenpayApiTransactionError $e) {
		
		/*
		error_log('ERROR on the transaction: ' . $e->getMessage() . 
		      ' [error code: ' . $e->getErrorCode() . 
		      ', error category: ' . $e->getCategory() . 
		      ', HTTP code: '. $e->getHttpCode() . 
		      ', request ID: ' . $e->getRequestId() . ']', 0);
		      */

		$elerror .=  " OpenpayApiTransactionError <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();


	} catch (OpenpayApiRequestError $e) {
		//error_log('ERROR on the request: ' . $e->getMessage(), 0);
		$elerror .=  " OpenpayApiRequestError <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();

	} catch (OpenpayApiConnectionError $e) {
		//error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
		$elerror .=  " OpenpayApiConnectionError <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();

	} catch (OpenpayApiAuthError $e) {
		//error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
		//echo " OpenpayApiAuthError <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();
		
	} catch (OpenpayApiError $e) {
		//error_log('ERROR on the API: ' . $e->getMessage(), 0);
		$elerror .=  " OpenpayApiError <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();
		
	} catch (Exception $e) {
		//error_log('Error on the script: ' . $e->getMessage(), 0);
		$elerror .=  " Exception <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();
	}

	//$card = $customer->cards->add($cardData);
	if($elerror!=""){
		$idcard = "";
	}else{
		$idcard = $card->id;
	}


	//echo "<h1>Card Data: $idcard </h1>";


	$sql = "INSERT INTO `usuario_tarjetas` (`id_usuario_tarjeta`, `id_usuario`, `tarjeta_key`, `extra`, `mensaje`, `fecha_alta`)
	 VALUES (NULL, '$idu', '$idcard', '0' ,'$elerror' ,now() )";

	 //echo $sql;

	 $result = $mysqli->query($sql);


	 $sql = " SELECT * FROM `usuario_tarjetas` WHERE id_usuario='$idu' ORDER BY id_usuario_tarjeta LIMIT 1 ";
	 $result = $mysqli->query($sql);
	  while ($rowt = $result->fetch_row()){
	  	$id_usuario_tarjeta = $rowt[0];
	  }
	 


	 if($elerror!=""){
		header("location: sdm_compra_fallida_03.php");
	}else{
		$idcard = $card->id;
	}


	 

}


if(isset($idu) && $tarjeta_key!=""){

	//echo "<h1>Card Data DB: $tarjeta_key </h1>";

	$card = $customer->cards->get($tarjeta_key);

    //echo "<h1>Card Data</h1>";
	//var_dump($card);
	//echo "<br><br><br>";

}


if( isset($idcard) && $idcard!="" && isset($idu) ){

	//echo "<h1>Card Data NUEVA: $idcard </h1>";


	//$card = $customer->cards->get('k9vn9bfuckmgqwow5pxh');

	//echo "<h1>Card Data</h1>";
	//var_dump($card);
	//echo "<br><br><br>";

	//device_session_id
	//redirect_url



	/// calcular el costo del pedido costo final
	$costo=30.00;


	$sql = " SELECT * FROM `usuario_charges` ORDER BY id_usuario_tarjeta DESC LIMIT 1 ";
	$result = $mysqli->query($sql);
	$id_charge_next = 0;
	  while ($rowt = $result->fetch_row()){
	  	$id_charge_next = $rowt[0];
	  }
	  $id_charge_next=$id_charge_next+60;


	  //currency

	$chargeData = array(
	 'currency' => 'MXN',
	'device_session_id' => "$deviceIdHiddenFieldName",
	'redirect_url' => "https://pluralmkt.mx/sdm_compra_fallida_03.php",
	'source_id' => "$idcard",
	'method' => 'card',
	'amount' => $costo,
	'description' => 'Cargo inicial a mi cuenta 000'.$id_charge_next,
	'order_id' => 'ORDEN-000'.$id_charge_next );


	//echo "<h1>Charge Data:</h1>";
	//var_dump($chargeData);
	//echo "<br><br><br>";

	///Generar el cargo
	$idcharge = "";


	$elerror="";
     try {
		
	   $charge = $customer->charges->create($chargeData);
	   $idcharge = $charge->id;

	}catch (Exception $e) {
		//error_log('Error on the script: ' . $e->getMessage(), 0);
		$elerror .=  " Exception <br>";
		//echo $e->getMessage();
		$elerror .= $e->getMessage();
	}



	//$idcharge = "trh7gp1cpguw5upc7mmw";

	//echo "<h1>Charge ID: $idcharge</h1>";
	//var_dump($charge);
	//echo "<br><br><br>";


	//deviceIdHiddenFieldName
	//echo "<h1>deviceIdHiddenFieldName: $deviceIdHiddenFieldName</h1>";
	//var_dump($charge);
	//echo "<br><br><br>";


	//Cobrar el cargo
	$captureData = array('amount' => $costo );
	$charge = $customer->charges->get($idcharge);
	//$charge->capture($captureData);


	//echo "<h1>Charge CAPTURE dump: $idcharge</h1>";
	//var_dump($charge);
	//echo "<br><br><br>";


	   $elerror=" ";

		try {
			
			$charge->capture($captureData);

		} catch (OpenpayApiTransactionError $e) {
			/*
			error_log('ERROR on the transaction: ' . $e->getMessage() . 
			      ' [error code: ' . $e->getErrorCode() . 
			      ', error category: ' . $e->getCategory() . 
			      ', HTTP code: '. $e->getHttpCode() . 
			      ', request ID: ' . $e->getRequestId() . ']', 0);
			*/

			$elerror .=  " OpenpayApiTransactionError <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();


		} catch (OpenpayApiRequestError $e) {
			//error_log('ERROR on the request: ' . $e->getMessage(), 0);
			$elerror .=  " OpenpayApiRequestError <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();

		} catch (OpenpayApiConnectionError $e) {
			//error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
			$elerror .=  " OpenpayApiConnectionError <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();

		} catch (OpenpayApiAuthError $e) {
			//error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
			//echo " OpenpayApiAuthError <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();
			
		} catch (OpenpayApiError $e) {
			//error_log('ERROR on the API: ' . $e->getMessage(), 0);
			$elerror .=  " OpenpayApiError <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();
			
		} catch (Exception $e) {
			//error_log('Error on the script: ' . $e->getMessage(), 0);
			$elerror .=  " Exception <br>";
			//echo $e->getMessage();
			$elerror .= $e->getMessage();
		}


		$status = $charge->status;

		//status
	$sql = " INSERT INTO
	 `usuario_charges` (`id_usuario_tarjeta`, `id_usuario`, `tarjeta_key`, `extra`, `mensaje`, `id_charge` , `device_id`, `charge_next`, `status`, `fecha_alta`) 
	VALUES (NULL, '$idu', '$idcard ', '0', '$elerror' ,'$idcharge' ,'$deviceIdHiddenFieldName' ,'$id_charge_next' ,'$status' ,now()) ";
	//echo $sql;
	$result = $mysqli->query($sql);


	 $sql = " SELECT * FROM `usuario_charges` WHERE id_usuario='$idu' ORDER BY id_usuario_tarjeta LIMIT 1 ";
	 $result = $mysqli->query($sql);
	  while ($rowt = $result->fetch_row()){
	  	$id_usuario_charges = $rowt[0];
	  }

	  if(isset($_SESSION['id_checkout'])){
	  	$id_checkout = $_SESSION['id_checkout'];		
	  }else{
	  	$id_checkout = 0;
	  }


	 $sql = " SELECT * FROM `checkout` WHERE id_checkout='$id_checkout' LIMIT 1 ";
	 $result = $mysqli->query($sql);
	  while ($rowt = $result->fetch_row()){
	  	$total_total = $rowt[4];
	  }



	if($status=="completed"){
		///proceso completo

		//sumo 1 mes
		$fecha_actual = date("d-m-Y");
		//echo date("d-m-Y",strtotime($fecha_actual."+ 30 days")); 

		//echo "<br>";

		//echo date("d",strtotime($fecha_actual."+ 30 days")); 
		//echo "<br>";
		//echo ConvertirAMes(date("m",strtotime($fecha_actual."+ 30 days"))); 

		//$id_checkout
		//id_usuario_charges
		//$id_usuario_tarjeta

		$sql = " INSERT INTO
		 `usuario_pedido` (`id_usuario_pedido`, `id_usuario`, `id_checkout`, `id_tarjeta`, `id_charge`, `fecha_alta`, `total_total`, `productos`)
		 VALUES (NULL, '$idu', '$id_checkout', '$id_usuario_tarjeta', '$id_usuario_charges', now(), '$total_total', '0') ";
		 echo $sql;

		 $result = $mysqli->query($sql);

		
	}



}


function ConvertirAMes($t_num){
	if($t_num=="01"){
		return("Enero");
	}
	if($t_num=="02"){
		return("Febrero");
	}
	if($t_num=="03"){
		return("Marzo");
	}
	if($t_num=="04"){
		return("Abril");
	}
	if($t_num=="05"){
		return("Mayo");
	}
	if($t_num=="06"){
		return("Junio");
	}
	if($t_num=="07"){
		return("Julio");
	}
	if($t_num=="08"){
		return("Agosto");
	}
	if($t_num=="09"){
		return("Septiembre");
	}
	if($t_num=="10"){
		return("Octubre");
	}
	if($t_num=="11"){
		return("Noviembre");
	}
	if($t_num=="10"){
		return("Diciembre");
	}
}

//header("location: sdm_compra_fallida_03.php");



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
 				font-family: 'Raleway', sans-serif;
 			}
			.boton_azul{
		 		background-color: #007df9; 
		 		height: 30px; 
		 		width: 75%; 
		 		margin: auto; text-align: center; 
		 		border-radius: 20px; 
		 		color: #ffF; 
		 		padding-top: 10px; 
		 		margin-top: 20px;
		 		cursor: pointer;
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
		 	}	
		 	.boton_negro:hover{
		 			-webkit-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					-moz-box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
					box-shadow: 2px 2px 2px 0px rgba(71,70,71,0.5);
		 	}
 		</style>

 		
 		<div class="contenido">

 			<div style="width: 80%; margin: auto; background-color: #72B74E; border-radius: 20px; padding-top: 30px; padding-bottom: 30px;
 			border-top-left-radius:0px; border-top-right-radius:0px; ">
 				<div style="width: 300px; margin: auto;">
 					<img src="compra_exitosa_paloma.png" style="width: 100%;">
 				</div>
 			</div>


 				<div style="width: 40%; margin: auto; text-align: center; margin-top: 30px; color: #262626; font-size: 25px; font-weight: 500;">
 					Llega entre el 

 					<?php echo date("d",strtotime($fecha_actual."+ 30 days"));  ?> 
 					de
 					<?php echo ConvertirAMes(date("m",strtotime($fecha_actual."+ 30 days")));  ?>

 					 y el 

 					 <?php echo date("d",strtotime($fecha_actual."+ 45 days"));  ?>

 					  del 

 					  <?php echo ConvertirAMes(date("m",strtotime($fecha_actual."+ 45 days")));  ?>
 				</div>

 				<div style="width: 40%; margin: auto; text-align: center; margin-top: 15px; color: #575757; font-weight: 500;">
 					Ya estamos preparando tu pedido
 				</div>

 				<br>

 				<div style="width: 35%; margin: auto; ">
 					<div class="boton_azul">Ver mi pedido</div>
 					<br>
 					
 				</div>


 				<br>
 				<br>

 			</div>



 		</div>













 </div>


 		<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















