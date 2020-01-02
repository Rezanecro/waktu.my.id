$(document).ready(function() {

	if(pageOn === 'kategori') {
		data_kategori();
	} else if(pageOn === 'subkategori') {
		data_sub_kategori();
	}

	$("#modlasPeringatan").on('hide.bs.modal', function () {
    	$('#kodeResponse').html('');
		$('#pesanResponse').html('');
    });

    $("#modalsSuntingKategori").on('hide.bs.modal', function () {
    	$('#namaKategoriId').val('');
		$('#iDkategori').val('');
    });
});

$("#kirimTambahKategori").on("click", function() {
	var kategoriTxt	= $('#kategoriId').val();

	if(
		kategoriTxt.length !== 0) {

		var formData = new FormData();
		formData.append('kategoriTxt', kategoriTxt);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/kategori/tambah",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

	    
		    	// $('#modlasPeringatan').modal('show');

		    	// $('#kodeResponse').append(response.code);
				// $('#pesanResponse').append(response.msg);

				$('#kategoriId').val('');
				if(response.code === 200) {
					location.reload();
				} else {
					$('#modlasPeringatan').modal('show');

			    	$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
				}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(textStatus);
				$('#pesanResponse').append(errorThrown);
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown);
		    }
		});
	} else {
		$('#modlasPeringatan').modal('show');

		$('#kodeResponse').append(404);
		$('#pesanResponse').append('Ada form yang kosong, mohon diisi');
		console.log('Ada form yang kosong, mohon diisi');
	}
});

$("#kirimTambahSubKategori").on("click", function() {
	var subKategoriTxt	= $('#subKategoriId').val();
	var categorySelect 	= $('#categorySelectId').find('option:selected').val();

	if(
		subKategoriTxt.length !== 0 &&
		categorySelect !== '0' &&
		categorySelect !== 'Pilih Kategori') {

		var formData = new FormData();
		formData.append('subKategoriTxt', subKategoriTxt);
		formData.append('categorySelect', categorySelect);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/subkategori/tambah",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

				if(response.code === 200) {
					location.reload();
				} else {
					$('#modlasPeringatan').modal('show');

			    	$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
				}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(textStatus);
				$('#pesanResponse').append(errorThrown);
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown);
		    }
		});
	} else {
		$('#modlasPeringatan').modal('show');

		$('#kodeResponse').append(404);
		$('#pesanResponse').append('Ada form yang kosong, mohon diisi');
		console.log('Ada form yang kosong, mohon diisi');
	}
});


$("#perbaruiDataKategori").on("click", function() {
	var namaKategoriTxt	= $('#namaKategoriId').val();
	var idTxt			= $('#iDkategori').val();

	if(
		namaKategoriTxt.length !== 0 &&
		idTxt.length !== 0) {

		var formData = new FormData();
		formData.append('namaKategoriTxt', namaKategoriTxt);
		formData.append('idTxt', idTxt);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/kategori/sunting",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

				if(response.code === 200) {
					location.reload();
				} else {
					$('#modlasPeringatan').modal('show');

			    	$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
				}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(textStatus);
				$('#pesanResponse').append(errorThrown);
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown);
		    }
		});
	} else {
		$('#modlasPeringatan').modal('show');

		$('#kodeResponse').append(404);
		$('#pesanResponse').append('Ada form yang kosong, mohon diisi');
		console.log('Ada form yang kosong, mohon diisi');
	}
});


$("#perbaruiDataSubKategori").on("click", function() {
	var ubahIdSubTxt		= $('#ubahIdSub').val();
	var ubahNamaSubTxt		= $('#ubahNamaSub').val();
	var ubahSelectCategory 	= $('#ubahSelectCategoryId').find('option:selected').val();

	if(
		ubahIdSubTxt.length !== 0 &&
		ubahNamaSubTxt.length !== 0 &&
		ubahSelectCategory !== '0' &&
		ubahSelectCategory !== 'Pilih Kategori') {

		var formData = new FormData();
		formData.append('ubahIdSubTxt', ubahIdSubTxt);
		formData.append('ubahNamaSubTxt', ubahNamaSubTxt);
		formData.append('ubahSelectCategory', ubahSelectCategory);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsSuntingSubKategori').modal('hide');
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/subkategori/sunting",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

				if(response.code === 200) {
					location.reload();
				} else {
					$('#modlasPeringatan').modal('show');

			    	$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
				}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(textStatus);
				$('#pesanResponse').append(errorThrown);
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown);
		    }
		});
	} else {
		$('#modlasPeringatan').modal('show');

		$('#kodeResponse').append(404);
		$('#pesanResponse').append('Ada form yang kosong, mohon diisi');
		console.log('Ada form yang kosong, mohon diisi');
	}
});



