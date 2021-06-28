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
	}
</style>


<div class="contenido_nuevo" style="width: 95%; margin: auto;">



<h1>TÉRMINOS Y CONDICIONES DE COMPRA DEL SITIO WEB www.pluralmkt.mx</h1>

<br>
La venta de artículos a través de esta página web es realizada bajo la denominación PLURAL MKT propiedad de PLURAL MKT, S.A. DE C.V., con número de Registro Federal de Contribuyentes: PMK191028HZ8; con domicilio fiscal en: Dr. Vertiz 1400, int 102, colonia Portales, C.P. 03300, Alcaldía Benito Juárez, en la Ciudad de México; teléfono 55 65853106 correo electrónico de contacto: hola@pluralmkt.mx
<br><br>
Al ingresar, consultar y comprar en este Sitio usted (en adelante el "Cliente") se compromete a leer, informarse, aceptar y cumplir los términos y condiciones de uso, establecidos a continuación:
<br><br>
<b>1. El Sitio.</b>
<br><br>
El Sitio es una tienda en línea a través de la cual el Cliente podrá consultar y adquirir los productos comercializados por PLURAL MKT, en el territorio mexicano. En el Sitio el Cliente podrá encontrar un catálogo de productos de los cuales podrá elegir los productos que desee adquirir a cambio del precio indicado.
<br><br>
<b>2. Aplicación de los Términos y Condiciones</b>
<br><br>
Lo presentes Términos y Condiciones de uso del Sitio (en adelante los “Términos y Condiciones”) se aplican a todos los pedidos de productos realizados por el Cliente a través del Sitio. Los Términos y Condiciones aplicables serán aquellos que se encuentren vigentes y publicados en el momento en el que el Cliente realiza el pedido.
<br><br>
<b>3. Capacidad para el uso del Sitio</b>
<br><br>
Los servicios del Sitio estarán disponibles solo para aquellas personas que se encuentren en capacidad legal para contratar de conformidad con la legislación mexicana vigente.
<br><br>
<b>4. Proceso de Compra</b>
	<br><br>


<div style="margin-left: 40px;">
<b>4.1. Registro: </b> Por regla general, para el acceso a los contenidos de la Página Web no será necesario el registro del Usuario. No obstante, la utilización de determinados servicios, como en el caso de las membresías (la "Membresía") estará condicionada al registro previo del Usuario, quien deberá completar todos los campos del formulario de inscripción con datos válidos (en adelante el “Usuario Registrado”). Quien aspire a convertirse en Usuario Registrado deberá verificar que la información que pone a disposición de PLURAL MKT. Al registrarse en la Página Web, la información proporcionada debe ser exacta, precisa y verdadera (en adelante los “Datos Personales”); asimismo asumirá el compromiso de actualizar los Datos Personales cada vez que los mismos sufran modificaciones. Los Usuarios Registrados garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de los Datos Personales puestos a disposición del PLURAL MKT.


<b>4.2. Acceso a la cuenta.</b> Para transformarse en Usuario Registrado, el Usuario tendrá acceso a una cuenta personal ("Cuenta") mediante el ingreso de su nombre de usuario y clave de seguridad personal elegida ("Clave de Seguridad"). Esta Clave de Seguridad es personal e intransferible. El Usuario Registrado se obliga a mantener en estricta confidencialidad su Clave de Seguridad. El Usuario Registrado será, en todo caso, responsable por todo daño, perjuicio, lesión o detrimento que del incumplimiento de esta obligación de confidencialidad se genere por cualquier causa.
<br><br>

