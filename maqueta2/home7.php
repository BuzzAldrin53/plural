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

	<!-- Hotjar Tracking Code for https://pluralmkt.mx/ -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:2130642,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<title>Inicio - Plural</title>    

	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&family=Hind:wght@700&family=Roboto:wght@700&&display=swap" rel="import" async>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;600&display=swap" rel="stylesheet" defer>
	<link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@700&display=swap" rel="stylesheet" defer>
	
	<link rel="stylesheet" href="/maqueta2/home.css" defer>


	<script type="text/javascript">
		function overTelefono(){
			$.get( "/maqueta2/telef.php", function( data ) {
			  //$( ".result" ).html( data );
			  //alert( "Load was performed." );
			});
			ga('send', 'event', 'Telefono', 'over', 'Winter Campaign');
			

		}
		function clickTelefono(){
			$.get( "/maqueta2/telef.php", function( data ) {
			  //$( ".result" ).html( data );
			  //alert( "Load was performed." );
			});
			ga('send', 'event', 'Telefono', 'click', 'Winter Campaign');
			
		}
	</script>


	<script>
		$(document).ready(function(){
			$("#ribbon").css("left",$(window).width()-$("#ribbon").width());
	  		$(window).resize(function(){
	   		   //var dif=(2000-$(window).scrollTop())/3.5;
	   		   $("#ribbon").css("left",$(window).width()-$("#ribbon").width());
	  		});
		});
	</script>



 </head>

 <body>


<div class="ribbon" id="ribbon">
	<a href="https://pluralmkt.mx/contact-us/#contacto">
		<img src="/maqueta2/ribon.png"  />
	</a>
</div>


<div class="top_top">

</div> 



<div class="top_menu">

	<div class="top_menu_int">

		<?php include("core_menu_top.php"); ?>

	</div>


	<div class="clr"></div>
</div>




<div class="top_header">

	<div class="top_header_int">

		<div class="top_header_logo">

			<img src="/maqueta2/header_logo.<?php echo Exx("png",$chrome); ?>" width="100%" />

		</div>

		<div class="top_header_buscar">
			<div class="top_header_buscar_int">
				<form action="/">



				<input type="text" name="s" placeholder="Buscar..." class="top_header_buscar_input" />


				<input type="submit" name="buscar" value=" " class="top_header_buscar_btn" />

				<input type="hidden" name="post_type" value="product">

				<div class="top_header_buscar_sep"></div>


				


				<select  name='product_cat' id='product_cat' class='top_header_buscar_cats' >
					<option value='0'>Todas las categorías</option>
					<option class="level-0" value="uncategorized">Uncategorized</option>
					<option class="level-0" value="accessories">Accessories</option>
					<option class="level-0" value="novedades">Novedades</option>
					<option class="level-0" value="playa">Playa</option>
					<option class="level-0" value="congresos-y-convenciones">Congresos y Convenciones</option>
					<option class="level-0" value="mascotas">Mascotas</option>
					<option class="level-0" value="oficina-y-negocios">Oficina y Negocios</option>
					<option class="level-0" value="viaje">Viaje</option>
					<option class="level-0" value="bolsas">Bolsas</option>
					<option class="level-0" value="hogar">Hogar</option>
					<option class="level-0" value="navidad">Navidad</option>
					<option class="level-0" value="tazas-y-botellas">Tazas y Botellas</option>
					<option class="level-0" value="tecnologa-y-accesorios">Tecnología y Accesorios</option>
					<option class="level-0" value="maleta">Maleta</option>
					<option class="level-0" value="temporada">Temporada</option>
					<option class="level-0" value="sustentable">Sustentable</option>
					<option class="level-0" value="covid">COVID</option>
					<option class="level-1" value="higiene-y-salud">&nbsp;&nbsp;&nbsp;Higiene y salud</option>
					<option class="level-0" value="ejercicio-y-deporte">Ejercicio y Deporte</option>
					<option class="level-0" value="producto-internacional">Producto Internacional</option>
					<option class="level-0" value="2021">2021</option><option class="level-0" value="kits-de-regalo">Kits de regalo</option> 
				</select> 

				<div class="top_header_buscar_sep"></div>

				

				</form>

				<div class="clr"></div>
			</div>
		</div>



		


		<div class="top_llamanos">

			<div class="top_llamanos_int">

				<div class="top_llamanos_tit">Llámanos</div>

				<div class="top_llamanos_tel"><a href="tel:5565853106" onmouseover="overTelefono();" onclick="clickTelefono();">(+52) 55 6585 3106</a></div>

			</div>


			<div class="top_carrito">

				<div class="top_carrito_int">

					<img src="/maqueta2/carrito.<?php echo Exx("png",$chrome); ?>" class="top_carrito_int_left" />


					<div class="top_carrito_int_left" style="margin-top: 15px; margin-left: 10px;">
						<img src="/maqueta2/flecha.<?php echo Exx("png",$chrome); ?>" />
					</div>

					<div class="clr"></div>


				</div>

			</div>

			<div class="clr"></div>

		</div>


		<div class="clr"></div>

		

	</div>


