<?php

function get_mysqli() {
  require 'mysql.php'; // Stores $MYSQL_USER and $MYSQL_PASSWORD
  $mysqli = new mysqli('localhost', $MYSQL_USER, $MYSQL_PASSWORD, 'pj2017');
  mysqli_select_db($mysqli, 'pj2017');
  return $mysqli;
}


function post_vote($mysqli, $weight=1) {
  $sql_insert = 'INSERT INTO votes (address, weight) VALUES (\'default\');';
  if (!$result = $mysqli->query($sql_insert)) {
	mysqli_error($mysqli);  
 }
}


function get_votes($mysqli) {
  // mysqli_select_db($con, "pj2017");
  $sql_query = 'SELECT sum(weight) FROM votes;';
  $result = $mysqli->query($sql_query);
  if ($result) {
    return $result->fetch_row()[0];
    $result->close();
  } else {    
    die('MYSQL query failed: ' . mysqli_error($mysqli));
  }
}

?>
