Dropzone.autoDiscover = false;

	var myDropzoneDonasi = new Dropzone("#dropZoneDonasi" , {
		maxFiles: 5,
		clickable: true,
	 	addRemoveLinks: true,
	paramName: "gambarDonasiUpload",
	acceptedFiles: ".jpg,.jpeg,.png",
	maxThumbnailFilesize: 5,
	init: function(){

        this.on("addedfile", function(filenya) {
      		this.on("queuecomplete", function (file) {
      			console.log('dropZoneDonasi')
            	if(filenya.type == 'image/jpg' || filenya.type == 'image/jpeg' || filenya.type == 'image/png') {
            		var reader = new FileReader();
			        reader.onload = function(event) {
			            console.log('addedfile');
			            // $('#previewVideo').show();
			            // $('#dropVideo').hide();	
			            // $('#previewDropzone').html('<video width="400" controls><source src="'+event.target.result+'" type="video/mp4"></video><input name="videBlobFormat" type="hidden" value="'+event.target.result+'">');
			        };
			        reader.readAsDataURL(filenya);
            	} else {
            		if (!filenya.accepted) {
            			alert('File bukan format gambar');
	            		this.removeFile(filenya);
	            	}
            	}
	      	});      	
        });

        this.on("removedfile", function() {
        	console.log('hapus file');
        });

        this.on("error", function(file) {
        	if (!file.accepted) {
        		this.removeFile(file);
        	}
        });

        this.on("maxfilesexceeded", function(file){
        	alert("Maksimal 5 gambar");
        this.removeFile(file);
    });

    },
	});