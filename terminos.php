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






 		<!--  CONTENIDO -->


<style type="text/css">
	.contenido_nuevo{
		font-family: 'Poppins', sans-serif;
	}
</style>


<div class="contenido_nuevo">



<h1>T??RMINOS Y CONDICIONES DE COMPRA DEL SITIO WEB www.pluralmkt.mx</h1>

<br>
La venta de art??culos a trav??s de esta p??gina web es realizada bajo la denominaci??n PLURAL MKT propiedad de PLURAL MKT, S.A. DE C.V., con n??mero de Registro Federal de Contribuyentes: PMK191028HZ8; con domicilio fiscal en: Dr. Vertiz 1400, int 102, colonia Portales, C.P. 03300, Alcald??a Benito Ju??rez, en la Ciudad de M??xico; tel??fono 55 65853106 correo electr??nico de contacto: hola@pluralmkt.mx
<br><br>
Al ingresar, consultar y comprar en este Sitio usted (en adelante el "Cliente") se compromete a leer, informarse, aceptar y cumplir los t??rminos y condiciones de uso, establecidos a continuaci??n:
<br><br>
<b>1. El Sitio.</b>
<br><br>
El Sitio es una tienda en l??nea a trav??s de la cual el Cliente podr?? consultar y adquirir los productos comercializados por PLURAL MKT, en el territorio mexicano. En el Sitio el Cliente podr?? encontrar un cat??logo de productos de los cuales podr?? elegir los productos que desee adquirir a cambio del precio indicado.
<br><br>
<b>2. Aplicaci??n de los T??rminos y Condiciones</b>
<br><br>
Lo presentes T??rminos y Condiciones de uso del Sitio (en adelante los ???T??rminos y Condiciones???) se aplican a todos los pedidos de productos realizados por el Cliente a trav??s del Sitio. Los T??rminos y Condiciones aplicables ser??n aquellos que se encuentren vigentes y publicados en el momento en el que el Cliente realiza el pedido.
<br><br>
<b>3. Capacidad para el uso del Sitio</b>
<br><br>
Los servicios del Sitio estar??n disponibles solo para aquellas personas que se encuentren en capacidad legal para contratar de conformidad con la legislaci??n mexicana vigente.
<br><br>
<b>4. Proceso de Compra</b>
	<br><br>


<div style="margin-left: 40px;">
<b>4.1. Registro: </b> Por regla general, para el acceso a los contenidos de la P??gina Web no ser?? necesario el registro del Usuario. No obstante, la utilizaci??n de determinados servicios, como en el caso de las membres??as (la "Membres??a") estar?? condicionada al registro previo del Usuario, quien deber?? completar todos los campos del formulario de inscripci??n con datos v??lidos (en adelante el ???Usuario Registrado???). Quien aspire a convertirse en Usuario Registrado deber?? verificar que la informaci??n que pone a disposici??n de PLURAL MKT. Al registrarse en la P??gina Web, la informaci??n proporcionada debe ser exacta, precisa y verdadera (en adelante los ???Datos Personales???); asimismo asumir?? el compromiso de actualizar los Datos Personales cada vez que los mismos sufran modificaciones. Los Usuarios Registrados garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de los Datos Personales puestos a disposici??n del PLURAL MKT.


<b>4.2. Acceso a la cuenta.</b> Para transformarse en Usuario Registrado, el Usuario tendr?? acceso a una cuenta personal ("Cuenta") mediante el ingreso de su nombre de usuario y clave de seguridad personal elegida ("Clave de Seguridad"). Esta Clave de Seguridad es personal e intransferible. El Usuario Registrado se obliga a mantener en estricta confidencialidad su Clave de Seguridad. El Usuario Registrado ser??, en todo caso, responsable por todo da??o, perjuicio, lesi??n o detrimento que del incumplimiento de esta obligaci??n de confidencialidad se genere por cualquier causa.
<br><br>

