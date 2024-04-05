<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Donor | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="container-fluid">
                <h1 class="page-header">Donor Section</h1>

                <div class="card p-1">
                    <div class="card-header">
                        Response Box
                    </div>
                    <div class="card-body">
                        <form role="form" action="index.php" method="post">
                            <?php

                            if (isset($_POST['name'])) {
                                $name = $_POST["name"];
                                $guardiansname = $_POST["guardiansname"];
                                $gender = $_POST["gender"];
                                $dob = $_POST["dob"];
                                $weight = $_POST["weight"];
                                $bloodgroup = $_POST["bloodgroup"];
                                $email = $_POST["email"];
                                $address = $_POST["address"];
                                $zipCode = $_POST["zipCode"];
                                $contact = $_POST["contact"];
                                $username = $_POST["username"];
                                $dpassword = password_hash($_POST["dpassword"], PASSWORD_DEFAULT); // Hash the password

                                include 'dbconnect.php';

                                // Username is available, proceed with insertion using PDO
                                $insertQuery = "INSERT INTO donor(name, guardiansname, gender, dob, weight, bloodgroup, email, address, zipCode, contact, username, dpassword) VALUES (:name, :guardiansname, :gender, :dob, :weight, :bloodgroup, :email, :address, :zipCode, :contact, :username, :dpassword)";
                                $insertStmt = $pdo->prepare($insertQuery);
                                $insertStmt->bindParam(':name', $name);
                                $insertStmt->bindParam(':guardiansname', $guardiansname);
                                $insertStmt->bindParam(':gender', $gender);
                                $insertStmt->bindParam(':dob', $dob);
                                $insertStmt->bindParam(':weight', $weight);
                                $insertStmt->bindParam(':bloodgroup', $bloodgroup);
                                $insertStmt->bindParam(':email', $email);
                                $insertStmt->bindParam(':address', $address);
                                $insertStmt->bindParam(':zipCode', $zipCode);
                                $insertStmt->bindParam(':contact', $contact);
                                $insertStmt->bindParam(':username', $username);
                                $insertStmt->bindParam(':dpassword', $dpassword);

                                if ($insertStmt->execute()) {
                                    echo "<div style='text-align: center'><h2>Donar added successfully.</h2>";
                                    echo "<a href='index.php' div style='text-align: center'><h3 class='btn btn-danger'><i class='bi bi-house'></i> Go Back</h3>";
                                } else {
                                    echo "ERROR";
                                }
                            } else {
                                echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
                            }

                            ?>
                        </form>

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