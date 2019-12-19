<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 col-sm-12 form-group has-feedback" style="color: black">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<textarea name="artikelTxt" id="artikelId" cols="30" rows="10" class="form-control" placeholder="Tulis artikelmu disini" require></textarea>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Judul Artikel</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="judulTxt" type="text" class="form-control has-feedback-left" id="judulId" placeholder="Tulis judul artikel" require>
							<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Pilih Kategory</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select name="categorySelect" id="categorySelectId" class="form-control" required="">
								<option value="0">Pilih Kategori</option>
								<option value="1">Option one</option>
								<option value="2">Option two</option>
								<option value="3">Option three</option>
								<option value="4">Option four</option>
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
								<option value="1">Option one</option>
								<option value="2">Option two</option>
								<option value="3">Option three</option>
								<option value="4">Option four</option>
							</select>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 has-feedback" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Masukan Tag <small>Pisahkan dengan koma</small></label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="TagTxt" id="TagId" class="form-control" placeholder="Masukan tag (optional) pisahkan dengan koma"></textarea>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<button id="kirimTulisArtikel" class="btn btn-success"><i class="fa fa-send"></i> Kirim Artikel</button>
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

						<img style="display: none" id="previewThumbnail" style="height: 230px; width: auto;" src="<?php echo base_url('assets/images/loading.gif') ?>"> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
