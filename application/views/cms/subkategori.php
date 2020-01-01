<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 form-group">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<label>Nama Sub Kategori</label>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<input name="subKategoriTxt" type="text" class="form-control has-feedback-left" id="subKategoriId" placeholder="Tulis nama subkategori" require>
				<span class="fa fa-bars form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 form-group" style="margin-top: 5px">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<label>Pilih Kategory <small>relasi</small></label>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<select name="categorySelect" id="categorySelectId" class="form-control" required="">
					<option selected="" value="0">Pilih Kategori</option>
					<?php if(isset($kategori)) { foreach($kategori as $keyK => $valK) { ?>
						<option value="<?php echo $valK->id; ?>"><?php echo $valK->nama_kategori; ?></option>
					<?php } } ?>
				</select>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 5px">
			<div class="col-md-12 col-sm-12 col-xs-12 form-group">
				<button id="kirimTambahSubKategori" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Subkategori</button>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 form-group">
			<div class="x_content">
				<div class="x_panel">
              		<div class="x_title">
	                    <ul class="nav navbar-right panel_toolbox">
                      		<li class="dropdown">
                        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-print"></i> Export</a>
                    			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                            	<a class="dropdown-item" href="#">Spreadsheet</a>
	                            	<a class="dropdown-item" href="#">PDF</a>
                          		</div>
                      		</li>
                		</ul>
                		<div class="clearfix"></div>
              		</div>

              		<div class="x_content">

	                	<div class="table-responsive">
	                  		<table class="table table-striped jambo_table bulk_action">
	                    		<thead>
	                      			<tr class="headings">
			                            <th class="column-title">ID Kategori</th>
			                            <th class="column-title">ID Sub-Kategori</th>
			                            <th class="column-title">Nama Kategori</th>
			                            <th class="column-title">Nama Sub-Kategori</th>
			                            <th class="column-title no-link last">
			                            	<span class="nobr">Action</span>
			                            </th>
	                      			</tr>
	                    		</thead>

	                    		<tbody>

	                      			<tr class="even pointer">
			                            <td class=" ">1</td>
			                            <td class=" ">10</td>
			                            <td class=" ">Kisah</td>
			                            <td class=" ">Kisah Nabi</td>
			                            <td class=" ">
			                            	<a href="<?php echo base_url('panel/kategori/subkategori/sunting'); ?>"><i class="fa fa-pencil"></i> Sunting</a>
			                            	|
			                            	<a href="<?php echo base_url('panel/kategori/subkategori/hapus'); ?>"><i class="fa fa-trash"></i> Hapus</a>
			                            </td>
	                      			</tr>
	                      			
	                    		</tbody>
	                  		</table>
	                	</div>
                	</div>
              	</div>
          	</div>
		</div>
	</div>
</div>
