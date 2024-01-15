<?php
$host = "localisation_de_votre_bdd";
$port = "port_de_votre_bdd";
$dbname = "nom_de_votre_bdd";
$user = "utilisateur_postgres";
$password = "mot_de_passe_postgres";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if(!$conn){
  echo "Database connection error" . pg_last_error();
}
?>
