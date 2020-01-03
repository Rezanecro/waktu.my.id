$(document).ready(function() {
	$('#uploadProgress').hide();

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

$("#unggahVideoBtn").on("click", function() {
	var videoUpload = $("#videBlobFormatId").val();
	var videoNameId = $("#videoNameId").val();
	var videonya = base64toFile(videoUpload, videoNameId);
	
	// FORM DATA
	var formData = new FormData();
	// formData.append('videoUpload', videoUpload);
	formData.append('videoNameId', videoNameId);
	formData.append('videonya', videonya);

	$.ajax({
    	beforeSend: function() { 
    		// $('#modalsLoading').modal('show');
    		$('#uploadProgress').show();
			$('#actionButton').hide();

			var persenProgres = '0%';

            $('#uploadProgress').width(persenProgres);
            $('#uploadProgressTxt').html(persenProgres);
    	},
	    type: "POST",
	    url: baseUrl+"ajax/video/unggah",
	    data: formData,
	    processData: false,
		contentType: false,
		uploadProgress: function (event, position, total, percentComplete) {

            var persenProgres = percentComplete + '%';
            $("#uploadProgress").animate({
                width: '' + persenProgres + ''
            }, {
                duration: 5000,
                easing: "linear",
                step: function (x) {
                    percentText = Math.round(x * 100 / percentComplete);
                    $("#uploadProgressTxt").text(percentText + "%");
                    if(percentText == "100") {
                        // $("#outputImage").show();
                    }   
                }
            });

			console.log('event == ' + event);
			console.log('position == ' + position);
			console.log('total == ' + total);
			console.log('percentComplete == ' + percentComplete);

			// $('div#uploadProgress').width(percentComplete+'%');
		},
	    success: function(response) {
	    	console.log(response)
	    	if(response.code === 200) {
	    		$("#tokenDrafId").val(response.datas.token);
	    	} else {
	    		$('#modlasPeringatan').modal('show');
	    		$('#kodeResponse').append(response.code);
				$('#pesanResponse').append(response.msg);
	    	}

	   		$('#uploadProgress').hide();
	   		$('#videoForm').show();
	    },
	    error: function(XMLHttpRequest, textStatus, errorThrown) {
	    	$('#modlasPeringatan').modal('show');

	    	$('#kodeResponse').append(textStatus);
			$('#pesanResponse').append(errorThrown);
	        console.log("Status: " + textStatus);
	        console.log("Error: " + errorThrown);
	    }
	});
});

function base64toFile(base65String, filename) {
	var arr = base65String.split(','),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]), 
        n = bstr.length, 
        u8arr = new Uint8Array(n);
            
    while(n--){
        u8arr[n] = bstr.charCodeAt(n);
    }
    
    return new File([u8arr], filename, {type:mime});
}