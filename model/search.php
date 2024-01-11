<?php
session_start();
include_once "config.php";

$outgoing_id = $_SESSION['unique_id'];
$searchTerm = pg_escape_string($conn, $_POST['searchTerm']);

$sql = "SELECT * FROM users WHERE NOT unique_id = $1 AND (fname ILIKE '%' || $2 || '%' OR lname ILIKE '%' || $2 || '%')";
$query = pg_query_params($conn, $sql, array($outgoing_id, $searchTerm));
$output = "";

if (pg_num_rows($query) > 0) {
    include_once "data.php";
} else {
    $output = 'Votre recherche n\'a rien donné.';
}

echo $output;
?>
