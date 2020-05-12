<?php
// connect to database
$removeDates = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");

// check connection
if ($removeDates->connect_error) {
	die('Connect error: ' . $removeDates->connect_errno . ': ' . $removeDates->connect_error);
} 

// get dates from table
$del = "DELETE FROM streamerData WHERE date(streamDate) < current_timestamp";

$query = $removeDates->query($del);

?>