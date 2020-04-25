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

// message to user after submission
$message = "Thanks for submitting " . $name . "! " . "Your link " . $link . " can be found in the " . $genre . " category. ";

$submissionData = "INSERT INTO streamerData (artistName,streamDate,streamTime,link,genre,platform) VALUES ('{$submitData->real_escape_string($_POST['formName'])}',
'{$submitData->real_escape_string($_POST['formStreamDate'])}',
'{$submitData->real_escape_string($_POST['formStreamTime'])}',
'{$submitData->real_escape_string($_POST['formStreamLink'])}',
'{$submitData->real_escape_string($_POST['formGenre'])}',
'{$submitData->real_escape_string($_POST['formPlatform'])}')";

$insertData = $submitData->query($submissionData); 


if ($insertData) {
    ?> <p> <?php echo $message ?> </p> <?php;
} else {
    die("Error: {$submitData->errno} : {$submitData->error}");
}

?>