La Cuenta es personal, ??nica e intransferible, y est?? prohibido que un mismo Usuario Registrado registre o posea m??s de una Cuenta. En caso de que PLURAL MKT, detecte distintas Cuentas que contengan datos coincidentes o relacionados, podr?? cancelarlas, suspenderlas o inhabilitarlas, a su sola discreci??n, siendo el mismo motivo suficiente para dar de baja al Usuario Registrado, incluso en su primera Cuenta. El Usuario Registrado ser?? responsable por todas las operaciones efectuadas desde su Cuenta, pues el acceso a la misma est?? restringido al ingreso y uso de su Clave de Seguridad, de conocimiento exclusivo del Usuario y cuya confidencialidad es de su exclusiva responsabilidad. El Usuario Registrado se compromete a notificar a PLURAL MKT, de forma inmediata y por un medio id??neo, fehaciente, eficiente y eficaz, cualquier uso no autorizado de su Cuenta, as?? como el ingreso por terceros no autorizados a la misma. Se encuentra prohibida la venta, cesi??n, transferencia o transmisi??n de la Cuenta bajo cualquier t??tulo, ya sea oneroso o gratuito.

<br><br>
PLURAL MKT, se reserva el derecho de rechazar cualquier solicitud de registro o de cancelar un registro previamente aceptado, cuando a su sola discreci??n considere que no se ha dado cumplimiento a la totalidad de lo establecido en los T??rminos y Condiciones, sin que est?? obligado a comunicar o exponer las razones de su decisi??n y sin que ello genere derecho a indemnizaci??n o resarcimiento alguno a favor del Usuario Registrado alcanzado por dicha decisi??n.


<b>4.3. Identificar los productos:</b> Una vez ingresa al Sitio, el Cliente podr?? buscar y escoger los productos que desea consultar o comprar, ya sea introduciendo el nombre, referencia o c??digo del producto o ubic??ndolo en el cat??logo puesto a su disposici??n.
<br><br>

<b>4.4. Detalle de los productos:</b> Al encontrar el producto que el Cliente desea consultar o comprar, se desplegar??n todos los detalles sobre el producto, tales como dimensiones, cantidades, materiales, precio, etc. As?? mismo, en el detalle de los productos el Cliente podr?? saber si ??stos se encuentran disponibles. 
<br><br>

<b>4.5. A??adir productos al carrito de compra:</b> Los productos que el Cliente desee comprar pueden ser agregados al carrito de compra al seleccionar la opci??n "A??adir al Carrito"; "Comprar" o cualquier otra similar que se encuentre disponible. El Cliente puede agregar m??ltiples cantidades de un mismo producto y/o m??ltiples productos. PLURAL MKT se reserva la posibilidad de limitar las cantidades o establecer m??nimos de compra de un mismo producto que los clientes puedan adquirir en una misma compra. 
<br><br>

<b>4.6. Visualizaci??n del carrito de compras.</b> Cuando el Cliente desee checar los productos a??adidos o terminar el proceso de compra, podr?? dirigirse al carrito de compras.

<br><br>

<b>4.7. Checkout: </b> Antes de realizar el pago de los productos que tiene en el carrito de compras, el Cliente podr?? revisar y asegurarse de que los productos y las cantidades son las que en efecto desea comprar; de lo contrario podr?? eliminar productos y/o modificar cantidades antes de formalizar la compra. 

<br><br>

<b>4.8. Forma de pago:</b> El Sitio ofrece diversos medios de pago tales como pago con tarjeta debito y/o cr??dito, plataformas de pagos, y/o pago a trav??s de transferencia en cuenta bancaria. Al seleccionar la forma de pago deseada el Cliente deber?? ingresar la informaci??n necesaria y requerida por el Sitio para la realizaci??n del pago.
<br><br>
Para los pagos realizados con tarjeta de d??bito o cr??dito, PLURAL MKT se ha aliado con Open Pay que garantizan la seguridad de los datos y previenen la realizaci??n de actividades fraudulentas.
<br><br>
Particularmente para los a trav??s de dep??sito en cuenta bancaria, PLURAL MKT le enviar?? todas las instrucciones para realizar el pago, el Cliente cuenta con 24 (veinticuatro) horas a partir de la generaci??n del pedido para realizar el pago, de lo contrario el pedido quedar?? cancelado.
<br><br>

<b>4.9. Pago: </b>El Cliente deber?? confirmar la realizaci??n del pago. Si el medio de pago es aprobado se emitir?? la orden del pedido, de lo contrario deber?? modificar su forma de pago. 
<br><br>

