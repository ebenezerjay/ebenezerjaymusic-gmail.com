<?php
// connect to database
  $retreiveData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
// check connection 
if ($retreiveData->connect_error) {
	die('Connect error: ' . $retreiveData->connect_errno . ': ' . $retreiveData->connect_error);
} 

// select table data
$sel = mysqli_query($retreiveData, "SELECT * FROM streamerData ORDER BY streamDate");

// loop through table data on database and insert into dom table
 if(mysqli_num_rows($sel) > 0) {
	$submissions = mysqli_fetch_all($sel,MYSQLI_ASSOC);
	foreach($submissions as $submission) : ?>
		<tr id="tr-id">
			<td class="td-name"><?php echo $submission['artistName']; ?> </a></td>
			<td class="td-date"><?php echo $submission['streamDate']; ?> </td>
			<td class="td-time"><?php echo $submission['streamTime']; ?> </td>
			<td class="td-link"><a href="<?php echo $submission['link'];?>">Web Address For Live Stream</a></td>
			<td class="td-genre"><?php echo $submission['genre']; ?> </td>
			<td class="td-platform"><?php echo $submission['platform']; ?> </td>
		</tr>
		<?php endforeach;
 }



?>