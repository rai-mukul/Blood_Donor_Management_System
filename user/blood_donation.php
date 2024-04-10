<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Donation | BDMS</title>
    <?php include 'includes/headerData.php'; ?>
</head>

<body>

<div class="wrapper">
    <?php include 'includes/sidebar.php'; ?>
    <div class="main p-3">
        <div class="row">
            <div class=".col-lg-12">
                <h1 class="page-header">Donate Blood Section</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-1">
                    <div class="card-header">
                        Please fill up the form below:
                    </div>
                    <div class="card-body">
                        <form role="form" action="modalUser_addBlood.php" method="POST">
                            <div class="row">
                                <?php
                                session_start();
                                $username = $_SESSION['username'];
                                include "../pages/dbconnect.php";
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM donor WHERE username = :username");
                                    $stmt->bindParam(':username', $username);
                                    $stmt->execute();

                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    if ($row) {
                                        ?>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="Your full name" type="text" name="name"
                                                   value="<?php echo $row['name']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label for="gender">Gender</label>
                                            <input class="form-control" placeholder="Gender" type="text" name="gender"
                                                   value="<?php echo $row['gender']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="dob" value="<?php echo $row['dob']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Weight (lb)</label>
                                            <input class="form-control" type="number" placeholder="Weight in lb" name="weight"
                                                   value="<?php echo $row['weight']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label for="bloodgroup">Blood Group</label>
                                            <input class="form-control" placeholder="Blood group" type="text" name="bloodgroup"
                                                   value="<?php echo $row['bloodgroup']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" type="email" name="email"
                                                   value="<?php echo $row['email']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Address</label>
                                            <input class="form-control" type="text" placeholder="Full Address"
                                                   name="address" value="<?php echo $row['address']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>ZIP code</label>
                                            <input class="form-control" type="number" placeholder="ZIP code" name="zipCode"
                                                   value="<?php echo $row['zipCode']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Contact Number</label>
                                            <input class="form-control" type="tel" placeholder="Contact Number"
                                                   name="contact" value="<?php echo $row['contact']; ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label for="bloodqty">Blood Quantity</label>
                                            <select class="form-control" id="bloodqty" name="bloodqty" required>
                                                <option value="" disabled selected>Select Blood Quantity</option>
                                                <option value="1">1 Unit (Recommended)</option>
                                                <option value="2">2 Units (Not Recommended)</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 pt-3">
                                            <label>Collection Date</label>
                                            <input class="form-control" type="date" name="collection" required>
                                        </div>
                                        <?php
                                    } else {
                                        echo "0 results";
                                    }
                                } catch (PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }
                                ?>
                            </div>
                            <div class="pt-5">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/bodyScript.php'; ?>
<?php include '../pages/includes/footerData.php'; ?>

</body>
</html>