<b>4.10. Confirmaci??n del pedido:</b> Al realizarse el pago el Cliente recibir?? en su direcci??n de correo electr??nico la confirmaci??n del pedido. Si durante el proceso de confirmaci??n del pedido la totalidad o parte de los Productos no se encuentran disponibles, el Cliente podr?? escoger si desea que se env??e la parte de los productos disponibles o cancelar el pedido. En caso de cancelaci??n o de env??o parcial, las sumas de dinero que son a favor del Cliente podr??n ser devueltas a trav??s de un reembolso o de un cup??n o nota de devoluci??n para compra dentro del Sitio. 

<br><br>

<b>4.11. Env??o, entrega y notificaciones:</b> PLURAL MKT se comunicar?? a trav??s de correo electr??nico o de los medios que el Cliente haya elegido para informarle sobre el estado de su pedido y notificaciones de env??o y/o entrega.
<br><br>

</div>




<b>5. Env??o y entregas.</b>
PLURAL MKT se compromete a realizar la entrega de los productos solo en el territorio mexicano y las zonas y lugares donde tenga acceso, de conformidad con la cobertura de la empresa transportadora. Los tiempos para el env??o y/o entrega de los productos empezar?? a contar a partir de que el Cliente recibe la confirmaci??n. Los tiempos indicados en el Sitio para los env??os se cuentan en d??as h??biles. Es necesario tener en cuenta que, para env??os a domicilio, la entrega estar?? a cargo de una empresa transportadora independiente y que el retraso en la entrega puede ocurrir por causas ajenas a PLURAL MKT. 
<br><br>

Para las entregas en el domicilio proporcionado por el Cliente, se entiende que cualquier persona que se encuentre en el domicilio donde debe realizarse la entrega, estar?? debidamente autorizada para recibir su pedido. En tal sentido, PLURAL MKT queda exonerado de cualquier responsabilidad por la entrega que realizare, siempre que la misma se haga en el domicilio registrado en el Sitio.
<br><br>

Los productos que no sean posibles entregarse en el domicilio despu??s de tres (3) visitas por parte de la transportadora, ser??n devueltos a PLURAL MKT, esto le ser?? comunicado al Cliente a trav??s de cualquiera de los medios de contacto proporcionados al momento de la compra. En este caso, el Cliente estar?? en la obligaci??n de contactar el Sitio en un t??rmino m??ximo de tres (3) d??as calendario para que se proceda con su reenv??o, en cuyo caso los gastos de reenv??o y seguros que se generen correr??n por cuenta suya, y hasta tanto los mismos no sean pagados, el Sitio no estar?? en obligaci??n de hacer nuevamente el env??o.

<br><br>

Si el Cliente no se comunica para iniciar el env??o en el t??rmino indicado, o no realiza el pago del valor adicional por el reenv??o, PLURAL MKT podr?? desistir del negocio, y estar?? obligado s??lo a restituir el monto pagado por los productos, descontando el valor de los gastos incurridos por el transporte.
<br><br>

<b>6. Cuentas de usuario.</b>
Al momento de realizar las compras, el Cliente deber?? crear una cuenta en el Sitio. El Sitio le solicitar?? datos personales tales como nombre, documento de identidad, direcci??n, correo electr??nico, fecha de nacimiento, etc. La informaci??n proporcionada se someter?? a las condiciones establecidas en las Pol??ticas de Protecci??n de Datos .
<br><br>

<b>7. Cargos por env??o e impuestos. </b>
El Cliente ser?? responsable de los cargos de env??o, manejo y seguro de los productos que adquiera en el Sitio, as?? como del impuesto al valor agregado y dem??s grav??menes que se ocasionen por cada oferta de compra aceptada. Todos los impuestos mencionados se encuentran ya incluidos en los precios de compra publicados en el Sitio al finalizar la compra. 
<br><br>

<b>8. Revocaci??n de consentimiento.</b>
El contrato se perfeccionar?? a los 5 (cinco) d??as h??biles contados a partir de la entrega del bien o de la firma del contrato, lo ??ltimo que suceda. Durante ese plazo tendr?? derecho a la revocaci??n de su consentimiento, por lo cual deber?? notificar a PLURAL MKT, escribiendo al correo electr??nico hola@pluralmkt.mx o a nuestro formulario de contacto, su decisi??n de desistirse de la compra a trav??s de una declaraci??n inequ??voca. En caso de revocaci??n el Cliente deber?? pagar los costos de manipulaci??n del productos y env??o, los cuales deber??n ser previamente cotizados con Plural.
<br><br>

