<?php
// make connection to database
	$sortDisplayData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
			
// check connection
if ($sortDisplayData->connect_error) {
	die('Connect error: ' . $sortDisplayData->connect_errno . ': ' . $sortDisplayData->connect_error);
} 

// select table data and sort by name
$genreSortQuery = mysqli_query($sortDisplayData,"SELECT artistName, streamDate, streamTime, link, genre, platform FROM streamerData ORDER BY genre");

// output data of each row
if(mysqli_num_rows($genreSortQuery) > 0) {
	$submissions = mysqli_fetch_all($genreSortQuery,MYSQLI_ASSOC);
	foreach($submissions as $submission) : ?>
		<tr id="tr-id-genre-sort">
			<td dragable="true" class="td-name"><?php echo $submission['artistName']; ?> </td>
			<td dragable="true" class="td-date"><?php echo $submission['streamDate']; ?> </td>
			<td dragable="true" class="td-time"><?php echo $submission['streamTime']; ?> </td>
			<td dragable="true" class="td-link"><?php echo $submission['link']; ?> </td>
			<td dragable="true" class="td-genre"><?php echo $submission['genre']; ?> </td>
			<td dragable="true" class="td-platform"><?php echo $submission['platform']; ?> </td>
		</tr>
		<?php endforeach;
 }
?>