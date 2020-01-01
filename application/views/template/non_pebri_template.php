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
	    <!-- Animate.css -->
    	<link href="<?php echo base_url('vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	</head>
	<?php echo $content ?>

	<!-- Small modal -->
  	<div id="modlasPeringatan" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">

	        	<div class="modal-header">
	          		<h4>Perhatikan</h4>
	          		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	        	</div>
	        	<div class="modal-body">
	          		<h4 id="kodeResponse"></h4>
	          		<p id="pesanResponse"></p>
	        	</div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
	        	</div>

  			</div>
    	</div>
  	</div>
  	<!-- /modals -->

  	<!-- Small modal -->
  	<div id="modalsLoading" class="modal fade bs-example-modal-sm" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<h4><center>Mohon tunggu</center></h4>
	          		<center><img src="<?php echo base_url('assets/images/loading.gif'); ?>"></center>
	        	</div>
  			</div>
    	</div>
  	</div>
  	<!-- /modals -->


	<script type="text/javascript">
		console.log('<?php if(isset($aktif)) { echo $aktif; } else { echo base_url(); } ?>');
	</script>
	<script type="text/javascript">var baseUrl = '<?php echo base_url(); ?>';</script>


	<!-- jQuery -->
	<script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>


	<?php if(isset($aktif)) { if($aktif == 'masuk') { ?>
		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.masuk.js') ?>"></script>
  	<?php } } ?>

  	<?php if(isset($aktif)) { if($aktif == 'register') { ?>
		<!-- AJAX -->
  		<script src="<?php echo base_url('assets/js/waktu/ajax.register.js') ?>"></script>
  	<?php } } ?>
</html>