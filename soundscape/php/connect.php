<?php

	$username = 'root';
	$password = 'root';
	$dbname = 'soundscape';
	$host = 'localhost:8889';

	// initialize the database to insert the users data
	//	$dbConnection = new PDO("mysql:host=localhost:8888;dbname=". $db, $username, $password);


	try  {
		$dbconn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
		$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch (PDOExpection $e) {

		echo $e->getMessage();
	}

?>