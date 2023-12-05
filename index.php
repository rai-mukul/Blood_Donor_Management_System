<?php
session_start();
include('dbcon.php');

if (isset($_POST['login'])) {
    try {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $num_row = $stmt->rowCount();

        if ($num_row > 0 && password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];

            // Log user access in sessionData table
            $user_id = $row['user_id'];
            $username = $row['username'];
            $stmtLog = $pdo->prepare("INSERT INTO sessionData (username, user_id) VALUES (:username, :user_id)");
            $stmtLog->bindParam(':username', $username);
            $stmtLog->bindParam(':user_id', $user_id);
            $stmtLog->execute(); 

            header('location:pages/index.php');
        } else {
            echo '<div class="row"><div class="col-md-4 col-md-offset-4">
                <div class="alert alert-danger alert-dismissible">
                    Username & Password did not match! Try Again.
                </div></div></div>';
        }
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BDMS - Admin Panel</title>
    <?php include 'nav.php' ?>
</head>

<body style="background-color: #17a2b8!important;">

    <nav class="navbar bg-info navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: crimson; font-weight: bold;" href="index.php">
                    <!-- <img alt="Brand" style="height: 30px;" src="data/Artboard 1.png"></img> -->
                    <i class="icofont-blood icofont-1x"></i>
                    Blood Donor Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="user/userlogin.php"><span class="glyphicon glyphicon-user" style="color:#00A10F;"></span>
                        User Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-info">
                        <div class="panel-heading my-3">
                            <h2 class="panel-title">
                                <center>Admin Login Panel</center>
                            </h2>
                        </div>
                        <div class="panel-body" style="margin:20px">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <p>Username</p>
                                        <input class="form-control" placeholder="Username" name="user" type="text"
                                            autofocus>
                                    </div>
                                    <div class="form-group">
                                        <p>Password</p>
                                        <input class="form-control" placeholder="Password" name="pass" type="password"
                                            value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn-info btn-block" style="border-radius:0%;"
                                        title="Log In" name="login" value="Login"></input>
                                </fieldset>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>


</body>

</html>