La Cuenta es personal, única e intransferible, y está prohibido que un mismo Usuario Registrado registre o posea más de una Cuenta. En caso de que PLURAL MKT, detecte distintas Cuentas que contengan datos coincidentes o relacionados, podrá cancelarlas, suspenderlas o inhabilitarlas, a su sola discreción, siendo el mismo motivo suficiente para dar de baja al Usuario Registrado, incluso en su primera Cuenta. El Usuario Registrado será responsable por todas las operaciones efectuadas desde su Cuenta, pues el acceso a la misma está restringido al ingreso y uso de su Clave de Seguridad, de conocimiento exclusivo del Usuario y cuya confidencialidad es de su exclusiva responsabilidad. El Usuario Registrado se compromete a notificar a PLURAL MKT, de forma inmediata y por un medio idóneo, fehaciente, eficiente y eficaz, cualquier uso no autorizado de su Cuenta, así como el ingreso por terceros no autorizados a la misma. Se encuentra prohibida la venta, cesión, transferencia o transmisión de la Cuenta bajo cualquier título, ya sea oneroso o gratuito.

<br><br>
PLURAL MKT, se reserva el derecho de rechazar cualquier solicitud de registro o de cancelar un registro previamente aceptado, cuando a su sola discreción considere que no se ha dado cumplimiento a la totalidad de lo establecido en los Términos y Condiciones, sin que esté obligado a comunicar o exponer las razones de su decisión y sin que ello genere derecho a indemnización o resarcimiento alguno a favor del Usuario Registrado alcanzado por dicha decisión.


<b>4.3. Identificar los productos:</b> Una vez ingresa al Sitio, el Cliente podrá buscar y escoger los productos que desea consultar o comprar, ya sea introduciendo el nombre, referencia o código del producto o ubicándolo en el catálogo puesto a su disposición.
<br><br>

<b>4.4. Detalle de los productos:</b> Al encontrar el producto que el Cliente desea consultar o comprar, se desplegarán todos los detalles sobre el producto, tales como dimensiones, cantidades, materiales, precio, etc. Así mismo, en el detalle de los productos el Cliente podrá saber si éstos se encuentran disponibles. 
<br><br>

<b>4.5. Añadir productos al carrito de compra:</b> Los productos que el Cliente desee comprar pueden ser agregados al carrito de compra al seleccionar la opción "Añadir al Carrito"; "Comprar" o cualquier otra similar que se encuentre disponible. El Cliente puede agregar múltiples cantidades de un mismo producto y/o múltiples productos. PLURAL MKT se reserva la posibilidad de limitar las cantidades o establecer mínimos de compra de un mismo producto que los clientes puedan adquirir en una misma compra. 
<br><br>

<b>4.6. Visualización del carrito de compras.</b> Cuando el Cliente desee checar los productos añadidos o terminar el proceso de compra, podrá dirigirse al carrito de compras.

<br><br>

<b>4.7. Checkout: </b> Antes de realizar el pago de los productos que tiene en el carrito de compras, el Cliente podrá revisar y asegurarse de que los productos y las cantidades son las que en efecto desea comprar; de lo contrario podrá eliminar productos y/o modificar cantidades antes de formalizar la compra. 

<br><br>

<b>4.8. Forma de pago:</b> El Sitio ofrece diversos medios de pago tales como pago con tarjeta debito y/o crédito, plataformas de pagos, y/o pago a través de transferencia en cuenta bancaria. Al seleccionar la forma de pago deseada el Cliente deberá ingresar la información necesaria y requerida por el Sitio para la realización del pago.
<br><br>
Para los pagos realizados con tarjeta de débito o crédito, PLURAL MKT se ha aliado con Open Pay que garantizan la seguridad de los datos y previenen la realización de actividades fraudulentas.
<br><br>
Particularmente para los a través de depósito en cuenta bancaria, PLURAL MKT le enviará todas las instrucciones para realizar el pago, el Cliente cuenta con 24 (veinticuatro) horas a partir de la generación del pedido para realizar el pago, de lo contrario el pedido quedará cancelado.
<br><br>

<b>4.9. Pago: </b>El Cliente deberá confirmar la realización del pago. Si el medio de pago es aprobado se emitirá la orden del pedido, de lo contrario deberá modificar su forma de pago. 
<br><br>

