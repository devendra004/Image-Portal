<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <div id="section" class="published-wrapper general-box-wrapper">

        <div class="filter-settings">
            <div class="filter-dropdown clearfix">
                <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
            </div>
        </div>

        <!-- Start filters -->
        <?php include 'includes/filter.php' ?>
        <!-- End filters -->

        <!-- Start admin nav -->
        <div class="admin-navigation">
            <span class="menu-title hidden-sm hidden-xs">Administration</span>
            <div class="container">
                <ul class="admin-menu clearfix">
                    <li class="active"><a href="admin-review-done.php">Review</a></li>
                    <li><a href="admin-settings.php">Settings</a></li>
                    <li><a href="admin-permissions.php">Permissions</a></li>
                    <li><a href="admin-users.php">Users</a></li>
                    <li><a href="admin-groups.php">Groups</a></li>
                </ul>
            </div>
        </div>
        <!-- End admin nav -->

        <div class="container">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                <div class="published-content">
                    <div class="upload-wrapper">
                        <img src="img/done.png" alt="done">
                        <p>
                            All photos reviewed
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>