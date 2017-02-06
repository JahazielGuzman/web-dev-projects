<?php

	session_start();
	require("connect.php");

	$queryString = "SELECT song_path, song_name FROM songs WHERE artist = ?";
	try {
		$query = $dbconn->prepare($queryString);
		$query->execute(array($_SESSION["current_user"]));
	}

	catch (PDOException $e) {
		echo $e->getMessage();
	}

	$result = $query->fetchAll(PDO::FETCH_OBJ);
	print_r($result);
?>