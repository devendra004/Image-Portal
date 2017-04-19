<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <div id="section" class="browse-wrapper general-box-wrapper">

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
                <div class="browse-content">
                    <div class="upload-wrapper">
                        <img src="img/upload.png" alt="upload" class="hidden-xs">
                        <p class="hidden-xs">
                            drag &amp; drop photos 
                            <br>
                            anywhere on this page or
                        </p>
                        <p class="visible-xs">
                            Choose photos to upload
                        </p>
                        <a href="#" class="btn blue-btn">Browse Photos <input type="file" class="browse-input" name="browse"></a>

                    </div>
                </div>
                <div class="socila-import-wrapper">
                    <p>You can also import photos from other sources</p>
                    <ul>
                        <li>
                            <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/flikr.png" alt="flikr"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/instagram.png" alt="instagram"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/google.png" alt="google"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/dropbox.png" alt="dropbox"></a>
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
