<?php 
	

	// create a switch to determine whether an error/invalid data has been encountered
	$didFail = false;

	$_POST["gender"] = "M";
	$_POST["acctype"] = "free";

	// ensure password and confirmation are the same
	if ($_POST["pass"] != $_POST["confirmpass"])
		$didFail = true;

	$userData = array(
		$_POST['username'],
		$_POST["pass"],
		$_POST["email"],
		$_POST["dob"],
		$_POST["gender"],
		$_POST["acctype"],
		"salty-mc"
	);

	$queryString = "INSERT INTO userdata (username, pass, email, dob, gender, acctype, salt";

	
	if ($_POST["acctype"] == "paid") {

		
		$userData .= array(
			$_POST["cardnum"],
			$_POST["expmonth"],
			$_POST["expyear"],
			$_POST["securitycode"],
			$_POST["postalcode"]
		);

		$queryString .= ", cardnum, expmonth, expyear, securitycode, postalcode)";
	}


	else {

		$queryString .= ')';
	}

	$queryString .= " VALUES (";

	
	$queryString = addQueryParams($userData, $queryString);

	foreach ($userData as $datum) {

		if (!isset($datum)) {
			$didFail = true;
		}
	}

	// clean each input variable

	/*
	foreach ($userData as &$datum) {

		$datum = mysqli::real_escape_string($datum);
	}
	*/

	

	require('connect.php');

	try {
		$query = $dbconn->prepare($queryString);
		$query->execute($userData);
	}

	catch (PDOException $e) {
		echo $e->getMessage();
	}

	if ($didFail)
		die("error");
	else {

		echo "success";
	}

	/* the funciton addQueryParams will input a array $params of parameters and
		the query string $queryString that will be used to query the database, it will add
		a parameter to the query string for each element in the $params array. The query string
		will be returned so it can be used as a prepared statement in PDO
	*/
	function addQueryParams($params, $qString) {

		$numParams = count($params);

		for ($i = 0; $i < $numParams; $i ++) {

			$qString .= "?,";
		}

		$qString = substr($qString, 0, count($qString) - 2) . ')';

		return $qString;
	}
?>