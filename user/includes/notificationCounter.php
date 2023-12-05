<?php

include '../pages/dbconnect.php';

try {
    $sql = "SELECT * FROM announce";
    $stmt = $pdo->query($sql);

    $rowCount = $stmt->rowCount();

    echo "<h1>" . $rowCount . "</h1>";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>