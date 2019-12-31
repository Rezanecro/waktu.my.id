$(document).ready(function() {
	var thumbnailImg = $("#thumbnailImgId").prop("files")[0];

	var reader  = new FileReader();
	reader.addEventListener("load", function () {
    	$('#pickThumb').show().attr('src', reader.result)
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

	// var xhr = new XMLHttpRequest();

	var data = new FormData();

	if(
		artikeltxt.length !== 0 &&
		judulTxt.length !== 0 &&
		categorySelect !== '0' &&
		categorySelect !== 'Pilih Kategori' &&
		categorySelect.length !== 0 &&
		subCategorySelect !== '0' &&
		subCategorySelect !== 'Pilih Sub Kategori' &&
		subCategorySelect.length !== 0 &&
		thumbnailImg !== undefined) {

		data.append('artikelTxt', artikeltxt);
		data.append('judulTxt', judulTxt);
		data.append('categorySelect', categorySelect);
		data.append('subCategorySelect', subCategorySelect);
		data.append('TagTxt', TagTxt);
		data.append('thumbnailImg', thumbnailImg);


		$.ajax({
			type 	: 'POST',
			url 	: baseUrl+'ajax/artikel/tulis',
			data 	: data,
			processData: false,
    		contentType: false,
			beforeSend : function(){
				// $('#spinner').show();
			},
			success	: function(response){
				console.log(response);
				// $('#spinner').hide();
			}
		});

	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});
