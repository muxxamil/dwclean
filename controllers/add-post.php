<?php

session_start();
if(empty($_SESSION['userid'])) {
	echo "Please login to add post.";
	die();
}

include('../defaults/config.php');

if(empty($_POST['title'])) {
	echo "Title is missing.";
	die();
}

if(empty($_POST['description'])) {
	echo "Description is missing.";
	die();
}

if(!empty($_POST['base64Image'])) {
	list($uploadedFileName, $imageUploadingSuccess) = uploadBase64Image($_POST['base64Image']);
	if($imageUploadingSuccess === false) {
		echo "Image uploding failed.";
		die();
	}
}

if(!empty($_POST['videoLink'])) {
	$matches = array();
	preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $_POST['videoLink'], $matches);
	$finalVideoLink = "https://www.youtube.com/embed/";
	$videoSuccess = false;

	if(!empty($matches) && !empty($matches[1])) {
		$videoSuccess = true;
		if(strlen($matches[1]) == 11)
		{
			$finalVideoLink .= $matches[1];
		} else {
			$finalVideoLink .= substr($matches[1] ,0 ,10);		
		}
	}
}

$query = "INSERT INTO " . POSTS_TABLE . " VALUES (NULL, '$_POST[title]', '$_POST[description]', 1 , 0 , NOW(), NOW())";

if($conn->query($query) === TRUE) {

	$lastInsertedPostId = $conn->insert_id;

	if($lastInsertedPostId) {
		if(!empty($uploadedFileName)) {
			$query = "INSERT INTO " . POST_INGREDIENTS_TABLE . " VALUES (NULL, $lastInsertedPostId, '$uploadedFileName', 'image' , NOW(), NOW())";
			$conn->query($query);
		}

		if($videoSuccess) {
			$query = "INSERT INTO " . POST_INGREDIENTS_TABLE . " VALUES (NULL, $lastInsertedPostId, '$finalVideoLink', 'video' , NOW(), NOW())";
			$conn->query($query);
		}
	}
	echo "Post has been added successfully";
	die();

}

function uploadBase64Image($base64Str) {
	if (preg_match('/^data:image\/(\w+);base64,/', $base64Str, $type)) {
	    $base64Str = substr($base64Str, strpos($base64Str, ',') + 1);
	    $type = strtolower($type[1]); // jpg, png, gif

	    if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
	        echo "This type of image is not allowed.";
	        die();
	    }

	    $base64Str = base64_decode($base64Str);

	    if ($base64Str === false) {
	        echo "File uploading failed.";
	        die();
	    }

	    // Check file size
		if (strlen($base64Str) > 20000000) {
			echo "File is too large.";
			die();
		}

	} else {
	    echo "File is not an image.";
	    die();
	}

	$uploadedFileName = uniqid() . "." . $type;

	return array($uploadedFileName, file_put_contents("../images/blog-posts/" . $uploadedFileName, $base64Str));
}

?>