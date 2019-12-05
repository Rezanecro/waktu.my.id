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

		<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

	    <!-- bootstrap-wysiwyg -->
	    <link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
	    <!-- Select2 -->
	    <link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
	    <!-- Switchery -->
	    <link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
	    <!-- starrr -->
	    <link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">

	    <!-- bootstrap-progressbar -->
	    <link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
	    <!-- JQVMap -->
	    <link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
	    <!-- bootstrap-daterangepicker -->
	    <link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('build/css/custom.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('assets/css/master.css') ?>" rel="stylesheet">
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

		<!-- Chart.js -->
		<script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
		<!-- gauge.js -->
		<script src="<?php echo base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
		<!-- bootstrap-progressbar -->
		<script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
		<!-- Skycons -->
		<script src="<?php echo base_url('vendors/skycons/skycons.js') ?>"></script>
		<!-- Flot -->
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
		<!-- Flot plugins -->
		<script src="<?php echo base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
		<!-- DateJS -->
		<script src="<?php echo base_url('vendors/DateJS/build/date.js') ?>"></script>
		<!-- JQVMap -->
		<script src="<?php echo base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
		<script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js') ?>"></script>
		<!-- jQuery Tags Input -->
		<script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
		<!-- Switchery -->
		<script src="<?php echo base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
		<!-- Select2 -->
		<script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>
		<!-- Parsley -->
		<script src="<?php echo base_url('vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
		<!-- Autosize -->
		<script src="<?php echo base_url('vendors/autosize/dist/autosize.min.js') ?>"></script>
		<!-- jQuery autocomplete -->
		<script src="<?php echo base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
		<!-- starrr -->
		<script src="<?php echo base_url('vendors/starrr/dist/starrr.js') ?>"></script>
		<script type="text/javascript">
		var btnUpload = $("#upload_file"),
		    btnOuter = $(".button_outer");
		btnUpload.on("change", function(e){
		    var ext = btnUpload.val().split('.').pop().toLowerCase();
		    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
		        $(".error_msg").text("Not an Image...");
		    } else {
		        $(".error_msg").text("");
		        btnOuter.addClass("file_uploading");
		        setTimeout(function(){
		            btnOuter.addClass("file_uploaded");
		        },3000);
		        var uploadedFile = URL.createObjectURL(e.target.files[0]);
		        setTimeout(function(){
		            $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
		        },3500);
		    }
		});
		$(".file_remove").on("click", function(e){
		    $("#uploaded_view").removeClass("show");
		    $("#uploaded_view").find("img").remove();
		    btnOuter.removeClass("file_uploading");
		    btnOuter.removeClass("file_uploaded");
		});
		</script>
	</body>
</html>
