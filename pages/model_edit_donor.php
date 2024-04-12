<?php
// Start session to use session variables
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        $query = "UPDATE donor SET name=:name, guardiansname=:guardiansname, gender=:gender, dob=:dob, weight=:weight, bloodgroup=:bloodgroup, email=:email, address=:address, zipCode=:zipCode, contact=:contact WHERE id=:id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':guardiansname', $guardiansname, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
        $stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
        $stmt->bindParam(':bloodgroup', $bloodgroup, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':zipCode', $zipCode, PDO::PARAM_STR);
        $stmt->bindParam(':contact', $contact, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "The selected donor's details has been updated.";
        } else {
            $_SESSION['error_message'] = "Error updating donor's details.";
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error: " . $e->getMessage();
    }

    header('Location: viewdonor.php');
    exit();
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header('Location: viewdonor.php');
    exit();
}
?>