</div>






<div class="menu_cate">

	<div class="menu_cate_int">

		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/covid/">COVID</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/2021/">2021</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/navidad/" >NAVIDAD</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/novedades/" >NOVEDADES</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/oficina-y-negocios/">OFICINA Y NEGOCIOS</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/hogar/" >HOGAR</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/bebidas/">BEBIDAS</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/viaje/" >VIAJE</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/maleta/" >MALETA</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/bolsas/">BOLSAS</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/playa/">PLAYA</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/sustentable/">SUSTENTABLE</a></div>
		<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/mi-kit/">MI KIT</a></div>

		<div class="clr"></div>

	</div>


</div>




<div class="top_banners_" style="width: 100%; margin: auto;">

<a href="https://pluralmkt.mx/registrate/">

	<?php if($chrome==""){ ?>
	<img src="/banner_test_1500.jpg" width="100%" />
	<?php }else{ ?>

	<img src="/banner_test_1500.webp" width="100%" />
	<?php } ?>

</a>
</div>





<div class="recien_separador">

	<div class="recien_separador_int">
			LOS RECIÉN LLEGADOS 
	</div>

</div>




<div class="recien_lista">

	<div class="recien_int">

		<div class="recien_horizontal">


			<?php 

			$qt = "SELECT * FROM reciente ORDER BY orden LIMIT 4";            
			//echo $qt;

			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){

			    $id_reciente=$rowt[0];
			    $categoria=$rowt[1];
			    $url_categoria=$rowt[2];
			    $nombre=$rowt[3];
			    $estrellas=$rowt[4];

			    $imagen = $rowt[5];

			     $url = $rowt[6];
			     $clicks = $rowt[7];

			     $orden = $rowt[8];

			     $imagen_webp = $rowt[9];


			     if($chrome!=""){
			     	$imagen=$imagen_webp;
			     }
			

			?>

			<?php //for($i=0;$i<4;$i++){ ?>

				<div class="recien_ele">
					<div class="recien_ele_img">
						<a href="<?php echo $url; ?>"><img src="<?php echo $imagen; ?>" class="recien_ele_img" />
						</a>
					</div>
					<div class="recien_cats"><?php echo $categoria; ?></div>
					<div class="recien_tit"><?php echo $nombre; ?></div>
					<div class="recien_estrellas">
						<img src="/maqueta2/estrella.<?php echo Exx("png",$chrome); ?>" class="recien_ele_esttrellita" />
						<img src="/maqueta2/estrella.<?php echo Exx("png",$chrome); ?>" class="recien_ele_esttrellita" />
						<img src="/maqueta2/estrella.<?php echo Exx("png",$chrome); ?>" class="recien_ele_esttrellita" />
						<img src="/maqueta2/estrella.<?php echo Exx("png",$chrome); ?>"  class="recien_ele_esttrellita" />
						<img src="/maqueta2/estrella.<?php echo Exx("png",$chrome); ?>" class="recien_ele_esttrellita" />
					</div>
				</div>

			<?php } ?>

		</div>
		<div class="clr"></div>
	</div>
</div>




