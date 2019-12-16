<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					
					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<input type="text" id="NamaMasjidiId" name="NamaMasjidTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis nama masjid yang butuh donasi">
						<span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<input type="number" id="danaId" name="danaTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis kebutuhan dana">
						<span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<select name="kondisiSelect" id="kondisiId" class="form-control" required="">
							<option>Pilih Kota</option>
						</select>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<select name="KecamatanSelect" id="KecamatanId" class="form-control" required="">
							<option>Pilih Kecamatan</option>
						</select>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<textarea id="AlamatId" name="AlamatTxt" required="required" class="form-control" placeholder="Tulis alamat masjid"></textarea>	
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<textarea type="number" id="deskripsiId" name="deskripsiTxt" required="required" class="form-control" placeholder="Tulis deskripsi donasi"></textarea>	
					</div>

					<div class="col-md-12 col-sm-12">
						<div class="image-upload-wrap">
							<div class="drag-text">
								<form action='/'  class="dropzone" id="dropZoneDonasi" style="min-height: 0px">
									<!-- <div class="dropzone-previews" id="showVideo"></div> -->
									<div class="dz-message" data-dz-message><span>
										<h2>DRAG DAN DROP / PILIH GAMBAR MASJID DAN KEBUTUHAN DISINI <small>max 5</small></h2>
									</span></div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<button type="submit" class="btn btn-success"><i class="fa fa-bookmark"></i> Unggah Permohonan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
