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
					<div class="col-md-4 col-sm-4 form-group has-feedback">
						<div class="row">
							<div class="col-md-6 col-sm-6 form-group">
							<label class="btn btn-info">
								<i class="fa fa-image"></i> Pilih Flyer Kajian
								<input class="file-upload-input" type="file" name="thumbnailImg" id="thumbnailImgId" style="display: none" onchange="readURL(this);" accept="image/*" name="thumbnail">
							</label>
						</div>
						<div class="col-md-6 col-sm-6 form-group">
							<img id="previewThumbnail" style="height: 65px; width: auto;">
						</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 form-group">
						<div class="x_panel">
						  <div class="x_title">
							<h2>Acara </h2>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							  <div class="row" style="margin-top: 20px">
								  <div class="col-md-3 col-sm-3 form-group">
									  <label>Penyelenggara</label>
									   <input type="text" class="form-control" placeholder="Nama Penyelenggara">
								  </div>
								  <div class="col-md-5 col-sm-5 form-group">
									  <label>Judul Kajian</label>
									   <input type="text" class="form-control" placeholder="Tema/Judul Kajian">
								  </div>
								  <div class="col-md-3 col-sm-3 form-group">
									  <label>Pengisi Kajian</label>
									   <input type="text" class="form-control" placeholder="Narasumber/Ustadz/Ustadzah">
								  </div>
								  <div class="checkbox" style="margin-top:40px;margin-left:30px;">
									  <label>
										  <input type="checkbox" class="flat" style="width:50px;height:50px;">&nbsp;&nbsp;&nbsp;Rutin
									  </label>
								  </div>
							  </div>
						  </div>
						</div>
					</div>
					<br>
					<div class="col-md-12 col-sm-12 form-group">
						<div class="x_panel">
					  <div class="x_title">
						<h2>Waktu dan Jenis Kajian</h2>

						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						  <div class="row calendar-exibit">
							  <div class="col-md-3 col-sm-3 form-group">
								  <fieldset>
									  <div class="control-group">
										  <div class="controls">
											  <label>Tanggal Kajian</label>
											  <div class="col-md-11 xdisplay_inputx form-group has-feedback">
												  <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="" aria-describedby="inputSuccess2Status4">
												  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
												  <span id="inputSuccess2Status4" class="sr-only">(success)</span>
											  </div>
										  </div>
									  </div>
								  </fieldset>
							  </div>
							  	<div class='col-md-2 col-sm-2 form-group'>
								  <label>Jam Kajian</label>
									  <div class="form-group">
										  <div class='input-group date' id='myDatepicker3'>
											  <input type='text' class="form-control" />
											  <span class="input-group-addon">
												  <span class="fa fa-clock-o"></span>
											  </span>
										  </div>
									  </div>
								</div>
								<div class='col-md-2 col-sm-2 form-group'>
									<div class="form-group">
										<label>Jenis Kajian</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control">
												<option>Gratis</option>
												<option>Berbayar</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-sm-2 form-group">
									<label>Biaya Kajian</label>
									 <input type="text" class="form-control" placeholder="0">
								</div>
								<div class="col-md-2 col-sm-2 form-group">
									<label>Quota Peserta</label>
									 <input type="text" class="form-control" placeholder="0">
								</div>
						  </div>
					  </div>
					</div>
					</div>
					<div class="col-md-12 col-sm-12 form-group">
						<div class="x_panel">
						  <div class="x_title">
							<h2>Tempat/Lokasi Kajian</h2>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							  <div class="row">
								  <div class="col-md-2 col-sm-2 form-group">
									  <label>Nama Kota</label>
									   <input type="text" class="form-control" placeholder="Kota Tempat Kajian">
								  </div>
								  <div class="col-md-4 col-sm-4 form-group">
									  <label>Nama Tempat</label>
									  <input type="text" class="form-control" placeholder="Contoh : Masjid Raya Bintaro">
								  </div>
								  <div class="col-md-6 col-sm-6 form-group">
									  <label>Google Map Url</label>
									   <input type="text" class="form-control" placeholder="https://www.google.com/maps">
								  </div>
							  </div>
						  </div>
						</div>
					</div>

					<br><br>
					<div class="col-md-12 col-sm-12 form-group">
						<button type="submit" class="btn btn-success">Kirim</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