<div class="logos_center_top">

	<div class="logos_center_lateral">
		<div class="logos_center_lateral_int">
			<img src="/maqueta2/flecha_izq.<?php echo Exx("png",$chrome); ?>"  />
		</div>
	</div>

	<div class="logos_center_centro">

		<div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_recycled_cotton_160x90.<?php echo Exx("png",$chrome); ?>">
			</div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_bamboo_wooden.<?php echo Exx("png",$chrome); ?>">
			</div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_rohs.<?php echo Exx("png",$chrome); ?>">
			</div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_amfori.<?php echo Exx("png",$chrome); ?>">
			</div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_pla_.<?php echo Exx("png",$chrome); ?>">
			</div>
			
			<div class="logos_center_e">
				<img src="/maqueta2/logo_rpet.<?php echo Exx("png",$chrome); ?>">
			</div>

			<div class="logos_center_e">
				<img src="/maqueta2/logo_bamboo_fibre.<?php echo Exx("png",$chrome); ?>" >
			</div>		

			<div class="clr"></div>

		</div>

	</div>


	<div class="logos_center_lateral">
		<div class="logos_center_lateral_int">
			<img src="/maqueta2/flecha_der.<?php echo Exx("png",$chrome); ?>"  />
		</div>
	</div>

	<div class="clr"></div>

</div>




<div class="compromisos_top">
	<div class="compromisos_uno">
		<div class="compromisos_icono"><img src="/maqueta2/compromisos_icono_uno.<?php echo Exx("png",$chrome); ?>" width="93px" /></div>
		<div class="compromisos_txt">TODO EN UN MISMO LUGAR</div>
	</div>
	<div class="compromisos_dos">
		<div class="compromisos_icono"><img src="/maqueta2/compromisos_icono_dos.<?php echo Exx("png",$chrome); ?>" width="93px" /></div>
		<div class="compromisos_txt">BRANDING DE CALIDAD</div>
	</div>
	<div class="compromisos_tres">
		<div class="compromisos_icono"><img src="/maqueta2/compromisos_icono_tres.<?php echo Exx("png",$chrome); ?>" width="93px" /></div>
		<div class="compromisos_txt">PUNTUALIDAD</div>
	</div>

	<div class="clr"></div>

</div>


<div class="nuestro_comp_top">
	<div class="nuestro_comp_top_txt">NUESTRO COMPROMISO ES TU SATISFACCIÓN</div>
	<div class="nuestro_comp_estrellas">

		<div class="nuestro_comp_estrella">
			<div class="nuestro_comp_estrella_int">
				<img src="/maqueta2/estrella_big.<?php echo Exx("png",$chrome); ?>" />
			</div>
		</div>

		<div class="nuestro_comp_estrella">
			<div class="nuestro_comp_estrella_int">
				<img src="/maqueta2/estrella_big.<?php echo Exx("png",$chrome); ?>" />
			</div>
		</div>

		<div class="nuestro_comp_estrella">
			<div class="nuestro_comp_estrella_int">
				<img src="/maqueta2/estrella_big.<?php echo Exx("png",$chrome); ?>" />
			</div>
		</div>

		<div class="nuestro_comp_estrella">
			<div class="nuestro_comp_estrella_int">
				<img src="/maqueta2/estrella_big.<?php echo Exx("png",$chrome); ?>" />
			</div>
		</div>

		<div class="nuestro_comp_estrella">
			<div class="nuestro_comp_estrella_int">
				<img src="/maqueta2/estrella_big.<?php echo Exx("png",$chrome); ?>" />
			</div>
		</div>

		<div class="clr"></div>

	</div>
</div>


<div class="home_coments_top">

	<div class="home_coments_colum">
		<div class="home_coments_col_txt">
			En Plural Mkt más que encontrar un proveedor tenemos a un aliado estratégico que nos ayuda con soluciones innovadoras para satisfacer las distintas necesidades de nuestros clientes y proyectos. Con excelentes propuestas creativas y materiales de primer nivel
		</div>
		<div class="home_coments_hr"></div>
		<div class="home_coments_nombre">Patricia Cáceres</div>
		<div class="home_coments_cargo">Senior Marketing Coordinator LATAM - Axis Communications</div>
	</div>

	<div class="home_coments_colum">
		<div class="home_coments_col_txt">
			Los giveaways de Plural Mkt han sido de muy buena calidad, haciendo quedar muy bien a la marca con nuestros clientes y partners. Siempre nos han cumplido en tiempos y calidad. ¡El merchandising de Plural Mkt se ha entregado a clientes en Uruguay, Argentina, Perú, Colombia, Puerto Rico, Costa Rica y llegaron hasta Barcelona, España!
		</div>
		<div class="home_coments_hr"></div>
		<div class="home_coments_nombre">Vanessa Prada</div>
		<div class="home_coments_cargo">Specialist - Cala Regional Marketing | Enterprise CommScope</div>
	</div>

	<div class="home_coments_colum">
		<div class="home_coments_col_txt">
			Excelente servicio, atención y lo mejor es que entienden el sentido de urgencia de los clientes.
		</div>
		<div class="home_coments_hr"></div>
		<div class="home_coments_nombre">Alma Ortíz</div>
		<div class="home_coments_cargo">Sales and Business Development Leader - PartnerTECH</div>
	</div>

	<div class="clr"></div>

