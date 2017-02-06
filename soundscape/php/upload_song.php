<?php
	session_start();
	require("connect.php");
	echo "here0";
	if (isset($_FILES['song_file'])) {

		$song_name = $_POST["song_name"];
		$file = $_FILES['image'];
		$file_name = $file['name'];
		$tmp_name = $file['tmp_name'];
		$error = $file['error'];
		$size = $file['size'];

		$allowed = ['png', 'jpg', 'jpeg'];

		$file_array = explode('.', $file_name);
		$file_ext = strtolower(end($file_array));
		echo "here";
		if (in_array($file_ext, $allowed) && $error === 0) {

			$new_file_name = uniqid('', true) . '.' . $file_ext;
			$file_folder = "../images/";
			$new_destination = $file_folder.$new_file_name;
			echo "here1";
			if(move_uploaded_file($tmp_name, $new_destination)) {
				$queryString = "INSERT INTO songs (song_path, song_name, artist) VALUES (?,?,?)";
				try {
					echo "here2";
					$query = $dbconn->prepare($queryString);
					$query->execute(array($new_destination, $song_name, $_SESSION["current_user"]));
				}

				catch (PDOException $e) {
					echo $e->getMessage();
				}

				echo "success";
			}
		}
	}
	



?>