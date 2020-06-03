<?php
// connect to database
  $retreiveTodayData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
// check connection 
if ($retreiveTodayData->connect_error) {
	die('Connect error: ' . $retreiveTodayData->connect_errno . ': ' . $retreiveTodayData->connect_error);
} 

// select table data
$sel1 = mysqli_query($retreiveTodayData, "SELECT streamDate FROM streamerData WHERE date(streamDate) = current_timestamp");

// loop through table data on database and insert into dom table
 if(mysqli_num_rows($sel1) > 0) {
	$submissions = mysqli_fetch_all($sel1,MYSQLI_ASSOC);
	foreach($submissions as $submission) : ?>
		<tr id="tr-today-id">
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