<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post">

                                        <?php

                                        include 'dbconnect.php';

                                        $name = $_POST["name"];
                                        $guardiansname = $_POST["guardiansname"];
                                        $gender = $_POST["gender"];
                                        $dob = $_POST["dob"];
                                        $weight = $_POST["weight"];
                                        $bloodgroup = $_POST["bloodgroup"];
                                        $email = $_POST["email"];
                                        $address = $_POST["address"];
                                        $zipCode = $_POST["zipCode"];
                                        $contact = $_POST["contact"];
                                        $id = $_POST['id'];

                                        try {
                                            // Update query using prepared statement
                                            $query = "UPDATE donor SET name=?, guardiansname=?, gender=?, dob=?, weight=?, bloodgroup=?, email=?, address=?, zipCode=?, contact=? WHERE id=?";
                                            $stmt = $pdo->prepare($query);
                                            $stmt->execute([$name, $guardiansname, $gender, $dob, $weight, $bloodgroup, $email, $address, $zipCode, $contact, $id]);

                                            echo "SUCCESSFULLY UPDATED";
                                        } catch (PDOException $e) {
                                            echo "ERROR: " . $e->getMessage();
                                        }
                                        ?>

                                    </form>
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