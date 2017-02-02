<?php 
	

	// create a switch to determine whether an error/invalid data has been encountered
	$didFail = false;

	// ensure password and confirmation are the same
	if ($_POST["password"] != $_POST["confirmpassword"])
		$didFail = true;

	$userData = array(
		$_POST['username'],
		$_POST["password"],
		$_POST["email"],
		$_POST["dob"],
		//$_POST["gender"],
		//$_POST["subtype"]
	);

	$queryString = "INSERT INTO user (username, pass, email, dob";
	
	if (isset($_POST["acctype"]) && $_POST["acctype"] == "Premium") {

		
		$userData += array(
			$_POST["creditcard"],
			$_POST["month"],
			$_POST["year"],
			$_POST["securitycode"],
			$_POST["postalcode"]
		);

		$queryString += ", cardnum, expmonth, expyear, securitycode, postalcode)";
	}

	else {

		$queryString += ')';
	}

	$queryString += " VALUES (";
	$queryString = addQueryParams($userData, $queryString);

	foreach ($userData as $datum) {

		if (!isset($datum)) {
			$didFail = true;
		}
	}

	// clean each input variable
	foreach ($userData as &$datum) {

		$datum = mysql_real_escape_string($datum);
	}

	require('connect.php');


	$query = $dbconn->prepare($queryString);
	$result = $query->execute($userData);

	while ($r = $result->fetch(PDO::FETCH_ASSOC)) {

		echo $r["username"] . " " . $r["password"] . " " . $r["city"] . " " . "<br />";
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

			$qString += "?,";
		}

		$qString = substr($qString, 0, count($qString) - 2) + ')';

		return $qString;
	}
?>