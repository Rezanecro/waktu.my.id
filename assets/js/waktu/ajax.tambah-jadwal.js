$(document).ready(function() {
	var thumbnailImg = $("#thumbnailImgId").prop("files")[0];

	var reader  = new FileReader();
	reader.addEventListener("load", function () {
    	$('#previewThumbnail').show().attr('src', reader.result)
  	}, false);

  	if (thumbnailImg) {
    	reader.readAsDataURL(thumbnailImg);
  	}
});

$('#kirimJadwal').on('click', function(){
    var judul = $('#judulKajian').val();
    var tempat = $('#kotaKajian').val();
    var tanggal = $('#tanggalKajian').val();
    var thumbnailImg 		= $("#thumbnailImgId").prop("files")[0];

    if( judul.length !== 0 &&
		tempat.length !== 0 &&
		tanggal.length !== 0 &&
		thumbnailImg !== undefined) {

		console.log('ada')

	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});
