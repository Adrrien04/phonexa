<?php
$host = "localhost";
$port = "5433";
$dbname = "phonexa";
$user = "postgres";
$password = "root";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if(!$conn){
  echo "Database connection error" . pg_last_error();
}
?>
