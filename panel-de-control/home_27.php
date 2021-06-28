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

function TomarFotoThumb($foto,$val,$esapple){
	//echo "TomarFotoThumb: ";
	$solo_imagen = substr($foto, strrpos($foto,"/")+1);
	$ruta = substr($foto, 0,strrpos($foto,"/"));

	//echo "Ruta: ".$ruta."   <br>";

	//echo "Imagen: ".$solo_imagen."   <br>";

	//echo "Salida: ". $ruta."/".$val."_".$solo_imagen;

	if($esapple==0){
		$solo_imagen = substr($solo_imagen, 0, strrpos($solo_imagen, ".") )."webp";
	}

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

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;300;800&display=swap" rel="stylesheet">

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

		.top_menu_full_element a{
			color: #43A1F1;
			text-decoration: none;
		}
		.top_menu_full_element a:hover{
			color: #43A1F1;
			text-decoration: none;
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

/*
			 background-repeat: no-repeat;
  			background-size: contain, cover;
*/

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
			height: 280px;
			margin: auto;
			background-color: #F2F2F2;
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


		function CargarColumas(t_cat,t_this){


			$(".ideas_cats_elem").css("background-color","#D3D2D3");

			$(t_this).css("background-color","#999");

			//alert(t_cat);
			//https://pluralmkt.mx/columna.php?idcat=5&col=1
				$.ajax({url: "columna.php?idcat="+t_cat+"&col=1", success: function(result){
    				$("#columna1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

  				$.ajax({url: "columna.php?idcat="+t_cat+"&col=2", success: function(result){
    				$("#columna2").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

  				$.ajax({url: "columna.php?idcat="+t_cat+"&col=3", success: function(result){
    				$("#columna3").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});

		}

	</script>


 </head>

 <body>


 	<div class="content_all">



 		<!--    INICIO del MENU -->

 		<?php include("sdm_menu.php"); ?>

 		<!--    FIN del MENU -->








 		<style type="text/css">
 			.laflecha{
 				width: 30px; 
 				height: 30px; 
 				position: relative; 
 				/*
 				top: -100px; 
 				left: 20px; 
 				*/
 				opacity: 0.5;
 				cursor: pointer;
 				border-radius: 8px;

 			}
 			.laflecha:hover{
 				opacity: 0.8;
 				background-color: rgba(255,255,255,0.15);
 			}
 		</style>

 		<?php
 			  $qt = "SELECT count(*) FROM home_banner_top ";   
			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){
			  	    $banners_top_tot=$rowt[0];
			  }
 		?>

 		<script type="text/javascript">

 			var banners_top_tot=<?php echo $banners_top_tot; ?>;
 			var banners_top_pos=1;

 			var banners_top_interval;
 			var banners_top_conteo=0;
 			
			function banners_top_iniciar() {
			  //alert("myFunctionTimerBannerTop");
			  banners_top_interval = setInterval(banners_top_funcion_intervalo, 5000);
			}

			function banners_top_funcion_intervalo() {
			  //alert("Hello!");
			  banners_top_conteo++;
			  //$("#salida2").html(banners_top_conteo);
			  BannerTopIzq();
			}

 			function BannerTopIzq(){
 				//$("#banners_top_int").css("margin-left","-1180px");
 				banners_top_pos++;
 				if(banners_top_pos>banners_top_tot){
 					banners_top_pos=1;
 					$("#banners_top_int").css("margin-left","0px");
 				}else{
 					var pos=(banners_top_pos-1)*-1180;
					$("#banners_top_int").animate({
					    marginLeft: pos+'px'
					}, 500);
				}
 			}

 			function BannerTopDer(){
 				//$("#banners_top_int").css("margin-left","-1180px");
				banners_top_pos--;
 				if(banners_top_pos<1){
 					banners_top_pos=4;
 					var final = (banners_top_tot-1)*-1180;
 					$("#banners_top_int").css("margin-left",final+"px");
					
 				}else{
 					var pos=(banners_top_pos-1)*-1180;
					$("#banners_top_int").animate({
					    marginLeft: pos+'px'
					}, 500);
				}
 			}

 		</script>


 		<div class="top_banners">

 				<div style="width: 1180px; overflow: hidden; height: 400px;  ">
 					<div id="banners_top_int" style="width: 6000px;">
		 				<?php
							  $qt = "SELECT * FROM home_banner_top ORDER BY orden ASC LIMIT 10";   
							  $resultt = $mysqli->query($qt);
							  while ($rowt = $resultt->fetch_row()){

							  	    $id=$rowt[0];
		                            $titulo=$rowt[1];
		                            $imagen=$rowt[2];
		                            $url=$rowt[3];
		                            $orden=$rowt[4];

		 				?>
			 				<div style="float: left; width: 1180px; height: 400px;">
				 				<a href="<?php echo $url; ?>">
					 				<img src="<?php echo $imagen; ?>"></img>
				 				</a>
			 				</div>
		 				<?php 
		 				}
		 				?>
 						<div class="clr"></div>
 					</div>
 				</div>	



 				<div class="laflecha" style="top: -215px; left: 10px; z-index: 2;" onclick="BannerTopDer();" >
 					<img src="_arrow_left_30.png" style="width: 100%;" />
 				</div>

 				<div class="laflecha" style="top: -245px; left: 1140px; z-index: 3;" onclick="BannerTopIzq();" >
 					<img src="_arrow_right_30.png" style="width: 100%;" />
 				</div>


 		</div>



 		<div class="novedades">
 			<div class="novedades_tit">
 				NOVEDADES
 			</div>
 			<div>


 				<?php

					  $qt = "SELECT * FROM home_novedades ORDER BY orden ASC LIMIT 4";   

					  //echo $qt;

					  $resultt = $mysqli->query($qt);
					  while ($rowt = $resultt->fetch_row()){

					  	    $id=$rowt[0];
                            $titulo=$rowt[1];
                            $imagen=$rowt[2];
                            $url=$rowt[3];
                            $orden=$rowt[4];

                             $imagen200 = TomarFotoThumb($imagen,"200",$esapple);
                             $imagen100 = TomarFotoThumb($imagen,"100",$esapple);

                            //$solo_imagen=substr($imagen, strrpos($imagen,"/")+1);
                            //echo $solo_imagen;
                            //list($ancho, $alto) = getimagesize($elfile);

 				?>

 				<a href="<?php echo $url; ?>">
	 				<div class="novedades_elem" style="background-image: url(<?php echo $imagen200; ?>);">
	 					<div class="novedades_elem_tit">
	 						<?php echo $titulo; ?>
	 					</div>
	 				</div>
 				</a>
 				



 				<?php 
 				}
 				?>
 				

 				<div class="clr"></div>
 			</div>
 		</div>


 		<style type="text/css">
 			.regalar_element{
				float: left;
				width: 160px;
				height: 250px;
				background-color: #fff;
				border-radius: 10px;
				margin-right: 15px;

				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 11px;
    			text-align: center;

    			-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
 			}
 			.regalar_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 			.regalar_titulo{
 				font-weight: 600;
    			font-size: 12px;
 			}
 			.regalar_precio{
 				font-weight: 600;
    			font-size: 11px;
 			}
			.regalar_element_div{
				width: 95%;
				height: 10vw;

				overflow: hidden;
				margin: auto;
				margin-top: 10px;
			}
			.regalar_element_div img{
				width: 100%;
			}
			.regalar_circulo_color{
				width: 15px;
				height: 15px;
				border-radius: 7px;
				float: left;
				margin-right: 3px;
			}
			.regalar_colores{
				width: 60px;
				margin: auto;
				margin-top: 6px;
			}
 		</style>


		<?php
 			  $qt = "SELECT count(*) FROM home_regalar_siempre ";   
			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){
			  	    $regalar_siempre_tot=$rowt[0];
			  }
 		?>

 		<script type="text/javascript">

 			var regalar_siempre_tot=<?php echo $regalar_siempre_tot; ?>;
 			var regalar_siempre_pos=1;

 			var regalar_siempre_interval;
 			var regalar_siempre_conteo=0;
 			
			function regalar_siempre_iniciar() {
			  //alert("regalar_siempre_iniciar");
			  regalar_siempre_interval = setInterval(regalar_siempre_funcion_intervalo, 5000);
			}

			function regalar_siempre_funcion_intervalo() {
			  //alert("Hello!");
			  regalar_siempre_conteo++;
			  //$("#salida2").html(banners_top_conteo);
			  regalar_siempre_Izq();
			}

 			function regalar_siempre_Izq(){
 				//$("#banners_top_int").css("margin-left","-1180px");
 				regalar_siempre_pos++;
 				if(regalar_siempre_pos>regalar_siempre_tot){
 					regalar_siempre_pos=1;
 					$("#regalar_siempre_int").css("margin-left","0px");
 				}else{
 					var pos=(regalar_siempre_pos-1)*-175;
					$("#regalar_siempre_int").animate({
					    marginLeft: pos+'px'
					}, 200);
				}
 			}

 			function regalar_siempre_Der(){
 				//$("#banners_top_int").css("margin-left","-1180px");
				regalar_siempre_pos--;
 				if(regalar_siempre_pos<1){
 					regalar_siempre_pos=regalar_siempre_tot;
 					var final = (regalar_siempre_tot-1)*-175;
 					$("#banners_top_int").css("margin-left",final+"px");
					
 				}else{
 					var pos=(regalar_siempre_pos-1)*-175;
					$("#regalar_siempre_int").animate({
					    marginLeft: pos+'px'
					}, 200);
				}
 			}

 		</script>



 		<div class="regalar">
 			 
 			 <div class="regalar_int">

	 			 <div class="regalar_tit">Regalar siempre es buena idea...</div>

	 			 <div style="width: 870px; height: 260px;  overflow: hidden;">
	 			 	<div style="width: 3000px;" id="regalar_siempre_int">
		 			 	<?php 

		 			 	  $qt = "SELECT * FROM home_regalar_siempre ORDER BY orden ASC ";
	                         
	                          $resultt = $mysqli->query($qt);
	                          while ($rowt = $resultt->fetch_row()){

	                            $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $id_producto=$rowt[2];
	                            $orden=$rowt[3];
	                            $sku=$rowt[4];
	                            $precio=$rowt[5];
	                            $imagen=$rowt[6];

	                            $color1=$rowt[7];
	                            $color2=$rowt[8];
	                            $color3=$rowt[9];

	                            $fecha=$rowt[10];
	                             $url=$rowt[11];


	                             $imagen200 = TomarFotoThumb($imagen,"200",$esapple);

		 			 	?>

		 			 	<div class="regalar_element">
		 			 		
		 			 		<div class="regalar_element_div">
		 			 			<a href="<?php echo $url; ?>">
		 			 				<img src="<?php echo $imagen200; ?>" >
		 			 			</a>
		 			 		</div>
		 			 		<div class="regalar_titulo"><?php echo $titulo; ?></div>
		 			 		<div>SKU: <?php echo $sku; ?></div>
		 			 		<div class="regalar_precio">Precio desde: $<?php echo $precio; ?>.00</div>

		 			 		<div class="regalar_colores">
		 			 			<div class="regalar_circulo_color" style="background-color: <?php echo $color1; ?>;"></div>
		 			 			<div class="regalar_circulo_color" style="background-color: <?php echo $color2; ?>;"></div>
		 			 			<div class="regalar_circulo_color" style="background-color: <?php echo $color3; ?>;"></div>
		 			 			<div class="clr"></div>
		 			 		</div>

		 			 	</div>

		 			 	<?php
		 			 	}
		 			 	?>

		 			 	<div class="clr">
		 			 </div>		
	 			 	</div>


	 			 </div>

 			 </div>

 			 <div style="position: relative; top: -180px; left: 110px; z-index: 20; width: 30px; width: 30px; cursor: pointer;" onclick="regalar_siempre_Der();">
 			 	<img src="_mini_flecha_izq.png" style="width: 30px;">
 			 </div>

 			 <div style="position: relative; top: -210px; left: 1020px; z-index: 21; width: 30px; width: 30px; cursor: pointer;" onclick="regalar_siempre_Izq();">
 			 	<img src="_mini_flecha_der.png" style="width: 30px;">
 			 </div>

 		</div>


 		<div class="banner_dos">

 			<?php

					  $qt = "SELECT * FROM home_banner_mid ORDER BY orden ASC LIMIT 1";   
					  $resultt = $mysqli->query($qt);
					  while ($rowt = $resultt->fetch_row()){

					  	    $id=$rowt[0];
                            $titulo=$rowt[1];
                            $imagen=$rowt[2];
                            $url=$rowt[3];
                            $orden=$rowt[4];

 				?>

 				<a href="<?php echo $url; ?>">
	 				<img src="<?php echo $imagen; ?>"></img>
 				</a>

 				<?php 
 				}
 				?>

 		</div>


 		<div class="encuentra" style="height: 360px;">
 			 
 			 <div class="encuentra_int" >

	 			 <div class="encuentra_tit" style="margin-bottom: 60px;">ENCUENTRA EL REGALO PERFECTO...</div>

	 			 <div>
	 			 	<div class="encuentra_element_ini">
	 			 		
	 			 		<div class="encuentra_element_ini_int">
	 			 			Cuidemos juntos el planeta
	 			 		</div>
	 			 	</div>



	 			 		<?php

						  $qt = "SELECT * FROM home_regalo_perfecto ORDER BY orden ASC LIMIT 6";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];

	                            $imagen200 = TomarFotoThumb($imagen,"200",$esapple);

		 				?>

		 				<a href="<?php echo $url; ?>">
			 				<div class="encuentra_element" style="background-image: url(<?php echo $imagen; ?>);">
			 					<div class="encuentra_element_tit">
			 						<?php echo $titulo; ?>
			 					</div>
			 				</div>
		 				</a>
		 				



		 				<?php 
		 				}
		 				?>



	 			 	

	 			 	<div class="clr">
	 			 	</div>

	 			 </div>

 			 </div>
 		</div>


 		<style type="text/css">
 			.ideas_cats_tit{
 				width: 70%;
 				margin: auto;
 				text-align: center;
 				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 17px;
    			margin-top: 80px;
    			margin-bottom: 40px;
 			}
 			.home_logos_div{
 				height: 100px;
 				width: 72%;
 				/*background-color: #fcf;*/
 				margin: auto;
 				overflow: hidden;
 			}
 			.home_logos_element{
 				float: left;
 				width: 100px;
 				height: auto;

 				background-color: #fff;
 				margin-right: 21px;
 				margin-bottom: 40px;
 				cursor: pointer;

 				overflow: hidden;

 				border-radius: 7px;

 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.2);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.2);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.2);
 			}
 			.home_logos_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
 			}


 			.home_logos_element img{
 				width: 100%;
 			}

 			.laflecha_hemos{
 				width: 20px; 
 				height: 20px; 
 				position: relative; 
 				/*
 				top: -100px; 
 				left: 20px; 
 				*/
 				opacity: 0.5;
 				cursor: pointer;
 				border-radius: 8px;

 			}
 			.laflecha_hemos:hover{
 				opacity: 0.8;
 				background-color: rgba(255,255,255,0.15);
 			}

 		</style>

 		<?php
 			  $qt = "SELECT count(*) FROM home_logos ";   
			  $resultt = $mysqli->query($qt);
			  while ($rowt = $resultt->fetch_row()){
			  	    $home_logos_tot=$rowt[0];
			  }
 		?>

 		<script type="text/javascript">

 			var home_logos_tot=<?php echo $home_logos_tot-5; ?>;
 			var home_logos_pos=1;

 			var home_logos_interval;
 			var home_logos_conteo=0;


 			
			function home_logos_iniciar() {
			  //alert("myFunctionTimerBannerTop");
			  home_logos_interval = setInterval(home_logos_funcion_intervalo, 5000);
			}

			function home_logos_funcion_intervalo() {
			  //alert("Hello!");
			  home_logos_conteo++;
			  //$("#salida2").html(banners_top_conteo);
			  home_logos_Izq();
			}

 			function home_logos_Izq(){
 				//$("#banners_top_int").css("margin-left","-1180px");
 				home_logos_pos++;
 				if(home_logos_pos>home_logos_tot){
 					home_logos_pos=1;
 					$("#home_logos_int").css("margin-left","0px");
 				}else{
 					var pos=(home_logos_pos-1)*-121;
					$("#home_logos_int").animate({
					    marginLeft: pos+'px'
					}, 200);
				}
 			}

 			function home_logos_Der(){
 				//$("#banners_top_int").css("margin-left","-1180px");
				home_logos_pos--;
 				if(home_logos_pos<1){
 					home_logos_pos=home_logos_tot;
 					var final = (home_logos_tot-1)*-121;
 					$("#home_logos_int").css("margin-left",final+"px");
					
 				}else{
 					var pos=(home_logos_pos-1)*-121;
					$("#home_logos_int").animate({
					    marginLeft: pos+'px'
					}, 200);
				}
 			}

 		</script>


 		<div style="border-bottom: solid 1px #D4D4D4; margin-top: 70px;">
 		</div>

 		<div class="ideas_cats_tit">
 			HEMOS DEJADO HUELLA EN...
 		</div>

 		<div class="home_logos_div">
 			<div style="width: 720px; height: 200px; overflow: hidden; margin: auto;" >
	 			<div style="width: 3000px;" id="home_logos_int">
						<?php
						  $qt = " SELECT * FROM `home_logos` order by orden";   
						  //echo $qt;
						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){
						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[2];
		 				?>	
									<div class="home_logos_element">
						 				<img src="<?php echo $imagen; ?>" >
						 			</div>

		 				<?php 
		 				}
		 				?>
	 				<div class="clr"></div>
	 			</div>
 			</div>

 				<div class="laflecha_hemos" style="top: -170px; left: 30px; z-index: 2;" onclick="home_logos_Der();" >
 					<img src="_arrow_left_30.png" style="width: 100%;" />
 				</div>

 				<div class="laflecha_hemos" style="top: -195px; left: 790px; z-index: 3;" onclick="home_logos_Izq();" >
 					<img src="_arrow_right_30.png" style="width: 100%;" />
 				</div>


 		</div>











 		<style type="text/css">
 			.home_destacados_top{
 				width: 100%;
 				margin: auto;
 				background-color: #fff;
 				padding-top: 30px;
 				padding-bottom: 30px;
 				margin-top: 100px;
 			}
 			.home_destacados{
 				width: 90%;
 				height: 590px;
 				margin: auto;
 			}
 			.home_destacados_element{
 				width: 31%;
 				float: left;
 				background-color: #fcf;
 				margin-right: 1%;
 				margin-left: 1%;

 				overflow: hidden;
    			border-radius: 7px;
 			}

 			.home_destacados_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	cursor: pointer;
 			}

 			.home_destacados_element_img{
 				width: 100%;
 				height: 430px;
 				overflow: hidden;
 			}
 			.home_destacados_element_tit{
 				width: 100%;
 				background-color: #f00;
 				height: 150px;
 			}
 			.home_destacados_element_tit_int{
 				
 				padding-left: 30px;
 				padding-top: 30px;

 				width: 55%;

 				font-family: 'Raleway', sans-serif;
    			font-weight: 800;
    			font-size: 17px;
    			text-transform: uppercase;

    			color: #fff;


 			}
 			.home_destacados_element img{
 				width: 100%;
 			}
 		</style>


 		<div class="home_destacados_top">
	 		<div class="home_destacados">

	 						<?php

							  $qt = " SELECT * FROM `home_destacados` order by orden LIMIT 3";   

							  //echo $qt;

							  $resultt = $mysqli->query($qt);
							  while ($rowt = $resultt->fetch_row()){

							  	    $id=$rowt[0];
		                            $titulo=$rowt[1];
		                            $imagen=$rowt[2];
		                            $url=$rowt[3];

		                            $color=$rowt[5];
		                            $color2=$rowt[6];
		                            $size=$rowt[7];

			 				?>

			 				<div class="home_destacados_element">
				 				<div class="home_destacados_element_img">
				 					<img src="<?php echo $imagen; ?>" />
				 				</div>
				 				<div class="home_destacados_element_tit" style="background-color: <?php echo $color; ?>;">
				 					<div class="home_destacados_element_tit_int" style="color: <?php echo $color2; ?>; font-size: <?php echo $size."px";  ?>;">
				 						<?php echo $titulo; ?>
				 					</div>
				 				</div>
				 			</div>


			 				<?php 
			 				}
			 				?>

	 			<div class="clr"></div>
	 		</div>
	 	</div>

















 		<style type="text/css">
 			.idea_element{
 				padding-bottom: 0px;
 				cursor: pointer;

 				overflow: hidden;
    			border-radius: 7px;
 			}

 			.idea_element:hover{
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.3);
 			}
 			.ideas_cats{
 				margin-top: 10px;
 				margin-bottom: 10px;
 				width: 100%;
 				margin: auto;
 				height: 50px;

 				/*background-color: #f00;*/
 			}
 			.ideas_cats_elem{
 				background-color: #D3D2D3;
 				color: #0C0C0C;
 				padding: 10px;
 				border-radius: 19px;
 				float: left;
 				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 15px;
    			cursor: pointer;
    			padding-right: 22px;
    			padding-left: 22px;
    			margin-right: 20px;


 			}
 			.ideas_cats_elem:hover{
 				background-color: #999;
 			}
 			.ideas_cats_tit{
 				width: 70%;
 				margin: auto;
 				text-align: center;
 				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 17px;
    			margin-top: 80px;
    			margin-bottom: 40px;
 			}


 		</style>

 		<script type="text/javascript">
 			function OcultarDot(t_var){
 				$("#dot"+t_var).hide();
 			}
 			function VerDot(t_var){
 				$("#dot"+t_var).show();
 			}
 		</script>


 		<div class="ideas_cats_tit" style="font-size: 25px; font-weight: 300; margin-bottom: 50px;">
 			¡Emocionate, con estas ideas!
 		</div>

 		<div class="ideas_cats">


 			 			<?php

						  $qt = " SELECT * FROM `home_ideas_categorias` WHERE extra!=11 order by orden";   

						  //echo $qt;
						  $cc=0;
						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){
						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $orden=$rowt[2];
	                            $over_estilo=' style="background-color: #999;" ';
	                            if($cc>0){
	                            	$over_estilo='  ';
	                            }
	                            $cc++;
		 				?>

		 				
		 				<div class="ideas_cats_elem" 
		 				 <?php echo $over_estilo; ?> 
		 				id="ideas_cats_<?php echo $id; ?>"
		 				 onclick="CargarColumas('<?php echo $id; ?>',this);"><?php echo $titulo; ?>
		 				 	
		 				 </div>


		 				<?php 
		 				}
		 				?>

 			<div class="clr"></div>
 		</div>


 		<div style="margin-top: 10px;">

 				



 				<div style="width: 31%; float: left; margin-right: 2%;" id="columna1">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 1 AND `id_ideas_categoria` = 9 order by orden LIMIT 112";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];


	                           

		 				
                             $imagen400 = TomarFotoThumb($imagen,"400",$esapple);

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%;" class="idea_element">
		 					<a href="<?php echo $url; ?>">
		 						<img style="width: 100%;" src="<?php echo $imagen400; ?>" >
		 					</a>
		 				</div>


		 				<?php 
		 				}
		 				?>

 				</div>

 				<div style="width: 31%; float: left; margin-right: 2%;" id="columna2">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 2 AND `id_ideas_categoria` = 9 order by orden LIMIT 112";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];


	                           

		 				
                             $imagen400 = TomarFotoThumb($imagen,"400",$esapple);

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%;" class="idea_element">
		 					<a href="<?php echo $url; ?>">
		 						<img style="width: 100%;" src="<?php echo $imagen400; ?>" >
		 					</a>
		 				</div>


		 				<?php 
		 				}
		 				?>

 				</div>


				<div style="width: 31%; float: left; margin-right: 2%;"  id="columna3">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 3 AND `id_ideas_categoria` = 9 order by orden LIMIT 112";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];


                             $imagen400 = TomarFotoThumb($imagen,"400",$esapple);

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%;" class="idea_element">
		 					<a href="<?php echo $url; ?>">
		 						<img style="width: 100%;" src="<?php echo $imagen400; ?>" >
		 					</a>
		 				</div>


		 				<?php 
		 				}
		 				?>

 				</div>

 				

 				<div style="clear: both;"></div>
 		</div>

 		<br>
 		<hr>



 		<style>
 			.home_sellos_div{
 				height: 100px;
 				width: 90%;
 				/*background-color: #fcf;*/
 				margin: auto;
 				overflow: hidden;
 				opacity: 0.8;
 			}
 			.home_sellos_element{
 				float: left;
 				width: 130px;
 				height: auto;

 				background-color: #fff;
 				margin-right: 21px;
 				margin-bottom: 40px;
 				cursor: pointer;

 				overflow: hidden;

 				border-radius: 7px;

 				
 			}
 			.home_sellos_element img{
 				width: 100%;
 			}
 			.home_sellos_element:hover{
 				/*
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	*/
 			}
 		</style>



 		<div class="ideas_cats_tit">
 			<div style="font-size: 30px;">SOMOS SUSTENTABLES</div>
 			<div style="color: #333; margin-top: 10px; ">Sellos internacionales que avalan nuestros productos</div>
 		</div>

 		<div class="home_sellos_div">


 						<?php

						  $qt = " SELECT * FROM `home_sellos` order by orden";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[2];


                             $imagen200 = TomarFotoThumb($imagen,"200",$esapple);
                             $imagen100 = TomarFotoThumb($imagen,"100",$esapple);

		 				?>

								 				
									<div class="home_sellos_element">
						 				<img src="<?php echo $imagen200; ?>" >
						 			</div>

		 				<?php 
		 				}
		 				?>

 			<div class="clr"></div>
 		</div>



 	</div>





 	<?php

 		include("sdm_footer.php");

 		?>



 </body>

 </html>

 <?php
$mysqli -> close();
 ?>




















