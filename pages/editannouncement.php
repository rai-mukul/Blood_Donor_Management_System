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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Announcement Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of announcement made
                        </div>
                        <div class="panel-body">

                            <?php
                            include 'dbconnect.php';
                            $id = $_GET['id'];

                            try {
                                // Using PDO for database connection
                                $stmt = $pdo->prepare("SELECT * FROM announce WHERE id = :id");
                                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                if ($row) {
                                    ?>

                                    <form role="form" action="editedannounce.php" method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Announcement Title</label>
                                                <input class="form-control" name="announcement" type="text"
                                                    value='<?php echo $row['announcement']; ?>' required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="bloodneed">Blood Group Required</label>
                                                <select class="form-control" id="bloodneed" name="bloodneed" required>
                                                    <option value="" disabled>Select Blood Group</option>
                                                    <option value="A+" <?php echo ($row['bloodneed'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                                                    <option value="A-" <?php echo ($row['bloodneed'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                                                    <option value="B+" <?php echo ($row['bloodneed'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                                                    <option value="B-" <?php echo ($row['bloodneed'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                                                    <option value="AB+" <?php echo ($row['bloodneed'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                                                    <option value="AB-" <?php echo ($row['bloodneed'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
                                                    <option value="O+" <?php echo ($row['bloodneed'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                                                    <option value="O-" <?php echo ($row['bloodneed'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Date and Time</label>
                                                <input class="form-control" name="dat" type="date"
                                                    value='<?php echo $row['dat']; ?>' required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Organized by</label>
                                                <input class="form-control" type="text" name="organizer"
                                                    value='<?php echo $row['organizer']; ?>' required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Requirements</label>
                                                <textarea class="form-control" rows="4" name="requirements" type="text"
                                                    required><?php echo $row['requirements']; ?></textarea>
                                            </div>
                                        </div>
                                        <!-- id hidden grna input type ma "hidden" -->
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                        <button type="submit" class="btn btn-success">Make Changes</button>
                                    </form>

                                    <?php
                                } else {
                                    echo "Announcement not found.";
                                }
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            ?>

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