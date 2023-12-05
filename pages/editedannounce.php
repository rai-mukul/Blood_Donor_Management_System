<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Announcement Detail</h1>
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
                                    <form role="form" action="#" method="post">
                                        <?php
                                        include 'dbconnect.php';

                                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                            $announcement = $_POST["announcement"];
                                            $bloodneed = $_POST["bloodneed"];
                                            $dat = $_POST["dat"];
                                            $organizer = $_POST["organizer"];
                                            $requirements = $_POST["requirements"];
                                            $id = $_POST['id'];

                                            try {
                                                $qry = "UPDATE announce SET announcement=:announcement, bloodneed=:bloodneed, dat=:dat, organizer=:organizer, requirements=:requirements WHERE id=:id";
                                                $stmt = $pdo->prepare($qry);
                                                $stmt->bindParam(':announcement', $announcement, PDO::PARAM_STR);
                                                $stmt->bindParam(':bloodneed', $bloodneed, PDO::PARAM_STR);
                                                $stmt->bindParam(':dat', $dat, PDO::PARAM_STR);
                                                $stmt->bindParam(':organizer', $organizer, PDO::PARAM_STR);
                                                $stmt->bindParam(':requirements', $requirements, PDO::PARAM_STR);
                                                $stmt->bindParam(':id', $id, PDO::PARAM_INT);

                                                if ($stmt->execute()) {
                                                    echo "The selected announcement has been updated.";
                                                } else {
                                                    echo "Error updating announcement.";
                                                }
                                            } catch (PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                        } else {
                                            echo "Invalid request method.";
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
