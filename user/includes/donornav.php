<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: crimson; font-weight: bold;" href="dashboard.php"><i
                class="icofont-blood icofont-1x"></i> Blood Donor Management
            System</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li style="margin:7px;">
                    <img alt="logo" src="../img/logo.png" style="width: 100%;" />
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Donor's Dashboard</a>
                </li>

                <li>
                    <a href="blood_collection.php"><i class="fa fa-heartbeat"></i> View Blood Collections </a>
                </li>

                <li>
                    <a href="announcement.php"><i class="fa fa-bullhorn"></i> View Announcements </a>
                </li>
            </ul>
        </div>
    </div>
</nav>