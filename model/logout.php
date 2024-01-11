<?php
session_start();

if (isset($_SESSION['unique_id'])) {
    include_once "config.php";

    if (isset($_GET['logout_id'])) {
        $status = "Déconnecté";
        $logout_id = pg_escape_string($conn, $_GET['logout_id']);

        $sql = pg_query_params($conn, "UPDATE users SET status = $1 WHERE unique_id = $2", array($status, $logout_id));

        if ($sql) {
            session_unset();
            session_destroy();
            header("location: ../index.php?page=accueil");
            exit();
        }
    }

    header("location: ../users.php");
    exit();
}

header("location: ../login.php");
exit();
?>
