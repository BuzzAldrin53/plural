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
	

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<title>Archivo - Plural</title>    

	<link rel="stylesheet" href="/home4_produc_detalle.css" defer async>
	


	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

	<script>

		$( window ).resize(function() {
  			$("#sizeout").html("Width: "+$( window ).width() + " Heigth: "+$( window ).height() );
		});
		$( document ).ready(function() {
		    $("#sizeout").html("Width: "+$( window ).width() + " Heigth: "+$( window ).height() );
		});

	 $(window).scroll(function() {
		var height = $(window).scrollTop();
		//$("#divline").html(height);
	    if(height > 256) {
			//$('#header').addClass('active');
			//$("#top_top").hide(50);
			//$("#top_header").hide(50);
			//$("#top_menu").hide(50);
			///
			$("#top_menu_mini").show();
		} else {
			//$('#header').removeClass('active');
			//$("#top_top").show(50);
			//$("#top_header").show(50);
			//$("#top_menu").show(50);
			////
			$("#top_menu_mini").hide();
			$("#over_home_office").hide();
			$("#over_covid").hide();
			//over_bebidas
			$("#over_bebidas").hide();
			//over_bolsas_mochilas
			$("#over_bolsas_mochilas").hide();
			$("#over_tec").hide();
			$("#over_mas").hide();
		}
	});
	 function HideAllOvers(){
	 	$(".top_menu_mini_over_div").hide();
	 }
	 function OnOverShow(t_var){
	 	HideAllOvers();

		$("#"+t_var).show();
	 }
	 function OnOverHide(t_var){
	 	$("#"+t_var).hide();
	 }

	 $( document ).on( "mousemove", function( event ) {
	 	var height = $(window).scrollTop();
	 	var hh = $("#over_home_office").height();
	 	//$("#divline").html(hh);
		 //$( "#divline" ).text( "pageX: " + event.pageX + ", pageY: " + event.pageY );
		 if(event.pageY-height>hh){
		 	$("#over_home_office").hide();
		 	$("#over_covid").hide();
			$("#over_bebidas").hide();
			$("#over_bolsas_mochilas").hide();
			$("#over_tec").hide();
			$("#over_mas").hide();
		 }
	});



	 /////////OVER FULL

	 function OverFullSubcats(t_var){
	 	OverFullHideOthers();
	 	//alert(t_var);
	 	$("#"+t_var).show();
	 }
	 function OverFullHideOthers(){
	 	$(".top_menu_mini_over_full_div").hide();
	 }
	 $( document ).on( "mousemove", function( event ) {
	 	var he = event.pageY;
	 	//var hh = $("#over_home_office").height();
	 	$("#mouseyout").html("MouseY: "+he);
	 	if(he>700){
			OverFullHideOthers();
	 	}
	});
	 $(window).scroll(function() {
		var he = $(window).scrollTop();
	 	//var hh = $("#over_home_office").height();
	 	$("#mouseyout").html("ScroollTop: "+he);
	 	if(he>600){
	 		OverFullHideOthers();
	 	}
	});




	</script>


 </head>

 <body>

 <div style="background-color: #c00; width: 190px; height: 16px; color: #fff; font-size: 10px; font-family: Verdana; position: fixed; top: 40px; left: 0px; z-index: 99;"
  id="sizeout">
 	Width: 2323 Heigth: 3w434
 </div>

 <div style="background-color: #00c; width: 190px; height: 16px; color: #fff; font-size: 10px; font-family: Verdana; position: fixed; top: 62px; left: 0px; z-index: 89;"
  id="mouseyout">
 	MouseY: 
 </div>




<div class="top_menu_mini" id="top_menu_mini" style="">
	<div class="top_menu_mini_int">
		<div class="top_menu_mini_logo">
			<img src="mini_menu_logo.png" style="height: 45px;" >
		</div>

		<div class="top_menu_mini_central">
			<div class="top_menu_mini_central_int">
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_covid');">
					<a href="https://pluralmkt.mx/product-category/covid/">COVID</a>
				</div>
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_bolsas_mochilas');">
					<a href="https://pluralmkt.mx/product-category/2021/">BOLSAS Y MOCHILAS</a>
				</div>
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_bebidas');">
					<a href="https://pluralmkt.mx/product-category/navidad/" >BEBIDAS</a>
				</div>
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_home_office');">
						<a href="https://pluralmkt.mx/product-category/novedades/" >HOME OFFICE</a>
				</div>
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_tec');">
					<a href="https://pluralmkt.mx/product-category/oficina-y-negocios/">TECNOLOGÍA</a>
				</div>
				<div class="menu_cate_ele" ><a href="https://pluralmkt.mx/product-category/hogar/" >KITS EMPRESARIALES</a></div>
				<div class="menu_cate_ele" onmouseover="OnOverShow('over_mas');">
					<a href="https://pluralmkt.mx/product-category/bebidas/">MUCHOS MÁS</a>
				</div>
				<div class="clr"></div>
			</div>
		</div>

		<div class="top_menu_mini_dummy">
			<img src="dummy_menu_top_mini.png" style="height: 45px;">
		</div>

		<div class="clr"></div>

	</div>
