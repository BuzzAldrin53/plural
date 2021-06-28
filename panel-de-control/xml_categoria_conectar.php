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
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="full/assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/form_inputs.js"></script>
	<!-- /theme JS files -->



	<script type="text/javascript">
		$( document ).ready(function() {
    		console.log( "ready!" );
    		
		});

		function Eliminar(t_id,t_completo){
			//alert("Eliminar; "+t_id);

			var r = confirm("Estás seguro que deseas DESCONECTAR la categoria: "+t_completo);
			if (r == true) {
			  txt = "You pressed OK!";

			  	$.ajax({url: "categoria_desconectar.php?id="+t_id, success: function(result){
    				//$("#div1").html(result);
    				//alert(result);
    				$("#element"+t_id).hide(500);
  				}});

			} else {
			  txt = "You pressed Cancel!";
			}

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Categorias</span> - Agregar</h4>
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
							<a href="categorias.php" class="breadcrumb-item">Categorias</a>
							<span class="breadcrumb-item active">Conectar</span>
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


				<?php

				if($id_padre!=""){


					 $qq="SELECT id_categoria,id_xml FROM categoria_xml_categoria WHERE id_categoria='$id_padre' AND id_xml='$ref_int' LIMIT 2 ";
		             $resultt = $mysqli->query($qq);
		             $cont=0;
		             while ($rowt = $resultt->fetch_row()){   $cont++;  }
		             if($cont==0){
		                
				             $sql="INSERT INTO `categoria_xml_categoria` (`id_categoria_xml_categoria`, `id_categoria`, `id_xml`, `extra`) 
							VALUES (NULL, '$id_padre', '$ref_int', '1');";
							$resultt = $mysqli->query($sql);
							//echo $sql;

		             }



					
				}

				 ?>

				<!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Conectar Categoria</h5>
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
							
							En esta interface puede conectar categorias del XML con las cagtegorias de la <code>Intranet</code>

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

						<form action="xml_categoria_conectar.php">
							<fieldset class="mb-3">

								<input type="hidden" name="ref_int" value="<?php echo $ref_int; ?>">
								<input type="hidden" name="id" value="<?php echo $ref_int; ?>">

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nombre XML</label>
									<div class="col-lg-10">
										<input  type="text" class="form-control"  autocomplete="off"  name="nombre" readonly="" value="<?php echo $nombre; ?>">
									</div>
								</div>



								<div class="form-group row">
									<label class="col-form-label col-lg-2">Categoria</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control" name="id_padre">
			                            	 <option value="0">-</option>

			                            	 <?php 
					                         $qt = "SELECT * FROM categoria ORDER BY id_categoria DESC";
					                         
					                          $resultt = $mysqli->query($qt);
					                          while ($rowt = $resultt->fetch_row()){

					                            $id_nivel=$rowt[0];
					                            $nombre_nivel=$rowt[2];
					                            

					                        ?> 

			                                <option value="<?php echo $id_nivel; ?>"><?php echo $nombre_nivel; ?></option>
			                               

			                                <?php 
			                            	}
			                            	?>

			                            </select>
		                            </div>
	                        	</div>




							</fieldset>

							



							<div class="text-right">
								<button type="submit" class="btn btn-primary">Conectar <i class="icon-paperplane ml-2"></i></button>
							</div>


						</form>
					</div>
				</div>
				<!-- /form inputs -->

			</div>
			<!-- /content area -->













			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Categorias Conectadas con <b><?php echo $nombre; ?></b> </h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>


					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>ID</th>
								<th>Categoria Padre</th>
								<th>Nombre</th>
								<th>Permalink</th>
								<th>Nombre HTML</th>
								<th>-</th>
								<th>Orden</th>
								<th>Estatus</th>
								
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							

                        <?php 
                         $qt = "SELECT * FROM categoria_xml_categoria WHERE id_xml='$id' ";

                         //echo $qt;
                         
                          $resuls = $mysqli->query($qt);
                          while ($rowr = $resuls->fetch_row()){

                            $id_categoria_xml_categoria=$rowr[0];
                            $id_categoria=$rowr[1];
                  
                            $id_xml=$rowr[2];
                            $extra=$rowr[3];


	                          $qt = "SELECT * FROM categoria WHERE id_categoria='$id_categoria' ";

	                          //echo $qt;
	                         
	                          $resulr = $mysqli->query($qt);
	                          while ($rowt = $resulr->fetch_row()){

		                            $id_categoria=$rowt[0];
		                            $id_padre=$rowt[1];

		                            if($id_padre!="0"){
		                            	$q = "SELECT * FROM categoria WHERE id_categoria='$id_padre' ";
		                          		$resul = $mysqli->query($q);
		                          		while ($row = $resul->fetch_row()){
		                          			$nombre_categoria_padre=$row[2];
		                          		}
		                            }else{
		                            	$nombre_categoria_padre="-";
		                            }
		                            

		                            $nombre=$rowt[2];
		                            $permalink=$rowt[3];
		                            $nombre_html=$rowt[4];
		                            $orden=$rowt[5];
		                            $estatus=$rowt[7];

	                          }



                           

                        ?>  
							<tr id="element<?php echo $id_categoria_xml_categoria; ?>">
								<td><?php echo $id_categoria; ?></td>
								<td><?php echo $nombre_categoria_padre; ?></td>
								<td><a href="categoria_editar.php?id=<?php echo $id_categoria; ?>"><?php echo $nombre; ?></td>
								<td><?php echo $permalink; ?></td>
								<td><?php echo $nombre_html; ?></td>
								<td><?php echo "-"; ?></td>
								<td><?php echo $orden; ?></td>
								<td><?php echo $estatus_nombre; ?></td>

								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" onclick="
												Eliminar(<?php echo $id_categoria_xml_categoria; ?>,'<?php echo $completo." (".$nombre.")"; ?>');"><i class="icon-bin"></i> Desconectar</a>
												
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
