<html lang="en">

<head>
    <title>View Announcement | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper"> 
        <?php include 'includes/sidebar.php' ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <div class="card p-1">
                        <div class="card-header h4">Announcement Detail</div>
                            <div class="panel-heading">
                                Total Records of announcement made
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Blood Needed</th>
                                                <th>Announcement Date</th>
                                                <th>Organizer</th>
                                                <th>Requirements</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        include "dbconnect.php";

                                        try {
                                            $query = "SELECT * FROM announce";
                                            $stmt = $pdo->prepare($query);
                                            $stmt->execute();
                                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($result as $row) {
                                                echo "<tbody>
                                                        <tr>
                                                            <td>" . $row['announcement'] . "</td>
                                                            <td>" . $row['bloodneed'] . "</td>
                                                            <td>" . $row['dat'] . "</td>
                                                            <td>" . $row['organizer'] . "</td>
                                                            <td>" . $row['requirements'] . "</td>
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