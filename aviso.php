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



<h1>AVISO DE PRIVACIDAD</h1>

<br>

PLURAL MKT, S.A. DE C.V (en adelante “Plural”) se encuentra comprometida con el debido manejo conforme a la Ley de los datos personales de los clientes y/o visitantes del dominio web www.pluralmkt.mx (en adelante el “Dominio Web”). En el presente Aviso de Privacidad (en adelante el “Aviso de Privacidad”), se establecen las finalidades, medidas y procedimientos de nuestras bases de datos, así como los mecanismos con que los Titulares de los Datos Personales cuentan para actualizar y rectificar a los datos suministrados, cancelar u oponerse la autorización y tratamiento que se otorga con la aceptación del presente Aviso de Privacidad.

<br><br>

<b>1.- Normatividad Aplicable.  </b>
 <br>
Los diferentes términos de este Aviso de Privacidad se han establecido de conformidad con los criterios dispuestos en la Ley Federal de Protección de Datos Personales en Posesión de Particulares (LFPDPPP). 
<br><br>


<b>2.- Definiciones.</b>
<br>
   De conformidad con la legislación vigente y las disposiciones de este Aviso de Privacidad, los siguientes términos se entenderán así: 

 <br><br>


<b>Autorización:</b>  	Consentimiento previo, expreso e informado del Titular para llevar a cabo el Tratamiento de Datos Personales. 
<br>
<b>Base de Datos:</b>  	Conjunto organizado de Datos Personales que sean objeto de Tratamiento. 
<br>
<b>Dato(s) personal(es):</b>  	Cualquier información vinculada o que pueda asociarse a una o varias personas físicas determinadas o determinables. 
<br>
<b>Encargado del Tratamiento:</b>  	Persona moral, que por sí misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del Responsable del Tratamiento. 
<br>
<b>Responsable del Tratamiento:  </b>	Persona moral que por sí misma o en asocio con otros, decida sobre la Base de Datos y/o el Tratamiento de los datos.
<br>
<b>Titular:</b> 	Persona física cuyos Datos Personales sean objeto de Tratamiento; <br>
<b>Tratamiento:</b> 	Cualquier operación o conjunto de operaciones sobre Datos Personales, tales como la recolección, almacenamiento, uso, circulación o supresión. 




 <b>3.- Responsable y encargado del Tratamiento de Datos.</b>
<br>
   El responsable y encargado del Tratamiento de los Datos Personales será PLURAL MKT, S.A. DE C.V., sociedad mercantil legalmente constituida bajo las leyes mexicanas titular del Registro Federal de Contribuyentes (RFC) PMK191028HZ8, Calle Uxmal, número 520, colonia Narvarte Vertiz, alcaldía Benito Juárez, código postal 03600, en la Ciudad de México; propietaria del sitio web www.pluralmkt.mx (en adelante el “Sitio Web”); será en adelante la encargada y responsable de los Datos Personales de los Titulares. 

<br><br>

<b>4.- Finalidad de las Bases de Datos Personales.    </b>
<br>

Los Datos Personales que son recolectados, utilizados, procesados, almacenados, recibidos o cedidos a Plural, serán dispuestos entre otras, para las siguientes finalidades: 

<br>

<b>a.</b> Cumplir con las obligaciones adquiridas con Plural;
<br>
  <b>b.</b> Implementar estrategias comerciales, organizacionales y de mercadeo;  
<br>
<b> c.</b> Realizar cualquier actividad necesaria para el efectivo cumplimiento de las obligaciones comerciales que tiene Plural con proveedores y/o clientes;  
<br>
<b> d.</b> Las demás que se deriven de la relación existente entre el Titular y Plural; 
<br>
<b> e.</b> Ofrecer nuevos productos o servicios; 
<br>
<b> f.</b> Estudios de mercado; 
<br>
<b> g.</b> Administrar sorteos, promociones o encuestas; 
<br>
<b> h.</b> Brindar servicio al cliente; 
<br>
<b> i.</b> Enviar comunicaciones promocionales; j. Seguimiento a la experiencia del Titular en el Dominio Web. k. Ofrecer promociones y acceso a servicios o productos al Titular.   

<br><br>

 <b>5.- Derechos del Titular de los Datos Personales.   </b>
