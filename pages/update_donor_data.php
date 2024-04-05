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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Donors Detail</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-1">
                            <div class="panel-heading"> Total Records of available donors </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <?php

                                        include "dbconnect.php";

                                        $qry = "SELECT * FROM donor";
                                        $stmt = $pdo->query($qry);

                                        echo "
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>Guardian's Name</th>
                                                    <th>Weight</th>
                                                    <th>Blood Group</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>ZIP Code</th>
                                                    <th>Contact</th>
                                                    <th>
                                                        <i class='fa fa-pencil'></i>
                                                    </th>
                                                </tr>
                                            </thead>";

                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "
                                            <tbody>
                                                <tr>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['username'] . "</td>
                                                    <td>" . $row['guardiansname'] . "</td>
                                                    <td>" . $row['weight'] . "</td>
                                                    <td>" . $row['bloodgroup'] . "</td>
                                                    <td>" . $row['email'] . "</td>
                                                    <td>" . $row['address'] . "</td>
                                                    <td>" . $row['zipCode'] . "</td>
                                                    <td>" . $row['contact'] . "</td>
                                                    <td>
                                                        <a href='edit_donors_detail.php?id=" . $row['id'] . "'>
                                                            <i class='fa fa-edit' style='color:green'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>";
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
    <?php include 'includes/bodyScript.php' ?>
	<?php include 'includes/footerData.php' ?>
</body>

</html>
