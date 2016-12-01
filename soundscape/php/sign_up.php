<?php 

	/*
	$userData = array(
		$_POST['username'],
		$_POST["password"],
		$_POST["email"],
		$_POST["date-of-birth"],
		$_POST["gender"],
		$_POST["credit-card"],
		$_POST["expiraton-date"],
		$_POST["month"],
		$_POST["year"],
		$_POST["security-code"],
		$_POST["zip-code"],
		$_POST["confirm-password"]
	);

	// clean each input variable
	foreach ($userData as &$datum) {

		$datum = mysql_real_escape_string($datum);
	}
	*/

	$user = 'root';
	$password = 'root';
	$db = 'SoundScape';
	$host = 'localhost';

	// initialize the database to insert the users data
//	$dbConnection = new PDO("mysql:host=localhost:8888;dbname=". $db, $username, $password);


		$db = new PDO('mysql:host=localhost;dbname=SoundScape', 'root', 'root');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $db->query("SELECT * FROM userdata");

		$result = $stmt->fetch();

		echo $result['username'] . " " . $result['country'] . " " . $result['cardnum'];



	/*
	try {
		
		$dbConnection = new PDO("mysql:host={$host};dbname={$db};charset=utf8", $username, $password, $options); }
	}

	catch (PDOException $e) {

		echo e->getMessage();
	}
	*/
	//$myPDO = new PDO();
?>