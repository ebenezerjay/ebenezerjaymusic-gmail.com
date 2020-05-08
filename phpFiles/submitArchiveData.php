<?php
// connect to database
$submitArchiveData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");

// check connection
if ($submitArchiveData->connect_error) {
    die('Connect error: ' . $submitArchiveData->connect_errno . ': ' . $submitArchiveData->connect_error);
} 

// get input data
$name = $_POST['formName'];
$date = $_POST['formStreamDate'];
$genre = $_POST['formGenre'];
$platform = $_POST['formPlatform'];
$link = $_POST['formStreamLink'];



// inserts input data into table
$submissionData = "INSERT INTO Archive (artistName,streamDate,link,genre,platform) VALUES ('{$submitArchiveData->real_escape_string($_POST['formName'])}',
'{$submitArchiveData->real_escape_string($_POST['formStreamDate'])}',
'{$submitArchiveData->real_escape_string($_POST['formStreamLink'])}',
'{$submitArchiveData->real_escape_string($_POST['formGenre'])}',
'{$submitArchiveData->real_escape_string($_POST['formPlatform'])}')";

$insertData = $submitArchiveData->query($submissionData); 


?>