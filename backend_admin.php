<?php
session_start();
include('includes/dbcon.php');

if (isset($_POST['login'])) {
    try {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $num_row = $stmt->rowCount();

        if ($num_row > 0 && password_verify($password, $row['password'])) {
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role']; // Storing role in session

            // Store role in cookie with 24-hour expiration
            setcookie('role', $row['role'], time() + (24 * 60 * 60), '/');

            $user_id = $row['user_id'];
            $username = $row['username'];
            $stmtLog = $pdo->prepare("INSERT INTO sessionData (username, user_id) VALUES (:username, :user_id)");
            $stmtLog->bindParam(':username', $username);
            $stmtLog->bindParam(':user_id', $user_id);
            $stmtLog->execute();

            header('location:pages/index.php');
            exit();
        } else {
            $_SESSION['login_error'] = true;
            header('location:admin_login.php');
            exit();
        }
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }
}
?>
