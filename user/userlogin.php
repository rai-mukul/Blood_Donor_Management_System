<?php
session_start();
include('../dbcon.php');
?>

<html>

<head>
    <title>Donor | BDMS</title>
    <?php include 'includes/headerFile.php' ?>
</head>

<body>
    <nav class="navbar navbar-light fixed-bottom" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color:#050505;" href="index.php">Blood Donor Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
            </ul>
        </div>
    </nav>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-5">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info pb-3">Donor Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="userin" class="btn btn-info btn-md">Login</button>
                            </div>
                            <?php
                            if (isset($_POST['userin'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                try {
                                    // Select the user by username
                                    $stmt = $pdo->prepare("SELECT * FROM donor WHERE username = :username");
                                    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                                    $stmt->execute();

                                    // Fetch user data
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    $num_row = $stmt->rowCount();

                                    // Check if the user exists and the password is correct
                                    if ($num_row > 0 && password_verify($password, $row['dpassword'])) {
                                        $_SESSION['user_id'] = $row['id']; 
                                        $_SESSION['username'] = $row['username'];

                                        // Log user access in sessionData table
                                        $user_id = $row['id']; 
                                        $username = $row['username'];
                                        $stmtLog = $pdo->prepare("INSERT INTO sessionData (username, user_id) VALUES (:username, :user_id)");
                                        $stmtLog->bindParam(':username', $username);
                                        $stmtLog->bindParam(':user_id', $user_id);
                                        $stmtLog->execute();

                                        header('location:dashboard.php');
                                    } else {
                                        echo '<div class="alert alert-danger alert-dismissible">
                                                Invalid Username or Password.
                                              </div>';
                                    }
                                } catch (PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }
                            }
                            ?>
                            <div class="text-center links pt-1">
                                <a href="../" style="color: green">Back to Admin Panel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>