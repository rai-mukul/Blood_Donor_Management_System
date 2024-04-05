<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">

            <h1 class="page-header">Add Blood Details</h1>

            <div class="card p-1">
                <div class="card-body">
                    <h5 class="card-title">Please fill up the form below:</h5>

                    <form role="form" action="model_addBlood.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 pt-3">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label>Enter Full Name</label>
                                    <input class="form-control" type="text" placeholder="Enter first name and last name" name="name" required>
                                </div>
                            </div>
                            <!-- Gender -->
                            <div class="form-group col-lg-6 pt-3">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>
                            <!-- Date of Birth -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Enter Date of Birth</label>
                                    <input class="form-control" type="date" name="dob" required>
                                </div>
                            </div>
                            <!-- Weight -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Enter Weight</label>
                                    <input class="form-control" placeholder="Weight" type="number" name="weight" required>
                                </div>
                            </div>
                            <!-- Blood Group -->
                            <div class="form-group col-lg-6 pt-3">
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
                            <!-- Address -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Enter Address</label>
                                    <input class="form-control" placeholder="Address" type="text" name="address" required>
                                </div>
                            </div>
                            <!-- Zip Code -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input class="form-control" placeholder="Zip Code" type="number" name="zipCode" required>
                                </div>
                            </div>
                            <!-- Contact Number -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Enter Contact Number</label>
                                    <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
                                </div>
                            </div>
                            <!-- Blood Quantity -->
                            <div class="form-group col-lg-6 pt-3">
                                <label for="bloodqty">Blood Quantity</label>
                                <select class="form-control" id="bloodqty" name="bloodqty" required>
                                    <option value="" disabled selected>Select Blood Quantity</option>
                                    <option value="1">1 Unit (Recommended)</option>
                                    <option value="2">2 Units (Not Recommended)</option>
                                </select>
                            </div>
                            <!-- Collection Date -->
                            <div class="col-lg-6 pt-3">
                                <div class="form-group">
                                    <label>Collection Date</label>
                                    <input class="form-control" type="date" name="collection" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 pt-5">
                            <button type="submit" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>