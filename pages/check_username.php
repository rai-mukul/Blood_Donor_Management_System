<?php

include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username exists in the database
    $query = "SELECT * FROM donor WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<span style='color: red;'>Username not available</span>";
    } else {
        echo "<span style='color: green;'>Username available</span>";
    }
}

?>
