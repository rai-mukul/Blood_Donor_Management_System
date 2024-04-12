
<?php
session_start();
require_once('auth.php');
checkAuthorization();

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

if (isset($_SESSION['error_message']) && isset($_SESSION['redirect_url'])) {
    header("Refresh: 0; URL=" . $_SESSION['redirect_url']);
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password | BDMS</title>
    <?php include 'includes/headerData.php' ?>

</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-1">
            <h4 class="card-title p-1">Change password</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">
                <div class="card p-1">
                    <div class="card-header">
                        Provide old password along with your new password to change it.
                    </div>

                    <div class="card-body">
                        <!-- Display error or success messages -->
                        <?php if (isset($_SESSION['error_message'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_message']; ?>
                            </div>
                            <?php unset($_SESSION['error_message']); ?>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['success_message'])) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['success_message']; ?>
                            </div>
                            <?php unset($_SESSION['success_message']); ?>
                        <?php endif; ?>

                        <!-- Change Password Form -->
                        <form action="change_password.php" method="POST">
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                        <!-- End Change Password Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>

</body>

</html>
