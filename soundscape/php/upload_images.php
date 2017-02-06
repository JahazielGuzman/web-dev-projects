<?php


	if (isset($_FILES['image'])) {

		$file = $_FILES['image'];
		$file_name = $file['name'];
		$tmp_name = $file['tmp_name'];
		$error = $file['error'];
		$size = $file['size'];

		$allowed = ['png', 'jpg', 'jpeg'];

		$file_array = explode('.', $file_name);
		$file_ext = strtolower(end($file_array));
		if (in_array($file_ext, $allowed) && $error === 0 && $size <= 2048000) {

			$new_file_name = uniqid('', true) . '.' . $file_ext;
			$file_folder = "../images/";
			$new_destination = $file_folder.$new_file_name;

			if(move_uploaded_file($tmp_name, $new_destination)) {
				echo "success";	
			}
		}
	}
	











	// try {
	// 	$query = $dbconn->prepare($queryString);
	// 	$query->execute($userData);
	// }

	// catch (PDOException $e) {
	// 	echo $e->getMessage();
	// }

	// if ($didFail)
	// 	die("error");
	// else {

	// 	echo "success";
	// }
?>