// gets all data from the archive table
$(document).ready(function() {
	$("#footer-archive-link-id").on('click', function() {
		$.post("archive.php", function(data) {
			$("tbody").html(data);
		});
	});
});