$('#categorySelectId').on('change', function() {

	if(pageOn === 'tulis_artikel' || pageOn === 'unggah_video') {
		var formData = new FormData();
		formData.append('id_kategori', this.value);
		
		$.ajax({
	    	beforeSend: function() {
	    		// $('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/artikel/sub",
		    data: formData,
		    processData: false,
			contentType: false,
		    success: function(response) {
		    	// Remove options 
	          	$('#subCategorySelectId').find('option').not(':first').remove();

	      		// Add options
	      		var res = response.datas;
	      		var i;
	          	for(i=0; i < res.length; i++) {
	            	$('#subCategorySelectId').append('<option value="'+res[i].id_sub+'">'+res[i].nama_sub+'</option>');
	          	}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown);
		    }
		});
	} else {
		console.log('on change');
	}
});


function data_kategori() {
	var formData = new FormData();
	formData.append('aksi', 'data_kategori');

	$.ajax({
    	beforeSend: function() {
    		// $('#modalsLoading').modal('show');
    	},
	    type: "POST",
	    url: baseUrl+"ajax/kategori/data",
	    data: formData,
	    processData: false,
		contentType: false,
	    success: function(response) {
	    	if(response.code === 200) {

	    		// INIT
	    		let dataTabel = ''; 

	    		// EACH
	    		$.each(response.datas, function(idx, res) {
                    dataTabel += '<tr class="even pointer">';
                    dataTabel += '<td>'+res.id+'</td>';
                    dataTabel += '<td>'+res.nama+'</td>';
                    dataTabel += '<td>';
                    dataTabel += "<button onClick=suntingKategori("+res.id+",'"+res.nama+"')><i class=fa fa-pencil></i> Sunting</button>";
                    dataTabel += '<button onClick="hapusKategori('+res.id+')"><i class="fa fa-trash"></i> Hapus</button>';
                    dataTabel += '</td>';
                    dataTabel += '</tr>';
                });

	            $('#loadDataKategori').html(dataTabel);
	    	} else {
    			$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(response.code);
				$('#pesanResponse').append(response.msg);
	    	}
	    },
	    error: function(XMLHttpRequest, textStatus, errorThrown) {
	    	$('#modlasPeringatan').modal('show');

	    	$('#kodeResponse').append(textStatus);
			$('#pesanResponse').append(errorThrown);
	        console.log("Status: " + textStatus);
	        console.log("Error: " + errorThrown);
	    }
	});
}

function data_sub_kategori() {
	var formData = new FormData();
	formData.append('aksi', 'data_sub_kategori');

	$.ajax({
    	beforeSend: function() {
    		// $('#modalsLoading').modal('show');
    	},
	    type: "POST",
	    url: baseUrl+"ajax/subkategori/data",
	    data: formData,
	    processData: false,
		contentType: false,
	    success: function(response) {
	    	if(response.code === 200) {

	    		// INIT
	    		let dataTabel = ''; 

	    		// EACH
	    		$.each(response.datas, function(idx, res) {
                    dataTabel += '<tr class="even pointer">';
                    dataTabel += '<td>'+res.id_kategori+'</td>';
                    dataTabel += '<td>'+res.id+'</td>';
                    dataTabel += '<td>'+res.nama_kategori+'</td>';
                    dataTabel += '<td>'+res.nama+'</td>';
                    dataTabel += '<td>';
                    dataTabel += "<button onClick=suntingSubKategori("+res.id_kategori+","+res.id+",'"+res.nama+"')><i class=fa fa-pencil></i> Sunting</button>";
                    dataTabel += '<button onClick="hapusSubKategori('+res.id+')"><i class="fa fa-trash"></i> Hapus</button>';
                    dataTabel += '</td>';
                    dataTabel += '</tr>';
                });

	            $('#loadDataSubKategori').html(dataTabel);
	    	} else {
    			$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(response.code);
				$('#pesanResponse').append(response.msg);
	    	}
	    },
	    error: function(XMLHttpRequest, textStatus, errorThrown) {
	    	$('#modlasPeringatan').modal('show');

	    	$('#kodeResponse').append(textStatus);
			$('#pesanResponse').append(errorThrown);
	        console.log("Status: " + textStatus);
	        console.log("Error: " + errorThrown);
	    }
	});
}

// ON EMBED KATEGORI
function suntingKategori(id, nama) {
	$('#modalsSuntingKategori').modal('show');
	$('#namaKategoriId').val(nama);
	$('#iDkategori').val(id);
}

function hapusKategori(argument) {
	console.log('argument '+ argument)
}

// ON EMBED SUB KATEGORI
function suntingSubKategori(id_kategori, id_sub, nama_sub) {
	$('#modalsSuntingSubKategori').modal('show');

	$('#ubahIdSub').val(id_sub);
	$('#ubahNamaSub').val(nama_sub);

	$('#ubahSelectCategoryId option[value="'+id_kategori+'"]').prop('selected', true);
}

function hapusSubKategori(argument) {
	console.log('argument '+ argument)
}