<?php
session_start();
require_once('auth.php');
checkAuthorization();

// Check for error or success messages
$message = "";
$messageClass = "";

if (isset($_SESSION['error_message'])) {
    $message = $_SESSION['error_message'];
    $messageClass = "alert alert-danger"; // CSS class for error message
    unset($_SESSION['error_message']); // Clear the session variable
} elseif (isset($_SESSION['success_message'])) {
    $message = $_SESSION['success_message'];
    $messageClass = "alert alert-success"; // CSS class for success message
    unset($_SESSION['success_message']); // Clear the session variable
}
?>

<html lang="en">

<head>
    <title>View Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-1">


            <h4 class="card-title p-1">View Announcements</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">
                <div class="card p-1">
                    <div class="card-header">
                        Total Records of announcement made
                    </div>

                    <div class="card-body">
                        <!-- Display error or success message here -->
                        <?php if (!empty($message)) : ?>
                            <div id="alertMessage" class="<?php echo $messageClass; ?>" role="alert">
                                <?php echo $message; ?>
                            </div>
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
                                        <th>Title</th>
                                        <th>Blood Needed</th>
                                        <th>Announcement Date</th>
                                        <th>Organizer</th>
                                        <th>Requirements</th>
                                    </tr>
                                </thead>

                                <?php
                                include "dbconnect.php";

                                try {
                                    $query = "SELECT * FROM announce";
                                    $stmt = $pdo->prepare($query);
                                    $stmt->execute();
                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($result as $row) {
                                        echo "<tbody>
                                                        <tr>
                                                            <td>" . $row['announcement'] . "</td>
                                                            <td>" . $row['bloodneed'] . "</td>
                                                            <td>" . $row['dat'] . "</td>
                                                            <td>" . $row['organizer'] . "</td>
                                                            <td>" . $row['requirements'] . "</td>
                                                        </tr>
                                                    </tbody>";
                                    }
                                } catch (PDOException $e) {
                                    echo "Error: " . $e->getMessage();
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