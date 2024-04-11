<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_SESSION['error_message']) && isset($_SESSION['redirect_url'])) {
    header("Refresh: 0; URL=" . $_SESSION['redirect_url']); // Redirect after 5 seconds
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>

</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-1">
            <h4 class="card-title p-1">Donors Details</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">
                <div class="card p-1">
                    <div class="card-header">
                        Total Records of available donors
                    </div>

                    <div class="card-body">
                        <!-- Add search form -->
                        <form method="post" action="" class="d-flex py-2" role="search">
                            <input class="form-control me-2 w-auto" id="search" name="search" type="Enter Search Terms" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php
                                include "dbconnect.php";
                                if (isset($_POST['search'])) {
                                    $search = $_POST['search'];
                                    $qry = "SELECT * FROM donor WHERE 
                                                    name LIKE '%$search%' OR 
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
                            <div class="float-right">
                                <a href="export.php?format=excel" class="btn btn-success" style="margin: 4px">Export to Excel</a>
                            </div>
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
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable();
        });
    </script>

</body>

</html>