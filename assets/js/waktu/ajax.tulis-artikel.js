$(document).ready(function() {
	$("#modlasPeringatan").on('hide.bs.modal', function () {
    	$('#kodeResponse').html('');
		$('#pesanResponse').html('');
    });


	var thumbnailImg = $("#thumbnailImgId").prop("files")[0];

	var reader  = new FileReader();
	reader.addEventListener("load", function () {
    	$('#pickThumb').show().attr('src', reader.result)
  	}, false);

  	if (thumbnailImg) {
    	reader.readAsDataURL(thumbnailImg);
  	}
});

// $('#myModal').on('shown.bs.modal', function () {
//   console.log('shown')
// })

$("#kirimTulisArtikel").on("click", function(e) {
	var artikeltxt			= $('#artikelId').summernote('code');
	var judulTxt			= $('#judulId').val();
	var categorySelect 		= $('#categorySelectId').find('option:selected').val();
	var subCategorySelect 	= $('#subCategorySelectId').find('option:selected').val();
	var TagTxt				= $('#TagId').val();
	var thumbnailImg 		= $("#thumbnailImgId").prop("files")[0];

	var formData = new FormData();

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

		formData.append('artikelTxt', artikeltxt);
		formData.append('judulTxt', judulTxt);
		formData.append('categorySelect', categorySelect);
		formData.append('subCategorySelect', subCategorySelect);
		formData.append('TagTxt', TagTxt);
		formData.append('thumbnailImg', thumbnailImg);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/artikel/tulis",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {

		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

		   		if(response.code === 200) {
		   			$('#modlasBerhasil').modal('show');

			  		$('#kodeResponseBerhasil').append(response.code);
					$('#pesanResponseBerhasil').append(response.msg);
		   		} else {
		   			$('#modlasPeringatan').modal('show');

			  		$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
		   		}	
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
		    	jQuery("#modalsLoading").modal('hide');
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
