$(document).ready(function() {
	
});

$("#UnggahJualanBtn").on("click", function() {
	var namaBarangTxt		= $('#NamaBarangId').val();
	var hargaTxt			= $('#hargaId').val();
	var stokTxt 			= $('#stokId').val();
	var kondisiSelect 		= $('#kondisiId').find('option:selected').val();
	var deskripsiTxt		= $('#deskripsiId').val();
	var gambarBarang		= myDropzoneBarang.files; // array

	if(
		namaBarangTxt.length !== 0 &&
		hargaTxt.length !== 0 &&
		stokTxt.length !== 0 &&
		kondisiSelect !== '0' &&
		kondisiSelect !== 'Pilih Kondisi' &&
		kondisiSelect.length !== 0 &&
		deskripsiTxt.length !== 0 &&
		gambarBarang.length !== 0) {

		console.log('ada')
		
	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});