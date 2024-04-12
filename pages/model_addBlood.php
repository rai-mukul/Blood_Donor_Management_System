<?php
session_start();

if (isset($_POST['name'])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $address = $_POST["address"];
    $zipCode = $_POST["zipCode"];
    $contact = $_POST["contact"];
    $bloodqty = $_POST["bloodqty"];
    $collection = $_POST["collection"];

    include 'dbconnect.php';

    // Prepare the SQL statement
    $qry = "INSERT INTO blood (name, gender, dob, weight, bloodgroup, address, zipCode, contact, bloodqty, collection) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($qry);

    // Execute the statement
    $result = $stmt->execute([$name, $gender, $dob, $weight, $bloodgroup, $address, $zipCode, $contact, $bloodqty, $collection]);

    if (!$result) {
        $_SESSION['error_message'] = "ERROR";
    } else {
        $_SESSION['success_message'] = "Blood details added successfully.";
    }
} else {
    $_SESSION['error_message'] = "YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a>";
}

header('Location: viewblood.php');
exit();
?>
