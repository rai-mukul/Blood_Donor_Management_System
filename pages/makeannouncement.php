<?php
// Start session
session_start();

// Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location: index.php");
    exit();
}

$session_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Announcement</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="">
                <div class="col-lg-12">
                <h1 class="page-header">Make Announcement</h1>
                    <div class="card p-1">
                        <div class="card-header">Fill this form to add announcement.</div>
                        <div class="card-body">
                            <form role="form" action="model_announce.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-6 pt-3">
                                        <label for="announcement">Enter Announcement Title</label>
                                        <input class="form-control" type="text" id="announcement" placeholder="Announcement Title" name="announcement" required>
                                    </div>
                                    <div class="form-group col-lg-6 pt-3">
                                        <label for="bloodneed">Blood Group</label>
                                        <select class="form-control" id="bloodneed" name="bloodneed" required>
                                            <option value="" disabled selected>Select Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 pt-3">
                                        <label for="dat">Date and Time</label>
                                        <input class="form-control" type="datetime-local" id="dat" name="dat" required>
                                    </div>
                                    <div class="form-group col-lg-6 pt-3">
                                        <label for="organizer">Organized by</label>
                                        <input class="form-control" placeholder="Enter Organizer's Name" type="text" id="organizer" name="organizer" required>
                                    </div>
                                    <div class="form-group col-lg-12 pt-3 pb-4">
                                        <label for="requirements">Requirements</label>
                                        <textarea class="form-control" rows="4" id="requirements" type="text" name="requirements" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" style="border-radius: 0%">Submit</button>
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