<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12" id="previewVideo">
			<center id="previewDropzone"></center>
			<center id="actionButton">
				<button id="unggahVideoBtn" class="btn btn-info"><i class="fa fa-upload"></i> Upload</button>
				<a class="btn btn-warning" href="<?php echo base_url('panel/video/unggah') ?>"><i class="fa fa-times"></i> Cancel</a>
			</center>

			<div id="uploadProgress" class="progress-bar progress-bar-striped bg-danger" role="progressbar">
				<i id="uploadProgressTxt"></i>
			</div>
		</div>


		<div class="image-upload-wrap" id="dropVideo">
			<div class="drag-text">
				<form action='/'  class="dropzone" id="dropZoneVideo" style="min-height: 0px">
					<!-- <div class="dropzone-previews" id="showVideo"></div> -->
					<div class="dz-message" data-dz-message><span>
						<h1>DRAG DAN DROP / PILIH VIDEO DISINI</h1> 
					</span></div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row" id="videoForm" style="display: none;">
	<input type="hidden" name="tokenDraf" id="tokenDrafId">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Judul Video</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="lengkapiJudulVideoTxt" type="text" class="form-control has-feedback-left" id="lengkapiJudulVideoId" placeholder="Tulis judul video" require>
							<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Pilih Kategory</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select name="categorySelect" id="categorySelectId" class="form-control" required="">
								<option selected="" value="0">Pilih Kategori</option>
								<?php if(isset($kategori)) { foreach($kategori as $keyK => $valK) { ?>
									<option value="<?php echo $valK->id; ?>"><?php echo $valK->nama_kategori; ?></option>
								<?php } } ?>
							</select>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Pilih Sub Kategory</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select name="subCategorySelect" id="subCategorySelectId" class="form-control" required="">
								<option value="0">Pilih Sub Kategori</option>
							</select>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 has-feedback" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Masukan Tag <small>Pisahkan dengan koma</small></label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="lengkapiTagTxt" id="lengkapiTagId" class="form-control" placeholder="Masukan tag (optional) pisahkan dengan koma"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4" style="margin-top: 60px">
					<div class="row">
						<div id="pickThumb" style="width: 100%; height: 230px; text-align: center; vertical-align: middle; line-height: 230px; background-color: #848484; color: #fff">
							<label>
								<i class="fa fa-image"></i> Pilih Flyer
								<input class="file-upload-input" type="file" name="thumbnailImg" id="thumbnailImgId" style="display: none" onchange="getThumb(this);" accept="image/*" name="thumbnail">
							</label>
						</div>

						<img style="display: none; width: 100%; height: auto;" id="previewThumbnail" src="<?php echo base_url('assets/images/loading.gif') ?>">
					</div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
					<div class="col-md-12 col-sm-12 col-xs-12 has-feedback">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Deskripsi</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="lengkapiDeskripsiTxt" id="lengkapiDeskripsiId" class="form-control" placeholder="Deskripsi video"></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
					<div class="col-md-12 col-sm-12 col-xs-12 form-group">
						<button id="kirimLengkapiVideo" class="btn btn-success"><i class="fa fa-play"></i> Unggah Video</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- <div id="errorModal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel2">Modal title</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Text in a modal</h4>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>

		</div>
	</div>
</div> -->