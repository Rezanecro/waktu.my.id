<style media="screen">
	label{
		font-size: 18px;
	}
</style>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<form class="form-horizontal form-label-left">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 col-sm-12 form-group">
						<div class="x_panel">
						  <div class="x_title">
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							  <div class="row" style="margin-top: 20px">
								  <div class="col-md-12 col-sm-12 form-group">
									  <label>Judul Kajian</label>
									   <input id="judulKajian" name="" type="text" class="form-control" placeholder="Tema/Judul Kajian">
								  </div>
							  </div>
						  </div>
						</div>
					</div>
					<br>
					<div class="col-md-12 col-sm-12 form-group">
						<div class="x_panel">
					  <div class="x_title">
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						  <div class="row">
							<div class='col-sm-4'>
								<label>Tanggal Kajian</label>
								<div class="form-group">
								    <div class='input-group date' id='myDatepicker2'>
								        <input id="tanggalKajian" name="" type='text' class="form-control" />
								        <span class="input-group-addon">
								           <span class="fa fa-calendar"></span>
								        </span>
								    </div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 form-group">
							  <label>Nama Kota</label>
							   <input id="kotaKajian" name="" type="text" class="form-control" placeholder="Kota Tempat Kajian">
							</div>
							<div class="col-md-4 col-sm-4 form-group has-feedback">
								<div class="row">
									<div class="col-md-6 col-sm-6 form-group">
										<label style="margin-top:35px;" class="btn btn-info">
											<i class="fa fa-image"></i> Pilih Flyer Kajian
											<input class="file-upload-input" type="file" name="thumbnailImg" id="thumbnailImgId" style="display: none" onchange="readURL(this);" accept="image/*" name="thumbnail">
										</label>
									</div>
									<div class="col-md-6 col-sm-6 form-group">
										<img id="previewThumbnail" style="height: 110px; width: auto;">
									</div>
								</div>
							</div>
						  </div>
					  </div>
					</div>
					</div>

					<br><br>
					<div class="col-md-12 col-sm-12 form-group">
						<button id="kirimJadwal" type="submit" class="btn btn-success">Kirim</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
