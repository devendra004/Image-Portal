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
                    <li class="active"><a href="admin-settings.php">Settings</a></li>
                    <li><a href="admin-permissions.php">Permissions</a></li>
                    <li><a href="admin-users.php">Users</a></li>
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
                            <div class="col-md-9 col-sm-8">
                                <h1 class="admin-page-title">Settings</h1>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="btn blue-btn pull-right">Save</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="btn black-btn pull-right">Discard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper clearfix">

                        <div class="list-header clearfix">
                            <div class="list-title pull-left">Description</div>
                        </div>

                        <ul class="user-container">
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <span class="name">Enable public website access (no registration required)</span>
                                </div>
                                <span class="pull-right">
                                    <input type="checkbox" name="general" value="1" id="general-1">
                                    <label for="general-1"></label>
                                </span>
                            </li>
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <span class="name">Show watermark in photos</span>
                                </div>
                                <span class="pull-right">
                                    <input type="checkbox" name="general" value="1" id="general-2">
                                    <label for="general-2"></label>
                                </span>
                            </li>
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <span class="name">Review photos before publication</span>
                                </div>
                                <span class="pull-right">
                                    <input type="checkbox" name="general" value="1" id="general-3">
                                    <label for="general-3"></label>
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper clearfix">

                        <div class="list-header clearfix">
                            <div class="list-title pull-left">Reasons for decline</div>
                        </div>

                        <ul class="reasons-container">
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <img src="img/lines.png" alt="lines"><span class="name">Poor quality</span>
                                </div>
                                <span class="pull-right remove-button">
                                    <img src="img/close-red.png" alt="img" class="visible-xs"><span class="hidden-xs">Remove</span>   
                                </span>
                            </li>
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <img src="img/lines.png" alt="lines"><span class="name">Wrong content</span>
                                </div>
                                <span class="pull-right remove-button">
                                    <img src="img/close-red.png" alt="img" class="visible-xs"><span class="hidden-xs">Remove</span>   
                                </span>
                            </li>
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <img src="img/lines.png" alt="lines"><span class="name">Duplicate photo</span>
                                </div>
                                <span class="pull-right remove-button">
                                    <img src="img/close-red.png" alt="img" class="visible-xs"><span class="hidden-xs">Remove</span>   
                                </span>
                            </li>
                            <li class="clearfix">
                                <div class="name-wrapper pull-left">
                                    <img src="img/lines.png" alt="lines"><span class="name">No licence for this photo</span>
                                </div>
                                <span class="pull-right remove-button">
                                    <img src="img/close-red.png" alt="img" class="visible-xs"><span class="hidden-xs">Remove</span>   
                                </span>
                            </li>
                            <li class="clearfix">
                                <input type="text" name="reason" placeholder="add more...">
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