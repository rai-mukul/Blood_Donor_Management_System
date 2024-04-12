<?php
session_start();
require_once('auth.php');
checkAuthorization();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        include 'dbconnect.php';

        $name = htmlspecialchars($_POST["name"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $dob = htmlspecialchars($_POST["dob"]);
        $weight = htmlspecialchars($_POST["weight"]);
        $bloodgroup = htmlspecialchars($_POST["bloodgroup"]);
        $address = htmlspecialchars($_POST["address"]);
        $zipCode = htmlspecialchars($_POST["zipCode"]);
        $contact = htmlspecialchars($_POST["contact"]);
        $bloodqty = htmlspecialchars($_POST["bloodqty"]);
        $collection = htmlspecialchars($_POST["collection"]);
        $id = htmlspecialchars($_POST['id']);

        $qry = "UPDATE blood SET name=?, gender=?, dob=?, weight=?, bloodgroup=?, address=?, zipCode=?, contact=?, bloodqty=?, collection=? WHERE id=?";
        $stmt = $pdo->prepare($qry);
        $result = $stmt->execute([$name, $gender, $dob, $weight, $bloodgroup, $address, $zipCode, $contact, $bloodqty, $collection, $id]);

        if (!$result) {
            $_SESSION['error_message'] = "Error updating blood record.";
        } else {
            $_SESSION['success_message'] = "Blood record updated successfully.";
        }

        // Redirect back to viewblood.php
        header("Location: viewblood.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
        header("Location: viewblood.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header("Location: viewblood.php");
    exit();
}
?>
