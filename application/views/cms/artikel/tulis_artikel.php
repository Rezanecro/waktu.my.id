<form class="form-horizontal form-label-left">
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="right_col" role="main">
			<div class="">
				<div class="clearfix"></div>
				<div class="row">
				<div class="col-md-12 ">
					<div class="x_panel">
						<div class="x_content"><br />
						<div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 "><h2>Judul :</h2></label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" class="form-control">
							</div>
						</div>
							<div class="form-group row ">
								<h2 style="margin-left:10px;">Isi Artikel :</h2>

								<div class="x_content">
									<div id="alerts"></div>
									<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
										<div class="btn-group">
											<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
											<ul class="dropdown-menu">
											</ul>
										</div>
										<div class="btn-group">
											<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li>
													<a data-edit="fontSize 5">
														<p style="font-size:17px">Huge</p>
													</a>
												</li>
												<li>
													<a data-edit="fontSize 3">
														<p style="font-size:14px">Normal</p>
													</a>
												</li>
												<li>
													<a data-edit="fontSize 1">
														<p style="font-size:11px">Small</p>
													</a>
												</li>
											</ul>
										</div>
									<div class="btn-group">
										<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
										<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
										<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
										<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
									</div>
									<div class="btn-group">
										<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
										<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
										<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
										<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
									</div>
									<div class="btn-group">
										<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
										<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
										<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
										<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
									</div>
									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
										<div class="dropdown-menu input-append">
											<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
											<button class="btn" type="button">Add</button>
										</div>
										<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
									</div>
									<div class="btn-group">
										<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
										<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
									</div>
									<div class="btn-group">
										<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
										<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
									</div>
									</div>
									<div id="editor-one" class="editor-wrapper"></div>
									<textarea name="descr" id="descr" style="display:none;"></textarea>
								<br />
								</div>
							</div>
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 "><h2>Kategori</h2></label>
							<div class="col-md-9 col-sm-9 ">
								<select class="form-control">
									<option></option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 "><h2>Sub Kategori</h2></label>
							<div class="col-md-9 col-sm-9 ">
								<select class="form-control">
									<option></option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
								</select>
							</div>
						</div>
						<div class="control-group row">
							<label class="control-label col-md-3 col-sm-3 "><h2 style="margin-left:10px;">Tags</h2></label>
							<div class="col-md-9 col-sm-9 ">
								<input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
								<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
							</div>
						</div>
						<!-- UPLOAD GAMBAR -->
						<div class="panel">
							<div class="button_outer">
								<div class="btn_upload">
								<input type="file" id="upload_file" name="">
									Upload Gambar Artikel
								</div>
								<div class="processing_bar"></div>
							<div class="success_box"></div>
							</div>
						</div>
						<div class="error_msg"></div>
						<div class="uploaded_file_view" id="uploaded_view">
							<span class="file_remove">X</span>
						</div>
						<!-- END UPLOAD GAMBAR -->
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-9 col-sm-9  offset-md-3">
								<button type="button" class="btn btn-primary">Cancel</button>
								<button type="reset" class="btn btn-primary">Reset</button>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
