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
const dateSearchRow = $("#th-stream-date-id");
const timeSearchRow = $("#th-stream-time-id");
const genreSearchRow = $("#th-genre-id");
const platformSearchRow = $("#th-platform-id");
const navSearchInput = $("#nav-search-input-id");
const navSearchBtn = $("#nav-search-btn-id");

// sends ajax call to remove old dates
$(document).ready(function() {
	$.post("remove.php");
});

// gets all table data on page load
$(document).ready(function() {
	$.post("getData.php", function(data) {
		$("tbody").html(data);
	});
});

// sends ajax call to search database and display results
$( "#form-search-id" ).submit(function(e) {
  e.preventDefault();
	// serialize the form data
	let	formData = $(this).serialize();
  // fetch the data using post
	$.post( "search.php", formData,function(data) {
		$("tbody").html(data);
	});
});

// table is sorted by name
$(document).ready(function() {
	$(artistSearchRow).on('click', function() {
		$.post("sort.php", function(data) {
			$("tbody").html(data);
		});
	});
});

// table is sorted by date
$(document).ready(function() {
	$(dateSearchRow).on('click', function() {
		$.post("sortDate.php", function(data) {
			$("tbody").html(data);
		});
	});
});

// table is sorted by time
$(document).ready(function() {
	$(timeSearchRow).on('click', function() {
		$.post("sortTime.php", function(data) {
			$("tbody").html(data);
		});
	});
});

// table is sorted by genre
$(document).ready(function() {
	$(genreSearchRow).on('click', function() {
		$.post("sortGenre.php", function(data) {
			$("tbody").html(data);
		});
	});
});

// table is sorted by platform
$(document).ready(function() {
	$(platformSearchRow).on('click', function() {
		$.post("sortPlatform.php", function(data) {
			$("tbody").html(data);
		});
	});
});

// submit stream form data is submitted with ajax call
$( "#form-submit-id" ).submit(function(e) {
	e.preventDefault();
	// Send the data using post with a response
	$.post( "submitForm.php", $(this).serialize(), function() {
		$(".form-submit").html("Thank you for submitting to Indie Live Streams! Refresh the page to see your submission.");
	});
});

// contact form data is submitted with ajax call
$("#form-contact-id").submit(function(e) {
	e.preventDefault();
	// Send the data using post with a response
	$.post("contact.php", $("#form-contact-id").serialize(), function() {
		$(".article-comment").html("Your message has been submitted!");
	});
});

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