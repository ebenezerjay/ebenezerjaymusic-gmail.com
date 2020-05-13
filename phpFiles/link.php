<?php

// connect to database
  $linkData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
// check connection 
if ( $linkData->connect_error) {
	die('Connect error: ' .  $linkData->connect_errno . ': ' .  $linkData->connect_error);
} 

// select table data
$sel = mysqli_query( $linkData, "SELECT link FROM streamerData ORDER BY streamDate limit 20");

while($info = mysql_fetch_array( $sel )) {
$link = $info['link'];
echo "<a href = \"" . $link . "\">Stream web address.</a>";
}

?>