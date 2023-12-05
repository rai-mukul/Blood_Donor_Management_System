<!DOCTYPE html>
<html lang="en">

<head>
	<title>View Blood | BDMS</title>
	<?php include 'includes/headerData.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/nav.php' ?>
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Blood Collection</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading"> Total Records of available bloods </div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover"
										id="dataTables-example">
										<?php

										include "dbconnect.php";

										try {

											$qry = "SELECT * FROM blood";
											$stmt = $pdo->query($qry);

											echo "
                                                <thead>
                                                    <tr>
                                                        <th>Blood Group</th>
                                                        <th>Full Name</th>
                                                        <th>Gender</th>
                                                        <th>D.O.B</th>
                                                        <th>Weight</th>
                                                        <th>Address</th>
                                                        <th>Contact</th>
                                                        <th>Blood Quantity</th>
                                                        <th>Collection Date</th>
                                                    </tr>
                                                </thead>";

											while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
												echo "
                                                    <tbody>
                                                        <tr class='gradeA'>
                                                            <td>" . $row['bloodgroup'] . "</td>
                                                            <td>" . $row['name'] . "</td>
                                                            <td>" . $row['gender'] . "</td>
                                                            <td>" . $row['dob'] . "</td>
                                                            <td>" . $row['weight'] . "</td>
                                                            <td>" . $row['address'] . "</td>
                                                            <td>" . $row['contact'] . "</td>
                                                            <td>" . $row['bloodqty'] . "</td>
                                                            <td>" . $row['collection'] . "</td>
                                                        </tr>
                                                    <tbody>
                                                ";
											}
										} catch (PDOException $e) {
											echo "Error: " . $e->getMessage();
										} finally {
											// Close the connection
											$pdo = null;
										}

										?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'includes/bodyScript.php' ?>
	<?php include 'includes/footerData.php' ?>
</body>


</html>