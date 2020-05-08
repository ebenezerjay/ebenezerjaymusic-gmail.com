<?php
// connect to database
$submitData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");

// check connection
if ($submitData->connect_error) {
    die('Connect error: ' . $submitData->connect_errno . ': ' . $submitData->connect_error);
} 

// get input data
$name = $_POST['formName'];
$date = $_POST['formStreamDate'];
$genre = $_POST['formGenre'];
$time = $_POST['formStreamTime'];
$platform = $_POST['formPlatform'];
$link = $_POST['formStreamLink'];

// inserts input data into table
$submissionData = "INSERT INTO streamerData (artistName,streamDate,streamTime,link,genre,platform) VALUES ('{$submitData->real_escape_string($_POST['formName'])}',
'{$submitData->real_escape_string($_POST['formStreamDate'])}',
'{$submitData->real_escape_string($_POST['formStreamTime'])}',
'{$submitData->real_escape_string($_POST['formStreamLink'])}',
'{$submitData->real_escape_string($_POST['formGenre'])}',
'{$submitData->real_escape_string($_POST['formPlatform'])}')";

$insertData = $submitData->query($submissionData); 

if ($insertData == 1) {
	$archivedSubmissionData = "INSERT INTO Archive (artistName,streamDate,link,genre,platform) VALUES ('{$submitData->real_escape_string($_POST['formName'])}',
	'{$submitData->real_escape_string($_POST['formStreamDate'])}',
	'{$submitData->real_escape_string($_POST['formStreamLink'])}',
	'{$submitData->real_escape_string($_POST['formGenre'])}',
	'{$submitData->real_escape_string($_POST['formPlatform'])}')";

	$archivedSubmissionData = $submitData->query($archivedSubmissionData);
}

?>