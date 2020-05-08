// gets all data from the archive table
$(document).ready(function() {
		$.post("archive.php", function(data) {
			$("tbody").html(data);
		});
	});

// sends ajax call to search database by name
// $( "#form-search-id" ).submit(function(e) {
//     e.preventDefault();
//       // serialize the form data
//       let	formData = $(this).serialize();
//     // fetch the data using post
//       $.post( "search.php", formData,function(data) {
//           $("tbody").html(data);
//       });
//   });