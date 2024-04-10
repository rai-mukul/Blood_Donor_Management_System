<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Collections | BDMS</title>
    <?php include 'includes/headerData.php'; ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php'; ?>
        <div class="main p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Blood Collection</h1>
                    </div>
                </div>

                <div class="row">
                    <div class=".col-lg-12">
                        <div class="card p-1">
                            <div class="card-header">
                                Total Records of available bloods
                            </div>

                            <div class="card-body">
                                <?php
                                if (isset($_GET['success'])) {
                                    echo "<div id='success-alert' class='alert alert-success'>" . $_GET['success'] . "</div>";
                                } elseif (isset($_GET['error'])) {
                                    echo "<div id='error-alert' class='alert alert-danger'>" . $_GET['error'] . "</div>";
                                }
                                ?>
                                <script>
                                    setTimeout(function() {
                                        document.getElementById('success-alert').style.display = 'none';
                                        document.getElementById('error-alert').style.display = 'none';
                                    }, 5000);
                                </script>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                        include "../pages/dbconnect.php";

                                        try {
                                            $qry = "SELECT * FROM blood";
                                            $stmt = $pdo->query($qry);

                                            echo "
                                                <thead>
                                                    <tr>
                                                        <th>Blood Group</th>
                                                        <th>Full Name</th>
                                                        <th>Gender</th>
                                                        <th>Address</th>
                                                        <th>ZIP Code</th>
                                                        <th>Contact</th>
                                                        <th>Blood Quantity</th>
                                                        <th>Collection Date</th>
                                                    </tr>
                                                </thead>";

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<tbody>
                                                    <tr class='gradeA'>
                                                        <td>" . $row['bloodgroup'] . "</td>
                                                        <td>" . $row['name'] . "</td>
                                                        <td>" . $row['gender'] . "</td>
                                                        <td>" . $row['address'] . "</td>
                                                        <td>" . $row['zipCode'] . "</td>
                                                        <td>" . $row['contact'] . "</td>
                                                        <td>" . $row['bloodqty'] . "</td>
                                                        <td>" . $row['collection'] . "</td>
                                                    </tr>
                                                <tbody>";
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

    <?php include 'includes/bodyScript.php'; ?>
</body>

<?php include '../pages/includes/footerData.php'; ?>

</html>