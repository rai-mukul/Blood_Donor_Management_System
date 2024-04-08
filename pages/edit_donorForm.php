<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <h1 class="page-header">Edit Donor's Detail</h1>


            <div class="card p-1">
                <div class="card-header">
                    Please make your changes by updating the form below:
                </div>
                <div class="card-body">

                    <?php
                    include 'dbconnect.php';
                    $id = $_GET['id'];
                    $qry = "SELECT * FROM donor WHERE id = :id";
                    $stmt = $pdo->prepare($qry);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <form role="form" action="model_edit_donor.php" method="post">
                            <div class="row">
                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Full Name</label>
                                    <input class="form-control" name="name" type="text" value='<?php echo $row['name']; ?>' required>
                                </div>
                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Parent's Name</label>
                                    <input class="form-control" type="text" name="guardiansname" value='<?php echo $row['guardiansname']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="" disabled>Select Gender</option>
                                        <option value="M" <?php echo ($row['gender'] == 'M') ? 'selected' : ''; ?>>Male</option>
                                        <option value="F" <?php echo ($row['gender'] == 'F') ? 'selected' : ''; ?>>Female</option>
                                        <option value="O" <?php echo ($row['gender'] == 'O') ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter D.O.B</label>
                                    <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Weight</label>
                                    <input class="form-control" type="number" name="weight" value='<?php echo $row['weight']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
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

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Email Id</label>
                                    <input class="form-control" type="email" name="email" value='<?php echo $row['email']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Address</label>
                                    <input class="form-control" type="text" name="address" value='<?php echo $row['address']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter ZIP code</label>
                                    <input class="form-control" type="text" name="zipCode" value='<?php echo $row['zipCode']; ?>' required>
                                </div>

                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Contact Number</label>
                                    <input class="form-control" type="number" name="contact" value='<?php echo $row['contact']; ?>' required>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="pt-5">
                                <button type="submit" class="btn btn-success">Make Changes</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>