<?php include 'includes/head.php' ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php' ?>
    <!-- End header -->

    <!-- Start admin nav -->
    <div class="admin-navigation">
        <span class="menu-title hidden-sm hidden-xs"><span>Hello</span> Lukas Wrede</span>
        <div class="container">
            <ul class="admin-menu account-menu clearfix">
                <li><a href="myphoto-edit-filters-full.php">My photos</a></li>
                <li class="active"><a href="lightbox-single-multiple.php">Lightboxes</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Account</a></li>
            </ul>
        </div>
    </div>
    <!-- End admin nav -->

    <!-- Start section -->
    <section id="section" class="lightbox-detail-wrapper">

        <div class="filter-settings">
            <div class="filter-dropdown clearfix">
                <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
            </div>
        </div>

        <!-- Start filters -->
        <?php include 'includes/filter.php' ?>
        <!-- End filters -->
        <div class="filter-result-container colored-bg-1">

            <div class="filter-result-inner-container clearfix">
                <div class="center-container clearfix">

                    <div class="lightbox-wrapper">

                        <div class="title-wrapper clearfix">
                            <h1 class="page-title pull-left">Lightboxes</h1>
                            <div class="pull-right new-lightbox-wrapper">
                                <a href="#" class="btn blue-btn  new-lightbox hidden-xs">new lightbox</a>
                                <div class="general-dropdown lightbox-dropdown">
                                    <div class="general-dropdown-inner">
                                        <ul class="clearfix">
                                            <li>
                                                <form action="#" method="post">
                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox">
                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="result-inner thumb clearfix">
                        <div class="lightbox-inner">
                            <a href="#" class="create-lightbox">
                                <figure>
                                    <span>
                                        <img src="img/new-lightbox.png" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>Create New Lightbox </p>
                            </a>
                            <div class="general-dropdown lightbox-dropdown">
                                <div class="general-dropdown-inner" style="display: block;">
                                    <ul class="clearfix">
                                        <li>
                                            <form action="#" method="post">
                                                <input type="text" name="newlightbox" value="" placeholder="New lightbox">
                                                <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="lightbox-inner">
                            <a href="Lightbox-detail-navigation.html">
                                <figure>
                                    <span>
                                        <img src="img/list-img-1.jpg" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>List One (13)</p>
                            </a>
                        </div>

                        <div class="lightbox-inner">
                            <a href="Lightbox-detail-navigation.html">
                                <figure>
                                    <span>
                                        <img src="img/list-img-2.jpg" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>List Two (2)</p>
                            </a>
                        </div>

                        <div class="lightbox-inner">
                            <a href="Lightbox-detail-navigation.html">
                                <figure>
                                    <span>
                                        <img src="img/list-img-3.jpg" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>List Three (6)</p>
                            </a>
                        </div>

                        <div class="lightbox-inner">
                            <a href="Lightbox-detail-navigation.html">
                                <figure>
                                    <span>
                                        <img src="img/list-img-4.jpg" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>My Media (4)</p>
                            </a>
                        </div>
                        <div class="lightbox-inner">
                            <a href="Lightbox-detail-navigation.html">
                                <figure>
                                    <span>
                                        <img src="img/list-img-4.jpg" alt="Lightbox" />
                                    </span>
                                </figure>

                                <p>My Media (4)</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- End section -->

    <?php include 'includes/footer.php' ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php' ?>