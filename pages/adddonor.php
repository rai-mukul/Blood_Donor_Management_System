<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
    <style>
        .message-container {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 5px;
        }

        .available {
            color: green;
        }

        .not-available {
            color: red;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="container-fluid">
                <h1 class="page-header">Add Donor's Detail</h1>
                <div class="card p-1">
                    <div class="card-header">
                        Please fill up the form below:
                    </div>
                    <div class="card-body">
                        <form role="form" id="addDonorForm" action="modal_addDonor.php" method="post" autocomplete="off">
                            <div class="row">
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="First Name and Last Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Parent's Name</label>
                                            <input class="form-control" placeholder="Parents's Name" name="guardiansname" required>
                                        </div>


                                        <div class="form-group col-lg-6 pt-3">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" id="gender" name="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Other</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>


                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                        </div>


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


                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Email Id</label>
                                            <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                        </div>


                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                        </div>

                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter ZIP code </label>
                                            <input class="form-control" type="number" placeholder="ZIP code" name="zipCode" required>
                                        </div>

                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
                                        </div>

                                        <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Username</label>
                                    <input class="form-control" placeholder="Enter Here" name="username" id="username" required>
                                    <div id="usernameAvailability"></div>
                                </div>
                                <div class="form-group col-lg-6 pt-3">
                                    <label>Enter Password</label>
                                    <input class="form-control" name="dpassword" type="password" id="myInput" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="border-radius:0%;" id="submitBtn" disabled>Submit Form</button>
                        </form>
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
        $(document).ready(function() {
            $("#username").keyup(function() {
                var username = $(this).val();
                if (username !== '') {
                    $.ajax({
                        url: 'check_username.php',
                        method: 'POST',
                        data: {
                            username: username
                        },
                        success: function(data) {
                            $('#usernameAvailability').html(data);
                            $('#usernameAvailability').show();

                            // Enable/disable the submit button based on availability
                            var isAvailable = data.indexOf("Username available") !== -1;
                            $("#submitBtn").prop("disabled", !isAvailable);
                        }
                    });
                } else {
                    $('#usernameAvailability').hide();
                }
            });
        });
    </script>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>