<b>4.10. Confirmación del pedido:</b> Al realizarse el pago el Cliente recibirá en su dirección de correo electrónico la confirmación del pedido. Si durante el proceso de confirmación del pedido la totalidad o parte de los Productos no se encuentran disponibles, el Cliente podrá escoger si desea que se envíe la parte de los productos disponibles o cancelar el pedido. En caso de cancelación o de envío parcial, las sumas de dinero que son a favor del Cliente podrán ser devueltas a través de un reembolso o de un cupón o nota de devolución para compra dentro del Sitio. 

<br><br>

<b>4.11. Envío, entrega y notificaciones:</b> PLURAL MKT se comunicará a través de correo electrónico o de los medios que el Cliente haya elegido para informarle sobre el estado de su pedido y notificaciones de envío y/o entrega.
<br><br>

</div>




<b>5. Envío y entregas.</b>
PLURAL MKT se compromete a realizar la entrega de los productos solo en el territorio mexicano y las zonas y lugares donde tenga acceso, de conformidad con la cobertura de la empresa transportadora. Los tiempos para el envío y/o entrega de los productos empezará a contar a partir de que el Cliente recibe la confirmación. Los tiempos indicados en el Sitio para los envíos se cuentan en días hábiles. Es necesario tener en cuenta que, para envíos a domicilio, la entrega estará a cargo de una empresa transportadora independiente y que el retraso en la entrega puede ocurrir por causas ajenas a PLURAL MKT. 
<br><br>

Para las entregas en el domicilio proporcionado por el Cliente, se entiende que cualquier persona que se encuentre en el domicilio donde debe realizarse la entrega, estará debidamente autorizada para recibir su pedido. En tal sentido, PLURAL MKT queda exonerado de cualquier responsabilidad por la entrega que realizare, siempre que la misma se haga en el domicilio registrado en el Sitio.
<br><br>

Los productos que no sean posibles entregarse en el domicilio después de tres (3) visitas por parte de la transportadora, serán devueltos a PLURAL MKT, esto le será comunicado al Cliente a través de cualquiera de los medios de contacto proporcionados al momento de la compra. En este caso, el Cliente estará en la obligación de contactar el Sitio en un término máximo de tres (3) días calendario para que se proceda con su reenvío, en cuyo caso los gastos de reenvío y seguros que se generen correrán por cuenta suya, y hasta tanto los mismos no sean pagados, el Sitio no estará en obligación de hacer nuevamente el envío.

<br><br>

Si el Cliente no se comunica para iniciar el envío en el término indicado, o no realiza el pago del valor adicional por el reenvío, PLURAL MKT podrá desistir del negocio, y estará obligado sólo a restituir el monto pagado por los productos, descontando el valor de los gastos incurridos por el transporte.
<br><br>

<b>6. Cuentas de usuario.</b>
Al momento de realizar las compras, el Cliente deberá crear una cuenta en el Sitio. El Sitio le solicitará datos personales tales como nombre, documento de identidad, dirección, correo electrónico, fecha de nacimiento, etc. La información proporcionada se someterá a las condiciones establecidas en las Políticas de Protección de Datos .
<br><br>

<b>7. Cargos por envío e impuestos. </b>
El Cliente será responsable de los cargos de envío, manejo y seguro de los productos que adquiera en el Sitio, así como del impuesto al valor agregado y demás gravámenes que se ocasionen por cada oferta de compra aceptada. Todos los impuestos mencionados se encuentran ya incluidos en los precios de compra publicados en el Sitio al finalizar la compra. 
<br><br>

<b>8. Revocación de consentimiento.</b>
El contrato se perfeccionará a los 5 (cinco) días hábiles contados a partir de la entrega del bien o de la firma del contrato, lo último que suceda. Durante ese plazo tendrá derecho a la revocación de su consentimiento, por lo cual deberá notificar a PLURAL MKT, escribiendo al correo electrónico hola@pluralmkt.mx o a nuestro formulario de contacto, su decisión de desistirse de la compra a través de una declaración inequívoca. En caso de revocación el Cliente deberá pagar los costos de manipulación del productos y envío, los cuales deberán ser previamente cotizados con Plural.
<br><br>

