<html>

<head>
    <title>User Announcement | BDMS</title>
    <?php include 'includes/headerFile2.php' ?>
</head>

<body>
    <div id="wrapper">

        <?php include 'includes/donornav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Announcement Detail</h1>
                    </div>
                </div>

                <div class="row">
                    <div class=".col-lg-12">
                        <div class="card p-1">
                            <div class="card-header">
                                Total Records of announcement made
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                        include "../pages/dbconnect.php";

                                        try {
                                            $qry = "SELECT * FROM announce";
                                            $stmt = $pdo->query($qry);

                                            echo "
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Blood Needed</th>
                                                        <th>Announcement Date</th>
                                                        <th>Organizer</th>
                                                        <th>Requirements</th>
                                                    </tr>
                                                </thead>";

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<tbody>
                                                    <tr>
                                                        <td>" . $row['announcement'] . "</td>
                                                        <td>" . $row['bloodneed'] . "</td>
                                                        <td>" . $row['dat'] . "</td>
                                                        <td>" . $row['organizer'] . "</td>
                                                        <td>" . $row['requirements'] . "</td>
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

    <?php include 'includes/bodyScript.php' ?>
</body>
<?php include '../pages/includes/footerData.php' ?>

</html>
