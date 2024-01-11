<?php
session_start();
include_once "config.php";

$outgoing_id = $_SESSION['unique_id'];
$sql = "SELECT * FROM users WHERE NOT unique_id = $1 ORDER BY user_id DESC";
$query = pg_query_params($conn, $sql, array($outgoing_id));
$output = "";

if (pg_num_rows($query) == 0) {
    $output .= "Aucun utilisateur n'est disponible pour discuter";
} elseif (pg_num_rows($query) > 0) {
    include_once "data.php";
}

echo $output;
?>
