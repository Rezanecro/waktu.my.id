<div class="row">

	<div class="col-md-4 col-sm-4 col-xs-4 profile_left">
      	<div class="profile_img">
            <div id="crop-avatar">
              	<!-- Current avatar -->
              	<img class="img-responsive avatar-view" src="<?php echo base_url('assets/images/img.jpg') ?>" alt="Avatar" title="Change the avatar">
            </div>
      	</div>
      	<h3>Samuel Doe</h3>

      	<ul class="list-unstyled user_data">
        	<li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA</li>
        	<li><i class="fa fa-briefcase user-profile-icon"></i> Software Engineer</li>
      	</ul>

      	<!-- start skills -->
      	<h4>Skills</h4>
  		<ul class="list-unstyled user_data">
        	<li><p>Web Applications</p></li>
	        <li><p>Website Design</p></li>
	        <li><p>Automation & Testing</p></li>
	        <li><p>UI / UX</p></li>
      	</ul>
	      <!-- end of skills -->
    </div>

	<div class="col-md-8 col-sm-8 col-xs-8">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 col-sm-12 form-group">
						<input name="namaTokoTxt" type="text" class="form-control has-feedback-left" id="namaTokoId" placeholder="Tulis nama toko" require>
						<span class="fa fa-cart-arrow-down form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-12 col-sm-12 form-group">
						<input name="nomorTelponTxt" type="text" class="form-control has-feedback-left" id="nomorTelponId" placeholder="Tulis nomor telepon toko" require>
						<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
						</div>

					<div class="col-md-12 col-sm-12 form-group">
						<textarea name="alamatTxt" id="alamatId" class="form-control" placeholder="Tilis alamat toko anda"></textarea>
					</div>

					<div class="col-md-12 col-sm-12 form-group">
						<textarea name="deskripsiTxt" id="deskripsiId" class="form-control" placeholder="Tulis deskripsi toko anda"></textarea>
					</div>

					<div class="col-md-12 col-sm-12 form-group">
						<button id="etalaseFormBtn" type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>