El Cliente no tendr?? derecho a revocar el Contrato cuyo objeto sea el suministro de alguno de los productos siguientes:
<br><br>

<div style="margin-left: 40px;">
I.  Art??culos personalizados, marcados a solicitud del Cliente, o brandeados. <br><br>
II. Art??culos realizados sobre medidas.<br><br>
III. Art??culos adquiridos por PLURAL MKT exclusivamente para cumplir la solicitud del Cliente.<br><br>
IV. CDs/DVD de m??sica sin su envoltorio original.<br><br>
V. Bienes precintados por razones de higiene que hayan sido desprecintados tras la entrega.<br><br>
VI. Medias.<br><br>
VII. Ropa interior.<br>
VIII. Trajes de ba??o sin la pegatina higi??nica<br><br>
IX. Art??culos de cabello.<br><br>
X. Accesorios sin su envoltura original<br><br>
XI. Perfumes sin su empaque original o que hubieran sido abiertos<br><br>
XII. Prendas modificadas a petici??n del Cliente<br><br>
XIII. Art??culos comprados en otros pa??ses<br><br>
</div>

Su derecho a desistirse de la compra ser?? de aplicaci??n exclusivamente a aquellos art??culos que se devuelvan en las mismas condiciones en que usted los recibi??. No se har?? ning??n reembolso si el art??culo ha sido usado m??s all?? de la mera apertura de este, de art??culos que no est??n en las mismas condiciones en las que se entregaron o que hayan sufrido alg??n da??o, por lo que deber?? ser cuidadoso con el/los art??culos/s mientras est??n en su posesi??n. Por favor, devuelva el art??culo usando o incluyendo todos sus envoltorios originales, las instrucciones y dem??s documentos que en su caso lo acompa??en. En todo caso, deber?? entregar junto con el producto a devolver el ticket electr??nico que habr?? recibido adjunto a la Confirmaci??n de Env??o, que tambi??n lo puede encontrar en su cuenta del Sitio.
<br><br>

<b>1. Desistimiento por defectos o vicios ocultos </b>
<br><br>
Adem??s del derecho de desistimiento otorgado en el punto anterior, PLURAL MKT, otorga a los consumidores un derecho de desistimiento por defectos o vicios ocultos en los t??rminos y seg??n el procedimiento que en este punto se se??alan.
<br><br>
Este derecho supone nuestro compromiso en aceptar el cambio o la devoluci??n de sus productos dentro de los primeros 5 d??as contados desde la fecha en que usted o un tercero por usted indicado, distinto del transportista, adquiri?? la posesi??n material de los bienes o en caso de que los bienes que componen su pedido se entreguen por separado, a los 5 d??as naturales del d??a que usted o un tercero por usted indicado, distinto del transportista, adquiri?? la posesi??n material del ??ltimo de esos bienes, cuando dichos bienes presenten defectos o vicios ocultos que los hagan impropios para los usos a los que habitualmente se destinen o disminuyan su calidad o la posibilidad de uso o no ofrezca la seguridad que dada su naturaleza normalmente se espera de ella y de su uso razonable.
<br><br>

Su derecho a desistir ser?? de aplicaci??n exclusivamente a aquellos productos que se devuelvan en las mismas condiciones en que usted los recibi?? salvo por el defecto o vicio oculto que presente. 
<br><br>

<b>2. Valoraci??n del estado del producto y, en su caso, reembolso.</b>
<br><br>
Procederemos a examinar el estado del producto y la existencia del defecto o vicio oculto. Tras examinar el art??culo le comunicaremos si tiene derecho al reembolso de las cantidades pagadas. El reembolso se efectuar?? sin ninguna demora indebida y, en todo caso, a m??s tardar 40 d??as naturales a partir de la fecha en la que le enviemos un correo electr??nico confirmando que procede el reembolso o la sustituci??n del art??culo no conforme. El reembolso se efectuar?? siempre en el mismo medio de pago que usted utiliz?? para pagar la compra inicial cuando la compra se hubiese efectuada con tarjetas de d??bito o cr??dito.
<br><br>
 Las cantidades pagadas por aquellos productos que sean devueltos a causa de alguna tara o defecto, cuando realmente exista, le ser??n reembolsadas ??ntegramente, incluidos los gastos de entrega incurridos para entregarle el art??culo.
 <br><br>

