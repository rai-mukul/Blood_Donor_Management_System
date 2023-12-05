<html>

<head>
    <title>Delete Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Delete Donors Detail</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of available donors
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <?php

                                        include "dbconnect.php";

                                        try {
                                            $qry = "SELECT * FROM donor";
                                            $stmt = $pdo->query($qry);

                                            echo "
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                        <th>Guardian's Name</th>
                                                        <th>Gender</th>
                                                        <th>D.O.B</th>
                                                        <th>Weight</th>
                                                        <th>Blood Group</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Contact</th>
                                                        <th><i class='fa fa-pencil'></i></th>
                                                    </tr>
                                                </thead>";

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo "
                                                    <tbody>
                                                        <tr>
                                                            <td>" . $row['name'] . "</td>
                                                            <td>" . $row['username'] . "</td>
                                                            <td>" . $row['guardiansname'] . "</td>
                                                            <td>" . $row['gender'] . "</td>
                                                            <td>" . $row['dob'] . "</td>
                                                            <td>" . $row['weight'] . "</td>
                                                            <td>" . $row['bloodgroup'] . "</td>
                                                            <td>" . $row['email'] . "</td>
                                                            <td>" . $row['address'] . "</td>
                                                            <td>" . $row['contact'] . "</td>
                                                            <td><a href='modal_delete_donor.php?id=" . $row['id'] . "'><i class='fa fa-trash' style='color:red'></i></a></td>
                                                        </tr>
                                                    </tbody>";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error: " . $e->getMessage();
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