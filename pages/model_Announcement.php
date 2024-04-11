<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_POST['announcement'])) {
    $announcement = $_POST["announcement"];
    $bloodneed = $_POST["bloodneed"];
    $dat = $_POST["dat"];
    $organizer = $_POST["organizer"];
    $requirements = $_POST["requirements"];

    include 'dbconnect.php';

    try {
        // Use prepared statement to prevent SQL injection
        $qry = "INSERT INTO announce(announcement, bloodneed, dat, organizer, requirements) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($qry);
        $stmt->execute([$announcement, $bloodneed, $dat, $organizer, $requirements]);

        $_SESSION['success_message'] = "Announcement successfully posted.";
        $_SESSION['redirect_url'] = "viewannouncement.php";
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
        $_SESSION['redirect_url'] = "viewannouncement.php";
    }

    // Close the connection
    $pdo = null;

    header("Location: viewannouncement.php");
    exit();
} else {
    $_SESSION['error_message'] = "YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE.";
    $_SESSION['redirect_url'] = "index.php";

    header("Location: viewannouncement.php");
    exit();
}
?>
