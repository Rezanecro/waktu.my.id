$(document).ready(function() {
	var thumbnailImg = $("#thumbnailImgFlyerId").prop("files")[0];

	var reader  = new FileReader();
	reader.addEventListener("load", function () {
		$('#previewThumbnailFlyer').hide();
    	$('#previewThumbnailFlyer').show().attr('src', reader.result)
  	}, false);

  	if (thumbnailImg) {
    	reader.readAsDataURL(thumbnailImg);
  	}
});

$('#kirimTambahJadwalBtn').on('click', function(){
    var judulTxt 			= $('#judulId').val();
    var tanggalKajianTxt 	= $('#tanggalKajianId').val();
    var kotaSelect 			= $('#kotaSelectId').find('option:selected').val();
    var thumbnailImgFlyer 	= $("#thumbnailImgFlyerId").prop("files")[0];

    if( judulTxt.length !== 0 &&
		tanggalKajianTxt.length !== 0 &&
		kotaSelect.length !== 0 &&
		kotaSelect !== '0' &&
		kotaSelect !== 'Pilih Kota' &&
		thumbnailImgFlyer !== undefined) {

		console.log(thumbnailImgFlyer)

	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});
