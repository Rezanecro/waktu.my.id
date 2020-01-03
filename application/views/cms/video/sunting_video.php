<?php if(isset($draf_video)) { foreach ($draf_video as $key => $val) { ?>

<div class="row" id="lengkapiVideoDisplay">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
			 	<video class="col-md-12 col-sm-12 form-group" controls>
				  	<source src="<?php echo base_url($val->video_path); ?>" type="video/mp4">
				  	<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video> 
			</div>
		</div>
	</div>
</div>


<div class="row" id="lengkapiVideoForm">
	<input type="hidden" name="tokenDraf" id="tokenDrafId" value="<?php echo $_GET['id']; ?>"> 
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Judul Video</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="lengkapiJudulVideoTxt" type="text" class="form-control has-feedback-left" id="lengkapiJudulVideoId" placeholder="Tulis judul video" require value="<?php echo $val->judul ?>">
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
									<?php if($val->id_kategori == $valK->id)  { ?>
									<option selected value="<?php echo $valK->id; ?>"><?php echo $valK->nama_kategori; ?></option>
									<?php } else { ?>
									<option value="<?php echo $valK->id; ?>"><?php echo $valK->nama_kategori; ?></option>
									<?php } ?>
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
							<textarea name="lengkapiTagTxt" id="lengkapiTagId" class="form-control" placeholder="Masukan tag (optional) pisahkan dengan koma"><?php echo $val->tag ?></textarea>
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

						<?php if($val->thumbnail != '')  { ?>
						<img style="width: 100%; height: auto;" id="previewThumbnail" src="<?php echo base_url($val->thumbnail) ?>">
						<?php } else { ?>
						<img style="display: none; width: 100%; height: auto;" id="previewThumbnail" src="<?php echo base_url('assets/images/loading.gif') ?>">
						<?php } ?>
						
					</div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
					<div class="col-md-12 col-sm-12 col-xs-12 has-feedback">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Deskripsi</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="lengkapiDeskripsiTxt" id="lengkapiDeskripsiId" class="form-control" placeholder="Deskripsi video"><?php echo $val->deskripsi ?></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
					<div class="col-md-12 col-sm-12 col-xs-12 form-group">
						<button id="kirimLengkapiVideo" class="btn btn-success"><i class="fa fa-play"></i> Lengkapi Video</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php } }?>