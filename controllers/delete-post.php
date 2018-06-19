<?php
session_start();
if(empty($_SESSION['userid'])) {
	echo "Please login to delete post.";
	die();
}

include('../defaults/config.php');

if(empty($_POST['id'])) {
	echo "Id is missing.";
	die();
}

echo $query = "UPDATE " . POSTS_TABLE . " SET is_deleted = 1, date_updated = NOW() WHERE id = " . $_POST['id'];

if($conn->query($query) === TRUE) {

	echo "Post has been deleted successfully";
	die();

}

?>