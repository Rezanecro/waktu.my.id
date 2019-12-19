<div class="row">
	<div class="col-md-8 col-sm-8 col-xs-8">
		<div class="row">

			<div class="col-md-12 col-sm-12 form-group">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Judul atau Tema Kajian</label>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input name="judulTxt" type="text" class="form-control" id="judulId" placeholder="Tulis judul/tema kajian" require>
					<span class="fa fa-globe form-control-feedback right" aria-hidden="true"></span>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 form-group">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Tanggal Kajian</label>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input id="tanggalKajianId" name="tanggalKajianTxt" type="text" class="form-control" data-inputmask="'mask': '99-99-9999'" value="10-12-2020">
	              	<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
              	</div>
			</div>

			<div class="col-md-12 col-sm-12 form-group">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Kota Kajian Dilangsungkan</label>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<select name="kotaSelect" id="kotaSelectId" class="form-control" required="">
						<option value="0">Pilih Kota</option>
						<option value="1">Option one</option>
						<option value="2">Option two</option>
						<option value="3">Option three</option>
						<option value="4">Option four</option>
					</select>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<button id="kirimTambahJadwalBtn" class="btn btn-success"><i class="fa fa-send"></i> Kirim Jadwal</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4 col-sm-4 col-xs-4">
		<div class="row">
			<div id="pickFlyer" style="width: 100%; height: 230px; text-align: center; vertical-align: middle; line-height: 230px; background-color: #848484; color: #fff">
				<label>
					<i class="fa fa-image"></i> Pilih Flyer
					<input class="file-upload-input" type="file" name="thumbnailImgFlyer" id="thumbnailImgFlyerId" style="display: none" onchange="getFlyer(this);" accept="image/*" name="thumbnailFlyer">
				</label>
			</div>

			<img style="display: none" id="previewThumbnailFlyer" style="height: 230px; width: auto;" src="<?php echo base_url('assets/images/loading.gif') ?>"> 
		</div>
	</div>
</div>
