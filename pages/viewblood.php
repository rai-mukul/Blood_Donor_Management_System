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
    <title>View Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-1">
            <h4 class="card-title p-1">Blood Collection</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">

                <div class="card p-1">
                    <div class="card-header"> Total Records of available bloods </div>
                    <div class="card-body">
                        <!-- Add search form -->
                        <form method="post" action="" class="pb-3">
                            <div class="form-group">
                                <label for="search">Search:</label>
                                <input type="text" class="form-control" id="search" name="search" placeholder="Enter search term">
                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary" style="margin: 4px">Search</button>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php
                                include "dbconnect.php";

                                try {
                                    // Check if search form is submitted
                                    if (isset($_POST['search'])) {
                                        $search = $_POST['search'];
                                        $qry = "SELECT * FROM blood WHERE 
                                                        bloodgroup LIKE '%$search%' OR 
                                                        name LIKE '%$search%' OR 
                                                        gender LIKE '%$search%' OR 
                                                        dob LIKE '%$search%' OR 
                                                        weight LIKE '%$search%' OR 
                                                        address LIKE '%$search%' OR 
                                                        contact LIKE '%$search%' OR 
                                                        bloodqty LIKE '%$search%' OR 
                                                        collection LIKE '%$search%'";
                                    } else {
                                        $qry = "SELECT * FROM blood";
                                    }

                                    $stmt = $pdo->query($qry);

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
                                                        <th>Blood Quantity</th>
                                                        <th>Collection Date</th>
                                                    </tr>
                                                </thead>";

                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "
                                                    <tbody>
                                                        <tr class='gradeA'>
                                                            <td>" . $row['bloodgroup'] . "</td>
                                                            <td>" . $row['name'] . "</td>
                                                            <td>" . $row['gender'] . "</td>
                                                            <td>" . $row['dob'] . "</td>
                                                            <td>" . $row['weight'] . "</td>
                                                            <td>" . $row['address'] . "</td>
                                                            <td>" . $row['zipCode'] . "</td>
                                                            <td>" . $row['contact'] . "</td>
                                                            <td>" . $row['bloodqty'] . "</td>
                                                            <td>" . $row['collection'] . "</td>
                                                        </tr>
                                                    <tbody>
                                                ";
                                    }
                                } catch (PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                } finally {
                                    // Close the connection
                                    $pdo = null;
                                }

                                ?>
                            </table>
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