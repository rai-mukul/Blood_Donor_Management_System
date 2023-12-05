<?php

include "dbconnect.php";

$sql = "SELECT * FROM announce";
$query = $pdo->query($sql);

// Count the number of rows 
$count = $query->rowCount();

echo "<h1>" . $count . "</h1>";
?> 
 