<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Donation | BDMS</title>
    <?php include 'includes/headerFile2.php' ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/donornav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-1">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post">
                                        <?php
                                        if (isset($_POST['name'])) {
                                            $name = $_POST["name"];
                                            $gender = $_POST["gender"];
                                            $dob = $_POST["dob"];
                                            $weight = $_POST["weight"];
                                            $bloodgroup = $_POST["bloodgroup"];
                                            $address = $_POST["address"];
                                            $zipCode = $_POST["zipCode"];
                                            $contact = $_POST["contact"];
                                            $bloodqty = $_POST["bloodqty"];
                                            $collection = $_POST["collection"];

                                            try {
                                                include '../pages/dbconnect.php';

                                                // Using prepared statements to prevent SQL injection
                                                $stmt = $pdo->prepare("INSERT INTO blood (name, gender, dob, weight, bloodgroup, address, zipCode, contact, bloodqty, collection) 
                                                                        VALUES (:name, :gender, :dob, :weight, :bloodgroup, :address, :zipCode, :contact, :bloodqty, :collection)");

                                                $stmt->bindParam(':name', $name);
                                                $stmt->bindParam(':gender', $gender);
                                                $stmt->bindParam(':dob', $dob);
                                                $stmt->bindParam(':weight', $weight);
                                                $stmt->bindParam(':bloodgroup', $bloodgroup);
                                                $stmt->bindParam(':address', $address);
                                                $stmt->bindParam(':zipCode', $zipCode);
                                                $stmt->bindParam(':contact', $contact);
                                                $stmt->bindParam(':bloodqty', $bloodqty);
                                                $stmt->bindParam(':collection', $collection);

                                                $stmt->execute();

                                                echo " <div style='text-align: center'><h1>Blood Donation Details Has Been Listed. Thank You.</h1>";
                                                echo " <a href='dashboard.php' div style='text-align: center'><h3>Go Back</h3>";
                                            } catch (PDOException $e) {
                                                echo "ERROR: " . $e->getMessage();
                                            }
                                        } else {
                                            echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='dashboard.php'> DASHBOARD </a></h3>";
                                        }
                                        ?>
                                    </form>
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
