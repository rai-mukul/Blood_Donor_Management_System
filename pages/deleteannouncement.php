<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Announcement | BDMS</title>
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
                            <div class="card-header h4">
                                Delete Announcement
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    Total Records of announcement made
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Delete</th>
                                                <th>Title</th>
                                                <th>Blood Needed</th>
                                                <th>Announcement Date</th>
                                                <th>Organizer</th>
                                                <th>Requirements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include "dbconnect.php";

                                            try {
                                                $stmt = $pdo->query("SELECT * FROM announce");
                                                while ($row = $stmt->fetch()) {
                                                    echo "<tr>
                                                    <td><a href='deletedannounce.php?id=" . $row['id'] . "'><i class='bi bi-trash3' style='font-size: 1.5rem; color: red;'></i></a></td>
                                                            <td>" . htmlspecialchars($row['announcement']) . "</td>
                                                            <td>" . htmlspecialchars($row['bloodneed']) . "</td>
                                                            <td>" . htmlspecialchars($row['dat']) . "</td>
                                                            <td>" . htmlspecialchars($row['organizer']) . "</td>
                                                            <td>" . htmlspecialchars($row['requirements']) . "</td>
                                                             </tr>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            ?>

                                        </tbody>
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