El Cliente no tendrá derecho a revocar el Contrato cuyo objeto sea el suministro de alguno de los productos siguientes:
<br><br>

<div style="margin-left: 40px;">
I.  Artículos personalizados, marcados a solicitud del Cliente, o brandeados. <br><br>
II. Artículos realizados sobre medidas.<br><br>
III. Artículos adquiridos por PLURAL MKT exclusivamente para cumplir la solicitud del Cliente.<br><br>
IV. CDs/DVD de música sin su envoltorio original.<br><br>
V. Bienes precintados por razones de higiene que hayan sido desprecintados tras la entrega.<br><br>
VI. Medias.<br><br>
VII. Ropa interior.<br>
VIII. Trajes de baño sin la pegatina higiénica<br><br>
IX. Artículos de cabello.<br><br>
X. Accesorios sin su envoltura original<br><br>
XI. Perfumes sin su empaque original o que hubieran sido abiertos<br><br>
XII. Prendas modificadas a petición del Cliente<br><br>
XIII. Artículos comprados en otros países<br><br>
</div>

Su derecho a desistirse de la compra será de aplicación exclusivamente a aquellos artículos que se devuelvan en las mismas condiciones en que usted los recibió. No se hará ningún reembolso si el artículo ha sido usado más allá de la mera apertura de este, de artículos que no estén en las mismas condiciones en las que se entregaron o que hayan sufrido algún daño, por lo que deberá ser cuidadoso con el/los artículos/s mientras estén en su posesión. Por favor, devuelva el artículo usando o incluyendo todos sus envoltorios originales, las instrucciones y demás documentos que en su caso lo acompañen. En todo caso, deberá entregar junto con el producto a devolver el ticket electrónico que habrá recibido adjunto a la Confirmación de Envío, que también lo puede encontrar en su cuenta del Sitio.
<br><br>

<b>1. Desistimiento por defectos o vicios ocultos </b>
<br><br>
Además del derecho de desistimiento otorgado en el punto anterior, PLURAL MKT, otorga a los consumidores un derecho de desistimiento por defectos o vicios ocultos en los términos y según el procedimiento que en este punto se señalan.
<br><br>
Este derecho supone nuestro compromiso en aceptar el cambio o la devolución de sus productos dentro de los primeros 5 días contados desde la fecha en que usted o un tercero por usted indicado, distinto del transportista, adquirió la posesión material de los bienes o en caso de que los bienes que componen su pedido se entreguen por separado, a los 5 días naturales del día que usted o un tercero por usted indicado, distinto del transportista, adquirió la posesión material del último de esos bienes, cuando dichos bienes presenten defectos o vicios ocultos que los hagan impropios para los usos a los que habitualmente se destinen o disminuyan su calidad o la posibilidad de uso o no ofrezca la seguridad que dada su naturaleza normalmente se espera de ella y de su uso razonable.
<br><br>

Su derecho a desistir será de aplicación exclusivamente a aquellos productos que se devuelvan en las mismas condiciones en que usted los recibió salvo por el defecto o vicio oculto que presente. 
<br><br>

<b>2. Valoración del estado del producto y, en su caso, reembolso.</b>
<br><br>
Procederemos a examinar el estado del producto y la existencia del defecto o vicio oculto. Tras examinar el artículo le comunicaremos si tiene derecho al reembolso de las cantidades pagadas. El reembolso se efectuará sin ninguna demora indebida y, en todo caso, a más tardar 40 días naturales a partir de la fecha en la que le enviemos un correo electrónico confirmando que procede el reembolso o la sustitución del artículo no conforme. El reembolso se efectuará siempre en el mismo medio de pago que usted utilizó para pagar la compra inicial cuando la compra se hubiese efectuada con tarjetas de débito o crédito.
<br><br>
 Las cantidades pagadas por aquellos productos que sean devueltos a causa de alguna tara o defecto, cuando realmente exista, le serán reembolsadas íntegramente, incluidos los gastos de entrega incurridos para entregarle el artículo.
 <br><br>

