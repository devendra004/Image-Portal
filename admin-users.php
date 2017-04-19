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
                    <li><a href="admin-permissions.php">Permissions</a></li>
                    <li class="active"><a href="admin-users.php">Users</a></li>
                    <li><a href="admin-groups.php">Groups</a></li>
                </ul>
            </div>
        </div>
        <!-- End admin nav -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix sub-header-wrapper">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-3">
                                <h1 class="admin-page-title">Users</h1>
                            </div>
                            <div class="col-xs-1 pull-right visible-xs search--button--mobile">
                                <img src="img/search-black.png" alt="search">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="search-wrapper"> 
                                            <input type="search" placeholder="User..." id="search-group">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                                        <a href="#" class="btn blue-btn pull-right">New User</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper user-search no-header clearfix">

                        <ul class="user-container">
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-2.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Markus Schmidt</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>markus.schmidt@gmail.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span>Requested</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-1.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Sebastian Turm</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>t.wenger@yahoo.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span>Invited</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-2.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Markus Schmidt</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>sebturm@gmail.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span class="red-status">Deactivated</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-1.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Alfred Herrhausen</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>aherrhausen@photography.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span>Invited agan</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-2.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Markus Schmidt</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>rene.pantli@gmail.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span class="green-status">Active</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <img src="img/admin-img-1.png" alt="admin1">
                                            </div>
                                            <span class="name"><a href="#">Sebastian Turm</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 hidden-xs">
                                        <span>t.weingarten@enterprise.com</span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-5">
                                        <span class="pull-right">
                                            <span class="green-status">Active</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
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