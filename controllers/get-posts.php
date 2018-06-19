<?php

include_once('../defaults/config.php');

$offset = 0;
$limit 	= 2;
$whereClause 	= "where p.is_deleted = 0 ";

if(!empty($_GET['pageNumber'])) {
	$offset = (($_GET['pageNumber'] - 1) * $limit);
}

if(!empty($_GET['id'])) {
	$whereClause .= " AND p.id = $_GET[id]";
}

$query = "SELECT 
#  SQL_CALC_FOUND_ROWS,
  p.*,
  u.id AS userid,
  u.name AS username,
  pi.type AS ingredientType,
  pi.url AS url 
FROM
  " . POSTS_TABLE . " AS p 
  INNER JOIN " . USERS_TABLE . " AS u 
    ON p.added_by = u.id 
  LEFT JOIN " . POST_INGREDIENTS_TABLE . " AS pi 
    ON p.id = pi.post_id 
    $whereClause
  ORDER BY p.id DESC
#  LIMIT $limit OFFSET $offset;
";

$postResult = $conn->query($query);

$postList = array();
if($postResult->num_rows > 0) {
	while($row = $postResult->fetch_assoc()) {
		if(empty($postList[$row['id']])) {
			$postList[$row['id']] = $row;
			unset($postList[$row['id']]['ingredientType']);
			unset($postList[$row['id']]['url']);
		}
		if(!empty($row['ingredientType']) && !empty($row['url'])) {
			$postList[$row['id']][$row['ingredientType']] = $row['url'];
		}
	}
}

// $query = 'SELECT FOUND_ROWS()';
// $totalCount = $conn->query($query);

?>