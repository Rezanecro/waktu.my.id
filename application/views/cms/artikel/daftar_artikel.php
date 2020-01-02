<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile alert alert-success">
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
			                            <th class="column-title">Short URL</th>
			                            <th class="column-title">Judul</th>
			                            <th class="column-title">Kategori</th>
			                            <th class="column-title">Sub Kategori</th>
										<th class="column-title">Status </th>
										 <td class=" ">12 Desember 2019</td>
			                            <th class="column-title no-link last">
			                            	<span class="nobr">Action</span>
			                            </th>
	                      			</tr>
	                    		</thead>

	                    		<tbody>
	                    			<?php if(isset($artikel)) { foreach ($artikel as $key => $val) { ?>
	                      			<tr class="even pointer">
			                            <td class=" "><a href="http://waktu.my.id/<?php echo $val->short_url; ?>"><?php echo $val->short_url; ?></a></td>
			                            <td class=" "><?php echo ucwords($val->judul); ?></td>
			                            <td class=" "><?php echo ucwords($val->nama_kategori); ?></td>
			                            <td class=" "><?php echo ucwords($val->nama_sub_kategori); ?></td>
			                            <td class=" ">
			                            	<?php if($val->stat == 'moderasi') { 
			                            		echo '<span class="badge badge-warning">Menunggu Moderasi</span>';
			                            	} elseif ($val->stat == 'tolak') { 
			                            		echo '<span class="badge badge-danger">Ditolak</span>'; 
			                            	} elseif ($val->stat == 'blok') { 
			                            		echo '<span class="badge badge-danger">Diblok</span>';
			                            	} elseif ($val->stat == 'tayang') {
			                            		echo '<span class="badge badge-success">Tayang</span>';
			                            	}
			                            	?>
			                            	
			                            	
										</td>
										<td class=" ">12 Desember 2019</td>
			                            <td class=" ">
			                            	<ul class="nav nav-pills" role="tablist">
                    							<li role="presentation" class="dropdown">
                      								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px">Action<span class="caret"></span></a>
                              						<div class="dropdown-menu">

                              							<?php if($val->stat == 'moderasi') { 
						                            		echo '<a class="dropdown-item" href="#">Lihat</a>';
						                            	} elseif ($val->stat == 'tolak') { 
						                            		echo '<a class="dropdown-item" href="#">Lihat</a>'; 
						                            	} elseif ($val->stat == 'blok') { 
						                            		echo '<a class="dropdown-item" href="#">Lihat</a>';
						                            	} elseif ($val->stat == 'tayang') {
						                            		echo '<a class="dropdown-item" href="#">Lihat</a>';
						                            		echo '<a class="dropdown-item" href="#">Edit</a>';
						                            		echo '<a class="dropdown-item" data-toggle="modal" data-target=".modalaLihat1">Hapus</a>';
						                            	}
						                            	?>

                                  					</div>
                    							</li>
                  							</ul>
			                            </td>

			                            <!-- Small modal -->
					                  	<div class="modal fade modalaLihat1" tabindex="-1" role="dialog" aria-hidden="true" style="color: #000">
					                    	<div class="modal-dialog modal-sm">
					                      		<div class="modal-content">

					                        		<div class="modal-header">
					                          			<h4 class="modal-title" id="myModalLabel2">Hapus Artikel</h4>
					                          			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					                        		</div>
					                        		<div class="modal-body">
					                          			<h4>Apa anda yakin ingin menghapus konten ini ?</h4>
					                        		</div>
					                        		<div class="modal-footer">
					                          			<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					                          			<button type="button" class="btn btn-danger">Hapus</button>
					                        		</div>

					                      		</div>
				                    		</div>
					                  	</div>
				                  		<!-- /modals -->
	                      			</tr>

	                      			<?php } } ?>
	                    		</tbody>
	                  		</table>
	                	</div>
                	</div>
              	</div>
          </div>
        </div>
	</div>
</div>
