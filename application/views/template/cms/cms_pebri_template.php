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
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
	<!-- Bootstrap -->
	<link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
  	<link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
  	<!-- bootstrap-datetimepicker -->
  	<link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">
	<!-- iCheck -->
    <link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	<!-- jQuery custom content scroller -->
	<link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet"/>
	<!-- Dropzone.js -->
	<link href="<?php echo base_url('vendors/dropzone/dist/min/dropzone.min.css') ?>" rel="stylesheet">
	<!-- SUMMERNOTE -->
	<!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/summernote/dist/summernote.css') ?>" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/master.css') ?>" rel="stylesheet">
	<style type="text/css">
		.dz-max-files-reached {background-color: red};
	</style>
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
	<!-- iCheck -->
    <script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- NProgress -->
	<script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
	<!-- jQuery custom content scroller -->
	<script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	<!-- Dropzone.js -->
	<script src="<?php echo base_url('vendors/dropzone/dist/min/dropzone.min.js') ?>"></script>
	<!-- SUMMERNOTE -->
	<script src="<?php echo base_url('vendors/summernote/dist/summernote.min.js') ?>"></script>
	<!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>


	<?php if(isset($aktif)) { if($aktif == 'tulis_artikel') { ?>
		<!-- SUMMERNOTE -->
		<script src="<?php echo base_url('assets/js/waktu/summernote-conf.js') ?>"></script>
		<!-- THUMBNAIL -->
		<script src="<?php echo base_url('assets/js/waktu/image-thum.js') ?>"></script>
		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.tulis-artikel.js') ?>"></script>
  	<?php } } ?>

	<?php if(isset($aktif)) { if($aktif == 'tambah_jadwal') { ?>
		<!-- THUMBNAIL -->
		<script src="<?php echo base_url('assets/js/waktu/image-thum.js') ?>"></script>
	    <!-- bootstrap-datetimepicker -->
		<script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
	    <script src="<?php echo base_url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.tambah-jadwal.js') ?>"></script>
  	<?php } } ?>

  	<?php if(isset($aktif)) { if($aktif == 'unggah_video') { ?>
		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.unggah-video.js') ?>"></script>
  		<!-- DROPZONE -->
        <script src="<?php echo base_url('assets/js/waktu/dropzone-unggah-video.js') ?>"></script>
  	<?php } } ?>

  	<?php if(isset($aktif)) { if($aktif == 'permintaan_donasi') { ?>
  		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.tambah-donasi.js') ?>"></script>
  		<!-- DROPZONE -->
		<script src="<?php echo base_url('assets/js/waktu/dropzone-donasi.js') ?>"></script>
  	<?php } } ?>

  	<?php if(isset($aktif)) { if($aktif == 'tambah_jualan') { ?>
  		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.tambah-barang.js') ?>"></script>
  		<!-- DROPZONE -->
  		<script src="<?php echo base_url('assets/js/waktu/dropzone-tabah-barang.js') ?>"></script>
  	<?php } } ?>

  	<?php if(isset($aktif)) { if($aktif == 'etalase') { ?>
  		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.etalase.js') ?>"></script>
  	<?php } } ?>

	<script type="text/javascript">
		console.log('<?php if(isset($aktif)) { echo $aktif; } else { echo base_url(); } ?>');
		$(document).ready(function() {
			$('#previewVideo').hide();
		});

		// DateTimePicker
		$('#myDatepicker2').datetimepicker({
         format: 'DD.MM.YYYY'
     });

	</script>
</body>
</html>
