<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
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

				<div class="row">

					<?php if(isset($video)) { foreach ($video as $key => $val) { ?>

					<?php if($val->stat == 'draf') { 
						$thumbnail = base_url('assets/images/draf.jpg');
						$deskripsi = 'Video belum lengkap';
					} else { 
						$thumbnail = base_url($val->thumbnail);
						$deskripsi = substr($val->deskripsi, 0, 80).'...';
					} ?>
                  	<div class="col-md-4 col-sm-4 col-xs-4">
                    	<div class="thumbnail">
                      		<div class="image view view-first">
                        		<img style="width: 100%; display: block;" src="<?php echo $thumbnail; ?>" alt="<?php echo $val->judul; ?>" />
                    			<div class="mask">
                      				<p><?php echo ucwords(substr($val->judul, 0, 20).'...'); ?></p>

                      				<?php if($val->stat == 'draf') { ?>
                      				<div class="tools tools-bottom">
                        				<a href="<?php echo base_url('panel/video/draf?id='.$val->token); ?>"><i class="fa fa-edit"></i> Lengkapi</a>
                      				</div>
                      				<?php } elseif($val->stat == 'tayang') { ?>
                  					<div class="tools tools-bottom">
                        				<a href="<?php echo base_url($val->short_url); ?>"><i class="fa fa-link"></i></a>
                        				<a href="<?php echo base_url('panel/video/sunting?id='.$val->token); ?>"><i class="fa fa-pencil"></i></a>
                        				<a href="<?php echo base_url($val->short_url); ?>"><i class="fa fa-times"></i></a>
                      				</div>
                                    <?php } else { ?>
                                    <div class="tools tools-bottom">
                                      <a href="<?php echo base_url('panel/video/lihat?id='.$val->token); ?>"><i class="fa fa-eye"></i> Lihat</a>
                                    </div>
                      				<?php } ?>
                    			</div>
                  			</div>
                  			<div class="caption">
                    			<p><?php echo $deskripsi; ?></p>
                  			</div>
                		</div>
              		</div>
              		<?php } } ?>

                </div>
        	</div>
      	</div>
	</div>
</div>
