

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

		 	<?php 
		 	if( isset($usr_tmp_idu) ){
		 		echo "idu=".$usr_tmp_idu.";
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
		 		clearTimeout(myVarTimeoutCarrito);
		 		AlertAgregarCarritoCerrar();

		 		//alert("AgregarAlCarritoInt: "+t_idu+"  "+t_idp);
		 		$.ajax({url: "alcarrito_agregar.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				//ActualizarMiniLista();
    				
    				ActualizarMiniListaCarrito();

    				AlertAgregarCarritoAbrir();
    				myVarTimeoutCarrito = setTimeout(AlertAgregarCarritoCerrar, 3500);
  				}});
  				
		 	}





		 	function AgregarAFavoriosInt(t_idu,t_idp){


		 		CerrarAlertAgregarAFavoritos();
		 		clearTimeout(myVarTimeout);
		 		$("#alert_favoritos").css("background-color","#1EE192");

		 		//alert("AgregarAFavoriosInt: "+t_idu);
		 		$.ajax({url: "favoritos_agregar.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniLista();
  				}});

  				$.ajax({url: "producto_nombre.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				//ActualizarMiniLista();
    				$("#alert_favoritos_tit").html(result);
    				$("#alert_favoritos_text").html("Se ha añadido a tus favoritos");
    				MostrarAlertAgregarAFavoritos();
    				myVarTimeout = setTimeout(CerrarAlertAgregarAFavoritos, 4000);
  				}});


		 	}

		 	var myVarTimeout;
		 	var myVarTimeoutCarrito;



		 	function MostrarAlertAgregarAFavoritos(){
				$("#alert_favoritos").animate( {"right": "-20px"}, 400, function() { mostrarCompleteAlertFav() } );
		 	}
		 	function mostrarCompleteAlertFav(){
				//alert("Animation completed! The cloud is fully transparent now!");
			}
		 	function CerrarAlertAgregarAFavoritos(){
		 		$("#alert_favoritos").animate( {"right": "-350px"}, 200, function() { cerrarCompleteAlertFav() } );
		 	}
		 	function cerrarCompleteAlertFav(){
				//alert("Animation completed! The cloud is fully transparent now!");
			}


			function AlertAgregarCarritoCerrar(){
				//alert_agregar_carrito
				$("#alert_agregar_carrito").animate( {"right": "-400px"}, 200, function() { cerrarCompleteAlertFav() } );
			}
			function AlertAgregarCarritoAbrir(){

				$("#alert_agregar_carrito").animate( {"right": "0px"}, 300, function() { cerrarCompleteAlertFav() } );
			}
			function SuspenderSalidaAgregarCarrito(){
				clearTimeout(myVarTimeoutCarrito);
			}






		 	function RemoverDeFavoriosInt(t_idu,t_idp){

		 		clearTimeout(myVarTimeout);
		 		CerrarAlertAgregarAFavoritos();
		 		$("#alert_favoritos").css("background-color","#EE6B69");

		 		//alert("RemoverDeFavoriosInt: "+t_idu);
		 		$.ajax({url: "favoritos_remover.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniLista();
  				}});

  				$.ajax({url: "producto_nombre.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				//ActualizarMiniLista();
    				$("#alert_favoritos_tit").html(result);
    				$("#alert_favoritos_text").html("Se ha <b>eliminado</b> de tus favoritos");
    				MostrarAlertAgregarAFavoritos();
    				myVarTimeout = setTimeout(CerrarAlertAgregarAFavoritos, 3500);
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
		 	 	clearTimeout(myVarTimeout);
		 		CerrarAlertAgregarAFavoritos();
		 		$("#alert_favoritos").css("background-color","#EE6B69");
		 		//alert("RemoverDeFavoriosInt: "+t_idu);
		 		$.ajax({url: "alcarrito_remover.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				ActualizarMiniListaCarrito();
  				}});

  				$.ajax({url: "producto_nombre.php?idu="+t_idu+"&idp="+t_idp, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				//ActualizarMiniLista();
    				$("#alert_favoritos_tit").html(result);
    				$("#alert_favoritos_text").html("Se ha <b>eliminado</b> del carrito");
    				MostrarAlertAgregarAFavoritos();
    				myVarTimeout = setTimeout(CerrarAlertAgregarAFavoritos, 3500);
  				}});

		 	}
		   function ActualizarMiniListaCarrito(){
		 		$.ajax({url: "alcarrito_mini_lista.php", success: function(result){
    				$("#carrito_div_int").html(result);
    				//alert(result);
    				//$("#element"+t_id).hide(500);
  				}});
  				//alcarrito_mini_contador
		 		$.ajax({url: "alcarrito_mini_contador.php", success: function(result){
    				$("#alcarrito_mini_contador").html($.trim(result));
    				//alert(result);
    				//$("#element"+t_id).hide(500);
    				if($.trim(result)=="0"){
    					$("#alcarrito_mini_contador").show();

						$("#alcarrito_mini_contador").css("background-color","#dedede");

						$("#icono_top_propuesta").hide();

    				}else{
    					$("#alcarrito_mini_contador").show();
    					$("#alcarrito_mini_contador").css("background-color","#f00");

    					$("#icono_top_propuesta").show();
    				}

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
		 		if(idu!=0){
		 			$("#menu_over_carrito").show();
		 		}
		 	}

		 	function MostrarMenuOverFavoritos(){
		 		//menu_over_favoritos
		 		$(".over_logins").hide();
		 		if(idu!=0){
		 			$("#menu_over_favoritos").show();
		 		}
		 	}
		 </script>

		 <style type="text/css">
		 	body{
		 		overflow-x: hidden;
		 	}
		 	.alert_favoritos{
		 		background-color: #EE6B69;
		 		/* #1EE192 */
		 		width: 300px;
		 		height: 40px;
		 		border-radius: 10px;

		 		position: fixed;
		 		top: 100px;
		 		right: -400px;

		 		z-index: 300;

		 		font-family: 'Raleway', sans-serif;
		 		font-size: 13px;
		 		color: #fff;

		 		-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			    -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			     box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);

			     padding: 10px;
			     padding-left: 30px;
		 	}
		 	.alert_favoritos_tit{
		 		font-weight: 500;
		 		font-size: 14px;
		 		width: 230px;
		 		height: 20px;
		 		/*background-color: #000;*/
		 		overflow: hidden;
		 	}
		 	.alert_favoritos_text{
		 		font-weight: 300;
		 		margin-top: 3px;
		 	}
		 	.alert_favoritos_img{
		 		width: 40px;
		 		position: relative;
		 		top: -35px;
		 		left: 230px;
		 		cursor: pointer;
		 	}
		 	.alert_favoritos_img img{
		 		width: 100%;
		 	}
		 </style>

		 <div class="alert_favoritos" id="alert_favoritos">
		 	<div class="alert_favoritos_tit" id="alert_favoritos_tit" >Nombre del producto</div>
		 	<div class="alert_favoritos_text" id="alert_favoritos_text">Se ha añadido a tus favoritos</div>
		 	<div class="alert_favoritos_img" onclick="CerrarAlertAgregarAFavoritos();">
		 		<img src="/graficos/alert_favoritos_cerrar.png" />
		 	</div>
		 </div>



		 <style type="text/css">
		 	.alert_agregar_carrito{
		 		position: fixed;
		 		width: 340px;
		 		height: 1200px;
		 		top: 0px;
		 		right: -400px;
		 		background-color: #fff;

		 		z-index: 30000;


		 		-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			    -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			     box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
		 	}

		 	.alert_agregar_carrito_azul{
		 		background-color: #A2D8F5;
		 		width: 340px;
		 		height: 200px;
		 	}
		 	.alert_agregar_carrito_int{
		 		width: 90%;
		 		margin: auto;
		 	}
		 	.alert_agregar_carrito_azul_x{
		 		width: 50px;
		 		height: 50px;
		 		border-radius: 25px;
		 		overflow: hidden;
		 		float: right;
		 		margin-top: 10px;
		 		cursor: pointer;
		 	}
		 	.alert_agregar_carrito_azul_x:hover{

		 		-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			    -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			     box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
		 	}
		 	.alert_agregar_carrito_azul_x img{
		 		width: 100%;
		 	}
		 	.alert_agregar_carrito_tit{
		 		margin-top: 20px;
		 		width: 70%;
		 		font-size: 20px;
		 		font-family: 'Raleway', sans-serif;
		 		margin-left: 30px;
		 		color: #2A2526;
		 		font-weight: 500;
		 	}
		 	.alert_agregar_carrito_txt{
		 		margin-left: 30px;
		 		margin-top: 10px;
		 		font-family: 'Raleway', sans-serif;
		 		font-size: 15px;
		 		height: 19px;
		 		border-bottom: 1px solid #333;
		 		width: 90px;
		 		overflow: hidden;
		 	}
		 	.alert_agregar_carrito_txt:hover{
		 		border-bottom: 1px solid #000;
		 	}
		 	.alert_agregar_carrito_txt a{
		 		color: #393330;
		 		text-decoration: none;
		 	}
		 	.alert_agregar_carrito_w{
		 		width: 80%;
		 		margin: auto;
		 		margin-top: 30px;
		 		background-color: #fff;
		 	}
		 	.alert_agregar_carrito_w_txt{
		 		text-align: center;
		 		font-family: 'Raleway', sans-serif;
		 		font-weight: 600;
		 	}
		 	.alert_agregar_carrito_rel{
		 		margin-top: 40px;
		 	}
		 	.alert_agregar_producto{
		 		font-family: 'Raleway', sans-serif;
		 		font-size: 11px;
		 	}
		 	.alert_agregar_sku{
		 		font-family: 'Raleway', sans-serif;
		 		font-size: 11px;
		 	}
		 	.alert_agregar_precio{
		 		font-family: 'Raleway', sans-serif;
		 		font-size: 11px;
		 	}
		 	.alert_agregar_producto_rel{
		 		border-bottom: 1px solid #dedede;
		 		margin-bottom: 10px;
		 		padding-bottom: 20px;
		 		overflow: hidden;
		 		margin-top: 10px;
		 		border-radius: 10px;
		 	}
		 	.alert_agregar_producto_rel:hover{

		 		-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
			    -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
			     box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.1);
		 	}
		 	.alert_agregar_cerrar_icon{
		 		width: 30px;
		 		height: 30px;
		 		border-radius: 15px;
		 		overflow: hidden;
		 		/*border: solid 1px #000;*/
		 		float: right;
		 		margin-top: 20px;
		 		cursor: pointer;
		 		margin-right: 5px;
		 	}
		 	.alert_agregar_cerrar_icon:hover{

		 		-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			    -moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
			     box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.6);
		 	}
		 	.alert_agregar_cerrar_icon img{
		 		width: 100%;
		 	}
		 	
		 </style>




		 <div class="alert_agregar_carrito" id="alert_agregar_carrito">
		 	<div class="alert_agregar_carrito_azul">
		 		<div class="alert_agregar_carrito_int">
			 		
			 		<div>
				 		<div class="alert_agregar_carrito_azul_x" onclick="AlertAgregarCarritoCerrar();" >
				 			<img src="/graficos/alert_agregar_carrito_cerrar.png">
				 		</div>
				 		<div class="clr"></div>
			 		</div>

			 		<div class="alert_agregar_carrito_tit">
			 			¡El producto se ha agregado al carrito!
			 		</div>
			 		<div class="alert_agregar_carrito_txt">
			 			<a href="#carrito">Ir a mi carrito</a>
			 		</div>

			 	</div>
		 	</div>


		 	<div class="alert_agregar_carrito_w">
		 		<div class="alert_agregar_carrito_w_txt">Esto te podria encantar</div>

		 		<div>

		 			<?php
		 			for($i=0;$i<10;$i++){
		 			?>

		 			<div class="alert_agregar_producto_rel"  onmouseover="SuspenderSalidaAgregarCarrito();">
		 				<div style="width: 50%; height: 120px; background-color: #fff; float: left;">
		 					<img src="http://pluralmkt.mx/xmlfotos/fotos4/400_7352-17352002000-NEGRO.webp" style="width: 100%;" />
		 				</div>
		 				<div style="width: 50%; height: 120px; background-color: #fff; float: left;">
		 					<div style="width: 92%; margin: auto; background-color: #fff; padding-top: 30px;">

		 						<div class="alert_agregar_producto">Nombre del producto</div>
		 						<div class="alert_agregar_sku">SKU: 3456</div>
		 						<div class="alert_agregar_precio">Precio desde: $223.00</div>

		 						<div>
			 						<div class="alert_agregar_cerrar_icon">
			 							<img src="/graficos/corazon-favoritos-agregado.png">
			 						</div>
			 						<div class="clr"></div>
		 						</div>

		 					</div>
		 				</div>
		 				<div class="clr"></div>
		 			</div>


		 			<?php
					}
		 			?>

		 		</div>

		 	</div>

		 </div>



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
						 						<a href="/movil_sdm_registro_03.php" style="color: #4305FA; text-decoration: none;">Registrate.</a>
						 					</span>
						 			</div>

						 			<br><br><br>

									<div style="width: 80%; margin: auto;" class="tienes_cuenta">
						 				
						 				¿Ya tienes cuenta?
						 				<br>
						 					<span style="border-bottom: solid 1px #CECECE; color: #4305FA;">
						 						<a href="/movil_sdm_login_03.php" style="color: #4305FA; text-decoration: none;">Iniciar sesión.</a>
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
		 		}else{
		 			$idu = $usr_tmp_idu;
		 			echo "FAVORITOS DE TEMPORAL <br><br>";
		 		}

		 		if(isset($idu)){

		 			  	  $qt = "SELECT * FROM usuario_favoritos WHERE id_usuario = '$idu'  ";
                          $resulttt = $mysqli->query($qt);
                          while ($rowtt = $resulttt->fetch_row()){
                          		$idp = $rowtt[2];


                          		$sz = "SELECT * FROM xml_productos WHERE id_producto = '$idp' LIMIT 24";

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
		 		}else{
		 			if(isset($usr_tmp_idu)){
		 				$idu = $usr_tmp_idu;
		 			}
		 		}

		 		if(isset($idu)){

		 			  	  $qt = "SELECT * FROM usuario_carrito WHERE id_usuario = '$idu'  ";
                          $resulttt = $mysqli->query($qt);
                          while ($rowtt = $resulttt->fetch_row()){
                          		$idp = $rowtt[2];


                          		$sz = "SELECT * FROM xml_productos WHERE id_producto = '$idp' LIMIT 24";

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
 				<a href="/movil_home_27.php">
 					<img src="logo.png">
 				</a>
 			</div>


 			<style type="text/css">
 				.top_menu_iconos{
 					float: right; 
 					width: 200px; 
 					height: 38px; 
 					margin-top: 7px;
 					/*background-color: #0ff;*/
 				}
 				.top_menu_icono_element{
 					float: right;
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



 					<?php
 						$sq = "SELECT count(*) FROM `usuario_carrito` WHERE id_usuario = '$idu' ";
 						$resultt = $mysqli->query($sq);
 						$carrito_cont = 0;
						while ($rowt = $resultt->fetch_row()){
							$carrito_cont = $rowt[0];
						}
						
 					?>	



 			<div class="top_menu_iconos">
 				
 				
 			


 				<div class="top_menu_icono_element" onmouseover="OcultarTodosMenusOverMini();" id="icono_top_propuesta"

 				<?php if($carrito_cont==0){ ?>
 				 style="display: none;"
 				<?php } ?>

 				 >
 					<img src="/graficos/icono_top_propuesta.png">
 				</div>



 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverCarrito();">
 					<a href="/movil_sdm_carrito_03.php">
 						<img src="/graficos/icono_top_carrito.png">
 					</a>

 					<?php
 						$sq = "SELECT count(*) FROM `usuario_carrito` WHERE id_usuario = '$idu' ";
 						$resultt = $mysqli->query($sq);
 						$carrito_cont = 0;
						while ($rowt = $resultt->fetch_row()){
							$carrito_cont = $rowt[0];
						}
						
 					?>	

 					<div style="width: 10px; height: 8px; overflow: hidden; background-color: #f00; position: relative;
 					 top: -30px; left: 15px; border-radius: 5px; font-size: 7px; color: #fff; text-align: center; padding-top: 1px; pointer-events: none;   

 					 <?php if($carrito_cont<=0){ ?>

 					 display: none;

 					<?php } ?>

 					 " id="alcarrito_mini_contador">
 						<?php echo $carrito_cont; ?>
 					</div>


 				</div>

 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverFavoritos();">
 					<a href="/movil_sdm_favoritos_04.php">
 						<img src="/graficos/icono_top_favoritos.png">
 					</a>
 				</div>

 				<div class="top_menu_icono_element" onmouseover="MostrarMenuOverSesion();" >
 					<a href="<?php echo $url_login; ?>">
 						<img src="/graficos/icono_top_perfil.png">
 					</a>
 				</div>

 				<div class="top_menu_icono_element" onmouseover="OcultarTodosMenusOverMini();" >
 					<img src="/graficos/icono_top_telefono.png">
 				</div>






 				<div style="clear: both;"></div>
 			</div>


 			<div class="clr">
 				
 			</div>

 		</div>





 		<div>


 			 <div class="top_buscador">
 				<form action="movil_sdm_listado_buscar_03.php" >
	 				<div class="top_buscador_int">

	 					<div class="top_buscador_txt" >
	 						<input type="text" name="buscar" placeholder="¿Qué regalo publicitario estás buscando?" value="<?php echo $buscar; ?>" >
	 					</div>
	 					


	 					<div class="top_buscador_icono">
	 						<input type="submit" name="btn" value="" style="background-image: url('icono_buscar.png'); width: 35px; height: 30px; background-repeat: no-repeat; background-position: center center; background-size: 100% 100%; border: none;">
	 					</div>


	 					<div style="clear: both;"></div>

	 				</div>
 				</form>
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
 				top: 163px;
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
		        ActualizarMiniListaCarrito();

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
 							$sq = "SELECT * FROM `categoria` WHERE `id_padre` = 0  AND visible='1'  ORDER BY `orden` ASC";
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

		                            /*
		                            //onmouseover="VerSubMenu('menu<?php echo $id; ?>');"
		                            */
 						?>

 						<div class="top_menu_full_element" <?php echo $azul; ?> >
 							<a href="movil_sdm_categoria_productos_04.php?idcat=<?php echo $id; ?>">
 							<?php echo $titulo; ?>
 							</a>	
 						</div>

 						<?php } ?>

 						<div class="clr"></div>
 				</div>
 		</div>


 		<!--          MENUS OCULTOS QUE APARECEN AL OVER           -->



		<?php
		$sq = "SELECT * FROM `categoria` WHERE `id_padre` = 0  AND visible='1'  ORDER BY `orden` ASC";
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

				            $sql  = "SELECT * FROM `categoria` WHERE `id_padre` = '$id'  AND visible='1'  ORDER BY `orden` ASC";
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
								<a href="movil_sdm_categoria_productos_04.php?idcat=<?php echo $son_id; ?>"> <?php echo $son_titulo; ?> 
						    	</a>
							</div>

							<?php 
								 $sql  = "SELECT * FROM `categoria` WHERE `id_padre` = '$son_id'  AND visible='1'  ORDER BY `orden` ASC";
							    $resulx = $mysqli->query($sql);
								 while ($rowx = $resulx->fetch_row()){
										$son_son_id=$rowx[0];
							            $son_son_titulo=$rowx[2];
							            $son_son_perma=$rowx[3];
								?>

									<div class="over_subcategoria_izq_submenu_son">
										<a href="movil_sdm_categoria_productos_04.php?idcat=<?php echo $son_son_id; ?>"> <?php echo $son_son_titulo; ?>
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