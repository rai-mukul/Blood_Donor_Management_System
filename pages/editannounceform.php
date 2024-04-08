<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Announcement | BDMS</title>
	<?php include 'includes/headerData.php' ?>

</head>

<body>
	<div class="wrapper">
		<?php include 'includes/sidebar.php' ?>
		<div class="main p-1">
				<div class="container-fluid">
					<div class="card p-1 w-100">
						<div class="card-header h4">
							Edit Announcement Detail
						</div>
						<div class="card-body">
							<div class="card-header">
								Total Records of announcement made
							</div>
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Actions</th>
											<th>Title</th>
											<th>Blood Needed</th>
											<th>Announcement Date</th>
											<th>Organizer</th>

										</tr>
									</thead>
									<tbody>

										<?php
										include "dbconnect.php";

										try {
											$stmt = $pdo->query("SELECT * FROM announce");
											while ($row = $stmt->fetch()) {
												echo "<tr>
													<td><a href='editannouncement.php?id=" . $row['id'] . "'><i class='bi bi-pencil-square', style='font-size: 1.5rem; color: cornflowerblue;'> </i></a>&nbsp; &nbsp; &nbsp;<a href='model_deletedAnnounce.php?id=" . $row['id'] . "'><i class='bi bi-trash3', style='font-size: 1.5rem; color: red;'></i></a></td>
															<td>" . htmlspecialchars($row['announcement']) . "</td>
															<td>" . htmlspecialchars($row['bloodneed']) . "</td>
															<td>" . htmlspecialchars($row['dat']) . "</td>
															<td>" . htmlspecialchars($row['organizer']) . "</td>
															
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

		<?php include 'includes/bodyScript.php' ?>
		<?php include 'includes/footerData.php' ?>
</body>

</html>