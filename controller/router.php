<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'displayChat':
            displayChat();
            break;
        case 'displayIndex':
            displayIndex();
            break;

        default:

    }
} else {
    
}