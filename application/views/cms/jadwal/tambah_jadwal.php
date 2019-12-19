<div class="row">
	<div class="col-md-8 col-sm-8 col-xs-8">
		<div class="row">
			<div class="col-md-12 col-sm-12 form-group">
				<input name="judulTxt" type="text" class="form-control has-feedback-left" id="judulId" placeholder="Tulis judul/tema kajian" require>
				<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
			</div>

			<div class="col-md-12 col-sm-12 form-group">
				<div class='input-group date' id='myDatepicker2'>
					<input id="tanggalKajian" name="" type='text' class="form-control" placeholder="Pilih tanggal kajian contoh : 19.12.2019"/>
			        <span class="input-group-addon">
			           <span class="fa fa-calendar"></span>
			        </span>
			    </div>
			</div>

			<div class="col-md-12 col-sm-12 form-group">
				<select name="subCategorySelect" id="subCategorySelectId" class="form-control" required="">
					<option value="0">Pilih Kota</option>
					<option value="1">Option one</option>
					<option value="2">Option two</option>
					<option value="3">Option three</option>
					<option value="4">Option four</option>
				</select>
			</div>

			<div class="col-md-12 col-sm-12 form-group" style="margin-top: 20px">
				<button id="kirimTulisArtikel" class="btn btn-success"><i class="fa fa-send"></i> Kirim Jadwal</button>
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
