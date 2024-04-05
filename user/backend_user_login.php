<?php
session_start();
include('../includes/dbcon.php');

if (isset($_POST['userin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Select the user by username
        $stmt = $pdo->prepare("SELECT * FROM donor WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch user data
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $num_row = $stmt->rowCount();

        // Check if the user exists and the password is correct
        if ($num_row > 0 && password_verify($password, $row['dpassword'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Log user access in sessionData table
            $user_id = $row['id'];
            $username = $row['username'];
            $stmtLog = $pdo->prepare("INSERT INTO sessionData (username, user_id) VALUES (:username, :user_id)");
            $stmtLog->bindParam(':username', $username);
            $stmtLog->bindParam(':user_id', $user_id);
            $stmtLog->execute();

            header('location:dashboard.php');
        } else {
            $_SESSION['login_error'] = true;
            header('location:userlogin.php');
        }
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }
}
?>
