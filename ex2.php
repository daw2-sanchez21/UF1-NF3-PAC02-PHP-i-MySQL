<?php
	$db = mysqli_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters.');
	mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
	echo 'Selected database moviestite! <br>';

	$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (8, "Black Adams", 1, 2022, 4, 2),
        (9, "Shoter", 1, 2017, 3, 1),
        (10, "Fury", 1, 2019, 2, 3)';
	mysqli_query($db,$query) or die(mysqli_error($db));
	echo "Data inserted in movie! <br>";
	$query = 'INSERT INTO movietype
        (movietype_id, movietype_label)
    VALUES
        (12, "Biopic"),
        (13, "Educational"),
        (14, "Cartoon")';
	mysqli_query($db,$query) or die(mysqli_error($db));
	echo "Data inserted in movietype! <br>";
	$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (10, "Harry Kane", 1, 0),
        (11, "Joe Gomez", 1, 0),
        (12, "Robertson", 0, 1)';
	mysqli_query($db,$query) or die(mysqli_error($db));
	echo "Data inserted in people! <br>";
?>