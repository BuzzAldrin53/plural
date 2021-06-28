

		<?php

		if(empty($buscar)){
			$buscar="";
		}

		 ?>


		 <?php 
		 if( isset($_SESSION['id_login']) ){
		 	$idu=$_SESSION['id_login'];
		 }
		 ?>


		 <?php
		 if(isset($_SESSION['nombre'])){
		 	$url_login = "entrar.php";
		 }else{
		 	$url_login = "sdm_login_03.php";
		 }
		 ?>

		 <script type="text/javascript">

		 	var idu=0;

		 	<?php 
		 	if(isset($_SESSION['id_login'])){
		 		echo "idu=".$_SESSION['id_login'].";
		 		";
			 }
		 	?>

		 	var agregados = [];
		 	agregados[0] = 1;

		 	var alcarrito = [];
		 	alcarrito[0] = 1;

		 	function AgregarAFavoritos(t_id_producto,t_this){
		 		//alert("AgregarAFavoritos: "+t_id_producto);
		 		//alert(agregados[t_id_producto]);

		 		if(agregados[t_id_producto]==null){
		 			//////////////////////////////agregar a favoritos por primera vez
		 			agregados[t_id_producto] = 1;
		 			$(t_this).css("background-image", "url('corazon-favoritos-agregado.png')"); 
		 			AgregarAFavoriosInt(idu,t_id_producto);
		 		}else{
		 			if(agregados[t_id_producto] == 1){
		 				agregados[t_id_producto] = 0;
		 				$(t_this).css("background-image", "url('corazon-favorito-sin-agregar.png')"); 
		 				RemoverDeFavoriosInt(idu,t_id_producto);
		 			}else{
		 				agregados[t_id_producto] = 1;
		 				$(t_this).css("background-image", "url('corazon-favoritos-agregado.png')"); 
		 				AgregarAFavoriosInt(idu,t_id_producto);
		 			}
		 		}		 		
		 		//$(t_this).removeClass("regalar_corazon");
		 	}

		 	function RemoverDeFavoritos(t_id_producto,t_this){
		 		//alert("AgregarAFavoritos: "+t_id_producto);
		 		//alert(agregados[t_id_producto]);

		 		if(agregados[t_id_producto]==null){
		 			//////////////////////////////agregar a favoritos por primera vez
		 			agregados[t_id_producto] = 0;
		 			$(t_this).css("background-image", "url('corazon-favorito-sin-agregar.png')"); 
		 			RemoverDeFavoriosInt(idu,t_id_producto);
		 		}else{
		 			if(agregados[t_id_producto] == 1){
		 				agregados[t_id_producto] = 0;
		 				$(t_this).css("background-image", "url('corazon-favorito-sin-agregar.png')"); 
		 				RemoverDeFavoriosInt(idu,t_id_producto);
		 			}else{
		 				agregados[t_id_producto] = 1;
		 				$(t_this).css("background-image", "url('corazon-favoritos-agregado.png')"); 
		 				AgregarAFavoriosInt(idu,t_id_producto);
		 			}
		 		}		 		
		 		//$(t_this).removeClass("regalar_corazon");
		 	}



		 	function AgregarAlCarritoInt(t_idu,t_idp){
		 		//alert("AgregarAlCarritoInt: "+t_idu+"  "+t_idp);
		 		$.ajax({url: "alcarrito_agregar.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				//ActualizarMiniLista();
    				ActualizarMiniListaCarrito();
  				}});
		 	}





		 	function AgregarAFavoriosInt(t_idu,t_idp){
		 		//alert("AgregarAFavoriosInt: "+t_idu);
		 		$.ajax({url: "favoritos_agregar.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniLista();
  				}});
		 	}

		 	function RemoverDeFavoriosInt(t_idu,t_idp){
		 		//alert("RemoverDeFavoriosInt: "+t_idu);
		 		$.ajax({url: "favoritos_remover.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniLista();
  				}});
		 	}

		 	function ActualizarMiniLista(){
		 		$.ajax({url: "favoritos_mini_lista.php", success: function(result){
    				$("#favoritos_div_int").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);

  				}});
		 	}


		 	 function RemoverDeCarritoInt(t_idu,t_idp){
		 		//alert("RemoverDeFavoriosInt: "+t_idu);
		 		$.ajax({url: "alcarrito_remover.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniListaCarrito();
  				}});
		 	}
		   function ActualizarMiniListaCarrito(){
		 		$.ajax({url: "alcarrito_mini_lista.php", success: function(result){
    				$("#carrito_div_int").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});
		 	}







		 	function BorrarFavoritoListado(t_id_div,t_idu,t_idp){
		 		//alert("BorrarFavoritoListado: "+t_id_div+"      "+t_idu);
		 		$("#"+t_id_div).hide();
		 		RemoverDeFavoriosInt(t_idu,t_idp);
		 	}


		 	function BorrarCarritoListado(t_id_div,t_idu,t_idp){
		 		//alert("BorrarFavoritoListado: "+t_id_div+"      "+t_idu);
		 		$("#"+t_id_div).hide();
		 		RemoverDeCarritoInt(t_idu,t_idp);
		 	}




		 </script>

		 <style type="text/css">
		 	.over_logins{
		 		right: 150px; 
		 		top: 65px; 
		 		background-color: #fff;

		 		font-family: 'Raleway', sans-serif;
		 		font-size: 12px;

		 		 width: 200px; 
		 		 height: 200px; 

		 		 color: #000; 
		 		 position: absolute; 
		 		 border-radius: 20px;

		 		 z-index: 3000;

		 		 -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
		 	}
		 </style>

		 <script type="text/javascript">
		 	function OcultarTodosMenusOverMini(){
		 		$(".over_logins").hide();
		 	}
		 	function MostrarMenuOverSesion(){
		 		$(".over_logins").hide();
		 		$("#menu_over_session").show();
		 	}
		 	function HideThisDiv(t_t){
		 		$(t_t).hide();
		 	}
		 	//menu_over_carrito
		 	function MostrarMenuOverCarrito(){
		 		//menu_over_favoritos
		 		$(".over_logins").hide();
		 		$("#menu_over_carrito").show();
		 	}

		 	function MostrarMenuOverFavoritos(){
		 		//menu_over_favoritos
		 		$(".over_logins").hide();
		 		$("#menu_over_favoritos").show();
		 	}
		 </script>


		 <div  class="over_logins" id="menu_over_session" style="display: none;" onmouseleave="HideThisDiv(this);" >
		 	<div style="padding: 10px;">
		 	<?php
		 		if( isset($_SESSION['nombre']) ){

		 			?>

		 			<div style="text-align: center;">

		 				Bienvenido: <?php echo lcfirst($_SESSION['nombre']); ?>

		 				<br><br>

		 				<div style="width: 70%; margin: auto; border-radius: 20px; overflow: hidden;">
		 					<a href="entrar.php">
		 					<img src="/graficos/miniprofile_icon.png" style="width: 100%;">
		 					</a>
		 				</div>

		 				<br><br>

		 				<a href="logout.php">
		 					Logout
		 				</a>

		 			</div>

		 			<?php
		 			//echo $_SESSION['nombre'];
		 		}else{
		 	 ?>



		 	 		<div style="text-align: center;">

		 	 						<br><br>
		 					
		 				 			<div style="width: 80%; margin: auto;" class="tienes_cuenta">
 				
						 				¿Aún no tienes cuenta?
						 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
						 						<a href="/sdm_registro_03.php" style="color: #4305FA; text-decoration: none;">Registrate.</a>
						 					</span>
						 			</div>

						 			<br><br><br>

									<div style="width: 80%; margin: auto;" class="tienes_cuenta">
						 				
						 				¿Ya tienes cuenta?
						 				<br>
						 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
						 						<a href="/sdm_login_03.php" style="color: #4305FA; text-decoration: none;">Iniciar sesión.</a>
						 					</span>
						 			</div>

		 			</div>

		 	 <?php } ?>

		 	</div>
		 </div>





		 <div  class="over_logins" id="menu_over_favoritos" style="display: none; height: 400px;" onmouseleave="HideThisDiv(this);" >
		 	<div style="padding: 10px; height: 350px; overflow-y: scroll; padding-top: 20px; padding-bottom: 20px;" id="favoritos_div_int">

		 		<?php 
		 		if(isset($_SESSION['id_login'])){
		 			$idu=$_SESSION['id_login'];

		 			  	  $qt = "SELECT * FROM usuario_favoritos WHERE id_usuario = '$idu'  ";
                          $resulttt = $mysqli->query($qt);
                          while ($rowtt = $resulttt->fetch_row()){
                          		$idp = $rowtt[2];


                          		$sz = "SELECT * FROM xml_productos_clon WHERE id_producto = '$idp' LIMIT 24";

								$resulz = $mysqli->query($sz);
								while ($rowz = $resulz->fetch_row()){

									$id_producto = $rowz[0];
									$ref = $rowz[1];
									$name = $rowz[2];
									$type = $rowz[3];
									$otherinfo = $rowz[4];
									$extendedinfo = $rowz[5];
									$brand = $rowz[6];


									$precio = number_format($rowz[30]);


									//$idcat=1;
								}

								$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 1";
								$resula = $mysqli->query($sa);
								$i=0;
								while ($rowa = $resula->fetch_row()){

									$imagen_local = $rowa[10];
									$folder = $rowa[13];

									$colorname = $rowa[7];

									$colorHex = ColorAHex($colorname,$mysqli);

									$img = "/xmltest/".$folder."/".$imagen_local;
									$imagen400 = $img;

									$imagen_local = $rowa[10];
									$folderwebp = $rowa[14];
									$fotowebp = $rowa[15];

									if($fotowebp=="1"){
										///./xmlfotos/fotos4/
										$imagen400 = $folderwebp."100_".$imagen_local;
										///////version webp ///////
										$extension=substr($imagen_local,-3,3);
										$solonombre=substr($imagen_local,0,strrpos($imagen_local,"."));
										if($esapple==0){
											$imagen400 = $folderwebp."100_".$solonombre.".webp";
										}
									}
								}
                          
		 		?>

		 		<div>
		 				<div style="float: left; width: 50%;">
		 					<a href="/sdm_detalle_03.php?xml_id_producto=<?php echo $id_producto; ?>&idcat=1">
		 						<img src="<?php echo $imagen400; ?>" style="width: 100%;">
		 					</a>
		 				</div>
		 				<div style="float: right; width: 50%;">
		 					<br>
		 					<?php echo $type." ".$name; ?>
		 					<br>
		 					SKU: <?php echo $ref; ?>
		 				</div>
		 				<div style="clear: both;"></div>
		 		</div>

		 		<?php 
		 				}
		 		}
		 		?>


		 	</div>
		 </div>







		  <div  class="over_logins" id="menu_over_carrito" style="display: none; height: 400px;" onmouseleave="HideThisDiv(this);" >
		 	<div style="padding: 10px; height: 350px; overflow-y: scroll; padding-top: 20px; padding-bottom: 20px;" id="carrito_div_int">

		 		<?php 
		 		if(isset($_SESSION['id_login'])){
		 			$idu=$_SESSION['id_login'];

		 			  	  $qt = "SELECT * FROM usuario_carrito WHERE id_usuario = '$idu'  ";
                          $resulttt = $mysqli->query($qt);
                          while ($rowtt = $resulttt->fetch_row()){
                          		$idp = $rowtt[2];


                          		$sz = "SELECT * FROM xml_productos_clon WHERE id_producto = '$idp' LIMIT 24";

								$resulz = $mysqli->query($sz);
								while ($rowz = $resulz->fetch_row()){

									$id_producto = $rowz[0];
									$ref = $rowz[1];
									$name = $rowz[2];
									$type = $rowz[3];
									$otherinfo = $rowz[4];
									$extendedinfo = $rowz[5];
									$brand = $rowz[6];


									$precio = number_format($rowz[30]);


									//$idcat=1;
								}

								$sa = "SELECT * FROM `xml_variante` WHERE `ref` LIKE '$ref' ORDER BY `id_variante` ASC LIMIT 1";
								$resula = $mysqli->query($sa);
								$i=0;
								while ($rowa = $resula->fetch_row()){

									$imagen_local = $rowa[10];
									$folder = $rowa[13];

									$colorname = $rowa[7];

									$colorHex = ColorAHex($colorname,$mysqli);

									$img = "/xmltest/".$folder."/".$imagen_local;
									$imagen400 = $img;

									$imagen_local = $rowa[10];
									$folderwebp = $rowa[14];
									$fotowebp = $rowa[15];

									if($fotowebp=="1"){
										///./xmlfotos/fotos4/
										$imagen400 = $folderwebp."100_".$imagen_local;
										///////version webp ///////
										$extension=substr($imagen_local,-3,3);
										$solonombre=substr($imagen_local,0,strrpos($imagen_local,"."));
										if($esapple==0){
											$imagen400 = $folderwebp."100_".$solonombre.".webp";
										}
									}
								}
                          
		 		?>

		 		<div>
		 				<div style="float: left; width: 50%;">
		 					<a href="/sdm_detalle_03.php?xml_id_producto=<?php echo $id_producto; ?>&idcat=1">
		 						<img src="<?php echo $imagen400; ?>" style="width: 100%;">
		 					</a>
		 				</div>
		 				<div style="float: right; width: 50%;">
		 					<br>
		 					<?php echo $name; ?>
		 					<br>
		 					SKU: <?php echo $ref; ?>
		 				</div>
		 				<div style="clear: both;"></div>
		 		</div>

		 		<?php 
		 				}
		 		}
		 		?>


		 	</div>
		 </div>













		 <style type="text/css">
		 	.top_buscador_txt input:focus{
		 		border: none;
		 		outline: solid 1px #fff;
		 	}
		 </style>

 		
 		<div class="top" onclick="HideAllSubMenus();" onmouseover="HideAllSubMenus();">
 			
 			<div class="top_logo">
 				<a href="/home_27.php">
 					<img src="logo.png">
 				</a>
 			</div>

 			<div class="top_buscador">
 				<form action="sdm_listado_buscar_03.php" >
 				<div class="top_buscador_int">
 					<div class="top_buscador_txt">
 						<input type="text" name="buscar" placeholder="¿Qué regalo publicitario estás buscando?" value="<?php echo $buscar; ?>">
 					</div>
 					<div class="top_buscador_cats">
 						<select name="idcat">
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
 						<input type="submit" name="btn" value="" style="background-image: url('icono_buscar.png'); width: 35px; height: 30px; background-repeat: no-repeat; background-position: center center; background-size: 100% 100%; border: none;">
 					</div>

 				</div>
 				</form>
 			</div>

 			<style type="text/css">
 				.top_menu_iconos{
 					float: right; 
 					width: 200px; 
 					height: 50px; 
 					margin-top: -35px;
 				}
 				.top_menu_icono_element{
 					float: left;
 					width: 28px;
 					height: 28px;
 					margin-right: 7px;
 					border-radius: 14px;
 					overflow: hidden;
 					cursor: pointer;
 				}
 				.top_menu_icono_element img{
 					width: 100%;
 				}
 				.top_menu_icono_element img:hover{
 					width: 110%;
 					margin-top: -5%;
 					margin-left: -5%;
 				}
 				.top_menu_icono_element:hover{
			        -webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			        box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
				}
 			</style>

 			<div class="top_menu_iconos">
 				<div class="top_menu_icono_element" onmouseover="OcultarTodosMenusOverMini();" >
 					<img src="/graficos/icono_top_telefono.png">
 				</div>
 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverSesion();" >
 					<a href="<?php echo $url_login; ?>">
 						<img src="/graficos/icono_top_perfil.png">
 					</a>
 				</div>

 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverFavoritos();">
 					<a href="/sdm_favoritos_04.php">
 						<img src="/graficos/icono_top_favoritos.png">
 					</a>
 				</div>

 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverCarrito();">
 					<a href="/sdm_carrito_03.php">
 						<img src="/graficos/icono_top_carrito.png">
 					</a>
 				</div>
 				<div class="top_menu_icono_element" onmouseover="OcultarTodosMenusOverMini();">
 					<img src="/graficos/icono_top_propuesta.png">
 				</div>
 				<div style="clear: both;"></div>
 			</div>


 			<div class="clr">
 				
 			</div>

 		</div>














 		<!--    INICIO del MENU -->

 		<style type="text/css">
 			.top_menu_full_element a{
				color: #000;
				text-decoration: none;
			}
			.top_menu_full_element a:hover{
				color: #43A1F1;
				text-decoration: none;
			}
 		</style>


 		<style type="text/css">
 			.over_subcategoria{
 				width: 1240px;
 				height: 450px;
 				position: absolute;
 				top: 143px;
 				background-color: #fff;
 				left: 20px;

 				z-index: 30;

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
 				/*
 				margin-left: 20px;
 				*/

 				background-repeat: no-repeat;
 				background-position: left center;
 				background-image: url('dot_15.png');

 				padding-left: 18px;
 				margin-left: 4px;
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
 			function HideAllSubMenus(){
 				$(".over_subcategoria").hide();
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

			  		////////////
			  		$(".over_logins").css("right",(t_df+50)+"px");
			  	}else{

			  	}
		    }
		    //////////////////////////////////////////
		     $( window ).on( "load", function() {
		        console.log( "window loaded xx" );
		        ElSize();

		        //
		        $(".top").on('onmouseover', function(event){
				    HideAllSubMenus();
				});
		    });
		     ////////////////////////////////////////
		    $( window ).resize(function() {
		      ElSize();
			});

 		</script>

 		<!--          MENU SUPERIOR LISTADO CATEGORIAS PADRES             -->

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

 						<div class="top_menu_full_element" <?php echo $azul; ?> onmouseover="VerSubMenu('menu<?php echo $id; ?>');">
 							<a href="sdm_categoria_productos_04.php?idcat=<?php echo $id; ?>">
 							<?php echo $titulo; ?>
 							</a>	
 						</div>

 						<?php } ?>

 						<div class="clr"></div>
 				</div>
 		</div>


 		<!--          MENUS OCULTOS QUE APARECEN AL OVER           -->



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

							<div class="over_subcategoria_izq_submenu">
								<a href="sdm_categoria_productos_04.php?idcat=<?php echo $son_id; ?>"> <?php echo $son_titulo; ?> 
						    	</a>
							</div>

							<?php 
								 $sql  = "SELECT * FROM `categoria` WHERE `id_padre` = '$son_id' ORDER BY `orden` ASC";
							    $resulx = $mysqli->query($sql);
								 while ($rowx = $resulx->fetch_row()){
										$son_son_id=$rowx[0];
							            $son_son_titulo=$rowx[2];
							            $son_son_perma=$rowx[3];
								?>

									<div class="over_subcategoria_izq_submenu_son">
										<a href="sdm_categoria_productos_04.php?idcat=<?php echo $son_son_id; ?>"> <?php echo $son_son_titulo; ?>
										</a>
									</div>


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




 		<!--    FIN del MENU -->