<b>9. Devoluciones.</b>
<br><br>
El Cliente tendrá la posibilidad de realizar la devolución de los productos adquiridos en el Sitio cuando (i) los productos presenten defectos de fabricación o en mal estado; (ii) los productos están incompletos o con partes faltantes, (iii) los productos comprados son, total o parcialmente, diferentes a los productos entregados; este derecho lo podrá ejercer dentro de los quince (10) días calendario siguientes a la confirmación de entrega  de los productos por parte de la compañía transportadora. Para que la devolución sea pertinente, los productos deben estar completamente nuevos, libres de uso y en condiciones para su venta, es de decir sin armar, con el empaque original y con todos sus accesorios, catálogos y piezas completas; así mismo deben ser pagados por parte del Cliente los costos de envío y manipulación de los productos, los cuales deben ser cotizados de manera previa con Plural. No son productos sujetos a devolución aquellos que se hayan hecho a la medida, productos sobre pedido o aquellos que fueron elaborados, fabricados, armados, cortados, marcados o preparados conforme a las especificaciones del Cliente o que son personalizados para el Cliente.
<br><br>
Para realizar un trámite de devolución el Cliente debe comunicarse a la línea 55 65853106 en México o al correo hola@pluralmkt.mx donde se le darán instrucciones para la devolución de éste. Los costos de envío que se generen por la devolución deberán ser pagados por el Cliente. 
<br><br>
El Cliente podrá elegir si la devolución de las sumas de dinero se realiza a través de un cupón para ser usado en el Sitio; o el reembolso del dinero al método de pago usado por el Cliente.
<br><br>

<b>10. Garantía legal</b>
<br><br>
Para el ejercicio de la garantía legal sobre los productos, el Cliente deberá comunicarse al 55 65853106 en México o al correo  hola@pluralmkt.mx. La garantía de los productos adquiridos en el Sitio estará sujeto a diagnóstico previo. Las solicitudes de garantía se tramitarán en un periodo no inferior a cinco (5) días hábiles contados a partir de la recepción los productos para diagnóstico. Los costos de transporte para el ejercicio del derecho de garantía correrán por cuenta del Cliente. 
<br><br>

Si resulta procedente el ejercicio de la garantía se procederá a la reparación totalmente gratuita de los defectos de los productos y se proveerán los repuestos que se requieran para garantizar el óptimo funcionamiento de los productos. Si los productos no son reparables se procederá, a elección del Cliente, a la devolución del precio pagado o al reemplazo por un producto nuevo de iguales o similares características. Si los productos presentan defectos por la misma causa inicialmente reparada se procederá, a elección del Cliente, a la devolución del precio pagado o al reemplazo por un producto nuevo de iguales o similares características.
<br><br>

Si después de realizarse el diagnóstico se concluye que sobre los productos hubo hechos de un tercero; eventos de fuerza mayor o caso fortuito, uso indebido por parte del Cliente, incumplimiento de las instrucciones de uso, instalación, mantenimiento y/o cuidado establecido en los manuales; no operará la garantía aquí establecida y la reparación será a cargo del cliente.
<br><br>

Vencido el periodo de garantía legal, todas las reparaciones serán a cargo del Cliente. 
<br><br>

<b>11. Derechos de propiedad intelectual</b>
<br><br>
Todo el material informático, gráfico, publicitario, fotográfico, de multimedia, audiovisual y/o de diseño, así como todos los contenidos, textos y bases de datos, logos, marcas y slogans publicados en el Sitio son de propiedad exclusiva de PLURAL MKT, o de terceros que han autorizado su uso y/o explotación.
<br><br>

