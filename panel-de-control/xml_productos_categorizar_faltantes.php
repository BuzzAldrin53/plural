 <?php
//session_start();
 include_once("login.php");
 ?>
 <?php
 include_once("db.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php

	include "core_title.php";

	 ?>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="full/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="full/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="full/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="full/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="full/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="full/assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

	<script type="text/javascript">
		$( document ).ready(function() {
    		console.log( "ready!" );


			$( "#reemplazar").change(function() {
			  //alert( "Handler for .change() called." );
			  if($("#reemplazar").val()==""){
			  	//$("#bottonBuscar").attr("value","Buscar");
			  	$("#bottonBuscar").html('Buscar<i class="icon-paperplane ml-2"></i>');
			  }else{
			  	$("#bottonBuscar").html('Reemplazar<i class="icon-paperplane ml-2"></i>');
			  }

			});
    		
		});

		function bottonBuscarOver(){
			if($("#reemplazar").val()==""){
			  	//$("#bottonBuscar").attr("value","Buscar");
			  	$("#bottonBuscar").html('Buscar<i class="icon-paperplane ml-2"></i>');
			  }else{
			  	$("#bottonBuscar").html('Reemplazar<i class="icon-paperplane ml-2"></i>');
			  }
		}

		function Eliminar(t_id,t_completo){
			//alert("Eliminar; "+t_id);

			var r = confirm("Estás seguro que deseas eliminar al usuario: "+t_completo);
			if (r == true) {
			  txt = "You pressed OK!";

			  	$.ajax({url: "usuarios_eliminar.php?id="+t_id, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				$("#element"+t_id).hide(500);
  				}});

			} else {
			  txt = "You pressed Cancel!";
			}

		}


		function ConectarCon(t_idpro,t_idcat,t_catname){
			//alert("Eliminar; "+t_id);

			if(t_catname==""){
				alert("Primero debes seleccionar una categoria!");
			}else{

				var r = confirm("Estás seguro que deseas conectar con  "+t_catname);
				//r=true;
				if (r == true) {
				  txt = "You pressed OK!";

				  	$.ajax({url: "categoria_xml_producto_conectar.php?idp="+t_idpro+"&idc="+t_idcat, success: function(result){
	    				//$("#div1").html(result);
	    				//alert(result);
	    				$("#lascategorias"+t_idpro).append("<br>-"+t_catname);

	  				}});

				} else {
				  tex = "You pressed Cancel!";
				}
			}

		}




		function MostrarFoto(t_id){
			$("#"+t_id).show();
		}

		function OcultarFoto(t_id){
			$("#"+t_id).hide();
		}
		


	</script>

</head>

