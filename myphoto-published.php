<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php'; ?>
    <!-- End header -->

    <!-- Start admin nav -->
    <div class="admin-navigation">
        <span class="menu-title hidden-sm hidden-xs"><span>Hello</span> Lukas Wrede</span>
        <div class="container">
            <ul class="admin-menu account-menu clearfix">
                <li class="active"><a href="myphoto-edit-filters-full.php">My photos</a></li>
                <li><a href="lightbox-single-multiple.php">Lightboxes</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Account</a></li>
            </ul>
        </div>
    </div>
    <!-- End admin nav -->

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

        <div class="container">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                <div class="published-content successfull">
                    <div class="upload-wrapper">
                        <img src="img/done.png" alt="done">
                        <p>
                            All photos published successfully
                        </p>
                        <div class="clearfix links-wrapper">
                            <a href="#">Go to my photos</a>
                            <a href="#">Upload more</a>
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