function getFlyer(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var image = new Image();
		    image.src = e.target.result;
		    image.onload = function() {
		        var imageWidth = this.width;
		        if(imageWidth < 700) {
		        	alert('Ukuran gambar kurang dari 700 pixel')
		        } else {
		        	$('#previewThumbnailFlyer')
		        	.show()
		        	.attr('src', e.target.result);

		        	$('#thumbnailImgFlyerId')
		        	.attr('value', e.target.result);

		        	$('#pickFlyer').hide();
		        }
		    };
		};
		reader.readAsDataURL(input.files[0]);
	}
}
