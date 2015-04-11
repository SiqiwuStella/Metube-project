<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$videoFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if video file is an actual video or fake video

/* if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is a video - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not a video.";
// 		$uploadOk = 0;
	}
} */

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 200000000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
// Allow certain file formats
/* if($videoFileType != "webm" && $videoFileType != "mkv" && $videoFileType != "flv"
		&& $videoFileType != "vob" && $videoFileType != "avi" && $videoFileType != "mov" && $videoFileType != "wmv" 
		&& $videoFileType != "mp4" && $videoFileType != "mpg" && $videoFileType != "mpeg" && $videoFileType != "3gp" 
		&& $videoFileType != "rm" && $videoFileType != "yuv" ) { */
if($videoFileType != "WebM" && $videoFileType != "webm" && $videoFileType != "mp4" && $videoFileType != "MP4" 
		&& $videoFileType != "OGG" && $videoFileType != "ogg") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}