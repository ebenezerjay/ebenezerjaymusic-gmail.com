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
const artistSearchRow = $("#th-artist-name-id");


$(document).ready(function() {
	$.post("getData.php", function(data) {
		$("tbody").html(data);
	});
});

$(document).ready(function() {
	console.log("yo");
	$(artistSearchRow).on('click', function() {
		console.log("yo1");
		$.post("sort.php", function(data) {
			$("tbody").html(data);
		});
	});
});

$( "#form-submit-id" ).submit(function(e) {
  // Stop form from submitting normally
  e.preventDefault();

	// serialize the form data
	let	formData = $(this).serialize();
 
  // Send the data using post
	$.post( "sort.php", formData);
});

