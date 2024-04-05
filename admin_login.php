<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BDMS - Admin Panel</title>
    <?php include 'includes/nav.php' ?>
</head>

<body class="admin-bg">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card border-info w-50 w-sm-75 w-lg-50">
            <div class="card-header h4 text-center bg-info">
                Admin Login Panel
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error'] === true) : ?>
                    <div id="errorMessage" class="mb-3 text-center">
                        <div class="alert alert-danger alert-dismissible">
                            Username & Password did not match! Try Again.
                        </div>
                    </div>
                    <?php
                    // Unset the login_error session variable after displaying the error message
                    unset($_SESSION['login_error']);
                    ?>
                    <script>
                        // Remove the error message after 5 seconds
                        setTimeout(function() {
                            var errorMessage = document.getElementById('errorMessage');
                            errorMessage.parentNode.removeChild(errorMessage);
                        }, 2000); // 5000 milliseconds = 5 seconds
                    </script>
                <?php endif; ?>
                <form action="backend_admin.php" method="post">
                    <fieldset>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input class="form-control" id="username" name="user" type="text" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" id="password" name="pass" type="password">
                        </div>
                        <button type="submit" class="btn btn-info btn-lg btn-block mt-3" title="Log In" name="login">Login</button>
                    </fieldset>
                </form>
                <hr bg-info>

                <p class="text-center mb-0">Are you a Donor? <a href="user/userlogin.php">Login Here</a></p>

            </div>
        </div>
    </div>
</body>

</html>