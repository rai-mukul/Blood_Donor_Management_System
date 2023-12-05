<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard | BDMS</title>
    <?php include 'includes/headerFile2.php' ?>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/donornav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Donor's Dashboard
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
                                    <?php include 'includes/notificationCounter.php'; ?>
                                    <div class="huge"> </div>
                                    <div>Announcement</div>
                                </div>
                            </div>
                        </div>
                        <a href="announcement.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="icofont-blood icofont-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php include 'includes/bloodCounter.php'; ?>
                                    <div>Available Blood</div>
                                </div>
                            </div>
                        </div>
                        <a href="blood_collection.php">
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
                        <a href="blood_donation.php">
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
    </div>

    </div>

    <?php include 'includes/bodyScript.php' ?>

</body>

<?php include '../pages/includes/footerData.php' ?>

</html>