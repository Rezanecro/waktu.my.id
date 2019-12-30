$(document).ready(function() {
	$("#modlasPeringatan").on('hide.bs.modal', function () {
    	$('#kodeResponse').html('');
		$('#pesanResponse').html('');
    });
});

$("#masukFormId").on("click", function() {
	var emaiUserTxt			= $('#emaiUserId').val();
	var passwordUserTxt		= $('#passwordUserId').val();

	if(
		emaiUserTxt.length !== 0 &&
		passwordUserTxt.length !== 0) {
		if(passwordUserTxt.length >= 6) {
			// FORM DATA
			var formData = new FormData();
			formData.append('emaiUserTxt', emaiUserTxt);
			formData.append('passwordUserTxt', passwordUserTxt);

			console.log(formData);

			$.ajax({
		    	beforeSend: function() {
		    		console.log('Loading...!')
		    	},
			    type: "POST",
			    url: baseUrl+"ajax/pengguna/masuk",
			    data: formData,
			    processData: false,
	    		contentType: false,
			    success: function(response) {
			    	$('#modlasPeringatan').modal('show');

			        $('#kodeResponse').append(response.code);
					$('#pesanResponse').append(response.msg);
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
			$('#pesanResponse').append('Password minimal 6 karakter');
			console.log('Password minimal 6 karakter');
		}		
	} else {
		$('#modlasPeringatan').modal('show');

		$('#kodeResponse').append(404);
		$('#pesanResponse').append('Ada form yang kosong, mohon diisi');
		console.log('Ada form yang kosong, mohon diisi');
	}
});