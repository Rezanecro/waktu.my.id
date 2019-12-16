<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 col-sm-12 form-group has-feedback" style="color: black">
					<textarea name="artikelTxt" id="artikelId" cols="30" rows="10" class="form-control" placeholder="Tulis artikelmu disini" require></textarea>
				</div>
				<div class="col-md-12 col-sm-12 form-group">
					<input name="judulTxt" type="text" class="form-control has-feedback-left" id="judulId" placeholder="Tulis judul artikel" require>
					<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>

					<div class="row" style="margin-top: 20px">
						<div class="col-md-6 col-sm-6 form-group">
							<select name="categorySelect" id="categorySelectId" class="form-control" required="">
								<option value="0">Pilih kategori</option>
								<option value="1">Option one</option>
								<option value="2">Option two</option>
								<option value="3">Option three</option>
								<option value="4">Option four</option>
							</select>
						</div>

						<div class="col-md-6 col-sm-6 form-group">
							<select name="subCategorySelect" id="subCategorySelectId" class="form-control" required="">
								<option value="0">Pilih sub kategori</option>
								<option value="1">Option one</option>
								<option value="2">Option two</option>
								<option value="3">Option three</option>
								<option value="4">Option four</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-sm-8 form-group has-feedback">
					<textarea name="TagTxt" id="TagId" class="form-control" placeholder="Masukan tag (optional) pisahkan dengan koma"></textarea>
				</div>

				<div class="col-md-4 col-sm-4 form-group has-feedback">
					<div class="row">
						<div class="col-md-6 col-sm-6 form-group">
						<label class="btn btn-info">
							<i class="fa fa-image"></i> Pilih Cover
							<input class="file-upload-input" type="file" name="thumbnailImg" id="thumbnailImgId" style="display: none" onchange="readURL(this);" accept="image/*" name="thumbnail">
						</label>
					</div>
					<div class="col-md-6 col-sm-6 form-group">
						<img id="previewThumbnail" style="height: 65px; width: auto;"> 
					</div>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 form-group">
					<button id="kirimTulisArtikel" class="btn btn-success"><i class="fa fa-send"></i> Kirim</button>
				</div>
			</div>
		</div>
	</div>
</div>