</div>

<script>
	$(document).ready(function(){
  		$(window).scroll(function(){
   		   var dif=(2000-$(window).scrollTop())/3.5;
   		   $("#sino").css("background-position", "center "+(-700-dif)+"px" );


   		   dif=(2500-$(window).scrollTop())/-3.5;
   		   $("#sino2").css("background-position", "center "+(-700+dif)+"px" );
  		});
	});
</script>


<div class="sino_encuentras" id="sino">
	<div class="sino_banner_top">
		<div class="sino_banner_col">
			
			Si no lo encuentras aquí, indícanos qué estás buscando y te lo conseguimos <br><br>

    		Cuidamos tu logo <br><br>

    		Cumplimos con fechas de entrega pactadas <br><br>

    		Contamos con certificados para nuestros productos promocionales <br>

    		<div class="sino_banner_btn">
    			<a href="https://pluralmkt.mx/contact-us/#contacto">CONTACTO</a>
    		</div>



		</div>
		<div class="sino_banner_col"><img src="/maqueta2/sino1.<?php echo Exx("jpg",$chrome); ?>"></div>
		<div class="clr"></div>
	</div>
</div>


<div class="garantia_separador">

	<div class="garantia_separador_int">
		<img src="maqueta2/garantia.<?php echo Exx("png",$chrome); ?>" width="100%">
	</div>

</div>

<div class="sino_encuentras" id="sino2">
	<div class="sino_banner_top">
		<div class="sino_banner_col">

			Continua actualización de productos <br><br>

		    Funcionalidad en los productos  <br><br>

		    Atractivos diseños  <br><br>

		    Calidad en la impresión <br><br>

		    Asesoría personalizada <br><br>

    		<div class="sino_banner_btn">
    			<a href="https://pluralmkt.mx/contact-us/#contacto">CONTACTO</a>
    		</div>



		</div>
		<div class="sino_banner_col"><img src="/maqueta2/sino2.<?php echo Exx("jpg",$chrome); ?>"></div>
		<div class="clr"></div>
	</div>
</div>


<div class="procesodeventa_top">
	<div class="procesodeventa_txt">PROCESO DE VENTA</div>
</div>


<div class="elproceso_top">
	<div class="elproceso_top_e">
		<div class="elproceso_top_tit">ÚNETE</div>
		<div class="elproceso_top_img">
			<img src="/maqueta2/elproceso_icono_uno.<?php echo Exx("png",$chrome); ?>" >
		</div>
	</div>
	<div class="elproceso_top_e">
		<div class="elproceso_top_tit">ELIGE</div>
		<div class="elproceso_top_img">
			<img src="/maqueta2/elproceso_icono_dos.<?php echo Exx("png",$chrome); ?>" >
		</div>
	</div>
	<div class="elproceso_top_e">
		<div class="elproceso_top_tit">COMPRA</div>
		<div class="elproceso_top_img">
			<img src="/maqueta2/elproceso_icono_tres.<?php echo Exx("png",$chrome); ?>" >
		</div>
	</div>
	<div class="elproceso_top_e">
		<div class="elproceso_top_tit">TE CONTACTAMOS</div>
		<div class="elproceso_top_img">
			<img src="/maqueta2/elproceso_icono_cuatro.<?php echo Exx("png",$chrome); ?>" >
		</div>
	</div>
	<div class="elproceso_top_e">
		<div class="elproceso_top_tit">ENTREGA</div>
		<div class="elproceso_top_img">
			<img src="/maqueta2/elproceso_icono_cinco.<?php echo Exx("png",$chrome); ?>" >
		</div>
	</div>

	<div class="clr"></div>
