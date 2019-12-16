$(document).ready(function() {
	$('#artikelId').summernote({
		placeholder: 'Tulis artikel anda disini',
		minHeight: 400,
		height: 100,
		toolbar: [
			['para', ['ul', 'ol']],
			['insert', ['link', 'picture', 'video']],
		]
	});
});