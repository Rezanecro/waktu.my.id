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
		<!-- jQuery -->
	    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
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


	    <!-- Custom Theme Style -->
	    <link href="<?php echo base_url('build/css/custom.min.css') ?>" rel="stylesheet">
	    <link href="<?php echo base_url('assets/css/master.css') ?>" rel="stylesheet">

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

	    <!-- Bootstrap -->
	   	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	    <!-- NProgress -->
	    <script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
	    <!-- jQuery custom content scroller -->
	    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	    <!-- Custom Theme Scripts -->
	    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

		<!-- jQuery Tags Input -->
		<script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>

		<script type="text/javascript">
		// image upload
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
		// end image upload

		jQuery(document).ready(function($){
		// Click button to activate hidden file input
		$('.fileuploader-btn').on('click', function(){
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
				$('body').append('<video src="' + fileContent + '" width="320" height="240" controls></video>');
			}
			// Get the selected video from Dialog
			reader.readAsDataURL(this.files[0]);
		});
		});
	    </script>

	</body>
</html>
