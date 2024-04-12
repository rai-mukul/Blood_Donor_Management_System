<?php
session_start();
require_once('auth.php');
checkAuthorization();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'dbconnect.php';

    $announcement = $_POST["announcement"];
    $bloodneed = $_POST["bloodneed"];
    $dat = $_POST["dat"];
    $organizer = $_POST["organizer"];
    $requirements = $_POST["requirements"];
    $id = $_POST['id'];

    try {
        $qry = "UPDATE announce SET announcement=:announcement, bloodneed=:bloodneed, dat=:dat, organizer=:organizer, requirements=:requirements WHERE id=:id";
        $stmt = $pdo->prepare($qry);
        $stmt->bindParam(':announcement', $announcement, PDO::PARAM_STR);
        $stmt->bindParam(':bloodneed', $bloodneed, PDO::PARAM_STR);
        $stmt->bindParam(':dat', $dat, PDO::PARAM_STR);
        $stmt->bindParam(':organizer', $organizer, PDO::PARAM_STR);
        $stmt->bindParam(':requirements', $requirements, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "The selected announcement has been updated.";
        } else {
            $_SESSION['error_message'] = "Error updating announcement.";
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
    }

    header('Location: viewannouncement.php');
    exit();
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header('Location: viewannouncement.php');
    exit();
}
?>