<body>

	<!-- Main navbar -->
	<?php include "core_mainnav.php"; ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<?php include "core_sidebar-mobile-toggler.php"; ?>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">


				<!-- User menu -->
				<?php include "core_user-menu.php"; ?>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<?php
						include_once("menu.php");
						 ?>


					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">





			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">XML Productos</span> - Categorizar</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center" style="display: none;">
							<a href="#" class="btn btn-link btn-float text-default" style="display: none;"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default" style="display: none;"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default" style="display: none;"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="usuarios.php" class="breadcrumb-item">Usuarios</a>
							<span class="breadcrumb-item active">Listado</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none" style="display: none;">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item" style="display: none;">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0" style="display: none;">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->





			<!-- Content area -->
			<div class="content">


				<!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">XML Productos a categorizar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">
							
							En esta interface puede asignar productos a las  <code>Categorias</code>

						</p>


						<?php

						 $qt = "SELECT * FROM xml_categorias WHERE ref_int='$id' ";

						 //echo $qt;
                         
                          $resultt = $mysqli->query($qt);
                          while ($rowt = $resultt->fetch_row()){

                            $id_categoria=$rowt[0];
                            $ref=$rowt[1];
                       
                            $nombre=$rowt[2];
                            $extra=$rowt[3];
                            $ref_int=$rowt[4];


                          }

						?>

						<form action="xml_productos_categorizar_faltantes.php">
							<fieldset class="mb-3">


						

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Conectar a la categoria:</label>
									<div class="col-lg-10">
										<select class="form-control" name="etiqueta_id">
											<option value="0">-Elegir Categoria-</option>

											<?php 
												  $qt = "SELECT * FROM categoria ORDER BY nombre ASC";

												  $nombre_superior_categoria = "";

						                         $resuls = $mysqli->query($qt);
						                         while ($rowr = $resuls->fetch_row()){
						                            $etiqueta_id_tmp=$rowr[0];
						                            $etiqueta_nombre_tmp=$rowr[2];

						                            if($etiqueta_id_tmp==$etiqueta_id){
						                            	$nombre_superior_categoria=$rowr[2];
						                            }

						                      ?>

					                      <option value="<?php echo $etiqueta_id_tmp; ?>" <?php if($etiqueta_id_tmp==$etiqueta_id){  echo " selected='selected' ";   } ?>   >
					                      	
					                      	<?php echo $etiqueta_nombre_tmp; ?> 
					                      		
					                      	</option>

						                      <?php
						                  		}
						                      ?>
											
										</select>


									</div>
								</div>



								






							</fieldset>

							



							<div class="text-right">
								<button type="submit" class="btn btn-primary" id="bottonBuscar" onmouseover="bottonBuscarOver();">Buscar 
									<i class="icon-paperplane ml-2"></i>
								</button>
							</div>


						</form>
					</div>
				</div>
				<!-- /form inputs -->

			</div>
			<!-- /content area -->

			<?php

			if($buscar!="" ){
				
				
			}

			 ?>









			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">XML Productos</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">

							<?php

								$sq = " SELECT COUNT( DISTINCT id_producto) FROM categoria_xml_producto ";
		                        //echo $sq;
		                        $resulsc = $mysqli->query($sq);
		                        while ($rowcc = $resulsc->fetch_row()){
		                        	$asignados = $rowcc[0];
		                        }

		                        $sq = " SELECT COUNT(*) FROM `xml_productos` ";
		                        $resulsc = $mysqli->query($sq);
		                        while ($rowcc = $resulsc->fetch_row()){
		                        	$conts_productos = $rowcc[0];
		                        }

							?>



							Productos totales: <b> <?php echo $conts_productos; ?> </b>
							<br>



							En total han sido conectados <b><?php echo $asignados; ?></b> productos a una o más categorias.


							<br><br>






						<b>Lista de categorias sin productos conectados: </b>

						<br>
						
						<?php

							//echo "PRE PROCESO <br>";


							$sq = "SELECT * FROM `categoria_xml_producto` WHERE extra='0' ORDER BY `id_producto` ASC";
							$resuls = $mysqli->query($sq);
	                         while ($rowr = $resuls->fetch_row()){
	                         	$el_tmp_id  = $rowr[0];
	                         	$tmp_id_producto = $rowr[2];

	                         	$sq = "UPDATE `xml_productos` SET `extra` = '1' WHERE `xml_productos`.`id_producto` = '$tmp_id_producto' ;";
	                         	//echo $sq."<br>";
	                         	$resu = $mysqli->query($sq);

	                         	$sq = "UPDATE `categoria_xml_producto` SET `extra` = '1' WHERE `id_producto` = '$tmp_id_producto' ;";
	                         	//echo $sq."<br>";
	                         	$resu = $mysqli->query($sq);
	                         }



                         
                         	 $qt = "SELECT * FROM categoria ORDER BY nombre ASC";

	                         $resuls = $mysqli->query($qt);
	                         while ($rowr = $resuls->fetch_row()){
	                            $etiqueta_id_tmp=$rowr[0];
	                            $etiqueta_nombre_tmp=$rowr[2];


	                            $sq = "SELECT count(*) FROM categoria_xml_producto WHERE id_categoria = '$etiqueta_id_tmp' ";
	                            //echo $sq;
	                            $resulsc = $mysqli->query($sq);
	                            while ($rowcc = $resulsc->fetch_row()){
	                            	$asignados = $rowcc[0];
	                            }

	                            if($asignados==0){
	                            	echo $etiqueta_nombre_tmp."<br>";
	                            }

	                         }
                      
						?>

						

					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>ID</th>
								<th>Ref</th>
								<th>Nombre</th>
								<th>Type</th>
								<th>Type Local</th>
								<th>Foto</th>
								<th>ExtendedInfo</th>
								<th>Categorias</th>
								
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							

                        <?php 
                        

                         $qt = "SELECT * FROM xml_productos WHERE extra='0' LIMIT 100";
                         //echo $qt;
                         
                          $resuls = $mysqli->query($qt);
                          while ($rowr = $resuls->fetch_row()){

                            $id_producto=$rowr[0];
                            $ref=$rowr[1];
                  
                            $name=$rowr[2];
                            $type=$rowr[3];
                            $otherinfo=$rowr[4];
                            $extendedinfo=$rowr[5];

                            $type_local = $rowr[26];


                            if($buscar!=""){
                            	$extendedinfo = str_ireplace($buscar,"<b>".$buscar."</b>",$extendedinfo);
                            }


                            /////////ACTUALIZAR EL DATO
                             if($exacta=="11" && $etiqueta_id!="0"){


                             	$sq = "DELETE FROM `categoria_xml_producto` WHERE `id_producto` = '$id_producto' AND `id_categoria` = '$etiqueta_id'";
                             	//echo $sq;
                             	$resu = $mysqli->query($sq);

	                         	$sq = "INSERT INTO `categoria_xml_producto` (`id_categoria_xml_producto`, `id_categoria`, `id_producto`, `extra`)
	                         	 VALUES (NULL, '$etiqueta_id', '$id_producto', '0');";

	                         	 //echo $sq;
	                         	$resu = $mysqli->query($sq);

	                         	 //echo $sq;

	                         }

	                         if($exacta=="12" && $etiqueta_id!="0"){


                             	$sq = "DELETE FROM `categoria_xml_producto` WHERE `id_producto` = '$id_producto' AND `id_categoria` = '$etiqueta_id'";

                             	//echo $sq;
                             	$resu = $mysqli->query($sq);

	                         	$sq = "INSERT INTO `categoria_xml_producto` (`id_categoria_xml_producto`, `id_categoria`, `id_producto`, `extra`)
	                         	 VALUES (NULL, '$etiqueta_id', '$id_producto', '0');";
	                         	 //echo $sq;
	                         	 $resu = $mysqli->query($sq);

	                         	 //echo $sq;

	                         }


                             $sql = "SELECT folder,imagen_local FROM xml_variante WHERE ref='$ref' LIMIT 1 ";
                             $result = $mysqli->query($sql);
                         	 while ($rowt = $result->fetch_row()){
 									$folder=$rowt[0];
 									$imagen_local=$rowt[1];
                         	 }


                         	 $foto = "/xmltest/".$folder."/".$imagen_local;
                            

                        ?>  
							<tr id="element<?php echo $id_usuario; ?>">
								<td><?php echo $id_producto; ?></td>
								<td><?php echo $ref; ?></td>
								<td onmouseleave="OcultarFotos('foto<?php echo $id_producto; ?>');" onmouseover="MostrarFoto('foto<?php echo $id_producto; ?>');" >
									<a href="categoria_editar.php?id=<?php echo $id_categoria; ?>">
										<?php echo $name; ?>
									
									</a>
								</td>
								<td><?php echo $type; ?></td>
								<td><?php echo $type_local; ?></td>
								<td>

									<div >
											<img style="display: none; height: 100px;" src="<?php echo $foto; ?>"  id="foto<?php echo $id_producto; ?>">
									</div>

								</td>
								<td>

									<?php
									
									echo $extendedinfo;

									 ?>


								</td>

								<td id="lascategorias<?php echo $id_producto; ?>">

									<?php
									 
				 					 $sql = "SELECT * FROM `categoria_xml_producto` WHERE id_producto='$id_producto' ";
		                             $resultss = $mysqli->query($sql);
		                         	 while ($rowtf = $resultss->fetch_row()){
		 									$id_etiqueta_tmp=$rowtf[1];

		 									$sq = "SELECT * FROM `categoria` WHERE id_categoria='$id_etiqueta_tmp' ";
		 									$resulttf = $mysqli->query($sq);
		 									 while ($rowwf = $resulttf->fetch_row()){
		 									 	echo "- ".$rowwf[2]." <br> ";
		 									 }

		                         	 }

									 ?>


								</td>


								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												

												<a href="#Conectar"
												 onclick="ConectarCon('<?php echo $id_producto; ?>','<?php echo $etiqueta_id; ?>','<?php echo $nombre_superior_categoria; ?>')" class="dropdown-item">
												 <i class="icon-pencil4"></i> Conectar con la categoria - <b><?php echo $nombre_superior_categoria; ?></b></a>
												
											</div>
										</div>
									</div>
								</td>
							</tr>


							<?php
							}
							?>


						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->



			</div>
			<!-- /content area -->






			<!-- Footer -->
			<?php include "core_footer.php"; ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
