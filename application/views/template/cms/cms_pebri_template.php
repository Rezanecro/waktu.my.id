<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title ?></title>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap -->
	    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	    <!-- NProgress -->
	    <link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	    <!-- jQuery custom content scroller -->
	    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet"/>

	    <!-- TABELE -->
	    <link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">

	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	</head>
	<body class="nav-md">

		<div class="container body">
			<div class="main_container">
				<?php echo $sidenavs ?>
				<?php echo $navs ?>
				<!-- Page Content -->
				<div class="right_col" role="main">
					<div>
						<div class="page-title">
							<div class="title_left">
								<h3><?php echo $header ?></h3>
							</div>
							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php echo $content ?>
					</div>
				</div>
				<!-- /Page Content -->
				<!-- Footer Content -->
				<footer>
					<div class="pull-right">
						<?php echo $footer; ?>
					</div>
			        <div class="clearfix"></div>
				</footer>
				<!-- /Footer Content -->
			</div>
		</div>

		<!-- jQuery -->
	    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
	    <!-- Bootstrap -->
	   	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	    <!-- FastClick -->
	    <script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
	    <!-- NProgress -->
	    <script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
	    <!-- jQuery custom content scroller -->
	    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>

	    <!-- Custom Theme Scripts -->
	    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

	    <!-- Datatables -->
	    <script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
	</body>
</html>