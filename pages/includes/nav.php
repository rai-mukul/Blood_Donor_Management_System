<nav class="navbar navbar-default navbar-static-top " style="background-color: #d9edf7;" role="navigation"
    style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: crimson; font-weight: bold;" href="index.php"><i
                class="icofont-blood icofont-1x"></i> Blood Donor Management
            System</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
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
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-bullhorn"></i> Announcement Management<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="makeannouncement.php">Make Announcement</a>
                        </li>
                        <li>
                            <a href="viewannouncement.php">View Announcement</a>
                        </li>
                        <li>
                            <a href="editannounceform.php">Edit Announcement</a>
                        </li>
                        <li>
                            <a href="deleteannouncement.php">Delete Announcement</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-heartbeat"></i> Blood Collection Management <span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="addblood.php">Add Blood</a></li>
                        <li><a href="viewblood.php">View Blood</a></li>
                        <li><a href="editblood.php">Edit Blood</a></li>
                        <li><a href="deleteblood.php">Delete Blood</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table fa-user-plus"></i> Donor Management<span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="adddonor.php"> Add Donor</a></li>
                        <li><a href="viewdonor.php">View Donor Details</a></li>
                        <li><a href="update_donor_data.php">Update Donor Details</a></li>
                        <li><a href="delete_donors_detail.php"> Delete Donor Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>