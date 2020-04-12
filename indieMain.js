const leftMainArticle = $(".left-main");
const rightMainArticle = $(".right-main");
const nameInput = $("#form-name-id");
const dateInput = $("#form-date-id");
const genreInput = $("#form-genre-id");
const platformInput = $("#form-platform-id");
const streamTimeInput = $("#form-stream-time-id");
const streamLinkInput = $("form-stream-link-id");
const table = $("table-upcoming-id");
const submitBtn = $("#form-submit-btn-id");


$(document).ready(function() {
	$.post("getData.php", function(data) {
		$("tbody").html(data);
	});
});

$( "#form-submit-id" ).submit(function(e) {
  // Stop form from submitting normally
  e.preventDefault();

	let	formData = $(this).serialize();
  // let url = $form.attr("action");
 
  // Send the data using post
	$.post( "submitForm.php", formData);
});

// $(document).ready(function() {
// 	$(submitBtn).on('click', function() {
// 		// $(submitBtn).prop('disabled', true);
// 		$.post("submitForm.php", $("#form-sumbit-id").serialize(), function(data) {
			
// 		});
// 	});
// });