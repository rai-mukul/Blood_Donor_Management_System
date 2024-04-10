<?php

// Check if a session is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('../includes/dbcon.php');

function checkAuthorization() {
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        $_SESSION['error_message'] = "You are not logged in. Please log in to access this page.";
        $_SESSION['redirect_url'] = 'login.php';
    } else {
        global $pdo;
        $session_id = $_SESSION['user_id'] ?? null;
        if ($session_id) {
            $query = "SELECT * FROM donor WHERE user_id = :session_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':session_id', $session_id);
            $stmt->execute();
            $admin = $stmt->fetch();

            if ($admin === false) {
                $_SESSION['error_message'] = "You are not authorized to access this panel.";
                $_SESSION['redirect_url'] = 'unauthorized.php';
            }
        }
    }
}
?>
