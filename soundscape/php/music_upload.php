<?php 

	if (isset($_FILES["file"])) {

		$file = $_FILES["file"];

		$file_name = $file["name"];
		$file_tmp = $file["tmp_name"];
		$file_size = $file["size"];
		$file_error = $file["error"];

		$file_ext = strtolower(
						end(
							explode('.', $file_name)
							)
						);

		$allowed = array("jpg", "png", "gif");

		if (in_array($file_ext, $allowed) && $file_error === 0 && $file_size <= ) {

			$file_new_name = uniqid('', true) . "." . $file_ext;
			$file_new_name = "music/" . $username . "/";

			if (move_uploaded_file($file_tmp, $file_new_name)) {

				echo "success";
			}
		}
	}

?>