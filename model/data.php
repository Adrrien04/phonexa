<?php
while ($row = pg_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = $1 OR outgoing_msg_id = $1)
                AND (outgoing_msg_id = $2 OR incoming_msg_id = $2) ORDER BY msg_id DESC LIMIT 1";
    $query2 = pg_query_params($conn, $sql2, array($row['unique_id'], $outgoing_id));
    $row2 = pg_fetch_assoc($query2);
    $result = (pg_num_rows($query2) > 0) ? $row2['msg'] : "Aucun message";
    $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;

    if (isset($row2['outgoing_msg_id'])) {
        $vous = ($outgoing_id == $row2['outgoing_msg_id']) ? "Vous: " : "";
    } else {
        $vous = "";
    }

    $offline = ($row['status'] == "Offline now" || $row['status'] == "offline") ? "offline" : "";
    $hid_me = ($outgoing_id == $row['unique_id']) ? "hide" : "";

    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <div class="content">
                        <img src="model/images/' . $row['img'] . '" alt="">
                        <div class="details">
                            <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                            <p>' . $vous . $msg . '</p>
                        </div>
                    </div>
                    <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
                </a>';
}
?>
