<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>

</head>

<body>
    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Donors Detail</h1>
                    </div>
                </div>

                <div class="row">
                    <div class=".col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of available donors
                            </div>

                            <div class="panel-body">
                                <!-- Add search form -->
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label for="search">Search:</label>
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Enter search term">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin: 4px">Search</button>
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">

                                        <?php

                                        include "dbconnect.php";

                                        // Using PDO to fetch data
                                        // Check if search form is submitted
                                        if (isset($_POST['search'])) {
                                            $search = $_POST['search'];
                                            $qry = "SELECT * FROM donor WHERE 
                                                    name LIKE '%$search%' OR 
                                                    username LIKE '%$search%' OR 
                                                    guardiansname LIKE '%$search%' OR 
                                                    gender LIKE '%$search%' OR 
                                                    dob LIKE '%$search%' OR 
                                                    weight LIKE '%$search%' OR 
                                                    bloodgroup LIKE '%$search%' OR 
                                                    email LIKE '%$search%' OR 
                                                    address LIKE '%$search%' OR 
                                                    zipCode LIKE '%$search%' OR 
                                                    contact LIKE '%$search%'";
                                        } else {
                                            $qry = "SELECT * FROM donor";
                                        }

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
                                                <th>Zip Code</th>
                                                <th>Contact</th>
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
                                                    <td>" . $row['zipCode'] . "</td>
                                                    <td>" . $row['contact'] . "</td>
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
