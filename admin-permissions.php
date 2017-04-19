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
                    <li><a href="admin-review-done.php">Review</a></li>
                    <li><a href="admin-settings.php">Settings</a></li>
                    <li class="active"><a href="admin-permissions.php">Permissions</a></li>
                    <li><a href="admin-users.php">Users</a></li>
                    <li><a href="admin-groups.php">Groups</a></li>
                </ul>
            </div>
        </div>
        <!-- End admin nav -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix sub-header-wrapper no-buttons">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h1 class="admin-page-title">Modules</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="general-list-wrapper no-header">
                        <li class="clearfix">
                            <a href="#" class="pull-left">Media</a>
                            <span class="pull-right">270</span>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="pull-left">Roombook</a>
                            <span class="pull-right">370</span>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="pull-left">Assets</a>
                            <span class="pull-right">13</span>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="pull-left">Contacts</a>
                            <span class="pull-right">3</span>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="pull-left">Contracts</a>
                            <span class="pull-right">6</span>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="pull-left">Users</a>
                            <span class="pull-right">2</span>
                        </li>
                    </ul>
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