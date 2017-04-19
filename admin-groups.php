
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
                    <li><a href="admin-users.php">Users</a></li>
                    <li class="active"><a href="admin-groups.php">Groups</a></li>
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
                                <h1 class="admin-page-title">Groups</h1>
                            </div>
                             <div class="col-xs-1 pull-right visible-xs search--button--mobile">
                                <img src="img/search-black.png" alt="search">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="search-wrapper"> 
                                            <input type="search" placeholder="Group..." id="search-group">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                                        <a href="#" class="btn blue-btn pull-right">New Group</a>
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
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <div class="blue-bg">
                                                    A
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Administrator</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>A group for sharing your incredible landscape photography from all over the world.</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>2</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <div class="orange-bg">
                                                    G
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Guest</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>This group is for you to share all your Black & White photography!</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>350</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <div class="green-bg">
                                                    T
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Technical</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>Portrait Photography from around the World. Free tutorials, education, and technique critique.</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>5</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <div class="purple-bg">
                                                    J
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Journalist</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>This group is for you to share all your Black & White photography!</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>57</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                            <div class="blue-bg">
                                                    M
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Marketing</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>This group is to discuss and share images, tips & technicality about the art of cityscape & architecture.</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>4</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-7">
                                        <div class="pull-left">
                                            <div class="img-wrapper pull-left">
                                                <div class="green-bg">
                                                    M
                                                </div>
                                            </div>
                                            <span class="name"><a href="#">Management</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 hidden-xs">
                                        <span>This group is for you to share all your Black & White photography!</span>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-5">
                                        <span class="pull-right">
                                            <span>2</span>
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