<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="card p-1 text-center">
                <div class="card-header">
                    Message Box
                </div>
                <div class="card-body">
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

                            include 'dbconnect.php';

                            // Prepare the SQL statement
                            $qry = "INSERT INTO blood (name, gender, dob, weight, bloodgroup, address, zipCode, contact, bloodqty, collection) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $pdo->prepare($qry);

                            // Execute the statement
                            $result = $stmt->execute([$name, $gender, $dob, $weight, $bloodgroup, $address, $zipCode, $contact, $bloodqty, $collection]);

                            if (!$result) {
                                echo "ERROR";
                            } else {
                                echo " <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
                            }
                        } else {
                            echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
                        }

                        ?>


                    </form>
                    <a href="#" class="btn btn-primary"><i class="bi bi-house"></i> Go somewhere</a>
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