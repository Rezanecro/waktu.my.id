Dropzone.autoDiscover = false;

var myDropzoneBarang = new Dropzone("#dropZoneBarang" , { 
	maxFiles: 5,
	clickable: true,
 	addRemoveLinks: true,
	paramName: "gambarBarangUpload",
	acceptedFiles: ".jpg,.jpeg,.png",
	maxThumbnailFilesize: 5,
	init: function(){

        this.on("addedfile", function(filenya) {
      		this.on("queuecomplete", function (file) {
      			console.log('dropZoneVideo')
            	if(filenya.type == 'image/jpg' || filenya.type == 'image/jpeg' || filenya.type == 'image/png') {
            		// gambarBarang.push(myDropzoneBarang.files);
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