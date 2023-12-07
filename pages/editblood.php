<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>

</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Blood Details</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of available bloods
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">

                                        <?php

                                        // Include the database connection file
                                        include "dbconnect.php";

                                        try {

                                            // Fetch data using prepared statement
                                            $stmt = $pdo->query("SELECT * FROM blood");

                                            echo "
                                            <thead>
                                                <tr>
                                                    <th>Blood Group</th>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>D.O.B</th>
                                                    <th>Weight</th>
                                                    <th>Address</th>
                                                    <th>Zip Code</th>
                                                    <th>Contact</th>
                                                    <th>Quantity</th>
                                                    <th>Collection Date</th>
                                                    <th><i class='fa fa-pencil'></i></th>
                                                </tr>
                                            </thead>";

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo "
                                                <tbody>
                                                    <tr class='gradeA'>
                                                        <td>{$row['bloodgroup']}</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['gender']}</td>
                                                        <td>{$row['dob']}</td>
                                                        <td>{$row['weight']}</td>
                                                        <td>{$row['address']}</td>
                                                        <td>{$row['zipCode']}</td>
                                                        <td>{$row['contact']}</td>
                                                        <td>{$row['bloodqty']}</td>
                                                        <td>{$row['collection']}</td>
                                                        <td><a href='editbloodform.php?id={$row['id']}'><i class='fa fa-edit' style='color:green'></i></a></td>
                                                    </tr>
                                                </tbody>";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Failed to connect to MySQL: " . $e->getMessage();
                                            // Handle the error more gracefully in a production environment
                                            // For example, log the error and show a user-friendly message
                                            die();
                                        }

                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php include 'includes/footerData.php' ?>

</html>