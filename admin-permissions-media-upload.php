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
                                <h1 class="admin-page-title">Upload photos</h1>
                                <div class="breadcrumb-wrapper">
                                    <ol>
                                        <li>
                                            <a href="#"><span>Modules</span><i class="fa fa-angle-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Media</span><i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <span>Upload photos</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper user-search clearfix">

                        <div class="list-header clearfix">
                            <div class="list-title pull-left">Users</div>
                            <div class="pull-right visible-xs search--button--mobile">
                                <img src="img/search-black.png" alt="search">
                            </div>
                            <div class="search-wrapper pull-right">
                                <input type="search" placeholder="User or group..." id="search-group">
                            </div>
                        </div>
                        <div class="general-scroll-wrapper clearfix">
                            <ul class="user-container">
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <img src="img/admin-img-2.png" alt="admin1">
                                        </div>
                                        <span class="name">Markus Schmidt</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-1">
                                        <label for="general-1"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <div class="purple-bg">
                                                H
                                            </div>
                                        </div>
                                        <span class="name">Housekeeping</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-2">
                                        <label for="general-2"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <img src="img/admin-img-1.png" alt="admin1">
                                        </div>
                                        <span class="name">Sebastian Turm</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-3">
                                        <label for="general-3"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <img src="img/admin-img-1.png" alt="admin1">
                                        </div>
                                        <span class="name">Alfred Herrhausen</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-4">
                                        <label for="general-4"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <div class="orange-bg">
                                                A
                                            </div>
                                        </div>
                                        <span class="name">Administrator</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-5">
                                        <label for="general-5"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <div class="orange-bg">
                                                A
                                            </div>
                                        </div>
                                        <span class="name">Administrator</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-55">
                                        <label for="general-55"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <div class="green-bg">
                                                T
                                            </div>
                                        </div>
                                        <span class="name">Technical Service</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-6">
                                        <label for="general-6"></label>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <img src="img/admin-img-1.png" alt="admin1">
                                        </div>
                                        <span class="name">Sebastian Turm</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-7">
                                        <label for="general-7"></label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="show-more-wrapper visible-xs">
                            <a href="#" class="btn blue-btn">show more Members</a>
                        </div>
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