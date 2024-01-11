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
        // Ajouter d'autres actions au besoin
        default:
            // Gérer les actions par défaut
    }
} else {
    // Action par défaut
    // Exemple : header('Location: index.php?action=displayIndex');
}