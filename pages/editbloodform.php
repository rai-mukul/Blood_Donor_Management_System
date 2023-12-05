<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Blood Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please make your changes by updating the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    include 'dbconnect.php';
                                    $id = $_GET['id'];
                                    $qry = "select * from blood where id=:id";
                                    $stmt = $pdo->prepare($qry);
                                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                                    $stmt->execute();

                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <form role="form" action="editedblood.php" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Enter Full Name</label>
                                                    <input class="form-control" type="text" name="name"
                                                        value='<?php echo $row['name']; ?>' required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control" id="gender" name="gender" required>
                                                        <option value="" disabled>Select Gender</option>
                                                        <option value="M" <?php echo ($row['gender'] == 'M') ? 'selected' : ''; ?>>Male</option>
                                                        <option value="F" <?php echo ($row['gender'] == 'F') ? 'selected' : ''; ?>>Female</option>
                                                        <option value="O" <?php echo ($row['gender'] == 'O') ? 'selected' : ''; ?>>Other</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter D.O.B</label>
                                                    <input class="form-control" type="date" name="dob"
                                                        value='<?php echo $row['dob']; ?>' required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Weight</label>
                                                    <input class="form-control" type="number" name="weight"
                                                        value='<?php echo $row['weight']; ?>' required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="bloodgroup">Blood Group</label>
                                                    <select class="form-control" id="bloodgroup" name="bloodgroup" required>
                                                        <option value="" disabled>Select Blood Group</option>
                                                        <option value="A+" <?php echo ($row['bloodgroup'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                                                        <option value="A-" <?php echo ($row['bloodgroup'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                                                        <option value="B+" <?php echo ($row['bloodgroup'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                                                        <option value="B-" <?php echo ($row['bloodgroup'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                                                        <option value="AB+" <?php echo ($row['bloodgroup'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                                                        <option value="AB-" <?php echo ($row['bloodgroup'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
                                                        <option value="O+" <?php echo ($row['bloodgroup'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                                                        <option value="O-" <?php echo ($row['bloodgroup'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Address</label>
                                                    <input class="form-control" type="text" name="address"
                                                        value='<?php echo $row['address']; ?>' required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Contact Number</label>
                                                    <input class="form-control" type="number" name="contact"
                                                        value='<?php echo $row['contact']; ?>' required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="bloodqty">Blood Quantity</label>
                                                    <select class="form-control" id="bloodqty" name="bloodqty" required>
                                                        <option value="" disabled>Select Blood Quantity</option>
                                                        <option value="1" <?php echo ($row['bloodqty'] == 1) ? 'selected' : ''; ?>>1 Unit (Recommended)</option>
                                                        <option value="2" <?php echo ($row['bloodqty'] == 2) ? 'selected' : ''; ?>>2 Units (Not Recommended)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Collection Date</label>
                                                    <input class="form-control" type="date" name="collection"
                                                        value='<?php echo $row['collection']; ?>' required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn btn-success">Make Changes</button>
                                        </form>
                                        <?php
                                    }
                                    ?>
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