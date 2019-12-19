<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					
					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Nama Masjid</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" id="NamaMasjidiId" name="namaMasjidTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis nama masjid yang butuh donasi">
							<span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Kebutuhan Dana</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="number" id="danaId" name="danaTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis kebutuhan dana">
							<span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Kota Lokasi Masjid</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select name="kotaSelect" id="kotaId" class="form-control" required="">
								<option value="0">Pilih Kota</option>
							</select>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Kecamatan Lokasi Masjid</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select name="kecamatanSelect" id="KecamatanId" class="form-control" required="">
								<option value="0">Pilih Kecamatan</option>
							</select>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Alamat Masjid</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea id="AlamatId" name="alamatTxt" required="required" class="form-control" placeholder="Tulis alamat masjid"></textarea>	
						</div>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Deskripsi Donasi</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea type="number" id="deskripsiId" name="deskripsiTxt" required="required" class="form-control" placeholder="Tulis deskripsi donasi"></textarea>	
						</div>
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
						<button id="tambahDonasiBtn" class="btn btn-success"><i class="fa fa-bookmark"></i> Unggah Permohonan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
