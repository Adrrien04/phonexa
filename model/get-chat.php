<?php
session_start();

if (isset($_SESSION['unique_id'])) {
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = pg_escape_string($conn, $_POST['incoming_id']);
    $output = "";

    $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = $1 AND incoming_msg_id = $2)
            OR (outgoing_msg_id = $2 AND incoming_msg_id = $1) 
            ORDER BY msg_id";

    $query = pg_query_params($conn, $sql, array($outgoing_id, $incoming_id));

    if (pg_num_rows($query) > 0) {
        while ($row = pg_fetch_assoc($query)) {
            $message = htmlspecialchars($row['msg']);

            if ($row['outgoing_msg_id'] == $outgoing_id) {
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $message . '</p>
                                </div>
                            </div>';
            } else {
                $output .= '<div class="chat incoming">
                                <img src="model/images/' . $row['img'] . '" alt="">
                                <div class="details">
                                    <p>' . $message . '</p>
                                </div>
                            </div>';
            }
        }
    } else {
        $output .= '<div class="text">Aucun message disponible. Une fois que vous envoyez un message, il apparaîtra ici.</div>';
    }

    echo $output;
} else {
    header("location: ../login.php");
}
?>
