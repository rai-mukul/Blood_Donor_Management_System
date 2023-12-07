<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post">
                                        <?php

                                        if (isset($_POST['name'])) {
                                            $name = $_POST["name"];
                                            $gender = $_POST["gender"];
                                            $dob = $_POST["dob"];
                                            $weight = $_POST["weight"];
                                            $bloodgroup = $_POST["bloodgroup"];
                                            $address = $_POST["address"];
                                            $zipCode = $_POST["zipCode"];
                                            $contact = $_POST["contact"];
                                            $bloodqty = $_POST["bloodqty"];
                                            $collection = $_POST["collection"];

                                            include 'dbconnect.php';

                                            // Prepare the SQL statement
                                            $qry = "INSERT INTO blood (name, gender, dob, weight, bloodgroup, address, zipCode, contact, bloodqty, collection) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                            $stmt = $pdo->prepare($qry);

                                            // Execute the statement
                                            $result = $stmt->execute([$name, $gender, $dob, $weight, $bloodgroup, $address, $zipCode, $contact, $bloodqty, $collection]);

                                            if (!$result) {
                                                echo "ERROR";
                                            } else {
                                                echo " <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
                                                echo " <a href='index.php' div style='text-align: center'><h3>Go Back</h3>";

                                            }

                                        } else {
                                            echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
                                        }

                                        ?>


                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>