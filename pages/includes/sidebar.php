<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">BDMS</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item active">
            <a href="index.php" class="sidebar-link ">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-rss-feed"></i>
                <span>Announcement</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="makeannouncement.php" class="sidebar-link">Add Announcement</a>
                </li>
                <li class="sidebar-item">
                    <a href="viewannouncement.php" class="sidebar-link">View Announcement</a>
                </li>
                <li class="sidebar-item">
                    <a href="editannounceform.php" class="sidebar-link">Edit Announcement</a>
                </li>
                <li class="sidebar-item">
                    <a href="deleteannouncement.php" class="sidebar-link">Delete Announcement</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#bloodcollection" aria-expanded="false" aria-controls="bloodcollection">
                <i class="lni lni-heart"></i>
                <span>Blood Collection</span>
            </a>
            <ul id="bloodcollection" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="addblood.php" class="sidebar-link">Add Blood</a>
                </li>
                <li class="sidebar-item">
                    <a href="viewblood.php" class="sidebar-link">View Blood</a>
                </li>
                <li class="sidebar-item">
                    <a href="editblood.php" class="sidebar-link">Edit Blood</a>
                </li>
                <li class="sidebar-item">
                    <a href="deleteblood.php" class="sidebar-link">Delete Blood</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#donor" aria-expanded="false" aria-controls="donor">
                <i class="lni lni-users"></i>
                <span>Blood Collection</span>
            </a>
            <ul id="donor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="adddonor.php" class="sidebar-link">Add Donor</a>
                </li>
                <li class="sidebar-item">
                    <a href="viewdonor.php" class="sidebar-link">View Donor</a>
                </li>
                <li class="sidebar-item">
                    <a href="update_donor_data.php" class="sidebar-link">Edit Donor</a>
                </li>
                <li class="sidebar-item">
                    <a href="delete_donors_detail.php" class="sidebar-link">Delete Donor</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>User Profile</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="../logout.php" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
