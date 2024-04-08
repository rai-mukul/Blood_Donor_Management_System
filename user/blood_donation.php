<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Donation | BDMS</title>
    <?php include 'includes/headerFile2.php' ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/donornav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Donate Blood Section</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-1">
                        <div class="card-header">
                            Please fill up the form below:
                        </div>
                        <div class="card-body">
                            <form role="form" action="modalUser_addBlood.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Full Name</label>
                                        <input class="form-control" placeholder="Your full name" type="text" name="name"
                                            required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Date of Birth</label>
                                        <input class="form-control" type="date" name="dob" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Weight (lb)</label>
                                        <input class="form-control" type="number" placeholder="weight in lb"
                                            name="weight" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="bloodgroup">Blood Group</label>
                                        <select class="form-control" id="bloodgroup" name="bloodgroup" required>
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
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Full Address"
                                            name="address" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>ZIP code</label>
                                        <input class="form-control" type="number" placeholder="ZIP code" name="zipCode"
                                            required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Contact Number</label>
                                        <input class="form-control" type="number" placeholder="9134137291"
                                            name="contact" required>
                                    </div>
                                 
                                    <div class="form-group col-lg-6">
                                        <label for="bloodqty">Blood Quantity</label>
                                        <select class="form-control" id="bloodqty" name="bloodqty" required>
                                            <option value="" disabled selected>Select Blood Quantity</option>
                                            <option value="1">1 Unit (Recommended)</option>
                                            <option value="2">2 Units (Not Recommended)</option>
                                        </select>
                                    </div> 
                                    <div class="form-group col-lg-6">
                                        <label>Collection Date</label>
                                        <input class="form-control" type="date" name="collection" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>
</body>
<?php include '../pages/includes/footerData.php' ?>

</html>