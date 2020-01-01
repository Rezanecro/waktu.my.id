$(document).ready(function() {

	data_kategori();

	$("#modlasPeringatan").on('hide.bs.modal', function () {
    	$('#kodeResponse').html('');
		$('#pesanResponse').html('');
    });

    $('#suntingKategori').on("click", function() {
    	console.log('aaaaaaaaaaaaaaaaaaa')
	var id_kategory = $(this).attr('data-btoa');
	console.log(id_kategory);
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
		    url: baseUrl+"ajax/pengguna/register",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

	    
		    	$('#modlasPeringatan').modal('show');

		    	$('#kodeResponse').append(response.code);
				$('#pesanResponse').append(response.msg);
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
                    dataTabel += '<button onClick="suntingKategori('+res.id+')"><i class="fa fa-pencil"></i> Sunting</button>';
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

// ON EMBED
function suntingKategori(argument) {
	console.log('argument '+ argument)
}

function hapusKategori(argument) {
	console.log('argument '+ argument)
}