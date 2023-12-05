<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Donor's Detail</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" id="addDonorForm" action="modal_add_donor.php" method="post" autocomplete="off">

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Enter Full Name</label>
                                                    <input class="form-control" name="name" type="text"
                                                        placeholder="First Name and Last Name" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Parent's Name</label>
                                                    <input class="form-control" placeholder="Parents's Name"
                                                        name="guardiansname" required>
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
                                                    <label>Enter D.O.B</label>
                                                    <input class="form-control" type="date" name="dob" required>
                                                </div>


                                                <div class="form-group col-lg-6">
                                                    <label>Enter Weight</label>
                                                    <input class="form-control" type="number" placeholder="Enter Weight"
                                                        name="weight" required>
                                                </div>


                                                <div class="form-group col-lg-6">
                                                    <label for="bloodgroup">Blood Group</label>
                                                    <select class="form-control" id="bloodgroup" name="bloodgroup"
                                                        required>
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
                                                    <label>Enter Email Id</label>
                                                    <input class="form-control" type="email"
                                                        placeholder="Enter Email Id" name="email" required>
                                                </div>


                                                <div class="form-group col-lg-6">
                                                    <label>Enter Address</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Address Here" name="address" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter ZIP code </label>
                                                    <input class="form-control" type="number" placeholder="ZIP code"
                                                        name="zipCode" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Contact Number</label>
                                                    <input class="form-control" type="number"
                                                        placeholder="Contact Number" name="contact" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Enter Username</label>
                                                    <input class="form-control" placeholder="Enter Here" name="username"
                                                        id="username" required>
                                                    <span id="usernameAvailability"></span>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Enter Password</label>
                                                    <input class="form-control" name="dpassword" type="password"
                                                        id="myInput" required>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" onclick="myFunction()">Show Password
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success" style="border-radius:0%;"
                                                id="submitBtn" disabled>Submit Form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        // Check username availability using jQuery AJAX
        $(document).ready(function () {
            $("#username").blur(function () {
                var username = $(this).val();
                if (username !== '') {
                    $.ajax({
                        url: 'check_username.php', // replace with the actual PHP file to handle the check
                        method: 'POST',
                        data: {
                            username: username
                        },
                        success: function (data) {
                            $('#usernameAvailability').html(data);

                            // Enable/disable the submit button based on availability
                            var isAvailable = data.indexOf("Username available") !== -1;
                            $("#submitBtn").prop("disabled", !isAvailable);
                        }
                    });
                }
            });
        });
    </script>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>