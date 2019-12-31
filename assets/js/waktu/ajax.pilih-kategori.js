$(document).ready(function() {

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

$("#etalaseFormBtn").on("click", function() {
	var namaTokoTxt			= $('#namaTokoId').val();
	var nomorTelponTxt		= $('#nomorTelponId').val();
	var alamatTxt 			= $('#alamatId').val();
	var deskripsiTxt		= $('#deskripsiId').val();

	if(
		namaTokoTxt.length !== 0 &&
		nomorTelponTxt.length !== 0 &&
		alamatTxt.length !== 0 &&
		deskripsiTxt.length !== 0) {

		console.log('ada')
		
	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});

function pilih_kategori(argument) {
	// body...
}