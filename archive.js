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

// displays site info from nav
$(document).ready(function() {
	$("#li-about-id").on('click', function() {
		let articleAbout = $("#about-paragraph-id");
		$(".about-paragraph").css("padding", "10px");
		$(articleAbout).toggleClass("about-paragraph");
	});
});

// displays site info from footer
$(document).ready(function() {
	$("#about-footer-id").on('click', function() {
		let articleAbout = $("#about-paragraph-id");
		$(".about-paragraph").css("padding", "10px");
		$(articleAbout).toggleClass("about-paragraph");
	});
});

// displays the comment/feedback form from nav
$(document).ready(function() {
	$("#li-feedback-id").on('click', function() {
		let commentForm = $("#form-contact-id");
		$(commentForm).toggleClass("form-comment");
	});
});

// displays the comment feedback form from footer
$(document).ready(function() {
	$("#contact-footer-id").on('click', function() {
		let commentForm = $("#form-contact-id");
		$(commentForm).toggleClass("form-comment");
	});
});