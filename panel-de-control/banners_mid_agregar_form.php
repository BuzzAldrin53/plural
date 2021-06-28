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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Banners Medium</span> - Agregar</h4>
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
							<a href="usuarios.php" class="breadcrumb-item">Banners Medium</a>
							<span class="breadcrumb-item active">Agregado</span>
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
						<h5 class="card-title">Banner Medium agregado (<?php echo $nombre; ?>)</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $tmpFile = $_FILES['file']['tmp_name'];

                        $archivo = $timestamp."_".$_FILES['file']['name'];

                        $newFile = '../uploads/'.$archivo;

                        //echo $newFile;
                        $extension=substr($newFile,-3,3);
                        //echo " <br>                       EXT: ".$extension."      -  <br>";


                        $result = move_uploaded_file($tmpFile, $newFile);
                        //echo $_FILES['file']['name'];
                        if ($result) {
                            //echo ' was uploaded<br />';
                        } else {
                            //echo ' failed to upload<br />';
                        }


                        $url = "http://pluralmkt.mx/uploads/".$archivo;


                        if($extension=="jpg"){
							 // Obtener los nuevos tamaños
							list($ancho, $alto) = getimagesize($newFile);
							
							$elancho=800;
							$nuevo_ancho = $elancho;
							$nuevo_alto = ($alto/$ancho)*$elancho;
							$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							$origen = imagecreatefromjpeg($newFile);

							imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo);


							$elancho=400;
							$nuevo_ancho = $elancho;
							$nuevo_alto = ($alto/$ancho)*$elancho;
							$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							$origen = imagecreatefromjpeg($newFile);

							imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo);

							$elancho=200;
							$nuevo_ancho = $elancho;
							$nuevo_alto = ($alto/$ancho)*$elancho;
							$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							$origen = imagecreatefromjpeg($newFile);

							imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo);

							$elancho=100;
							$nuevo_ancho = $elancho;
							$nuevo_alto = ($alto/$ancho)*$elancho;
							$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							$origen = imagecreatefromjpeg($newFile);

							imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagejpeg($thumb, '../uploads/'.$elancho.'_'.$archivo);




                        }



                    }
                    ?>

					<?php

                    //echo "<br>timestamp: ".$timestamp."<br>";

                    if($extension=="pdf"){
                        $icono = "http://sdm-robotics.com/intranet/pdf.png";
                    }


					$qt = "INSERT INTO `home_banner_mid` (`id_banner_mid`, `titulo`, `imagen`, `url`, `orden`)
					 VALUES (NULL, '$titulo', '$url', '$link', '$orden');";
					$resultt = $mysqli->query($qt);

                    //echo $qt;


					?>

					<style type="text/css">
						h2{
							margin-bottom: 3px;
						}
					</style>

					<div class="card-body">
						<p class="mb-4">
							
							Este banner ha sido agregado a la <code>Intranet</code>

						</p>


						<div>
							<h2>Tiulo de documento:</h2> 
							<?php echo $nombre; ?>

							<br><br>

							<h2>Descripción del documento:</h2> 
							<?php echo $descripcion; ?>


							<br><br>

							<h2>Categoría:</h2> 
							<?php echo $categoria_nombre; ?>

                            <br><br>

							<h2>Área:</h2> 
							<?php echo $nombre_nivel; ?>



                            <div style="margin: 20px; margin-botttom:50px;">

                                    <div style="margin: 20px; margin-botttom:50px; float: left; width: 180px; height: 250px; text-align: center;">
                                        
                                        <a href="<?php echo $url; ?>" target="_blank">
                                            <img src="<?php echo $icono; ?>" height="220">
                                        </a>

                                        <br><br>

                                        <a href="<?php echo $url; ?>" download >
                                            Descargar
                                        </a>



                                        
                                        <br><br>

                                        <?php echo $nombre; ?>
                                    </div>




                                    <div style="width: 70%; float: left;">

                                        <img src="<?php echo $url; ?>" width="100%" >

                                    </div>

                                    <div style="clear:both;"></div>
                            </div>


                            <br><br>
                            <br><br>



						</div>
						


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
