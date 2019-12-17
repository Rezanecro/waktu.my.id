$(document).ready(function() {
	
});

$("#tambahDonasiBtn").on("click", function() {
	var namaMasjidTxt		= $('#NamaMasjidiId').val();
	var danaTxt				= $('#danaId').val();
	var kotaSelect 			= $('#kotaId').find('option:selected').val();
	var kecamatanSelect 	= $('#KecamatanId').find('option:selected').val();
	var alamatTxt			= $('#AlamatId').val();
	var deskripsiTxt		= $('#deskripsiId').val();
	var gambarKeadaan		= myDropzoneDonasi.files; // array

	console.log(kotaSelect)

	if(
		namaMasjidTxt.length !== 0 &&
		danaTxt.length !== 0 &&
		kotaSelect !== '0' &&
		kotaSelect !== 'Pilih Kota' &&
		kotaSelect.length !== 0 &&
		kecamatanSelect !== '0' &&
		kecamatanSelect !== 'Pilih Kecamatan' &&	
		kecamatanSelect.length !== 0 &&
		alamatTxt.length !== 0 &&
		deskripsiTxt.length !== 0 &&
		gambarKeadaan.length !== 0) {

		console.log('ada')
		
	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});