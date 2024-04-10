<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donor's | Dashboard</title>
    <?php include 'includes/headerData.php' ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="main p-3">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Donor's Dashboard
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card  text-white bg-warning mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="icofont-bullhorn icofont-5x"></i>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <?php include 'includes/notificationCounter.php'; ?>
                                    <div class="huge"> </div>
                                    <div>Announcement</div>
                                </div>
                            </div>
                        </div>
                        <a href="announcement.php">
                            <div class="card-footer text-white">
                                <span class="pull-left">View Details <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">
                            <div class="row clearfix">
                                <div class="col-lg-3">
                                    <i class="icofont-blood icofont-5x"></i>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <?php include 'includes/bloodCounter.php'; ?>
                                    <div>Available Blood</div>
                                </div>
                            </div>
                        </div>
                        <a href="blood_collection.php">
                            <div class="card-footer text-white">
                                <span class="pull-left">View Details <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="icofont-blood-drop icofont-5x"></i>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <h1>Donate</h1>
                                    <div>Save Life</div>
                                </div>
                            </div>
                        </div>
                        <a href="blood_donation.php">
                            <div class="card-footer text-white text-white">
                                <span class="pull-left">Donate Blood Now! <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                    </svg></span>
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
    <?php include 'includes/footerData.php' ?>

</body>

</html>