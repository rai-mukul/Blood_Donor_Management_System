<?php
// Start session
session_start();

// Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location: index.php");
    exit();
}

$session_id = $_SESSION['user_id'];

// include "dbconnect.php";
// $qry = "SELECT bloodgroup, count(*) as number FROM blood GROUP BY bloodgroup";
// $result = $conn->query($qry);
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | BDMS</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bullhorn fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php include 'counter/anouncementCounter.php'; ?>
                                    <div class="huge"> </div>
                                    <div>Announcement</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewannouncement.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php include 'counter/DonarCounter.php'; ?>
                                    <div>Total Donors</div>
                                </div>
                            </div>
                        </div>

                        <a href="viewdonor.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="icofont-blood icofont-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php include 'counter/bloodCounter.php'; ?>
                                    <div>Available Blood</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="icofont-blood-drop icofont-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h1>Donate</h1>
                                    <div>Save Life</div>
                                </div>
                            </div>
                        </div>
                        <a href="addblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">Donate Blood Now!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/bodyScript.php' ?>
    <?php include 'includes/footerData.php' ?>

</body>

</html>