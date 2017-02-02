<?php 
	$file = $_FILES['files'];
	$file_string = "";

	foreach($_FILES['files']['name'] as $position => $name) {

		$file_string .= "<p><h1>{$name}</h1><br />{$file['tmp_name'][$position]} | {$file['size'][$position]} | {$file['error'][$position]}</p>";
	}

	echo $file_string;
?>