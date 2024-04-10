<?php
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

    try {
        include '../pages/dbconnect.php';
        $stmt = $pdo->prepare("INSERT INTO blood (name, gender, dob, weight, bloodgroup, address, zipCode, contact, bloodqty, collection) 
                                VALUES (:name, :gender, :dob, :weight, :bloodgroup, :address, :zipCode, :contact, :bloodqty, :collection)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':weight', $weight);
        $stmt->bindParam(':bloodgroup', $bloodgroup);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':zipCode', $zipCode);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':bloodqty', $bloodqty);
        $stmt->bindParam(':collection', $collection);

        $stmt->execute();

        header("Location: blood_collection.php?success=" . urlencode("Blood Donation Details Has Been Listed. Thank You."));
        exit(); 
    } catch (PDOException $e) {
        header("Location: blood_collection.php?error=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    header("Location: blood_collection.php?error=" . urlencode("Unauthorized access"));
    exit();
}
?>
