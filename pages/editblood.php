<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>

</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Blood Details</h1>
                    </div>
                </div>
                <div class="card p-1">
                    <div class="card-header">
                        Total Records of available bloods
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                <?php
                                include "dbconnect.php";

                                try {

                                    // Fetch data using prepared statement
                                    $stmt = $pdo->query("SELECT * FROM blood");

                                    echo "
                                            <thead>
                                                <tr>
                                                    <th>Edit</i></th>
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
                                                   
                                                </tr>
                                            </thead>";

                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "
                                                <tbody>
                                                    <tr class='gradeA'>
                                                    <td><a href='editbloodform.php?id={$row['id']}'><i class='bi bi-pencil-square', style='font-size: 1.5rem; color: cornflowerblue;'></i></a></td>
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
                                                      
                                                    </tr>
                                                </tbody>";
                                    }
                                } catch (PDOException $e) {
                                    echo "Failed to connect to MySQL: " . $e->getMessage();
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

    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>

</body>

</html>