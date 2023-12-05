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
                    <h1 class="page-header">Make Announcement</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <form role="form" action="model_announce.php" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Enter Announcement Title</label>
                                        <input class="form-control" type="text" placeholder="Announcement Title"
                                            name="announcement" required>
                                    </div>
                                    <div class="form-group col-lg-6">
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
                                    <div class="form-group col-lg-6">
                                        <label>Date and Time</label>
                                        <input class="form-control" type="date" name="dat" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Organized by</label>
                                        <input class="form-control" placeholder="Enter Organizer's Name" type="text"
                                            name="organizer" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Requirements</label>
                                        <textarea class="form-control" rows="4" type="text" name="requirements"
                                            required></textarea>
                                    </div>
                                </div>
                                <button type="submit" style="border-radius: 0%"
                                    class="btn-success btn btn-default">Submit</button>
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