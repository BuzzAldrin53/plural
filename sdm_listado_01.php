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
<div id="salida" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>
<div id="salida2" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>




 	<div class="content_all">



 		<div class="top">
 			<div class="top_logo">
 				<img src="logo.png">
 			</div>

 			<div class="top_buscador">
 				<div class="top_buscador_int">
 					<div class="top_buscador_txt">
 						<input type="text" name="" placeholder="¿Qué regalo publicitario estás buscando?">
 					</div>
 					<div class="top_buscador_cats">
 						<select>
 							<option>Todas las categorías</option>
 							<?php
 							$sq = "SELECT * FROM `categoria` WHERE `id_padre` = 0 ORDER BY `orden` ASC";
 							$resultt = $mysqli->query($sq);
							 while ($rowt = $resultt->fetch_row()){

							  	    $id=$rowt[0];
		                            $titulo=$rowt[2];
		                            $perma=$rowt[3];
 							?>

 							<option value="<?php echo $id; ?>"><?php echo $titulo; ?></option>

 							<?php
 							}
 							?>

 						</select>
 					</div>

 					<div class="top_buscador_icono">
 						<img src="icono_buscar.png">
 					</div>

 				</div>
 			</div>


 			<div class="clr"></div>

 		</div>






 		<!--    INICIO del MENU -->

 		<?php include("sdm_menu.php"); ?>

 		<!--    FIN del MENU -->




 		<!--  INICIO REGALAR  SIEMPRE ES BUENA IDEA -->


 		<style type="text/css">
 			.regalar_element{
				float: left;
				width: 280px;
				height: 340px;
				background-color: #fff;
				border-radius: 10px;
				margin-right: 15px;
				margin-bottom: 20px;

				font-family: 'Raleway', sans-serif;
    			font-weight: 400;
    			font-size: 11px;
    			text-align: center;

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
				height: 15vw;

				overflow: hidden;
				margin: auto;
				margin-top: 10px;
				margin-bottom: 20px;
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



 		<div class="regalar">
 			 
 			 <div class="regalar_int">

	 			 <div class="regalar_tit">Regalar siempre es buena idea...</div>

	 			 <div >
	 			 	<div style="background-color: #f0f;">
		 			 	<?php 

		 			 	  $qt = "SELECT * FROM home_regalar_siempre ORDER BY orden ASC LIMIT 10";
	                         
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


	                             $imagen400 = TomarFotoThumb($imagen,"400");

		 			 	?>

		 			 	<div class="regalar_element">
		 			 		
		 			 		<div class="regalar_element_div">
		 			 			<a href="<?php echo $url; ?>">
		 			 				<img src="<?php echo $imagen400; ?>" >
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

 		

 		</div>


 		<!--  FIN DE REGALAR SIEMPRE ES BUENA IDEA -->



 </div>


 		<?php

 		include("sdm_footer.php");

 		?>





 </body>

 </html>



















