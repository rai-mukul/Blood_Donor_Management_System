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
            <div class="card p-1">
                <div class="card-body">
                    <h4 class="card-title p-1">Edit Announcement Detail</h4>
                    <hr class="border border-success border-2 opacity-50 w-25">
                    </hr>
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
                            <form role="form" action="model_editAnnouncement.php" method="post">
                                <div class="row pt-4">
                                    <div class="form-group col-lg-6">
                                        <label>Announcement Title</label>
                                        <input class="form-control" name="announcement" type="text" value='<?php echo $row['announcement']; ?>' required>
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

                                    <div class="form-group col-lg-6 pt-4">
                                        <label>Date</label>
                                        <input class="form-control" name="dat" type="date" value='<?php echo $row['dat']; ?>' required>
                                    </div>

                                    <div class="form-group col-lg-6 pt-4">
                                        <label>Organized by</label>
                                        <input class="form-control" type="text" name="organizer" value='<?php echo $row['organizer']; ?>' required>
                                    </div>

                                    <div class="form-group col-lg-12 pt-4">
                                        <label>Requirements</label>
                                        <textarea class="form-control w-100" rows="4" name="requirements" type="text" required><?php echo $row['requirements']; ?></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <div class="pt-5">
                                    <button type="submit" class="btn btn-success">Make Changes</button>
                                </div>
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