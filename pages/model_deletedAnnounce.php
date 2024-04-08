<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbconnect.php';

    $qry = "DELETE FROM announce WHERE id = :id";
    $stmt = $pdo->prepare($qry);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "DELETED";
        header('Location: editannounceform.php');
    } else {
        echo "ERROR!!";
    }
}
?>
