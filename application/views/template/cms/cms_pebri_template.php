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

			$('#previewVideo').hide();
		});

        Dropzone.autoDiscover = false;
      	var errors = false;
      	var myDropzone = new Dropzone("#dropZoneVideo" , {
      		maxFiles: 1,
        	paramName: "videoUpload",
        	acceptedFiles: ".mp4,.mkv,.avi",
        	init: function(){

	            this.on("addedfile", function(filenya) {
    	      		this.on("queuecomplete", function (file) {
		            	if(filenya.type == 'video/mp4') {
		            		var reader = new FileReader();
					        reader.onload = function(event) {
					            console.log('addedfile');
					            $('#previewVideo').show();
					            $('#dropVideo').hide();	
					            $('#previewDropzone').html('<video width="400" controls><source src="'+event.target.result+'" type="video/mp4"></video><input name="videBlobFormat" type="hidden" value="'+event.target.result+'">');
					        };
					        reader.readAsDataURL(filenya);
		            	} else {
		            		if (!filenya.accepted) {
		            			alert('File bukan format video');
			            		this.removeFile(filenya);
			            	}
		            	}
			      	});      	
	            });

	            this.on("removedfile", function() {
	            	console.log('hapus file');
	            });

	            this.on("error", function(file) {
	            	if (!file.accepted) {
	            		this.removeFile(file);
	            	}
	            });
	        },
      	});

      	function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					var image = new Image();
				    image.src = e.target.result;
				    image.onload = function() {
				        var imageWidth = this.width;
				        if(imageWidth < 700) {
				        	alert('Ukuran gambar kurang dari 700 pixel')
				        } else {
				        	$('#previewThumbnail')
				        	.show()
				        	.attr('src', e.target.result)
				        }
				    };
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</body>
</html>
