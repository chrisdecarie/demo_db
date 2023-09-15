<?php
//connect to db - $link
require_once "includes/db_connect.php";

//prepare the statement passing the db $link and the SQL
/* ADDED "'ORDER BY' timestamp DESC" at the end of the query for reverse, chronological order */
//$stmt = mysqli_prepare($link, "SELECT name, email, movie, timestamp FROM demo ORDER BY timestamp DESC");
$stmt = mysqli_prepare($link, "SELECT * FROM demo");

//execute the statement / query from abobe
mysqli_stmt_execute($stmt);
//get results
$result = mysqli_stmt_get_result($stmt);
//loop through
while ($row = mysqli_fetch_assoc($result)) {
    $results[] = $row;
}
//encode & display json
echo json_encode($results);
//close the link to the db
mysqli_close($link);
