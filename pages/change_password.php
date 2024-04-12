<?php 
session_start();
require_once('auth.php');
checkAuthorization();

// Include the database connection file
include 'dbconnect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    // Retrieve the user's current password from the database
    $userId = $_SESSION['user_id'];
    $stmt = $pdo->prepare("SELECT password FROM admin WHERE user_id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validate the old password
    if (!password_verify($oldPassword, $user['password'])) {
        $_SESSION['error_message'] = "Incorrect old password.";
        header("Location: update_password.php");
        exit();
    }

    // Validate the new password and confirm new password
    if ($newPassword !== $confirmNewPassword) {
        $_SESSION['error_message'] = "New password and confirm password do not match.";
        header("Location: update_password.php");
        exit();
    }

    // Update the password in the database
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateStmt = $pdo->prepare("UPDATE admin SET password = ? WHERE user_id = ?");
    $updateStmt->execute([$hashedPassword, $userId]);

    // Check if the password was updated successfully
    if ($updateStmt->rowCount() > 0) {
        $_SESSION['success_message'] = "Password changed successfully.";
        header("Location: update_password.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Error updating password.";
        header("Location: update_password.php");
        exit();
    }
} else {
    // Redirect if accessed directly without form submission
    header("Location: update_password.php");
    exit();
}
?>
