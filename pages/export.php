<?php
include "dbconnect.php"; 

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="donorsList.xls"'); 

$qry = "SELECT * FROM donor";
$stmt = $pdo->query($qry);

echo "Name\tGuardian's Name\tGender\tD.O.B\tWeight\tBlood Group\tEmail\tAddress\tZip Code\tContact\n";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['name']}\t{$row['guardiansname']}\t{$row['gender']}\t{$row['dob']}\t{$row['weight']}\t{$row['bloodgroup']}\t{$row['email']}\t{$row['address']}\t{$row['zipCode']}\t{$row['contact']}\n";
}
?>
