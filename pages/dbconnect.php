<?php
$host = 'localhost';
$dbname = 'fallproject';
$usernam = 'raimukul';
$dbpassword = 'M@xfZ6lr2IYy9[LW';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernam, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
}
?>
