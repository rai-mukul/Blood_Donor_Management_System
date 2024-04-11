<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_SESSION['error_message']) && isset($_SESSION['redirect_url'])) {
	header("Refresh: 0; URL=" . $_SESSION['redirect_url']); // Redirect after 5 seconds
	exit();
}
?>
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


			<h4 class="card-title p-1">Manage Announcements</h4>
			<hr class="border border-success border-2 opacity-50 w-25">
			</hr>
			<div class="container-fluid">
				<div class="card p-1 w-100">
					<div class="card-header">
						Total Records of announcement made
					</div>
					<div class="card-body">
						<!-- Display error or success message here -->
						<?php if (!empty($_SESSION['error_message']) || !empty($_SESSION['success_message'])) : ?>
							<div id="alertMessage" class="<?php echo !empty($_SESSION['error_message']) ? 'alert alert-danger' : 'alert alert-success'; ?>" role="alert">
								<?php echo !empty($_SESSION['error_message']) ? $_SESSION['error_message'] : $_SESSION['success_message']; ?>
							</div>
							<?php unset($_SESSION['error_message']); ?>
							<?php unset($_SESSION['success_message']); ?>
							<script>
								// JavaScript to hide the message after 5 seconds
								setTimeout(function() {
									document.getElementById('alertMessage').style.display = 'none';
								}, 5000); // 5000 milliseconds = 5 seconds
							</script>
						<?php endif; ?>

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

	<?php include 'includes/bodyScript.php' ?>
	<?php include 'includes/footerData.php' ?>
</body>

</html>