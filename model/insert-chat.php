<?php
session_start();

if (isset($_SESSION['unique_id'])) {
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = pg_escape_string($conn, $_POST['incoming_id']);
    $message = pg_escape_string($conn, $_POST['message']);

    if (!empty($message)) {
        $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                VALUES ($1, $2, $3)";

        $result = pg_query_params($conn, $sql, array($incoming_id, $outgoing_id, $message));

        if (!$result) {
            die("Erreur d'exécution de la requête : " . pg_last_error($conn));
        }
    }
} else {
    header("location: ../login.php");
}
?>
