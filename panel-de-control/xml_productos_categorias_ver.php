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

		function Eliminar(t_id,t_completo,t_cat){
			//alert("Eliminar; "+t_id);

			var r = confirm("Estás seguro que deseas desconectar el producto "+t_completo+" de la categoria "+t_cat);
			if (r == true) {
			  txt = "You pressed OK!";

			  	$.ajax({url: "categoria_xml_producto_eliminar.php?id="+t_id, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				$("#element"+t_id).hide(500);
  				}});

			} else {
			  txt = "You pressed Cancel!";
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">XML Productos</span> - BUSCADOR</h4>
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
						<h5 class="card-title">XML Productos BUSCADOR</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

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

					<div class="card-body">
						<div class="mb-4">
							

							Productos totales: <b> <?php echo $conts_productos; ?> </b>
							<br>



							En total han sido conectados <b><?php echo $asignados; ?></b> productos a una o más categorias.


							<br><br>

							<h5>Categorias sin productos conectados</h5>
							<div>

											<?php 
												  $qt = "SELECT * FROM categoria ORDER BY nombre ASC";

												  $nombre_superior_categoria="";

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

						                            if($etiqueta_id_tmp==$etiqueta_id){
						                            	$nombre_superior_categoria=$rowr[2];
						                            }


						                            if($asignados==0){
						                            	echo $etiqueta_nombre_tmp."<br>";
						                            }

						                         }
						                      ?>

							</div>



						</div>


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

						<form action="xml_productos_categorias_ver.php">
							<fieldset class="mb-3">




								<div class="form-group row">
									<label class="col-form-label col-lg-2">Mostrar la categoria:</label>
									<div class="col-lg-10">


									<select class="form-control" name="etiqueta_id">
											<option value="0">-Elegir categoria-</option>

											<?php 
												  $qt = "SELECT * FROM categoria ORDER BY nombre ASC";

												  $nombre_superior_categoria="";

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

						                            if($etiqueta_id_tmp==$etiqueta_id){
						                            	$nombre_superior_categoria=$rowr[2];
						                            }


						                      ?>

					                      <option value="<?php echo $etiqueta_id_tmp; ?>" <?php if($etiqueta_id_tmp==$etiqueta_id){  echo " selected='selected' ";   } ?>   >
					                      	
					                      	<?php echo $etiqueta_nombre_tmp; ?>  [ <?php echo $asignados; ?> ]
					                      		
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
						<h5 class="card-title">XML Productos de la categoria - <b> <?php echo $nombre_superior_categoria; ?></b></h5>
						<br>

						<div>
							<a href="../sdm_listado_categorizacion_03.php?idetiqueta=<?php echo $etiqueta_id; ?>" target="_blank">Previsualizar en sitio</a>
						</div>

						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						
						

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
								<th>Etiquetas del producto</th>
								
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							

                        <?php 
                        

                $qqt="SELECT * FROM `categoria_xml_producto` WHERE id_categoria='$etiqueta_id' ";  
                $resu = $mysqli->query($qqt);
                while ($ro = $resu->fetch_row()){
                	$id_categoria_xml_producto = $ro[0];
                	$id_producto_tmp = $ro[2];


                         $qt = "SELECT * FROM xml_productos WHERE id_producto = '$id_producto_tmp' ";
                         //echo $qt;
                         
                          $resuls = $mysqli->query($qt);
                          while ($rowr = $resuls->fetch_row()){

                            $id_producto=$rowr[0];
                            $ref=$rowr[1];
                  
                            $name=$rowr[2];
                            $type=$rowr[3];
                            $otherinfo=$rowr[4];
                            $extendedinfo=$rowr[5];


                            if($buscar!=""){
                            	$extendedinfo = str_replace($buscar,"<b>".$buscar."</b>",$extendedinfo);
                            }


                            $type_local = $rowr[26];


                             $sql = "SELECT folder,imagen_local FROM xml_variante WHERE ref='$ref' LIMIT 1 ";
                             $result = $mysqli->query($sql);
                         	 while ($rowt = $result->fetch_row()){
 									$folder=$rowt[0];
 									$imagen_local=$rowt[1];
                         	 }


                         	 $foto = "/xmltest/".$folder."/".$imagen_local;
                            

                        ?>  
							<tr id="element<?php echo $id_categoria_xml_producto; ?>">
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
									 
				 					 $sql = "SELECT * FROM `categoria_xml_producto` WHERE id_producto='$id_producto' ";
		                             $result = $mysqli->query($sql);
		                         	 while ($rowt = $result->fetch_row()){
		 									$id_etiqueta=$rowt[1];

		 									$sq = "SELECT * FROM `categoria` WHERE id_categoria='$id_etiqueta' ";
		 									$resultt = $mysqli->query($sq);
		 									 while ($roww = $resultt->fetch_row()){
		 									 	echo "- ".$roww[2]." <br> ";
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
												<a href="#" class="dropdown-item"
												 onclick="Eliminar('<?php echo $id_categoria_xml_producto; ?>','<?php echo $name; ?>','<?php echo $nombre_superior_categoria; ?>');">

												 <i class="icon-bin"></i> Remove</a>

												<a href="#editar" class="dropdown-item"><i class="icon-pencil4"></i> Editar</a>
												
											</div>
										</div>
									</div>
								</td>
							</tr>


							<?php
							}

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
