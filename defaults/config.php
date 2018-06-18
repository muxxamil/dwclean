<?php

error_reporting(0);

define("HOST", "localhost", true);
define("USER", "root", true);
define("PASSWORD", "", true);
define("DATABASE", "blog", true);

define("POSTS_TABLE", "posts", true);
define("POST_INGREDIENTS_TABLE", "post_ingredients", true);
define("USERS_TABLE", "users", true);


// Create connection
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
// Check connection
if ($conn->connect_error) {
    echo "Unable to connect to database.";
	die();
}

?>