</div>


<div class="top_menu_mini_over_div" id="over_home_office">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
		    <ul>
			  <li>Boligrafos personalizados</li>
			  <li>Libretas con bolígrafos</li>
			  <li>Libretas personalizadas</li>
			  <li>Carpetas personalizadas</li>
			  <li>Home Office sustentable</li>
			</ul>
		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_home_officce_2_.jpg'); background-color: #120E0F;  ">
		
	</div>
	<div class="clr"></div>
</div>


<div class="top_menu_mini_over_div" id="over_covid">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
		    <ul>
			  <li>Cubrebocas personalizados</li>
			  <li>Geles antibacteriales personalizados</li>
			  <li>Portacubrebocas personalizadas</li>
			  <li>Bolígrafos antibacteriales</li>
			  <li>Libretas antibacteriales</li>
			  <li>Lámpara esterilizadora UV</li>
			  <li>Más productos de protección</li>
			</ul>
		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_cat_covid_.jpg'); background-color: #B1C4CE;  ">
		
	</div>
	<div class="clr"></div>
</div>



<div class="top_menu_mini_over_div" id="over_bolsas_mochilas">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
			<div class="top_menu_subcat_tit">Bolsas</div>
		    <ul>
			  <li>Bolsas de super</li>
			  <li>Bolsas de yute</li>
			  <li>Bolsas plegables</li>
			  <li>Bolsas sustentables</li>
			</ul>
			<br>
			<div class="top_menu_subcat_tit">Mochilas</div>
		    <ul>
			  <li>Mochilas antirobo</li>
			  <li>Mochilas de cuerda</li>
			  <li>Mochilas con cargador</li>
			  <li>Mochilas deportivas</li>
			  <li>Mochila sustentable</li>
			</ul>



		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_bolsas_mochilas_.jpg'); background-color: #0D3E26;  ">
		
	</div>
	<div class="clr"></div>
</div>





<div class="top_menu_mini_over_div" id="over_bebidas">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
			
		    <ul>
			  <li>Tazas personalizadas</li>
			  <li>Termos personalizados</li>
			  <li>Botellas personalizadas</li>
			  <li>Vasos personalizados</li>
			  <li>Bebidas sustentables</li>
			</ul>

		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_bebidas_.jpg'); background-color: #D8D9DE;  ">
		
	</div>
	<div class="clr"></div>
</div>







<div class="top_menu_mini_over_div" id="over_tec">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
			
		    <ul>
			  <li>Audifonos personalizadas</li>
			  <li>Bocinas personalizados</li>
			  <li>Power bak y usbs personalizadas</li>
			  <li>Cargadores inalambricos personalizados</li>
			  <li>Accesorios de tecnología personalizados</li>
			  <li>Smartwatch personalizados</li>
			  <li>Tecnología sustentable</li>
			</ul>

		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_tec_.jpg'); background-color: #C6C4BF;  ">
		
	</div>
	<div class="clr"></div>
</div>