<br>

 De acuerdo con lo establecido en la LFPDPPP y las demás normas que complementen, los Titulares de los Datos Personales tendrán los siguientes derechos: 

    <b>a.</b> Conocer, actualizar y rectificar sus datos personales ante Plural, en su calidad de Responsable del Tratamiento;   
  <br>
  <b>b.</b> Solicitar prueba de la autorización otorgada a Plural en su condición de Responsable del Tratamiento;    
  <br>
  <b>c.</b> Ser informado, previa solicitud a Plural, del uso que se le ha dado a sus Datos Personales;   
  <br>
  <b>d.</b> Revocar la autorización y/o solicitar la supresión de los Datos Personales cuando en el Tratamiento no se respeten los principios, derechos y garantías constitucionales y legales;  
  <br>
  <b>e.</b> Acceder en forma gratuita a los Datos Personales de su propiedad que hayan sido objeto de Tratamiento por parte de Plural.  
<br><br>

  <b>6.- Almacenamiento de Datos Personales. </b>
<br>
    El Titular autoriza expresamente a Plural para que almacene sus datos de la forma que considere más oportuna y cumpla con la seguridad requerida para la protección de los Datos de los Titulares.  

  <br><br>


<b>  7.- Ejercicio de los derechos ARCO (Acceso, Rectificación, Cancelación y Oposición).    </b>

<br>

  El Titular tiene, en todo momento, derecho de acceder, rectificar y cancelar sus Datos Personales, así como de oponerse al Tratamiento de estos o revocar el consentimiento que haya proporcionado presentando una solicitud en el formato que para tal fin le entregaremos a petición expresa, misma que debe contener la información y documentación siguiente:
<br>


<b>a.</b> Nombre del Titular, domicilio y correo electrónico u otro medio para comunicarle la respuesta a su solicitud;  
<br>
<b>b.</b> Los documentos vigentes que acrediten su identidad (copia simple en formato impreso o electrónico de su credencial de elector, pasaporte) o, en su caso, la representación legal del Titular (copia simple en formato impreso o electrónico de la carta poder simple con firma autógrafa del Titular, el mandatario y sus correspondientes identificaciones oficiales vigentes – credencial de elector, pasaporte o Visa);  

<br><br>

<b>c.</b> La descripción clara y precisa de los datos respecto de los que busca ejercer alguno de los Derechos de acceso, rectificación, cancelación u oposición a sus datos personales, y  
<br>
<b>d.</b> Cualquier otro elemento o documento que facilite la localización de los datos personales del Titular.
<br>
  La solicitud de acceso, rectificación, cancelación u oposición a sus datos personales, se hará previa acreditación de la identidad del Titular o personalidad del representante; poniendo la información a disposición en sitio en el domicilio de Plural. Se podrá acordar otro medio entre el Titular y Plural siempre que la información solicitada así lo permita.

<br><br>

  La recepción de solicitudes para ejercer sus derechos de acceso, rectificación, cancelación u oposición a sus datos personales, la revocación de su consentimiento y los demás derechos previstos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares podrá realizarse a través de los siguientes medios:  


<br><br>
Correo electrónico: hola@pluralmkt.mx  

<br><br>

Hecha la solicitud, Plural comunicará al titular en un plazo máximo de 20 días, contados a partir de la fecha en que se recibió la solicitud de acceso, rectificación, cancelación u oposición en términos de lo dispuesto por el artículo 32 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.

<br><br>

<b>8.- CAMBIOS AL AVISO DE PRIVACIDAD</b>

<br><br>

Plural, se reserva el derecho de actualizar periódicamente el presente Aviso para reflejar los cambios en nuestras prácticas de información. Es responsabilidad del Titular revisar periódicamente el contenido del Aviso en el Dominio Web en donde se publicarán los cambios realizados juntamente con la fecha de la última actualización.

<br><br>

  <b>9.- Contacto.  </b>

<br>
Cualquier duda o información adicional será recibida y tramitada mediante su envío a cualquiera de los medios de contacto establecidos a continuación

<br>


<b>"PLURAL MKT S.A. DE C.V."</b>
<br>
Dirección: 	Dr. José María Vertiz 1400, Interior 02, Portales Norte, Benito Juárez 03300, Ciudad de México, CDMX. <br>
Correo electrónico: 	hola@pluralmkt.mx  <br>
Teléfono:  	55 65 85 31 06 <br>



</div>







	<!--  FIN CONTENIDO -->






 		</div>









<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>




















