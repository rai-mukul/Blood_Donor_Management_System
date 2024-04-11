<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbconnect.php';

    $qry = "DELETE FROM announce WHERE id = :id";
    $stmt = $pdo->prepare($qry);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Announcement successfully deleted.";
    } else {
        $_SESSION['error_message'] = "Error deleting announcement.";
    }

    header('Location: manage_announcement.php');
    exit();
}
?>
