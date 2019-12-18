$(document).ready(function() {
	
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