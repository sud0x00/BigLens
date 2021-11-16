<?php
if (isset($_POST['upload'])) {

	$fileName = $_FILES["uploadfile"]["name"];
	$fileTmpName = $_FILES["uploadfile"]["tmp_name"];	
	$fileError = $_FILES["uploadfile"]["error"];
	$fileSize = $_FILES["uploadfile"]["size"];
	$fileType = $_FILES["uploadfile"]["type"];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 10000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				echo " Image Uploaded Successfully!";
			}
			else {
				echo "Your file is too big!";
			}
		}
		else {
			echo "There was an error uploading your file!";
		}
	}
	else {
		echo " You cannot upload files of this type!";
	}
}
?>
