<?php
if (isset($_POST['name'])) {
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
    $username = $_POST["username"];
    $dpassword = password_hash($_POST["dpassword"], PASSWORD_DEFAULT); // Hash the password

    include 'dbconnect.php';

    // Username is available, proceed with insertion using PDO
    $insertQuery = "INSERT INTO donor(name, guardiansname, gender, dob, weight, bloodgroup, email, address, zipCode, contact, username, dpassword) VALUES (:name, :guardiansname, :gender, :dob, :weight, :bloodgroup, :email, :address, :zipCode, :contact, :username, :dpassword)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':name', $name);
    $insertStmt->bindParam(':guardiansname', $guardiansname);
    $insertStmt->bindParam(':gender', $gender);
    $insertStmt->bindParam(':dob', $dob);
    $insertStmt->bindParam(':weight', $weight);
    $insertStmt->bindParam(':bloodgroup', $bloodgroup);
    $insertStmt->bindParam(':email', $email);
    $insertStmt->bindParam(':address', $address);
    $insertStmt->bindParam(':zipCode', $zipCode);
    $insertStmt->bindParam(':contact', $contact);
    $insertStmt->bindParam(':username', $username);
    $insertStmt->bindParam(':dpassword', $dpassword);
    
    if ($insertStmt->execute()) {
        header('Location: viewdonor.php?success=true'); 
        exit;  
    } else {
        echo "ERROR";
    }
} else {
    echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}
?>
