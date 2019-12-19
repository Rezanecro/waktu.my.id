$(document).ready(function() {
	
});

$("#UnggahJualanBtn").on("click", function() {
	var namaBarangTxt		= $('#NamaBarangId').val();
	var hargaTxt			= $('#hargaId').val();
	var stokTxt 			= $('#stokId').val();
	var kondisiSelect 		= $('#kondisiId').find('option:selected').val();
	var deskripsiTxt		= $('#deskripsiId').val();
	var gambarBarang		= myDropzoneBarang.files; // array

	var formData = new FormData();
    

	if(
		namaBarangTxt.length !== 0 &&
		hargaTxt.length !== 0 &&
		stokTxt.length !== 0 &&
		kondisiSelect !== '0' &&
		kondisiSelect !== 'Pilih Kondisi' &&
		kondisiSelect.length !== 0 &&
		deskripsiTxt.length !== 0 &&
		gambarBarang.length !== 0) {

		// FORM DATA
		formData.append('namaBarangTxt', namaBarangTxt);
		formData.append('hargaTxt', hargaTxt);
		formData.append('stokTxt', stokTxt);
		formData.append('kondisiSelect', kondisiSelect);
		formData.append('deskripsiTxt', deskripsiTxt);

		for (var i = 0; i< gambarBarang.length; i++) {
			formData.append('gambarBarang_'+i, gambarBarang[i]);
		}

		console.log(formData);

		$.ajax({
	    	beforeSend: function() {
	    		console.log('1. beforeSend')
	    	},
		    type: "POST",  
		    url: baseUrl+"ajax/etalase/tambah",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response){  
		        console.log('2. response')  
		        console.log(response)  
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) { 
		        console.log("Status: " + textStatus);
		        console.log("Error: " + errorThrown); 
		    }       
		});
		
	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});