<b>9. Devoluciones.</b>
<br><br>
El Cliente tendr?? la posibilidad de realizar la devoluci??n de los productos adquiridos en el Sitio cuando (i) los productos presenten defectos de fabricaci??n o en mal estado; (ii) los productos est??n incompletos o con partes faltantes, (iii) los productos comprados son, total o parcialmente, diferentes a los productos entregados; este derecho lo podr?? ejercer dentro de los quince (10) d??as calendario siguientes a la confirmaci??n de entrega  de los productos por parte de la compa????a transportadora. Para que la devoluci??n sea pertinente, los productos deben estar completamente nuevos, libres de uso y en condiciones para su venta, es de decir sin armar, con el empaque original y con todos sus accesorios, cat??logos y piezas completas; as?? mismo deben ser pagados por parte del Cliente los costos de env??o y manipulaci??n de los productos, los cuales deben ser cotizados de manera previa con Plural. No son productos sujetos a devoluci??n aquellos que se hayan hecho a la medida, productos sobre pedido o aquellos que fueron elaborados, fabricados, armados, cortados, marcados o preparados conforme a las especificaciones del Cliente o que son personalizados para el Cliente.
<br><br>
Para realizar un tr??mite de devoluci??n el Cliente debe comunicarse a la l??nea 55 65853106 en M??xico o al correo hola@pluralmkt.mx donde se le dar??n instrucciones para la devoluci??n de ??ste. Los costos de env??o que se generen por la devoluci??n deber??n ser pagados por el Cliente. 
<br><br>
El Cliente podr?? elegir si la devoluci??n de las sumas de dinero se realiza a trav??s de un cup??n para ser usado en el Sitio; o el reembolso del dinero al m??todo de pago usado por el Cliente.
<br><br>

<b>10. Garant??a legal</b>
<br><br>
Para el ejercicio de la garant??a legal sobre los productos, el Cliente deber?? comunicarse al 55 65853106 en M??xico o al correo ??hola@pluralmkt.mx. La garant??a de los productos adquiridos en el Sitio estar?? sujeto a diagn??stico previo. Las solicitudes de garant??a se tramitar??n en un periodo no inferior a cinco (5) d??as h??biles contados a partir de la recepci??n los productos para diagn??stico. Los costos de transporte para el ejercicio del derecho de garant??a correr??n por cuenta del Cliente. 
<br><br>

Si resulta procedente el ejercicio de la garant??a se proceder?? a la reparaci??n totalmente gratuita de los defectos de los productos y se proveer??n los repuestos que se requieran para garantizar el ??ptimo funcionamiento de los productos. Si los productos no son reparables se proceder??, a elecci??n del Cliente, a la devoluci??n del precio pagado o al reemplazo por un producto nuevo de iguales o similares caracter??sticas. Si los productos presentan defectos por la misma causa inicialmente reparada se proceder??, a elecci??n del Cliente, a la devoluci??n del precio pagado o al reemplazo por un producto nuevo de iguales o similares caracter??sticas.
<br><br>

Si despu??s de realizarse el diagn??stico se concluye que sobre los productos hubo hechos de un tercero; eventos de fuerza mayor o caso fortuito, uso indebido por parte del Cliente, incumplimiento de las instrucciones de uso, instalaci??n, mantenimiento y/o cuidado establecido en los manuales; no operar?? la garant??a aqu?? establecida y la reparaci??n ser?? a cargo del cliente.
<br><br>

Vencido el periodo de garant??a legal, todas las reparaciones ser??n a cargo del Cliente. 
<br><br>

<b>11. Derechos de propiedad intelectual</b>
<br><br>
Todo el material inform??tico, gr??fico, publicitario, fotogr??fico, de multimedia, audiovisual y/o de dise??o, as?? como todos los contenidos, textos y bases de datos, logos, marcas y slogans publicados en el Sitio son de propiedad exclusiva de PLURAL MKT, o de terceros que han autorizado su uso y/o explotaci??n.
<br><br>

