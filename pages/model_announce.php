<!DOCTYPE html>
<html lang="en">

<head>
    <title>Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="card p-1">
                <div class="card-header">
                    Status Box
                </div>
                <div class="card-body">
                    <form role="form" action="index.php" method="post">
                        <?php
                        if (isset($_POST['announcement'])) {
                            $announcement = $_POST["announcement"];
                            $bloodneed = $_POST["bloodneed"];
                            $dat = $_POST["dat"];
                            $organizer = $_POST["organizer"];
                            $requirements = $_POST["requirements"];

                            include 'dbconnect.php';

                            try {
                                // Use prepared statement to prevent SQL injection
                                $qry = "INSERT INTO announce(announcement, bloodneed, dat, organizer, requirements) VALUES (?, ?, ?, ?, ?)";
                                $stmt = $pdo->prepare($qry);
                                $stmt->execute([$announcement, $bloodneed, $dat, $organizer, $requirements]);

                                echo "<div style='text-align: center'><h2>Announcement successfully posted.</h2>";
                                echo "<a href='index.php' div style='text-align: center'><h3 class='btn btn-danger'><i class='bi bi-house'></i> Go Back</h3>";
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            // Close the connection
                            $pdo = null;
                        } else {
                            echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
                        }
                        ?>
                    </form>
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