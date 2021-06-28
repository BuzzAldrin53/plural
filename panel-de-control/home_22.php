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
    		
		});


		function CargarColumas(t_cat){
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


 			<div class="clr">
 				
 			</div>

 		</div>

 		<style type="text/css">
 			.over_subcategoria{
 				width: 1240px;
 				height: 450px;
 				position: absolute;
 				top: 143px;
 				background-color: #fff;
 				left: 20px;

 				border-radius: 10px;

 				overflow: hidden;

 				display: none;

				font-family: 'Raleway', sans-serif;

 				-webkit-box-shadow: 4px 4px 7px 0px rgba(71,70,71,0.5);
	        	-moz-box-shadow: 4px 4px 7px 0px rgba(71,70,71,0.5);
	        	box-shadow: 4px 4px 7px 0px rgba(71,70,71,0.5);
 			}
 			
 			.over_subcategoria_izq{
 				float: left;
 				width: 40%;
 				background-color: #fff;
 			}
 			.over_subcategoria_der{
 				float: right;
 				width: 60%;
 				height: 450px;
 				background-color: #fff;

 				background-repeat: no-repeat;
  				background-size: cover;

  				background-position: center center;
    			background-repeat: no-repeat;
 			}
 			.over_subcategoria_der img{
 				width: 100%;
 			}

 			.over_subcategoria_izq_pad{
 				width: 80%;
 				margin: auto;
 				margin-top: 50px;
 				padding: 10px;
 				overflow-x: hidden;
 				overflow-y: scroll;
 			}
 			.over_subcategoria_izq_pad h4{
 				margin-bottom: 10px;
 				margin-top: 20px;
 				font-size: 20px;
 			}


 			.over_subcategoria_izq_submenu_son{
 				margin: 4px;
 				margin-bottom: 9px;
 				
 				font-size: 14px;
 				font-weight: 500;
 				margin-left: 20px;
 			}
			.over_subcategoria_izq_submenu_son a{
 				color: #000;
 				text-decoration: none;
 			}

 			.over_subcategoria_izq_submenu_son a:hover{
 				color: #333;
 				text-decoration: underline;
 			}

 			.over_subcategoria_izq_submenu{
 				margin: 4px;
 				margin-bottom: 9px;
 				margin-top: 25px;
 				font-size: 14px;
 				font-weight: 600;
 			}
 			.over_subcategoria_izq_submenu a{
 				color: #000;
 				text-decoration: none;
 			}

 			.over_subcategoria_izq_submenu a:hover{
 				color: #333;
 				text-decoration: underline;
 			}

 		</style>
 		
 		<script type="text/javascript">
 			function VerSubMenu(t_ver){
 				$(".over_subcategoria").hide();
 				$("#"+t_ver).show();
 			}
 			function HideSubmenu(t_ver){
 				//alert(t_ver);
 				$(t_ver).hide();
 			}
 			 function ElSize(){
		    	ww=$( window ).width();
			  	hh=$( window ).height()

			  	$( "#salida" ).html( "<div>" + $( window ).width() + "</div>"+"<div>"+hh+"</div>" );
			  	if(ww>1240){
			  		var t_df = (ww-1240)/2;
			  		$(".over_subcategoria").css("left",t_df);
			  	}
		    }
		    //////////////////////////////////////////
		     $( window ).on( "load", function() {
		        console.log( "window loaded" );
		        ElSize();
		    });
		     ////////////////////////////////////////
		    $( window ).resize(function() {
		      ElSize();
			});

 		</script>

 		<div class="top_menu_full">
 				<div class="top_menu_full_int">
 						<?php
 							$sq = "SELECT * FROM `categoria` WHERE `id_padre` = 0 ORDER BY `orden` ASC";
 							$resultt = $mysqli->query($sq);
							 while ($rowt = $resultt->fetch_row()){

							  	    $id=$rowt[0];
		                            $titulo=$rowt[2];
		                            $perma=$rowt[3];

		                            if($id==1){
		                            	$azul = 'style="color: #0B7AFF; font-weight: 600;"';
		                            }else{
		                            	$azul = '';
		                            }
 						?>

 						<div class="top_menu_full_element" <?php echo $azul; ?> onmouseover="VerSubMenu('menu<?php echo $id; ?>');"><?php echo $titulo; ?></div>

 						<?php } ?>

 						<div class="clr"></div>
 				</div>
 		</div>

		<div id="salida" style="position: absolute; display: none; top: 5px; left: 5px; font-family: verdana; font-size: 10px;">----</div>



		<?php
		$sq = "SELECT * FROM `categoria` WHERE `id_padre` = 0 ORDER BY `orden` ASC";
		$resultt = $mysqli->query($sq);
		 while ($rowt = $resultt->fetch_row()){

		  	    $id=$rowt[0];
	            $titulo=$rowt[2];
	            $perma=$rowt[3];

	            $imagen="";

	            $s="SELECT * FROM `categoria_banner` WHERE id_categoria = '$id' ";
	            $resu = $mysqli->query($s);
	            while ($ro = $resu->fetch_row()){
	            	$imagen = $ro[2];
	            }
	            if($imagen!=""){
	            	$imagen800 = TomarFotoThumb($imagen,"800");
                    $imagen100 = TomarFotoThumb($imagen,"100");
	            }

		 ?>

 		<div class="over_subcategoria" id="menu<?php echo $id; ?>" onmouseleave="HideSubmenu(this);"  >

 			<?php if($imagen==""){ ?>
			<div>
			<?php }else{ ?>
			<div class="over_subcategoria_izq">
			<?php } ?>

			

				
				<?php if($imagen==""){ ?>
				<div style=" width: 95%; margin: auto;" >
				<?php }else{ ?>
				<div class="over_subcategoria_izq_pad" >
				<?php } ?>


			
					
					<?php 

							/*<h4><?php echo $titulo; ?></h4>*/

				            $sql  = "SELECT * FROM `categoria` WHERE `id_padre` = '$id' ORDER BY `orden` ASC";
						    $resul = $mysqli->query($sql);
							 while ($row = $resul->fetch_row()){
									$son_id=$row[0];
						            $son_titulo=$row[2];
						            $son_perma=$row[3];
					?>

							<?php if($imagen==""){ ?>
							<div style="width: 25%; float: left; background-color: #fff;">
							<?php } ?>

							<div class="over_subcategoria_izq_submenu"><a href="#dede"> <?php echo $son_titulo; ?> </a></div>

							<?php 
								 $sql  = "SELECT * FROM `categoria` WHERE `id_padre` = '$son_id' ORDER BY `orden` ASC";
							    $resulx = $mysqli->query($sql);
								 while ($rowx = $resulx->fetch_row()){
										$son_son_id=$rowx[0];
							            $son_son_titulo=$rowx[2];
							            $son_son_perma=$rowx[3];
								?>

									<div class="over_subcategoria_izq_submenu_son"><a href="#dede"> <?php echo $son_son_titulo; ?> </a></div>


								<?php 
								}
								?>


							<?php if($imagen==""){ ?>
							</div>
							<?php } ?>


					<?php 
							}
					?>


				</div>
			</div>
			

			<?php if($imagen==""){ ?>
			
			<?php }else{ ?>
			<div class="over_subcategoria_der" style="background-image: url('<?php echo $imagen800; ?>');">	
			</div>
			<?php } ?>


			<div class="clr"></div>
 		</div>



		 <?php
		 
		 }

		 ?>





 		<div class="over_subcategoria" id="menu11" onmouseleave="HideSubmenu(this);"  >
			<div class="over_subcategoria_izq">
				<div class="over_subcategoria_izq_pad">
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu9 </a></div>
					<div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu1 </a></div><div class="over_subcategoria_izq_submenu"><a href="#dede">MEnu9 </a></div>
				</div>
			</div>
			<div class="over_subcategoria_der">
				<img src="http://pluralmkt.mx/uploads/1618416148_mochila_cargador.jpg">
			</div>
			<div class="clr"></div>
 		</div>





 		<div class="top_banners">
 			
 				<?php

					  $qt = "SELECT * FROM home_banner_top ORDER BY orden ASC LIMIT 1";   
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

                             $imagen200 = TomarFotoThumb($imagen,"200");
                             $imagen100 = TomarFotoThumb($imagen,"100");

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
				height: 9vw;
				border: solid 1px #000; 

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



 		<div class="regalar">
 			 
 			 <div class="regalar_int">

	 			 <div class="regalar_tit">Regalar siempre es buena idea...</div>

	 			 <div>

	 			 	<?php 

	 			 	  $qt = "SELECT * FROM home_regalar_siempre ORDER BY orden ASC LIMIT 5";
                         
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


                             $imagen200 = TomarFotoThumb($imagen,"200");

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

	                            $imagen200 = TomarFotoThumb($imagen,"200");

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

 		</style>

 		<div style="border-bottom: solid 1px #D4D4D4; margin-top: 70px;">
 			
 		</div>

 		<div class="ideas_cats_tit">
 			HEMOS DEJADO HUELLA EN...
 		</div>

 		<div class="home_logos_div">


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











 		<style type="text/css">
 			.home_destacados_top{
 				width: 100%;
 				margin: auto;
 				background-color: #FBFBFB;
 				padding-top: 30px;
 				padding-bottom: 30px;
 				margin-top: 100px;
 			}
 			.home_destacados{
 				width: 90%;
 				height: 530px;
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

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $orden=$rowt[2];

		 				?>

		 				
		 				<div class="ideas_cats_elem" id="ideas_cats_<?php echo $id; ?>" onclick="CargarColumas('<?php echo $id; ?>');"><?php echo $titulo; ?></div>


		 				<?php 
		 				}
		 				?>

 			<div class="clr"></div>
 		</div>


 		<div style="margin-top: 10px;">

 				<div style="width: 31%; float: left; margin-right: 2%;" id="columna1">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 1 AND `id_ideas_categoria` = 9  order by orden LIMIT 4";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];

	                            $alto=$rowt[7];
	                            $ancho=$rowt[8];

	                            $base_x=363;       ///
	                            //      $ancho	   //

	                            ///$ancho    368
	                            ///$alto     ?
	                            $val_h = ($alto*$base_x)/$ancho;

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%; height: <?php echo $val_h; ?>px; overflow: hidden;" class="idea_element" onmouseout="OcultarDot(<?php echo $id; ?>);" onmouseover="VerDot(<?php echo $id; ?>);">
		 					
		 					<img style="width: 100%;" src="<?php echo $imagen; ?>" >

		 					<div id="dot<?php echo $id; ?>"
		 					    style="display: none; position: relative; z-index: <?php echo 20+$id; ?>; top: -200px; left: 90px; width: 50px; height: 50px;">
		 						<img src="dot_a.png" style="width: 100%;" >
		 					</div>
		 				</div>


		 				<?php 
		 				}
		 				?>

 				</div>


 				<div style="width: 31%; float: left; margin-right: 2%;" id="columna2">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 2 AND `id_ideas_categoria` = 9 order by orden LIMIT 4";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];


	                           

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%;" class="idea_element">
		 					<img style="width: 100%;" src="<?php echo $imagen; ?>" >
		 				</div>


		 				<?php 
		 				}
		 				?>

 				</div>


				<div style="width: 31%; float: left; margin-right: 2%;"  id="columna3">

 					     <?php

						  $qt = " SELECT * FROM `home_ideas` WHERE `columna` = 3 AND `id_ideas_categoria` = 9 order by orden LIMIT 4";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[3];
	                            $orden=$rowt[4];

		 				?>

		 				
		 				<div style="width: 100%; margin-bottom: 3%;" class="idea_element">
		 					<img style="width: 100%;" src="<?php echo $imagen; ?>" >
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

		 				?>

								 				
									<div class="home_sellos_element">
						 				<img src="<?php echo $imagen; ?>" >
						 			</div>

		 				<?php 
		 				}
		 				?>

 			<div class="clr"></div>
 		</div>



 	</div>


 	<style type="text/css">
 		.elfooter{
 			width: 100%;
 			margin: auto;
 			background-color: #F5F5F5;
 			height: 430px;
 			margin-top: 40px;
 		}
 		.elfooter_int{
 			width: 1140px;
 			margin: auto;
 			/*background-color: #ddd;*/
 			padding-top: 10px;
 		}
 		.elfooter_int_info{
 			width: 60%;
 			margin: auto;

			font-family: 'Poppins', sans-serif;
			font-size: 11px;
			margin-top: 10px;
			color: #0E0E0E;
 		}
 		.elfooter_int_col{
 			float: left;
 			width: 32%;
 		}
 		.elfooter_int_col h3{
 			font-size: 15px;
 			line-height: 15px;
 		}
 		.elfooter_redes{
 			float: left;
 			margin-top: 5px;
 		}
 		.elfooter_pagos{
 			float: right;
 		}
 		.elfooter_pagos img{
 			width: 430px;
 		}
 		.elfooter_redes_pagos{
 			width: 95%;
 			margin: auto;
 			margin-top: 40px;
 		}
 		.elfooter_redes img{
 			width: 40px;
 		}
 		.footer_letra_chiquita{
 			width: 95%;
 			margin: auto;
			font-family: 'Poppins', sans-serif;
			font-size: 10px;
			margin-bottom: 50px;
			color: #505050;
			padding-top: 10px;
 		}
 		.elfooter_btn{
 			float: left; 
 			width: 160px; 
 			height: 30px;
 			background-color: #1d1d1b; 
 			color: #fff; 
 			border-radius: 30px;
 			font-size: 15px;
 			font-family: Raleway, sans-serif;
 			font-weight: 600;
 			letter-spacing: 2px;
 			text-align: center;
 			padding: 5px;
 			padding-top: 15px;
 			margin-left: 60px;
 			margin-top: 0px;
 		}
 	</style>



 	<div class="elfooter">
 		<div class="elfooter_int">
 			
 			<div class="elfooter_int_info">
 				<div class="elfooter_int_col">
 					<h3>Podria <br> interesarte</h3>
					Nosotros<br>
					 Blog <br>
					 Biblioteca<br> 
					 Catálogos <br>
					 Videos<br>
 				</div>
 				<div class="elfooter_int_col">
 					<h3>Información que<br> debes concer</h3>

 					Términos y condiciones<br>
 					 de Plural. mkt <br><br>
					Avisos de privacidad

 				</div>
 				<div class="elfooter_int_col">
 					<h3>Contacto</h3>
 					Horarios y días de atención<br>
					Lun - Vie / 9:00 am. - 6:00 pm.<br><br>

					Dr. José María Vertiz 1400, Interior 02, Portales Nte, Benito Juárez 03300, Ciudad de México, CDMX.
 				</div>
 				<div class="clr"></div>
 			</div>


 			<div class="elfooter_redes_pagos">

 				<div class="elfooter_redes">
 					<img src="logo_in_.png" />
 					<img src="logo_f_.png" />
 					<img src="logo_ins_.png" />
 				</div>

 				<div class="elfooter_btn">
 					Regístrate
 				</div>

 				<div class="elfooter_pagos">
 					<img src="foooter_pagos.png" />
 				</div>

 				<div class="clr"></div>

 			</div>


 			<hr>

 			<div class="footer_letra_chiquita">
 				© Plural MKT. 2020. Todos los derechos reservados<br><br>
				Todos los precios están sujetos a posibles cambios. <br>
				Los precios publicados en está página web, catálogo digital, o cotizaciones se encuentran en pesos mexicanos, sin IVA y sin costo de impresión.<br>
 			</div>


 		</div>
 	</div>





 </body>

 </html>




















