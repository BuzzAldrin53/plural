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





 		<!--  CONTENIDO -->


<style type="text/css">
	.contenido_nuevo{
		font-family: 'Poppins', sans-serif;
		width: 90%;
		margin: auto;
	}
</style>


<div class="contenido_nuevo">



<h1>AVISO DE PRIVACIDAD</h1>

<br>

PLURAL MKT, S.A. DE C.V (en adelante ???Plural???) se encuentra comprometida con el debido manejo conforme a la Ley de los datos personales de los clientes y/o visitantes del dominio web www.pluralmkt.mx (en adelante el ???Dominio Web???). En el presente Aviso de Privacidad (en adelante el ???Aviso de Privacidad???), se establecen las finalidades, medidas y procedimientos de nuestras bases de datos, as?? como los mecanismos con que los Titulares de los Datos Personales cuentan para actualizar y rectificar a los datos suministrados, cancelar u oponerse la autorizaci??n y tratamiento que se otorga con la aceptaci??n del presente Aviso de Privacidad.

<br><br>

<b>1.- Normatividad Aplicable. ???</b>
???<br>
Los diferentes t??rminos de este Aviso de Privacidad se han establecido de conformidad con los criterios dispuestos en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de Particulares (LFPDPPP). 
<br><br>


<b>2.- Definiciones.</b>
<br>
 ??????De conformidad con la legislaci??n vigente y las disposiciones de este Aviso de Privacidad, los siguientes t??rminos se entender??n as??: 

 <br><br>


<b>Autorizaci??n:</b>??? 	Consentimiento previo, expreso e informado del Titular para llevar a cabo el Tratamiento de Datos Personales. 
<br>
<b>Base de Datos:</b>??? 	Conjunto organizado de Datos Personales que sean objeto de Tratamiento. 
<br>
<b>Dato(s) personal(es):</b>??? 	Cualquier informaci??n vinculada o que pueda asociarse a una o varias personas f??sicas determinadas o determinables. 
<br>
<b>Encargado del Tratamiento:</b>??? 	Persona moral, que por s?? misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del Responsable del Tratamiento. 
<br>
<b>Responsable del Tratamiento:??? </b>	Persona moral que por s?? misma o en asocio con otros, decida sobre la Base de Datos y/o el Tratamiento de los datos.
<br>
<b>Titular:</b> 	Persona f??sica cuyos Datos Personales sean objeto de Tratamiento; <br>
<b>Tratamiento:</b> 	Cualquier operaci??n o conjunto de operaciones sobre Datos Personales, tales como la recolecci??n, almacenamiento, uso, circulaci??n o supresi??n. 




???<b>3.- Responsable y encargado del Tratamiento de Datos.</b>
<br>
 ??????El responsable y encargado del Tratamiento de los Datos Personales ser?? PLURAL MKT, S.A. DE C.V., sociedad mercantil legalmente constituida bajo las leyes mexicanas titular del Registro Federal de Contribuyentes (RFC) PMK191028HZ8, Calle Uxmal, n??mero 520, colonia Narvarte Vertiz, alcald??a Benito Ju??rez, c??digo postal 03600, en la Ciudad de M??xico; propietaria del sitio web www.pluralmkt.mx (en adelante el ???Sitio Web???); ser?? en adelante la encargada y responsable de los Datos Personales de los Titulares. 

<br><br>

<b>4.- Finalidad de las Bases de Datos Personales.  ??????</b>
<br>

Los Datos Personales que son recolectados, utilizados, procesados, almacenados, recibidos o cedidos a Plural, ser??n dispuestos entre otras, para las siguientes finalidades: 

<br>

<b>a.</b> Cumplir con las obligaciones adquiridas con Plural;
<br>
 ???<b>b.</b> Implementar estrategias comerciales, organizacionales y de mercadeo; ???
<br>
<b> c.</b> Realizar cualquier actividad necesaria para el efectivo cumplimiento de las obligaciones comerciales que tiene Plural con proveedores y/o clientes; ???
<br>
<b> d.</b> Las dem??s que se deriven de la relaci??n existente entre el Titular y Plural;???
<br>
<b> e.</b> Ofrecer nuevos productos o servicios;???
<br>
<b> f.</b> Estudios de mercado;???
<br>
<b> g.</b> Administrar sorteos, promociones o encuestas;???
<br>
<b> h.</b> Brindar servicio al cliente;???
<br>
<b> i.</b> Enviar comunicaciones promocionales;???j. Seguimiento a la experiencia del Titular en el Dominio Web.???k. Ofrecer promociones y acceso a servicios o productos al Titular. ??????

<br><br>

 <b>5.- Derechos del Titular de los Datos Personales. ??????</b>
