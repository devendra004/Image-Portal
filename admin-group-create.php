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
                            <div class="col-md-9 col-sm-8">
                                <h1 class="admin-page-title">Create new group</h1>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="btn blue-btn pull-right">Create</a>
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
                    <div class="general-list-wrapper form-group clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="name">Group name</label>
                                    <input type="text" name="name" placeholder="Marketing" class="full-input" id="name">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="description">Desciption</label>
                                    <input type="text" name="description" class="full-input" id="description">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row last-row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label>Administrator</label>
                                    <div class="ui fluid search selection dropdown">
                                        <input type="hidden" name="admin">
                                        <i class="dropdown icon"></i>
                                        <div class="default text"></div>
                                        <div class="menu">
                                            <div class="item clearfix" data-value="tina">
                                                <div class="img-wrapper">
                                                    <img src="img/admin-img-1.png" alt="admin1">
                                                </div>
                                                Tina Wenger
                                            </div>
                                            <div class="item clearfix" data-value="thomas">
                                                <div class="img-wrapper">
                                                    <img src="img/admin-img-2.png" alt="admin2">
                                                </div>
                                                Thomas Weingarten
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label>Color</label>
                                    <div class="color-picker-outer">
                                        <a href="#"><i class="picked-color"></i>Change color</a>
                                        <div class="general-dropdown color-picker-dropdown">
                                            <div class="general-dropdown-inner" style="display: block;">
                                                <div class="dropdown-title">
                                                    Choose a color for this group:
                                                </div>
                                                <div class="color-wrapper cf">
                                                    <span class="color-picker color-blue" data-color="#3498db">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-orange" data-color="#f68e56">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-purple" data-color="#a186be">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-green" data-color="#a3d39c">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-blue-2" data-color="#3484db">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-orange-2" data-color="#fdc689">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-purple-2" data-color="#f49ac1">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                    <span class="color-picker color-green-2" data-color="#c4df9b">
                                                        <img src="img/sprite/check-white.png" alt="check">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper user-search clearfix">

                        <div class="list-header clearfix">
                            <div class="list-title pull-left">Select Members</div>
                            <div class="pull-right visible-xs search--button--mobile">
                                <img src="img/search-black.png" alt="search">
                            </div>
                            <div class="search-wrapper pull-right">
                                <input type="search" placeholder="Members..." id="search-group">
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
                                <li class="clearfix">
                                    <div class="pull-left">
                                        <div class="img-wrapper pull-left">
                                            <img src="img/admin-img-1.png" alt="admin1">
                                        </div>
                                        <span class="name">Sebastian Turm</span>
                                    </div>
                                    <span class="pull-right">
                                        <input type="checkbox" name="general" value="1" id="general-77">
                                        <label for="general-77"></label>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="general-list-wrapper user-search clearfix">

                        <div class="list-header clearfix">
                            <div class="list-title pull-left">Give Permissions in</div>
                            <div class="pull-right visible-xs search--button--mobile">
                                <img src="img/search-black.png" alt="search">
                            </div>
                            <div class="search-wrapper pull-right">
                                <input type="search" placeholder="Permissions..." id="permissions-group">
                            </div>
                        </div>

                        <div class="general-scroll-wrapper clearfix">
                            <ul>
                                <li>    
                                    <div class="clearfix">                                
                                        <div class="pull-left">
                                            <b>All permissions</b>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="check--all">
                                            <label for="check--all"></label>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <dl class="permissions-container">
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Media</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-22" class="group--check--all">
                                            <label for="general-22"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-13">
                                                <label for="general-13"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-14">
                                                <label for="general-14"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Share photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-15">
                                                <label for="general-15"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Upload Photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-16">
                                                <label for="general-16"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Review photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-17">
                                                <label for="general-17"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Roombook</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-21" class="group--check--all">
                                            <label for="general-21"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-31">
                                                <label for="general-31"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-32">
                                                <label for="general-32"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Share photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-33">
                                                <label for="general-33"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Upload Photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-34">
                                                <label for="general-34"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Review photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-35">
                                                <label for="general-35"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Assets</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-41" class="group--check--all">
                                            <label for="general-41"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-42">
                                                <label for="general-42"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-43">
                                                <label for="general-43"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Contacts</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-44" class="group--check--all">
                                            <label for="general-44"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-45">
                                                <label for="general-45"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-46">
                                                <label for="general-46"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Contracts</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-54" class="group--check--all">
                                            <label for="general-54"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-55">
                                                <label for="general-55"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-56">
                                                <label for="general-56"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                                <!-- start group -->
                                <dt class="clearfix">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <strong>Users</strong>
                                        </div>
                                        <span class="pull-right">
                                            <input type="checkbox" name="general" value="1" id="general-64" class="group--check--all">
                                            <label for="general-64"></label>
                                        </span>
                                    </div>
                                </dt>
                                <dd class="permissions-fields">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>View photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-65">
                                                <label for="general-65"></label>
                                            </span>
                                        </li>
                                        <li class="clearfix">
                                            <div class="pull-left">
                                                <span>Download photos</span>
                                            </div>
                                            <span class="pull-right">
                                                <input type="checkbox" name="general" value="1" id="general-66">
                                                <label for="general-66"></label>
                                            </span>
                                        </li>
                                    </ul>
                                </dd>
                                <!-- end group -->
                            </dl>
                        </div>
                        <div class="show-more-wrapper visible-xs">
                        <a href="#" class="btn blue-btn">show more permissions</a>
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