<div class="top_menu_mini_over_div" id="over_mas">
	<div class="col_izq_mini_over">
		<div class="top_menu_mini_over_lista">
			<div class="top_menu_subcat_tit">Cocina</div>
		    <ul>
			  <li>Delantales personalizadas</li>
			  <li>Tablas personalizados</li>
			  <li>Cuchillos personalizadas</li>
			  <li>Loncheras personalizados</li>
			  <li>Sets de vinos</li>
			  <li>Cocina sustentable</li>
			  <li>Más utensilios de cocina</li>
			</ul>
			<br>
			<div class="top_menu_subcat_tit">Deporte</div>
		    <ul>
			  <li>Accesorios deportivos personalizadas</li>
			</ul>
		</div>
	</div>

	<div class="col_izq_mini_over">
		<div class="top_menu_mini_over_lista">
			<div class="top_menu_subcat_tit">Sublimación</div>
		    <ul>
			  <li>Gorras para sublimar</li>
			  <li>Vasos tazas y termos para sublimar</li>
			  <li>Mochilas y bolsas para sublimar</li>
			  <li>Más sublimación</li>
			  
			</ul>
			<br>
			<div class="top_menu_subcat_tit">Gorras</div>
		    <ul>
			  <li>Gorras personalizadas</li>
			  <li>Gorros personalizadas</li>
			  <li>Sombreros personalizadas</li>
			</ul>
		</div>
	</div>

	<div class="col_izq_mini_over">
		<div class="top_menu_mini_over_lista">
			<div class="top_menu_subcat_tit">Hogar</div>
		    <ul>
			  <li>Lamparas personalizadas</li>
			  <li>Velas y humidificadores</li>
			  <li>Bienestar y accesorios de belleza</li>
			  <li>Bisuteria personalizados</li>
			  <li>Relojes personalizados</li>
			  <li>Más hogar</li>
			</ul>
			<br>
			<div class="top_menu_subcat_tit">Home School</div>
		    <ul>
			  <li>Juegos y juguetes sustentables</li>
			  <li>Material escolar personalizado</li>
			</ul>
		</div>
	</div>

	<div class="col_izq_mini_over">
		<div class="top_menu_mini_over_lista">
			<div class="top_menu_subcat_tit">Viaje</div>
		    <ul>
			  <li>Playa</li>
			  <li>Accesorios de viaje</li>
			  <li>Mochilas de viaje</li>
			  <li>Viaje sustentable</li>
			</ul>
			<br>
			<div class="top_menu_subcat_tit">Herramientas</div>
		    <ul>
			  <li>Flexometros personalizados</li>
			  <li>Navajas</li>
			  <li>Linternas personalizados</li>
			  <li>Más herramientas</li>
			</ul>
		</div>
	</div>



	<div class="clr"></div>
	
</div>








<div class="top_top" id="top_top">

</div> 



<div class="top_menu" id="top_menu">

	<div class="top_menu_int">

		<?php include("core_menu_top2.php"); ?>

	</div>


	<div class="clr"></div>
</div>




<div class="top_header" id="top_header">

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






<div class="menu_cate" onmouseover="">

	<div class="menu_cate_int">

		<?php
			$qt = "SELECT * FROM categoria WHERE id_padre='0' ORDER BY orden LIMIT 50";
                         
              $resultt = $mysqli->query($qt);
              while ($rowt = $resultt->fetch_row()){

                $id_categoria=$rowt[0];
                $id_padre=$rowt[1];
                $nombre=$rowt[2];
                $permalink=$rowt[3];
                $nombre_html=$rowt[4];
                $orden=$rowt[5];
                $estatus=$rowt[7];
		?>


		<div class="menu_cate_ele" id="menu-over-full-<?php echo $nombre_html; ?>"  onmouseover="OverFullSubcats('over-full-<?php echo $nombre_html; ?>');">
			<a href="https://pluralmkt.mx/product-category/<?php echo $permalink ?>/">
			<?php echo strtoupper($nombre); ?>
				
			</a>
		</div>
		

		<?php

		}

		?>


		<div class="clr"></div>

	</div>


</div>



<div class="top_menu_mini_over_full_div" id="over-full-muchas-mas">
	<div class="col_izq_over">
		<div class="top_menu_mini_over_lista">
		    <ul>
			  <li>Cubrebocas personalizados</li>
			  <li>Geles antibacteriales personalizados</li>
			  <li>Portacubrebocas personalizadas</li>
			  <li>Bolígrafos antibacteriales</li>
			  <li>Libretas antibacteriales</li>
			  <li>Lámpara esterilizadora UV</li>
			  <li>Más productos de protección</li>
			</ul>
		</div>
	</div>
	<div class="col_der_over" style="background-image: url('fondo_cat_covid_.jpg'); background-color: #B1C4CE;  ">
		 
	</div>
	<div class="clr"></div>
</div>



<div style="height: 10px; width: 100%; text-align: center; border-bottom: solid 1px #ddd;" id="divline">
</div>


<div style="font-family: verdana; color: #666; padding-left: 20px; font-size: 11px; margin-top: 5px;">
Home - Tienda - Categoria - Nombre del producto
</div>


