<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header-no-search.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section">

        <!-- Start home-slider -->
        <div class="container-fluid">

            <div class="row">
                <div class="logged-slider">

                    <div class="slider-logged">
                        <div>
                            <div style="background-image: url('img/home-slider-img-2.png');"></div>
                        </div>
                        <div>
                            <div style="background-image: url('img/home-slider-img-1.png');"></div>
                        </div>
                        <div>
                            <div style="background-image: url('img/home-slider-img-2.png');"></div>
                        </div>
                        <div>
                            <div style="background-image: url('img/home-slider-img-1.png');"></div>
                        </div>
                    </div>


                    <!-- Start slider-search -->
                    <div class="slider-search">

                        <div class="container">
                            <form action="#" method="post" class="clearfix">
                                <input type="submit" name="sliderSearchSubmit" value="" />

                                <fieldset>
                                    <input type="text" name="sliderSearch" value="" placeholder="Find your perfect photo or video" id="slider-search" />
                                </fieldset>

                                <select name="searchSelect" class="slider-select">
                                    <option value="1">images</option>
                                    <option value="2">videos</option>
                                </select>
                            </form>
                        </div>

                    </div>
                    <!-- End slider-search -->
                </div>
            </div>

        </div>
        <!-- End home-slider -->

        <!-- Start recently-container -->
        <div class="recently-container">

            <div class="container">

                <h2 class="home-title">Recently added</h2>

                <div class="row">

                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <a href="photo-view.html" class="image-inner">
                            <figure>
                                <img src="img/recently-added-1.png" alt="Recently added" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <a href="photo-view.html" class="image-inner">
                            <figure>
                                <img src="img/recently-added-2.png" alt="Recently added" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <a href="photo-view.html" class="image-inner">
                            <figure>
                                <img src="img/recently-added-3.png" alt="Recently added" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <a href="filter-and-sort.html" class="image-inner">
                            <figure>
                                <img src="img/recently-added-4.png" alt="Recently added" class="img-responsive" />
                            </figure>
                            <div class="figure-hover">
                                <span class="hover-icon"></span>
                                <p>show more</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <!-- End recently-container -->

        <!-- Start trending-wrapper -->
        <div class="trending-container colored-bg-1">

            <div class="container">

                <h2 class="home-title">Trending photos</h2>

                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <a href="photo-view.html">
                            <figure>
                                <img src="img/trending-1.png" alt="Trending" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <a href="photo-view.html">
                            <figure>
                                <img src="img/trending-2.png" alt="Trending" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <a href="photo-view.html">
                            <figure>
                                <img src="img/trending-3.png" alt="Trending" class="img-responsive" />
                            </figure>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <!-- End trending-wrapper -->


        <!-- Start popular-container -->
        <div class="popular-container colored-bg-2">

            <div class="container">

                <h2 class="home-title">Popular tags</h2>

                <ul class="popular-tags-list clearfix">
                    <li><a href="filter-and-sort.html">building</a></li>
                    <li><a href="filter-and-sort.html">staff</a></li>
                    <li><a href="filter-and-sort.html">interior</a></li>
                    <li><a href="filter-and-sort.html">administration</a></li>
                    <li><a href="filter-and-sort.html">event</a></li>
                    <li><a href="filter-and-sort.html">restaurant</a></li>
                    <li><a href="filter-and-sort.html">service</a></li>
                    <li><a href="filter-and-sort.html">nature</a></li>
                    <li><a href="filter-and-sort.html">quality</a></li>
                </ul>

            </div>
        </div>
        <!-- End popular-container -->

    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>