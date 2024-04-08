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
                        <h1 class="page-header">Edit Donors Detail</h1>
           
                        <div class="card p-1">
                            <div class="card-header"> Total Records of available donors </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php

                                        include "dbconnect.php";

                                        $qry = "SELECT * FROM donor";
                                        $stmt = $pdo->query($qry);

                                        echo "
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Name</th>
                                                    <th>Guardian's Name</th>
                                                    <th>Blood Group</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>ZIP Code</th>
                                                    <th>Contact</th>
                                                  
                                                </tr>
                                            </thead>";

                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "
                                            <tbody>
                                                <tr>
                                                <td>
                                                <a href='edit_donorForm.php?id=" . $row['id'] . "'>
                                                <i class='bi bi-pencil-square', style='font-size: 1.5rem; color: cornflowerblue;'></i>
                                                </a>
                                            </td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['guardiansname'] . "</td>
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
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>