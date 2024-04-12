<?php
session_start();
require_once('auth.php');
checkAuthorization();

// Check if user_id is set in session
if (!isset($_SESSION['user_id'])) {
    // Redirect or handle the case where user_id is not set
    // For example:
    header("Location: login.php");
    exit();
}

// Include the database connection file
include 'dbconnect.php';

// Prepare and execute the SQL query to fetch user details based on user_id
try {
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if (!$user) {
        // Redirect or handle the case where user does not exist
        // For example:
        $_SESSION['error_message'] = "User not found.";
        header("Location: error.php");
        exit();
    }
} catch (PDOException $e) {
    // Handle database errors
    $_SESSION['error_message'] = "Error: " . $e->getMessage();
    header("Location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile | BDMS</title>
    <?php include 'includes/headerData.php' ?>
    <link href="includes/profile.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-1">
            <h4 class="card-title p-1">User Profile</h4>
            <hr class="border border-success border-2 opacity-50 w-25">
            </hr>
            <div class="container-fluid">
                <div class="card p-1">
                    <div class="card-header">
                        User Details
                    </div>

                    <div class="card-body">
                        <section class="bg-light">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-xl-10">
                                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <p class="h3 text-white mb-0"><?php echo $user['name']; ?></p>
                                                        <span class="text-primary"><?php echo $user['accessLevel']; ?></span>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span><?php echo $user['accessLevel']; ?></li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span><?php echo $user['email']; ?></li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span><?php echo $user['phone']; ?></li>
                                                    </ul>
                                                    <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                                        <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                                        <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>
</body>

</html>
