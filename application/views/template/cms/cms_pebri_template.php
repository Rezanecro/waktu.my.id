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
	    <!-- Font Awesome -->
	    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	    <!-- NProgress -->
	    <link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	    <!-- jQuery custom content scroller -->
	    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet"/>
	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	    <!-- SUMMERNOTE -->
	    <link href="<?php echo base_url('vendors/summernote/dist/summernote.css') ?>" rel="stylesheet">


		<style media="screen">
	        .file-drag-handle {

	            display: none;
	        }
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
	    <!-- Bootstrap -->
	   	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	    <!-- NProgress -->
	    <script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
	    <!-- jQuery custom content scroller -->
	    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	    <!-- Custom Theme Scripts -->
	    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	    <!-- NSUMMERNOTE -->
	    <script src="<?php echo base_url('vendors/summernote/dist/summernote.min.js') ?>"></script>

	    <script type="text/javascript">
	    	$(document).ready(function() {
		  		$('#artikelId').summernote({
			        placeholder: 'Tulis artikel anda disini',
			        minHeight: 400,
			        height: 100,
			        toolbar: [
				        ['para', ['ul', 'ol']],
				        ['insert', ['link', 'picture', 'video']],
				    ]
		      	});
			});

			// upload video
			jQuery(document).ready(function($){
			// Click button to activate hidden file input
			$('#fileuploader-btn').on('click', function(){
				$('.fileuploader').click();
			});
			// Click above calls the open dialog box
			// Once something is selected the change function will run
			$('.fileuploader').change(function(){
				// Create new FileReader as a variable
				var reader = new FileReader();
				// Onload Function will run after video has loaded
				reader.onload = function(file){
					var fileContent = file.target.result;
					$('.vidview').append('<video src="' + fileContent + '" width="650" height="auto" controls></video><br><br><button class="btn btn-success">Simpan</button>');
					$('#fileuploader-btn').hide();
				}
				// Get the selected video from Dialog
				reader.readAsDataURL(this.files[0]);
			});
		});
	    </script>

	</body>
</html>
