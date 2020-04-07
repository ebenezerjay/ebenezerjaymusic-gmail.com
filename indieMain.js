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
		// $("td").addClass('td-tbody');
	});
});