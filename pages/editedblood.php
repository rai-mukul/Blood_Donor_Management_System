<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Blood | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
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
                                            echo "SUCCESSFULLY UPDATED";
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
	<?php include 'includes/footerData.php' ?>
</body>

</html>
