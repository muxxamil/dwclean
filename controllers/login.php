<?php
header('Content-Type: application/json');
include_once('../defaults/config.php');

if(!empty($_POST['email']) && $_POST['password']) {

	$query = "SELECT 
	  *
	FROM
	  " . USERS_TABLE . " AS u
	  where u.email = '" . $_POST['email'] . "' AND u.password = '" . $_POST['password'] . "'";

	$result = $conn->query($query);

	if(mysqli_num_rows($result)) {
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION["userid"] = $row['id'];
		$_SESSION["name"] 	= $row['name'];

		echo json_encode(array('status' => 200));
		die();
	}
}

echo json_encode(array('status' => 400, "message" => "Invalid email or password"));
die();

?>