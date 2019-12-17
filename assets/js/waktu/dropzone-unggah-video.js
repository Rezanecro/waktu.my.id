Dropzone.autoDiscover = false;

var myDropzone = new Dropzone("#dropZoneVideo" , {
	maxFiles: 1,
    paramName: "videoUpload",
    acceptedFiles: ".mp4,.mkv,.avi",
    init: function(){

        this.on("addedfile", function(filenya) {
      		this.on("queuecomplete", function (file) {
      			console.log('dropZoneVideo')
            	if(filenya.type == 'video/mp4') {
            		var reader = new FileReader();
    		        reader.onload = function(event) {
    		            console.log('addedfile');
    		            $('#previewVideo').show();
    		            $('#dropVideo').hide();	
    		            $('#previewDropzone').html('<video width="400" controls><source src="'+event.target.result+'" type="video/mp4"></video><input name="videBlobFormat" id="videBlobFormatId" type="hidden" value="'+event.target.result+'"><input name="videoName" id="videoNameId" type="hidden" value="'+filenya.name+'">');  
                    };
    		        reader.readAsDataURL(filenya);
            	} else {
            		if (!filenya.accepted) {
            			alert('File bukan format video');
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
    },
});