<style type="text/css">
	
	.productos_listado_general{
		width: 95%;
		margin: auto;
	}
	.productos_menu_lateral{
		float: left;
		width: 20%;
		/*background-color: #ffc;*/
	}
	.productos_columna_derecha{
		float: right;
		width: 80%;
		/*background-color: #cff;*/
	}
	.productos_menu_lateral_int{
		width: 90%;
		border: solid 1px #ccc;
		margin: auto;
		min-height: 600px;
		padding: 10px;
	}

		@media (max-width: 700px) {

			.productos_listado_general{
				width: 95%;
				margin: auto;
			}
			.productos_menu_lateral{
				float: left;
				width: 20%;
				display: none;
				/*background-color: #ffc;*/
			}
			.productos_columna_derecha{
				float: right;
				width: 100%;
				/*background-color: #cff;*/
			}

		}


</style>

<style type="text/css">
	.detalle_div{
		width: 900px;
		margin: auto;
		margin-top: 30px;
		background-color: #ccc;
	}
	.detalle_fotos{
		width: 40%;
		float: left;
		/*background-color: #fcc;*/

	}
	.detalle_foto_main{
		border-radius: 25px;
  		border: 1px solid #ddd;
	}
	.detalle_foto_main_int{
		width: 90%;
		margin: auto;
	}
	.detalle_foto_main_int img{
		width: 100%;
	}
	.detalle_datos{
		width: 29%;
		float: left;
		
	}
	.detalle_datos_int{
		/*background-color: #fcc;*/
		width: 82%;
		margin: auto;
	}
	.detalle_nombre{
		font-family: verdana;
		font-size: 1.5vw;
		font-weight: bold;
	}
	.detalle_descripcion{
		font-family: verdana;
		font-size: 1.0vw;
		margin-top: 0.5vw;
		color: #4D4D4D;
	}
	.detalle_sku{
		font-family: verdana;
		font-size: 1.4vw;
		margin-top: 0.1vw;
	}
	.detalle_bajo{
		width: 20%;
		height: 1vw;
		border-bottom: solid 1px #ccc;
	}
	.detalle_acordeon{
		margin-top: 3vw;
		border-radius: 2px;
		border: 1px solid #ddd;
	}
	.detalle_acordeon_titulo{
		background-color: #E0E0E0;
		height: 2.2vw;
	}
	.detalle_acordeon_paso{
		width: 80%;
		float: left;
		margin-left: 0.7vw;
		font-family: verdana;
		font-size: 1vw;
		margin-top: 0.5vw;
	}
	.detalle_acordeon_x{
		width: 1.5vw;
		height: 1.5vw;
		float: right;
		margin-right: 0.7vw;
		background-color: #ddd;
		font-family: verdana;
		font-size: 0.6vw;
		text-align: center;
		background-color: #000;
		color: #fff;
		margin-top: 0.3vw;
		border-radius: 1.2vw;
		overflow: hidden;
	}
	.detalle_acordeon_cont{
		padding: 2vw;
		min-height: 4vw;
	}
	.detalle_cotizacion{
		background-color: #E0E0E0;
		border-radius: 1.2vw;
		padding-top: 0.7vw;
		padding-bottom: 0.3vw;
		margin-top: 5vw;
	}
	.detalle_cotizacion_tit{
		font-family: verdana;
		font-size: 1.2vw;
		font-weight: bold;
		text-align: center;
		border-bottom: 1px solid #fff;
		padding-bottom: 0.4vw;
	}
	.detalle_cotizacion_cont{
		height: 6vw;
	}
	.detalle_cotizacion_aclaraciones{
		width:95%;
		margin: auto;
		margin-top: 1vw;
		font-family: verdana;
		font-size: 0.6vw;
	}
	.detalle_foto_minis{
		width: 25%;
		float: left;
		margin-top: 1vw;
	}
	.detalle_foto_minis_int{
		width: 90%;
		margin: auto;
		border-radius: 1.2vw;
		border: solid 1px #ddd;
		padding-top: 0.4vw;
	}
	.detalle_foto_minis_int_marg{
		width: 95%;
		margin: auto;
	}
	.detalle_foto_minis img{
		width: 100%;
	}

</style>







