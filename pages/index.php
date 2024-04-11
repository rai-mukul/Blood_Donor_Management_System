<?php
session_start();
require_once('auth.php');
checkAuthorization();

if (isset($_SESSION['error_message']) && isset($_SESSION['redirect_url'])) {
    header("Refresh: 0; URL=" . $_SESSION['redirect_url']); // Redirect after 5 seconds
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin|Dashboard</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-3">
        <h4 class="card-title p-1">Admin Dashboard</h4>
                <hr class="border border-success border-2 opacity-50 w-25">
                </hr>
            <div class="card p-2 h-full">
                <!-- <h4 class="card-title p-1">Admin Dashboard</h4>
                <hr class="border border-success border-2 opacity-50 w-25">
                </hr> -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">Announcement</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php include 'counter/anouncementCounter.php'; ?></h5>
                            </div>
                            <a href="viewannouncement.php">
                                <div class="card-footer text-white text-left">
                                    View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-white bg-success">
                            <div class="card-header">Total Donors</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php include 'counter/DonarCounter.php'; ?></h5>
                            </div>
                            <a href="viewdonor.php">
                                <div class="card-footer text-white">
                                    View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-white bg-info">
                            <div class="card-header">Available Blood</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php include 'counter/bloodCounter.php'; ?></h5>
                            </div>
                            <a href="viewblood.php">
                                <div class="card-footer text-white">
                                    View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-white bg-primary">
                            <div class="card-header">Donate</div>
                            <div class="card-body">
                                <h1>Save Life</h1>
                            </div>
                            <a href="addblood.php">
                                <div class="card-footer text-white">
                                    Donate Blood Now!
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php include 'includes/footerData.php' ?>
</body>

</html>