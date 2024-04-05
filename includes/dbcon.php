<?php
$host = 'localhost';
$dbname = 'blood_donar';
$usernam = 'raimukul';
$dbpassword = 'M@xfZ6lr2IYy9[LW';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernam, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
    // You may want to handle the error more gracefully in a production environment
    // For example, log the error and show a user-friendly message
    // die("Failed to connect to MySQL: " . $e->getMessage());
}
?>
