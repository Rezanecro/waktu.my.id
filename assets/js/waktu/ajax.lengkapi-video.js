$(document).ready(function() {

	if(pageOn === 'sunting_video') {
		$('#modalsPeringatanSunting').modal('show');
	}

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

$('#kirimLengkapiVideo').on('click', function(){
	var tokenDraf				= $('#tokenDrafId').val();
	var lengkapiJudulVideoTxt	= $('#lengkapiJudulVideoId').val();
	var categorySelect 			= $('#categorySelectId').find('option:selected').val();
	var subCategorySelect 		= $('#subCategorySelectId').find('option:selected').val();
	var lengkapiTagTxt			= $('#lengkapiTagId').val();
	var thumbnailImg 			= $("#thumbnailImgId").prop("files")[0];
	var lengkapiDeskripsiTxt	= $('#lengkapiDeskripsiId').val();

	if(
		tokenDraf.length !== 0 &&
		lengkapiJudulVideoTxt.length !== 0 &&
		categorySelect !== '0' &&
		categorySelect !== 'Pilih Kategori' &&
		categorySelect.length !== 0 &&
		subCategorySelect !== '0' &&
		subCategorySelect !== 'Pilih Sub Kategori' &&
		subCategorySelect.length !== 0 &&
		thumbnailImg !== undefined) { 

		var formData = new FormData();
		formData.append('tokenDraf', tokenDraf);
		formData.append('lengkapiJudulVideoTxt', lengkapiJudulVideoTxt);
		formData.append('categorySelect', categorySelect);
		formData.append('subCategorySelect', subCategorySelect);
		formData.append('lengkapiTagTxt', lengkapiTagTxt);
		formData.append('thumbnailImg', thumbnailImg);
		formData.append('lengkapiDeskripsiTxt', lengkapiDeskripsiTxt);

		$.ajax({
	    	beforeSend: function() {
	    		$('#modalsLoading').modal('show');
	    	},
		    type: "POST",
		    url: baseUrl+"ajax/video/lengkapi",
		    data: formData,
		    processData: false,
    		contentType: false,
		    success: function(response) {
		    	$("#modalsLoading").removeClass("in");
			    $(".modal-backdrop").remove();
			    $("#modalsLoading").hide();

				if(response.code === 200) {
					// location.reload();
					window.location.replace(baseUrl+"panel/video/daftar");
				} else {
					$('#modlasPeringatan').modal('show');

			    	$('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
				}
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) {
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