Queda prohibido todo acto de copia, reproducción, modificación, creación de trabajos derivados, venta o distribución, exhibición los materiales previamente mencionados, de ninguna manera o por ningún medio, incluyendo, mas no limitado a, medios electrónicos, mecánicos, de fotocopiado, de grabación o de cualquier otra índole, sin el permiso previo por escrito de PLURAL MKT o del titular de los derechos propiedad intelectual.
<br><br>

En ningún caso los presentes Términos y Condiciones confieren derechos, licencias y/o autorizaciones para realizar los actos anteriormente descritos. Cualquier uso no autorizado de los materiales constituirá una violación a los presentes Términos y Condiciones y a las normas vigentes sobre propiedad intelectual tanto nacionales e internacionales aplicables y dará lugar a las acciones civiles y penales correspondientes.
<br><br>

<b>12. Suspensiones o intermitencias.</b>
<br><br>
PLURAL MKT se reserva la posibilidad de realizar modificaciones, mantenimientos o mejoras en el Sitio en cualquier momento y sin necesidad de preaviso. Si derivado de estas acciones el Sitio presenta suspensión o intermitencia en su servicio, no se generará ningún tipo de responsabilidad a cargo de PLURAL MKT.
<br><br>

<b>13. Responsabilidad del Cliente.</b>
<br><br>
El Cliente es y será el responsable por toda la información que éste proporcione en el Sitio y deberá mantener una conducta y comportamiento de conformidad con los estándares establecidos por PLURAL MKT. Cualquier conducta por fuera de los estándares podrá dar lugar a la cancelación de las cuentas o el acceso al Sitio por parte del Cliente. 
<br><br>

Así mismo, el Cliente es responsable por mantener la seguridad y privacidad de sus cuentas y claves del Sitio. Cualquier hecho que se presente como resultado del incumplimiento de esta obligación del Cliente no causará ningún tipo de responsabilidad a cargo de PLURAL MKT.
<br><br>

<b>14. Facturación electrónica</b>
<br><br>
El Cliente deberá solicitar la factura electrónica al momento de la compra y proveer los datos solicitados. 
<br><br>

La factura se tramita en el mismo mes en que se realiza la compra, posterior a dicho periodo no podrá ser emitida. Por lo que te sugerimos solicitarla durante la confirmación de tu compra.
<br><br>

El Usuario acepta que la información y datos fiscales proporcionados a PLURAL MKT para la emisión de la factura electrónica es correcta y completa y por tal motivo se obliga a responder sobre dicha información y/o el mal uso que se le llegue a dar a la misma, obligándose a conservar el ticket de compra para futuras aclaraciones.
<br><br>

<b>15.Modificaciones.</b>
<br><br>
PLURAL MKT podrá modificar los Términos y Condiciones del Sitio en cualquier momento. PLURAL MKT notificará a través de los medios de contacto con el Cliente los cambios realizados y la fecha de entrada en vigor. El uso del Sitio implica a aceptación de las modificaciones de los Términos y Condiciones. 
<br><br>

<b>16. Ley y jurisdicción aplicable.</b>
<br><br>
Los presentes Términos y Condiciones se rigen e interpretan de conformidad con las leyes de la Ciudad de México. Cualquier controversia relativa a la misma estará sujeta a los tribunales de la Ciudad de México.
<br><br>

<b>17. Canales de atención al Cliente.</b>
En todo lo relacionado con los productos y el Sitio, el Cliente puede contactar a PLURAL MKT a través de los siguientes medios y horarios:
<br><br>
	<div style="margin-left: 40px; ">
	Teléfono: 55 65853106 <br><br>
	Celular / WhatsApp:  5546131826 <br><br>
	Correo electrónico:  hola@pluralmkt.mx <br><br>
	Horarios de atención: 8:00 am a 5:00 pm de lunes a viernes. No hay atención sábados, domingos, ni festivos. <br><br>
	</div>
El periodo de respuesta puede ser hasta de cuarenta y ocho (48) horas hábiles.<br><br>




</div>







	<!--  FIN CONTENIDO -->






 		</div>








 		


<?php

 		include("movil_sdm_footer.html");

 		?>





 </body>

 </html>




















