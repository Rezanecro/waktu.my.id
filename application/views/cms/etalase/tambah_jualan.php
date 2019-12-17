<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12"> 
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					
					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<input type="text" id="NamaBarangId" name="namaBarangTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis nama barang yang ingin dijual">
						<span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<input type="number" id="hargaId" name="hargaTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis harga barang yang ingin dijual">
						<span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<input type="number" id="stokId" name="stokTxt" required="required" class="form-control has-feedback-left" placeholder="Tulis stok barang yang ingin dijual">
						<span class="fa fa-cart-plus form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 form-group" style="margin-top: 30px">
						<select name="kondisiSelect" id="kondisiId" class="form-control" required="">
							<option value="0">Pilih Kondisi</option>
							<option value="baru">Baru</option>
							<option value="bekas">Bekas</option>
						</select>
					</div>

					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<textarea type="number" id="deskripsiId" name="deskripsiTxt" required="required" class="form-control" placeholder="Tulis deskripsi barang yang ingin dijual"></textarea>	
					</div>
					
					<div class="col-md-12 col-sm-12">
						<div class="image-upload-wrap">
							<div class="drag-text">
								<form action='/'  class="dropzone" id="dropZoneBarang" style="min-height: 0px">
									<!-- <div class="dropzone-previews" id="showVideo"></div> -->
									<div class="dz-message" data-dz-message><span>
										<h2>DRAG DAN DROP / PILIH GAMBAR BARANG DISINI <small>max 5</small></h2>
									</span></div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 form-group" style="margin-top: 30px">
						<button id="UnggahJualanBtn" class="btn btn-success"><i class="fa fa-cart-plus"></i> Unggah Jualan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
