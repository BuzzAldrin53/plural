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
    		
		});

		function Eliminar(t_id,t_completo){
			//alert("Eliminar; "+t_id);

			var r = confirm("Estás seguro que deseas eliminar la categoria: "+t_completo);
			if (r == true) {
			  txt = "You pressed OK!";

			  	$.ajax({url: "categoria_eliminar.php?id="+t_id, success: function(result){
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Categorias</span> - Listado</h4>
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

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">XML Categorias</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						La lista de <code>Categorias</code> del <code>XML</code>.
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>ID</th>
								<th>Ref</th>
								<th>Nombre</th>
								<th>Categorias</th>
								<th>-</th>
								
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							

                        <?php 
                         $qt = "SELECT * FROM xml_categorias ORDER BY id_categoria DESC";
                         
                          $resultt = $mysqli->query($qt);
                          while ($rowt = $resultt->fetch_row()){

                            $id_categoria=$rowt[0];
                            $ref=$rowt[1];
                       
                            $nombre=$rowt[2];
                            $extra=$rowt[3];
                            $ref_int=$rowt[4];

                           

                        ?>  
							<tr id="element<?php echo $id_categoria; ?>">
								<td><?php echo $id_categoria; ?></td>
								<td><?php echo $ref_int; ?></td>
								<td><a href="xml_categoria_conectar.php?id=<?php echo $ref_int; ?>"><?php echo $nombre; ?></td>
								
								<td>


									<?php 

										 $qt = "SELECT * FROM categoria_xml_categoria WHERE id_xml='$ref_int' ";

                         //echo $qt;
										 $cc=0;
                         
				                          $resuls = $mysqli->query($qt);
				                          while ($rowr = $resuls->fetch_row()){

							                            $id_categoria_xml_categoria=$rowr[0];
							                            $id_categoria=$rowr[1];
							                  
							                            $id_xml=$rowr[2];
							                            $extra=$rowr[3];


								                          $qt = "SELECT * FROM categoria WHERE id_categoria='$id_categoria' ";

								                          //echo $qt;
								                         
								                          $resulr = $mysqli->query($qt);
								                          while ($rowr = $resulr->fetch_row()){

									                            $id_categoria=$rowr[0];
									                            $id_padre=$rowr[1];

									                            if($id_padre!="0"){
									                            	$q = "SELECT * FROM categoria WHERE id_categoria='$id_padre' ";
									                          		$resul = $mysqli->query($q);
									                          		while ($row = $resul->fetch_row()){
									                          			$nombre_categoria_padre=$row[2];
									                          		}
									                            }else{
									                            	$nombre_categoria_padre="-";
									                            }
									                            

									                            $nombre=$rowr[2];
									                            $permalink=$rowr[3];
									                            $nombre_html=$rowr[4];
									                            $orden=$rowr[5];
									                            $estatus=$rowr[7];

								                          }	

								                          if($cc==0){
								                          	echo "-".$nombre;
								                          }else{
								                          	echo "<br>-".$nombre;
								                          }

								                          $cc++;

					                      }

									?>
									



								</td>

								<td><?php echo "-"; ?></td>

								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												
												<a href="xml_categoria_conectar.php?id=<?php echo $ref_int; ?>" class="dropdown-item"><i class="icon-pencil4"></i> Conectar</a>
												
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