Queda prohibido todo acto de copia, reproducci??n, modificaci??n, creaci??n de trabajos derivados, venta o distribuci??n, exhibici??n los materiales previamente mencionados, de ninguna manera o por ning??n medio, incluyendo, mas no limitado a, medios electr??nicos, mec??nicos, de fotocopiado, de grabaci??n o de cualquier otra ??ndole, sin el permiso previo por escrito de PLURAL MKT o del titular de los derechos propiedad intelectual.
<br><br>

En ning??n caso los presentes T??rminos y Condiciones confieren derechos, licencias y/o autorizaciones para realizar los actos anteriormente descritos. Cualquier uso no autorizado de los materiales constituir?? una violaci??n a los presentes T??rminos y Condiciones y a las normas vigentes sobre propiedad intelectual tanto nacionales e internacionales aplicables y dar?? lugar a las acciones civiles y penales correspondientes.
<br><br>

<b>12. Suspensiones o intermitencias.</b>
<br><br>
PLURAL MKT se reserva la posibilidad de realizar modificaciones, mantenimientos o mejoras en el Sitio en cualquier momento y sin necesidad de preaviso. Si derivado de estas acciones el Sitio presenta suspensi??n o intermitencia en su servicio, no se generar?? ning??n tipo de responsabilidad a cargo de PLURAL MKT.
<br><br>

<b>13. Responsabilidad del Cliente.</b>
<br><br>
El Cliente es y ser?? el responsable por toda la informaci??n que ??ste proporcione en el Sitio y deber?? mantener una conducta y comportamiento de conformidad con los est??ndares establecidos por PLURAL MKT. Cualquier conducta por fuera de los est??ndares podr?? dar lugar a la cancelaci??n de las cuentas o el acceso al Sitio por parte del Cliente. 
<br><br>

As?? mismo, el Cliente es responsable por mantener la seguridad y privacidad de sus cuentas y claves del Sitio. Cualquier hecho que se presente como resultado del incumplimiento de esta obligaci??n del Cliente no causar?? ning??n tipo de responsabilidad a cargo de PLURAL MKT.
<br><br>

<b>14. Facturaci??n electr??nica</b>
<br><br>
El Cliente deber?? solicitar la factura electr??nica al momento de la compra y proveer los datos solicitados. 
<br><br>

La factura se tramita en el mismo mes en que se realiza la compra, posterior a dicho periodo no podr?? ser emitida. Por lo que te sugerimos solicitarla durante la confirmaci??n de tu compra.
<br><br>

El Usuario acepta que la informaci??n y datos fiscales proporcionados a PLURAL MKT para la emisi??n de la factura electr??nica es correcta y completa y por tal motivo se obliga a responder sobre dicha informaci??n y/o el mal uso que se le llegue a dar a la misma, oblig??ndose a conservar el ticket de compra para futuras aclaraciones.
<br><br>

<b>15.Modificaciones.</b>
<br><br>
PLURAL MKT podr?? modificar los T??rminos y Condiciones del Sitio en cualquier momento. PLURAL MKT notificar?? a trav??s de los medios de contacto con el Cliente los cambios realizados y la fecha de entrada en vigor. El uso del Sitio implica a aceptaci??n de las modificaciones de los T??rminos y Condiciones. 
<br><br>

<b>16. Ley y jurisdicci??n aplicable.</b>
<br><br>
Los presentes T??rminos y Condiciones se rigen e interpretan de conformidad con las leyes de la Ciudad de M??xico. Cualquier controversia relativa a la misma estar?? sujeta a los tribunales de la Ciudad de M??xico.
<br><br>

<b>17. Canales de atenci??n al Cliente.</b>
En todo lo relacionado con los productos y el Sitio, el Cliente puede contactar a PLURAL MKT a trav??s de los siguientes medios y horarios:
<br><br>
	<div style="margin-left: 40px; ">
	Tel??fono: 55 65853106 <br><br>
	Celular / WhatsApp:  5546131826 <br><br>
	Correo electr??nico: ??hola@pluralmkt.mx <br><br>
	Horarios de atenci??n: 8:00 am a 5:00 pm de lunes a viernes. No hay atenci??n s??bados, domingos, ni festivos. <br><br>
	</div>
El periodo de respuesta puede ser hasta de cuarenta y ocho (48) horas h??biles.<br><br>




</div>







	<!--  FIN CONTENIDO -->






 		</div>








 		


<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















