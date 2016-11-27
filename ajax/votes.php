<?php
require '../php/query.php';

$mysqli = get_mysqli();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  post_vote($mysqli);
}

echo(get_votes($mysqli));
$mysqli->close();

?>
