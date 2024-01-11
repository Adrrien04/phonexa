<?php
session_start();
include_once "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    $query = "SELECT * FROM users WHERE email = $1";
    $result = pg_query_params($conn, $query, array($email));

    if ($result) {
        $row = pg_fetch_assoc($result);
        $user_pass = md5($password);
        $enc_pass = $row['password'];

        if ($user_pass === $enc_pass) {
            $status = "Connecté";
            $query_update = "UPDATE users SET status = $1 WHERE unique_id = $2";
            $result_update = pg_query_params($conn, $query_update, array($status, $row['unique_id']));

            if ($result_update) {
                session_regenerate_id(true);
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "Connection réussie, veuillez recharger la page !";
            } else {
                echo "Connexion échouée, veuillez réessayer";
            }
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "$email - Cet e-mail n'existe pas dans notre bdd !";
    }
} else {
    echo "Tout les champs sont requis !";
}
?>