</div>

<div class="elproceso_top_aclaracion">
	Los logos los provees tú , en caso de no tenerlos en alta resolución (photoshop, illustrator, jpg, etc) o no contar con ellos, un diseñador se pondrá en contacto.
</div>



<script>
	$(document).ready(function(){
  		$(window).scroll(function(){
   		   var dif=(3400-$(window).scrollTop())/5;
   		   $("#teinvitamos").css("background-position", "center "+(-150+dif)+"px" );
   		   //$("#teinvitamos").html( $(window).scrollTop()+"   diif: "+dif );
  		});
	});
</script>



<div class="te_invitamos_ebook_top" id="teinvitamos">
	<div class="te_invitamos_ebook_tx">
		TE INVITAMOS A CONOCER NUESTRO EBOOK
	</div>
	<div class="te_invitamos_ebook_bn">
		<a href="https://pluralmkt.mx/ebook/">EBOOK</a>
	</div>
</div>


<div class="nuestroblog_top">
	<div class="nuestroblog_txt">NUESTRO BLOG</div>
</div>


<div class="nuestro_blog_list">


			<?php 

			$qt = "SELECT * FROM blog ORDER BY orden LIMIT 4";            
			//echo $qt;

			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){

			    $id_blog=$rowt[0];
			    $nombre=$rowt[1];
			    $url=$rowt[2];
			    $imagen=$rowt[3];
			    $dia=$rowt[4];

			    $mes = $rowt[5];

			     $intro = $rowt[6];
			     $fecha = $rowt[7];

			     $orden = $rowt[8];

			     $clicks = $rowt[9];
			

			?>


	<?php //for($i=0;$i<5;$i++){ ?>

		<div class="nuestro_blog_e">
			<div class="nuestro_blog_e_img">
				<a href="<?php echo $url; ?>">
					<img src="<?php echo $imagen; ?>" width="100%" />
				</a>
			</div>
			<div>
				<div class="nuestro_blog_e_fecha">
					<div class="nuestro_blog_fecha_dia"><?php echo $dia; ?></div>
					<div class="nuestro_blog_fecha_mes"><?php echo $mes; ?></div>
				</div>
				<div class="nuestro_blog_e_tit"><a href="#34f"><?php echo $nombre; ?></a></div>
				<div class="clr"></div>
			</div>
			<div class="nuestro_blog_e_cont">
					<?php echo $intro; ?>
			</div>

			<div class="nuestro_blog_e_url">
				<a href="<?php echo $url; ?>">Lee más</a>
			</div>
		</div>

	<?php } ?>

	<div class="clr"></div>

</div>



<br><br>




<div class="footer">
	<div class="footer_int">
		<div class="footer_col_izq">
			
			<img src="/maqueta2/footer_fb.<?php echo Exx("png",$chrome); ?>" /> <br>
			<img src="/maqueta2/footer_in.<?php echo Exx("png",$chrome); ?>" /> <br>
			<img src="/maqueta2/footer_ig.<?php echo Exx("png",$chrome); ?>" /> <br>

		</div>
		<div class="footer_col_der">
			<b>INFORMACIÓN DE CONACTO </b>
			
			<br><br>

			tel.(+52)  55 6585 3106 <br><br>

			Dr José María Vertiz 1400, Portales Nte,<br> 
			Benito Juárez 03300 <br>
			Ciudad de México, México.

			 <br><br>

			<b> SECCIONES </b> <br><br>

			Nosotros <br>
Política de privacidad <br>
Términos y condiciones <br>
Blog <br>
Iniciar sesión <br>
Contacto <br>

			
			<div class="footer_hr"></div>

			© Plural MKT. 2020. Todos los derechos reservados <br><br>

			<b>Horarios y días de atención </b> <br>
			LUN - VIE / 9:00AM - 6:00PM




		</div>
		<div class="clr"></div>
	</div>
</div>


<div>
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v9.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="106215198034009"
  theme_color="#0A7CFF"
    logged_in_greeting="Hola, &#xbf;C&#xf3;mo podemos ayudarte?"
    logged_out_greeting="Hola, &#xbf;C&#xf3;mo podemos ayudarte?">
</div>
</div>
 	
 </body>


 </html>