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

$("#kirimTulisArtikel").on("click", function() {
	var artikeltxt			= $('#artikelId').summernote('code');
	var judulTxt			= $('#judulId').val();
	var categorySelect 		= $('#categorySelectId').find('option:selected').val();
	var subCategorySelect 	= $('#subCategorySelectId').find('option:selected').val();
	var TagTxt				= $('#TagId').val();
	var thumbnailImg 		= $("#thumbnailImgId").prop("files")[0];

	// if(
	// 	artikeltxt.length !== 0 ||
	// 	judulTxt.length !== 0 ||
	// 	categorySelect != '0' ||
	// 	categorySelect.length !== 0 ||
	// 	subCategorySelect != '0' ||
	// 	subCategorySelect.length !== 0 ||
	// 	thumbnailImg.length !== 0) {

		
	// } else {
	// 	console.log('kosong')
	// }

	if(subCategorySelect.toString() === 0) {	
		console.log('=== ya')
		console.log(subCategorySelect)
	} else {
		console.log('!== no')
		console.log(subCategorySelect)
	}
});