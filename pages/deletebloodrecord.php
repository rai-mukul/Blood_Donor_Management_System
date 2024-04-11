<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbconnect.php';

    try {
        $qry = "DELETE FROM blood WHERE id = :id";
        $stmt = $pdo->prepare($qry);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Set session variable for success message
        $_SESSION['message'] = "Blood details deleted successfully.";
        header('Location: manage_collections.php?success=true');
        exit(); // Ensure script stops here
    } catch (PDOException $e) {
        // Set session variable for error message
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header('Location: manage_collections.php?success=false ');
        exit(); // Ensure script stops here
    }
}

// Redirect if accessed directly without id
header('Location: manage_collections.php');
exit();
?>
