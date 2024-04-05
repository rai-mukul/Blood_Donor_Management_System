<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-2">
            <div class="container-fluid">
                <div class="card p-1 text-center">
                    <div class="card-header">
                        Status Box
                    </div>
                    <div class="card-body">
                        <form role="form" action="#" method="post">
                            <?php
                            include 'dbconnect.php';

                            $name = htmlspecialchars($_POST["name"]);
                            $gender = htmlspecialchars($_POST["gender"]);
                            $dob = htmlspecialchars($_POST["dob"]);
                            $weight = htmlspecialchars($_POST["weight"]);
                            $bloodgroup = htmlspecialchars($_POST["bloodgroup"]);
                            $address = htmlspecialchars($_POST["address"]);
                            $zipCode = htmlspecialchars($_POST["zipCode"]);
                            $contact = htmlspecialchars($_POST["contact"]);
                            $bloodqty = htmlspecialchars($_POST["bloodqty"]);
                            $collection = htmlspecialchars($_POST["collection"]);
                            $id = htmlspecialchars($_POST['id']);

                            $qry = "UPDATE blood SET name=?, gender=?, dob=?, weight=?, bloodgroup=?, address=?, zipCode=?, contact=?, bloodqty=?, collection=? WHERE id=?";
                            $stmt = $pdo->prepare($qry);
                            $stmt->execute([$name, $gender, $dob, $weight, $bloodgroup, $address, $zipCode, $contact, $bloodqty, $collection, $id]);

                            if (!$stmt) {
                                echo "ERROR";
                            } else {
                                echo "<div style='text-align: center'><h2>Successfully Posted.</h2>";
                                echo "<br><a href='index.php' div style='text-align: center'><h3 class='btn btn-success'><i class='bi bi-house'></i> Go Back</h3>";
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