<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Delete Blood Details</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-1">
                            <div class="card-header">
                                Total Records of available bloods
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                        include "dbconnect.php";

                                        $qry = "SELECT * FROM blood";
                                        $stmt = $pdo->query($qry);

                                        echo "
                                        <thead>
                                            <tr>
                                            <th>Action</th>
                                                <th>Blood Group</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>D.O.B</th>
                                                <th>Weight</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Quantity</th>
                                                <th>Collection Date</th>
                                              
                                            </tr>
                                        </thead>";

                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "
                                            <tbody>
                                                <tr class='gradeA'>
                                                <td><a href='deletebloodrecord.php?id={$row['id']}'><i class='bi bi-trash3' style='font-size: 1.5rem; color: red;'></i></a></td>
                                                    <td>{$row['bloodgroup']}</td>
                                                    <td>{$row['name']}</td>
                                                    <td>{$row['gender']}</td>
                                                    <td>{$row['dob']}</td>
                                                    <td>{$row['weight']}</td>
                                                    <td>{$row['address']}</td>
                                                    <td>{$row['contact']}</td>
                                                    <td>{$row['bloodqty']}</td>
                                                    <td>{$row['collection']}</td>
                                                    
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