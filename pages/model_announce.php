<!DOCTYPE html>
<html lang="en">

<head>
    <title>Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
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
                                                echo "<a href='index.php' div style='text-align: center'><h3>Go Back</h3>";
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
        </div>
    </div>

    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>

</body>

</html>