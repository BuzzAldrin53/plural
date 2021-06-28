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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<title>Inicio - Plural</title>    

	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-color: #fff;
		}
		.content_all{
			width: 1140px;
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
			margin-top: 10px;
		}

		.top_banners img{
			width: 100%;
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
			font-size: 15px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 18px;

		}
		.novedades_elem{
			width: 23%;
			height: 280px;
			overflow: hidden;
			float: left;
			margin-right: 10px;
			margin-bottom: 20px;

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
			font-size: 18px;
			margin-top: 9px;
			text-decoration: none;
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
			padding-bottom: 35px;
		}
		.regalar_int{
			width: 68%;
			margin: auto;
			/*background-color: #f0f;*/
		}
		.regalar_tit{
			text-align: center;
			font-size: 15px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 18px;
			text-transform: uppercase;

			font-family: 'Poppins', sans-serif;

		}
		.regalar_element{
			float: left;
			width: 18%;
			height: 200px;
			background-color: #fff;
			border-radius: 10px;
			margin-right: 10px;
		}

		.banner_dos{
			margin-top: 50px;
		}


		.encuentra{
			width: 100%;
			height: 240px;
			overflow: hidden;
			margin: auto;
			padding-top: 35px;
			padding-bottom: 35px;

			margin-top: 50px;
		}
		.encuentra_int{
			width: 90%;
			margin: auto;
		}
		.encuentra_tit{
			text-align: center;
			font-size: 15px;
			text-align: center;
			margin-bottom: 20px;
			font-size: 18px;
			text-transform: uppercase;

			font-family: 'Poppins', sans-serif;

		}
		.encuentra_element{
			float: left;
			width: 15%;
			height: 200px;
			margin-bottom: 10px;

			
			margin-right: 10px;


			/*
			 background-repeat: no-repeat;
  			background-size: contain, cover;
  			*/

  			background-position: center top;
    				background-size: 100% 100%;
    				background-repeat: no-repeat;
		}
		.encuentra_element_tit{
			width: 70%;
			margin: auto;
			height: auto;
			background-color: #25E092;
			border-radius: 20px;
			color: #fff;

			font-family: 'Poppins', sans-serif;
			font-size: 9px;
			margin-top: 15px;
			text-align: center;

			padding: 9px;
			line-height: 9px;
		}
		.encuentra_element_ini{
			float: left;
			width: 15%;
			height: 200px;
			overflow: hidden;
			
			margin-right: 10px;
			background-color: #25E092;
			color: #fff;



		}
		.encuentra_element_ini_int{
			width: 80%;
			margin: auto;
			margin-top: 30px;

			font-family: 'Poppins', sans-serif;
			line-height: 15px;
			text-transform: uppercase;
			font-size: 16px;
		}


		.clr{
			clear: both;
		}

	</style>


 </head>

 <body>


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

 							<option>Todas las categorías</option>

 							<option>Todas las categorías</option>

 							<option>Todas las categorías</option>

 							<option>Todas las categorías</option>
 						</select>
 					</div>

 					<div class="top_buscador_icono">
 						<img src="icono_buscar.png">
 					</div>

 				</div>
 			</div>


 			<div class="clr">
 				
 			</div>

 		</div>


 		<div class="top_menu_full">
 				
 				<div class="top_menu_full_int">
 						<div class="top_menu_full_element">COVID</div>
 						<div class="top_menu_full_element">BOLSAS Y MOCHILAS</div>
 						<div class="top_menu_full_element">BEBIDAS</div>
 						<div class="top_menu_full_element">HOME OFFICE</div>
 						<div class="top_menu_full_element">TECNOLOGIA</div>
 						<div class="top_menu_full_element">KITS EMPRESARIALES</div>
 						<div class="top_menu_full_element">MUCHOS MAS</div>

 						<div class="clr"></div>
 				</div>



 		</div>



 		<div class="top_banners">
 			<img src="banner1.jpg"></img>
 		</div>



 		<div class="novedades">
 			<div class="novedades_tit">
 				NOVEDADES
 			</div>
 			<div>


 				<?php

					  $qt = "SELECT * FROM home_novedades ORDER BY orden ASC LIMIT 30";   

					  //echo $qt;

					  $resultt = $mysqli->query($qt);
					  while ($rowt = $resultt->fetch_row()){

					  	    $id=$rowt[0];
                            $titulo=$rowt[1];
                            $imagen=$rowt[2];
                            $url=$rowt[3];
                            $orden=$rowt[4];

 				?>

 				<a href="<?php echo $url; ?>">
	 				<div class="novedades_elem" style="background-image: url(<?php echo $imagen; ?>);">
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



 		<div class="regalar">
 			 
 			 <div class="regalar_int">

	 			 <div class="regalar_tit">Regalar siempre es buena idea...</div>

	 			 <div>
	 			 	<div class="regalar_element">
	 			 		
	 			 	</div>

	 			 	<div class="regalar_element">
	 			 		
	 			 	</div>

	 			 	<div class="regalar_element">
	 			 		
	 			 	</div>

	 			 	<div class="regalar_element">
	 			 		
	 			 	</div>

	 			 	<div class="regalar_element">
	 			 		
	 			 	</div>

	 			 	<div class="clr">
	 			 	</div>

	 			 </div>

 			 </div>
 		</div>


 		<div class="banner_dos">
 			<img src="banner2.jpg" width="100%">
 		</div>


 		<div class="encuentra">
 			 
 			 <div class="encuentra_int">

	 			 <div class="encuentra_tit">ENCUENTRA EL REGALO PERFECTO...</div>

	 			 <div>
	 			 	<div class="encuentra_element_ini">
	 			 		
	 			 		<div class="encuentra_element_ini_int">
	 			 			Cuidemos juntos el planeta
	 			 		</div>
	 			 	</div>



	 			 		<?php

						  $qt = "SELECT * FROM home_regalo_perfecto ORDER BY orden ASC LIMIT 30";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];

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


	 			 	<div class="encuentra_element" style="background-image: url(bolsas.jpg);">
	 			 		<div class="encuentra_element_tit">
	 			 			Bolsas y mochilas sustentables
	 			 		</div>
	 			 	</div>

	 			 	

	 			 	<div class="clr">
	 			 	</div>

	 			 </div>

 			 </div>
 		</div>



 	    <div style="width: 1140px; margin: auto; margin-top: 90px; border-top: solid 1px #000; ">
 	    	<img src="ref.png" width="100%">
 	    </div>


 	</div>




 </body>

 </html>




