<div class="detalle_div">

	<div class="detalle_fotos">
		<div class="detalle_foto_main">
			<div class="detalle_foto_main_int">
				<img src="http://makito.es/WebRoot/Store/Shops/Makito/58B0/5B3F/79E2/BA38/DAF0/AC14/0003/64B8/3553-020-P.jpg">
			</div>
		</div>
			<div>
				<div class="detalle_foto_minis">
					<div class="detalle_foto_minis_int">
						<div class="detalle_foto_minis_int_marg">
							<img src="http://makito.es/WebRoot/Store/Shops/Makito/58B0/5B3F/79E2/BA38/DAF0/AC14/0003/64B8/3553-020-P.jpg">
						</div>
					</div>
				</div>

				<div class="detalle_foto_minis">
					<div class="detalle_foto_minis_int">
						<div class="detalle_foto_minis_int_marg">
							<img src="http://makito.es/WebRoot/Store/Shops/Makito/58B0/5B3F/79E2/BA38/DAF0/AC14/0003/64B8/3553-020-P.jpg">
						</div>
					</div>
				</div>

				<div class="detalle_foto_minis">
					<div class="detalle_foto_minis_int">
						<div class="detalle_foto_minis_int_marg">
							<img src="http://makito.es/WebRoot/Store/Shops/Makito/58B0/5B3F/79E2/BA38/DAF0/AC14/0003/64B8/3553-020-P.jpg">
						</div>
					</div>
				</div>

				<div class="detalle_foto_minis">
					<div class="detalle_foto_minis_int">
						<div class="detalle_foto_minis_int_marg">
							<img src="http://makito.es/WebRoot/Store/Shops/Makito/58B0/5B3F/79E2/BA38/DAF0/AC14/0003/64B8/3553-020-P.jpg">
						</div>
					</div>
				</div>
				

				<div style="clear: both;"></div>
			</div>
	</div>

	<div class="detalle_datos">
		<div class="detalle_datos_int">
			<div class="detalle_nombre">Nombre del producto</div>
			<div class="detalle_sku">SKU: 00000</div>
			<div class="detalle_descripcion">
				Lorem ipsum dolor sit amet consectetur adipiscing elit in velit rhoncus, pharetra sapien odio nam risus taciti scelerisque sociosqu facilisis natoque torquent, duis nostra ante mi erat eleifend viverra sagittis nibh. 
			</div>
			<div class="detalle_bajo"></div>

			<div class="detalle_acordeon">
				<div>
					<?php for($i=0;$i<3;$i++){ ?>
					<div class="detalle_acordeon_titulo">
						<div class="detalle_acordeon_paso">Paso 1: Elige el color del producto</div>
						<div class="detalle_acordeon_x"></div>
						<div class="clr"></div>
					</div>
					<div class="detalle_acordeon_cont">
						-
					</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>

	<div class="detalle_datos">
		<div class="detalle_datos_int">
			<div class="detalle_cotizacion">
				<div class="detalle_cotizacion_tit">
					TU COTIZACIÓN
				</div>
				<div class="detalle_cotizacion_cont">

				</div>
				<div class="detalle_cotizacion_cont">

				</div>
				<div class="detalle_cotizacion_cont">

				</div>
				<div class="detalle_cotizacion_cont">

				</div>
				<div class="detalle_cotizacion_cont">

				</div>
			</div>
			<div class="detalle_cotizacion_aclaraciones">
				*Lorem ipsum dolor sit amet consectetur adipiscing elit.
				<br>
				**Lorem ipsum dolor sit amet consectetur adipiscing elit in velit.
			</div>
		</div>
	</div>

	<div style="clear: both;"></div>

</div>





<br><br><br><br>


<br><br><br><br>







<div class="productos_listado_general">

	
	<div >

		<div class="recien_lista">

			<div class="recien_int">



					<?php 

					$qt = "SELECT * FROM xml_variante ORDER BY rand() LIMIT 9";            
					//echo $qt;
					$j=0;


					  $resultt = $mysqli->query($qt);
					  while ($rowt = $resultt->fetch_row()){

					  	$j++;
					    $id_reciente=$rowt[0];
					    $categoria=$rowt[1];
					    $url_categoria=$rowt[2];
					    $nombre=$rowt[3];
					    $estrellas=$rowt[4];

					    $imagen = $rowt[9];

					     $url = $rowt[9];
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

					<?php 

					}
					?>

				</div>
				<div class="clr"></div>
			
		</div>

	</div>


	<div class="clr"></div>


</div>





<br><br>


<br><br>


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





 	
 </body>


 </html>