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
        <div class="main p-2">
            <h4 class="card-title p-1">Manage Blood Collections</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">
                <div class="card p-1">
                    <div class="card-header">
                        Total Records of available bloods
                    </div>

                    <div class="card-body">


                        <!-- HTML content of manage_collections.php -->

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
                        <!-- Continue with the rest of the HTML content of manage_collections.php -->

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                <?php
                                include "dbconnect.php";

                                try {

                                    // Fetch data using prepared statement
                                    $stmt = $pdo->query("SELECT * FROM blood");

                                    echo "
                                            <thead>
                                                <tr>
                                                    <th>Actions</i></th>
                                                    <th>Blood Group</th>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>D.O.B</th>
                                                    <th>Weight</th>
                                                    <th>Zip Code</th>
                                                    <th>Contact</th>
                                                    <th>Quantity</th>
                                                    <th>Collection Date</th>
                                                   
                                                </tr>
                                            </thead>";

                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "
                                                <tbody>
                                                    <tr class='gradeA'>
                                                   <td><a href='editbloodform.php?id={$row['id']}'><i class='bi bi-pencil-square', style='font-size: 1.5rem; color: cornflowerblue;'> </i></a>&nbsp; &nbsp; &nbsp;<a href='deletebloodrecord.php?id={$row['id']}'><i class='bi bi-trash3', style='font-size: 1.5rem; color: red;'></i></a></td>
															    
                                                    <td>{$row['bloodgroup']}</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['gender']}</td>
                                                        <td>{$row['dob']}</td>
                                                        <td>{$row['weight']}</td>
                                                        <td>{$row['zipCode']}</td>
                                                        <td>{$row['contact']}</td>
                                                        <td>{$row['bloodqty']}</td>
                                                        <td>{$row['collection']}</td>
                                                      
                                                    </tr>
                                                </tbody>";
                                    }
                                } catch (PDOException $e) {
                                    echo "Failed to connect to MySQL: " . $e->getMessage();
                                    die();
                                }

                                ?>
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