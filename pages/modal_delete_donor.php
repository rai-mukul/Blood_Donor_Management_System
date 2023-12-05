<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbconnect.php';

    try {
        $qry = "DELETE FROM donor WHERE id = :id";
        $stmt = $pdo->prepare($qry);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "DELETED";
        header('Location: delete_donors_detail.php');
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}
?>
