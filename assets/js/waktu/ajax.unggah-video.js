$(document).ready(function() {
	$('#uploadProgress').hide();
});

$("#unggahVideoBtn").on("click", function() {
	var videoUpload = $("#videBlobFormatId").val();
	var videoNameId = $("#videoNameId").val();
	var video = base64toFile(videoUpload, videoNameId);

	// INIT
	$('#uploadProgress').show();
	$('#actionButton').hide();
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