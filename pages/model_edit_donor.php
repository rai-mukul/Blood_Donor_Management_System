<?php
// Start session to use session variables
session_start();

include 'dbconnect.php';

$name = $_POST["name"];
$guardiansname = $_POST["guardiansname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$weight = $_POST["weight"];
$bloodgroup = $_POST["bloodgroup"];
$email = $_POST["email"];
$address = $_POST["address"];
$zipCode = $_POST["zipCode"];
$contact = $_POST["contact"];
$id = $_POST['id'];

try {
    // Update query using prepared statement
    $query = "UPDATE donor SET name=?, guardiansname=?, gender=?, dob=?, weight=?, bloodgroup=?, email=?, address=?, zipCode=?, contact=? WHERE id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $guardiansname, $gender, $dob, $weight, $bloodgroup, $email, $address, $zipCode, $contact, $id]);

    // Set a session variable to indicate successful update
    $_SESSION['edit_donor_success'] = true;

    // Redirect to a different page to prevent form resubmission
    header('Location: edit_donor_success.php');
    exit;
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
?>
