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


	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/pickers/color/spectrum.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="full/assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/picker_color.js"></script>
	<!-- /theme JS files -->


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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Banner de categoria</span> - Agregar</h4>
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
							<a href="novedades.php" class="breadcrumb-item">Banner de categoria</a>
							<span class="breadcrumb-item active">Agregar</span>
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
						<h5 class="card-title">Banner de categoria Agregar</h5>
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
							

						</p>

						<form action="baner_categoria_agregar_form.php"  enctype="multipart/form-data" method="POST">

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Rellena los campos</legend>




								<div class="form-group row">
									<label class="col-form-label col-lg-2">Categoria</label>
									<div class="col-lg-10">
										<select name="id_categoria" class="form-control">
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

								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Orden (0-100)</label>
									<div class="col-lg-10">
										<input  type="text" class="form-control"  autocomplete="off" value="0" name="orden">
									</div>
								</div>



                                <?php 
                                $fecha = date_create();
                                $timestamp = date_timestamp_get($fecha);
                                ?>

                                <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>" />

								<legend class="text-uppercase font-size-sm font-weight-bold">Archivo (.jpg) </legend>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Elegir archivo</label>
									<div class="col-lg-10">
										<input type="file" name="file" class="form-control">
									</div>
								</div>
		                       

								


							</fieldset>



							<div class="text-right">
								<button type="submit" class="btn btn-primary">Agregar <i class="icon-paperplane ml-2"></i></button>
							</div>


						</form>
					</div>
				</div>
				<!-- /form inputs -->

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