<br>

 De acuerdo con lo establecido en la LFPDPPP y las dem??s normas que complementen, los Titulares de los Datos Personales tendr??n los siguientes derechos: 

  ??????<b>a.</b> Conocer, actualizar y rectificar sus datos personales ante Plural,???en su calidad de???Responsable del Tratamiento; ??????
  <br>
  <b>b.</b> Solicitar prueba de la autorizaci??n otorgada a Plural en su condici??n de???Responsable del Tratamiento;??? ??????
  <br>
  <b>c.</b> Ser informado, previa solicitud a Plural, del uso que se le ha dado a sus Datos Personales; ??????
  <br>
  <b>d.</b> Revocar la autorizaci??n y/o solicitar la supresi??n de los Datos Personales cuando en el Tratamiento no se respeten los principios, derechos y garant??as constitucionales y legales;??????
  <br>
  <b>e.</b> Acceder en forma gratuita a los Datos Personales de su propiedad que hayan sido objeto de Tratamiento por parte de Plural.??????
<br><br>

  <b>6.- Almacenamiento de Datos Personales. </b>
<br>
  ??????El Titular autoriza expresamente a Plural para que almacene sus datos de la forma que considere m??s oportuna y cumpla con la seguridad requerida para la protecci??n de los Datos de los Titulares.??????

  <br><br>


<b>  7.- Ejercicio de los derechos ARCO (Acceso, Rectificaci??n, Cancelaci??n y Oposici??n).  ??????</b>

<br>

  El Titular tiene, en todo momento, derecho de acceder, rectificar y cancelar sus Datos Personales, as?? como de oponerse al Tratamiento de estos o revocar el consentimiento que haya proporcionado presentando una solicitud en el formato que para tal fin le entregaremos a petici??n expresa, misma que debe contener la informaci??n y documentaci??n siguiente:
<br>


<b>a.</b> Nombre del Titular, domicilio y correo electr??nico u otro medio para comunicarle la respuesta a su solicitud;??????
<br>
<b>b.</b> Los documentos vigentes que acrediten su identidad (copia simple en formato impreso o electr??nico de su credencial de elector, pasaporte) o, en su caso, la representaci??n legal del Titular (copia simple en formato impreso o electr??nico de la carta poder simple con firma aut??grafa del Titular, el mandatario y sus correspondientes identificaciones oficiales vigentes ??? credencial de elector, pasaporte o Visa);??????

<br><br>

<b>c.</b> La descripci??n clara y precisa de los datos respecto de los que busca ejercer alguno de los Derechos de acceso, rectificaci??n, cancelaci??n u oposici??n a sus datos personales, y??????
<br>
<b>d.</b> Cualquier otro elemento o documento que facilite la localizaci??n de los datos personales del Titular.
<br>
??????La solicitud de acceso, rectificaci??n, cancelaci??n u oposici??n a sus datos personales, se har?? previa acreditaci??n de la identidad del Titular o personalidad del representante; poniendo la informaci??n a disposici??n en sitio en el domicilio de Plural. Se podr?? acordar otro medio entre el Titular y Plural siempre que la informaci??n solicitada as?? lo permita.

<br><br>

??????La recepci??n de solicitudes para ejercer sus derechos de acceso, rectificaci??n, cancelaci??n u oposici??n a sus datos personales, la revocaci??n de su consentimiento y los dem??s derechos previstos en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares podr?? realizarse a trav??s de los siguientes medios:??????


<br><br>
Correo electr??nico: hola@pluralmkt.mx??????

<br><br>

Hecha la solicitud, Plural comunicar?? al titular en un plazo m??ximo de 20 d??as, contados a partir de la fecha en que se recibi?? la solicitud de acceso, rectificaci??n, cancelaci??n u oposici??n en t??rminos de lo dispuesto por el art??culo 32 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares.

<br><br>

<b>8.- CAMBIOS AL AVISO DE PRIVACIDAD</b>

<br><br>

Plural, se reserva el derecho de actualizar peri??dicamente el presente Aviso para reflejar los cambios en nuestras pr??cticas de informaci??n. Es responsabilidad del Titular revisar peri??dicamente el contenido del Aviso en el Dominio Web en donde se publicar??n los cambios realizados juntamente con la fecha de la ??ltima actualizaci??n.

<br><br>

??????<b>9.- Contacto.??????</b>

<br>
Cualquier duda o informaci??n adicional ser?? recibida y tramitada mediante su env??o a cualquiera de los medios de contacto establecidos a continuaci??n

<br>


<b>"PLURAL MKT S.A. DE C.V."</b>
<br>
Direcci??n: 	Dr. Jos?? Mar??a Vertiz 1400, Interior 02, Portales Norte, Benito Ju??rez 03300, Ciudad de M??xico, CDMX. <br>
Correo electr??nico: 	hola@pluralmkt.mx  <br>
Tel??fono:  	55 65 85 31 06 <br>



</div>







	<!--  FIN CONTENIDO -->






 		</div>









<?php

 		include("movil_sdm_footer.html");

 		?>





 </body>

 </html>




















