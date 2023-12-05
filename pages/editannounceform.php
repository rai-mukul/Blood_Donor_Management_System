<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Announcement | BDMS</title>
	<?php include 'includes/headerData.php' ?>

</head>

<body>
	<div id="wrapper">

		<?php include 'includes/nav.php' ?>

		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class=".col-lg-12">
						<h1 class="page-header">Edit Announcement Detail</h1>
					</div>
				</div>

				<div class="row">
					<div class=".col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Total Records of announcement made
							</div>

							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>Title</th>
												<th>Blood Needed</th>
												<th>Announcement Date</th>
												<th>Organizer</th>
												<th>Requirements</th>
												<th><i class='fa fa-pencil'></i></th>
											</tr>
										</thead>
										<tbody>

											<?php
											include "dbconnect.php";

											try {
												$stmt = $pdo->query("SELECT * FROM announce");
												while ($row = $stmt->fetch()) {
													echo "<tr>
															<td>" . htmlspecialchars($row['announcement']) . "</td>
															<td>" . htmlspecialchars($row['bloodneed']) . "</td>
															<td>" . htmlspecialchars($row['dat']) . "</td>
															<td>" . htmlspecialchars($row['organizer']) . "</td>
															<td>" . htmlspecialchars($row['requirements']) . "</td>
															<td><a href='editannouncement.php?id=" . $row['id'] . "'><i class='fa fa-edit' style='color:green'></i></a></td>
														</tr>";
												}
											} catch (PDOException $e) {
												echo "Error: " . $e->getMessage();
											}
											?>

										</tbody>
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
