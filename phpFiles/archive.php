<?php
// connect to database
  $retreiveArchiveData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
// check connection 
if ($retreiveArchiveData->connect_error) {
	die('Connect error: ' . $retreiveArchiveData->connect_errno . ': ' . $retreiveArchiveData->connect_error);
} 

// select table data
$sel = mysqli_query($retreiveArchiveData,"SELECT * FROM Archive ORDER BY artistName");

// loop through table data on database and insert into dom table
 if(mysqli_num_rows($sel) > 0) {
	$submissions = mysqli_fetch_all($sel,MYSQLI_ASSOC);
	foreach($submissions as $submission) : ?>
		<tr id="tr-archive-id">
			<td class="td-name"><?php echo $submission['artistName']; ?> </a></td>
			<td class="td-date"><?php echo $submission['streamDate']; ?> </td>
			<td class="td-time"><?php echo $submission['streamTime']; ?> </td>
			<td class="td-link"> <a href="<?php echo $submission['link'];?>">Web Address For Live Stream</a></td>
			<td class="td-genre"><?php echo $submission['genre']; ?> </td>
			<td class="td-platform"><?php echo $submission['platform']; ?> </td>
		</tr>
		<?php endforeach;
 }

?>