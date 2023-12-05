<?php
include "dbconnect.php";
 
$sql = "SELECT * FROM blood";
$query = $pdo->query($sql);

// Count the number of rows
$count = $query->rowCount();

echo "<h1>" . $count . "</h1>";
?> 
