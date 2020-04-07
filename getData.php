<?php
// connect to database
  $retreiveData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
// check connection 
if ($retreiveData->connect_error) {
	die('Connect error: ' . $retreiveData->connect_errno . ': ' . $retreiveData->connect_error);
} 

// select table data
$sel = mysqli_query($retreiveData,"SELECT * FROM streamerData limit 20");

// loop through table data on database and insert into dom table
 if(mysqli_num_rows($sel) > 0) {
	$submissions = mysqli_fetch_all($sel,MYSQLI_ASSOC);
	foreach($submissions as $submission) : ?>
		<tr id="tr-id">
				<td dragable="true" ><?php echo $submission['artistName']; ?> </td>
				<td dragable="true"><?php echo $submission['streamDate']; ?> </td>
				<td dragable="true"><?php echo $submission['streamTime']; ?> </td>
				<td dragable="true"><?php echo $submission['link']; ?> </td>
				<td dragable="true"><?php echo $submission['genre']; ?> </td>
				<td dragable="true"><?php echo $submission['platform']; ?> </td>
		</tr>
		<?php endforeach;
 }

?>