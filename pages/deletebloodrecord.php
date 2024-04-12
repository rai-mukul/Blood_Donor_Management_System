<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbconnect.php';

    $qry = "DELETE FROM blood WHERE id = :id";
    $stmt = $pdo->prepare($qry);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Blood record successfully deleted.";
    } else {
        $_SESSION['error_message'] = "Error deleting blood record.";
    }

    header('Location: manage_collections.php');
    exit();
}
?>
