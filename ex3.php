<?php
$db = mysqli_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
echo 'Selected database moviestite! <br>';

$query = 'SELECT movie_name, movie_leadactor, movie_director, people_fullname FROM movie, people WHERE movie_leadactor=people_id';
$save = mysqli_query($db,$query) or die(mysqli_error($db));
// show the results
while ($row = mysqli_fetch_assoc($save)) {
	extract($row);
	echo $movie_name . ' - ' . $people_fullname . ' - ' . $movie_leadactor . ' - ' . $movie_director .  ' <br>';
}
echo 'Selected! <br>';

?>