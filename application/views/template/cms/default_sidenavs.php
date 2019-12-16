<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
 		<div class="navbar nav_title" style="border: 0;">
			<a href="<?php echo base_url('cms'); ?>" class="site_title"><i class="fa fa-gears"></i> <span style="font-size: 20px;">Waktu Panel</span></a>
		</div>

		<div class="clearfix"></div>
		<!-- menu profile quick info -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>Konten</h3>
				<ul class="nav side-menu">
					<li><a href="<?php echo base_url('cms') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

					<li><a><i class="fa fa-bookmark"></i> Artikel <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/artikel/tulis') ?>">Tulis Artikel</a></li>
							<li><a href="<?php echo base_url('panel/artikel/daftar') ?>">Daftar Artikel</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-play"></i> Video <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/video/unggah') ?>">Unggah Video</a></li>
							<li><a href="<?php echo base_url('panel/video/daftar') ?>">Daftar Video</a></li>
						</ul>
					</li>
				</ul>

				<br>
				<h3>Jual Beli</h3>
				<ul class="nav side-menu">
					<li><a href="<?php echo base_url('panel/etalase') ?>"><i class="fa fa-home"></i> Etalase</a></li>

					<li><a><i class="fa fa-cart-arrow-down"></i> Jual Barang<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/etalase/tambah') ?>">Tambah Barang</a></li>
							<li><a href="<?php echo base_url('panel/etalase/daftar') ?>">Daftar Barang</a></li>
						</ul>
					</li>
				</ul>

				<br>
				<h3>Kajian</h3>
				<ul class="nav side-menu">
					<li><a><i class="fa fa-calendar"></i> Jadwal<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/jadwal/tambah') ?>">Tambah Jadwal</a></li>
							<li><a href="<?php echo base_url('panel/jadwal/daftar') ?>">Daftar Jadwal</a></li>
						</ul>
					</li>
				</ul>

				<br>
				<h3>Donasi</h3>
				<ul class="nav side-menu">
					<li><a><i class="fa fa-dollar"></i> Permintaan Donasi<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/donasi/permintaan') ?>">Tambah Permintaan Donasi</a></li>
							<li><a href="<?php echo base_url('panel/donasi/daftar') ?>">Daftar Permintaan Donasi</a></li>
						</ul>
					</li>
				</ul>

				<br>
				<h3>Moderator</h3>
				<ul class="nav side-menu">
					<li><a><i class="fa fa-user"></i> Pengguna <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/pengguna/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/pengguna/disetujui') ?>">Daftar Pengguna Disetujui</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-bookmark"></i> Artikel <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/artikel/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/artikel/disetujui') ?>">Daftar Artikel Disetujui</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-play"></i> Video <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/video/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/video/disetujui') ?>">Daftar Video Disetujui</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-cart-arrow-down"></i> Jual Barang<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/etalase/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/etalase/disetujui') ?>">Daftar Barang Disetujui</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-calendar"></i> Jadwal<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/jadwal/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/jadwal/disetujui') ?>">Daftar Jadwal Disetujui</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-dollar"></i> Donasi<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('panel/moderasi/donasi/menunggu') ?>">Menunggu Moderasi</a></li>
							<li><a href="<?php echo base_url('panel/moderasi/donasi/disetujui') ?>">Daftar Permintaan Disetujui</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Sidebar Menu -->

		<!-- menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Profil" href="<?php echo base_url('panel/pengguna/profil') ?>">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Pengaturan" href="<?php echo base_url('panel/pengguna/pengaturan') ?>">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Dashboard" href="<?php echo base_url('cms') ?>">
				<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Keluar" href="<?php echo base_url('panel/pengguna/keluar') ?>">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>