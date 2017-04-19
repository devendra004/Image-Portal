<?php include 'includes/head.php' ?>   

<!-- Start wrapper -->
<div id="wrapper" class="my-photo-edit--wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php' ?>   
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
    <section id="section" class="my-photo-edit-wrap">
        <div class="filter-settings"></div>
        <!-- Start filter-settings -->
        <div class="filter-settings-photo-edit">
            <div class="filter-result-inner-container clearfix">

                <div class="filter-dropdown clearfix">
                    <a href="#" class="btn blue-btn" id="filter-btn"><img src="img/filters.png" alt="filters">Show Filter and sort</a>
                </div>

                <div class="search-and-results clearfix pull-left">
                    <div class="search-wrapper"> 
                        <input type="search" placeholder="Search..." id="search-group" class="">
                    </div> 
                    <span class="search-results">647 results</span>
                </div>
                <div class="pull-right clearfix select-all-wrap">
                    <input type="checkbox" name="select-all" value="p0" id="select--all" />
                    <label for="select--all">Select all <span class="search-results-mobile">(647 results)</span></label>
                </div>

                <div class="mobile-filter-wrapper">
                    <a href="#" class="btn blue-btn mobile-filter"><img src="img/filters.png" alt="filters">Filters</a>
                </div>

                <!-- Start filters -->
                <?php include 'includes/filter-mobile.php' ?>
                <!-- End filters -->
            </div>
        </div>
        <!-- End filter-settings -->

        <!-- Start filter-result-container -->
        <div class="filter-result-container colored-bg-1">

            <div class="filter-result-inner-container clearfix">
                <div class="center-container  my-photo-filters clearfix">

                    <!-- Start filters -->
                    <?php include 'includes/filter.php' ?>
                    <!-- End filters -->

                    <div class="result-inner nested">
                        <div class="float-contaier clearfix">

                            <div class="gutter-size"></div>

                            <!-- Start result-item -->
                            <div class="result-item nested-item"  id="index-1">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <a href="photo-view.php">
                                            <img src="img/result1.png" alt="Result img"  class="bg-image" />
                                        </a>
                                        <div class="clearfix">   
                                            <div class="filter-overlay">
                                                <span class="check-icon icons">
                                                    <img src="img/check-ico.png" alt="ico2">
                                                </span>
                                            </div>
                                            <a href="#fancybox-content-1" class="expand-icon icons fancybox">
                                                <img src="img/expand-ico.png" alt="ico1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item"  id="index-2">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <a href="photo-view.php">
                                            <img src="img/result2.png" alt="Result img"  class="bg-image" />
                                        </a>
                                        <div class="clearfix">   
                                            <div class="filter-overlay">
                                                <span class="check-icon icons">
                                                    <img src="img/check-ico.png" alt="ico2">
                                                </span>
                                            </div>
                                            <a href="#fancybox-content-1" class="expand-icon icons fancybox">
                                                <img src="img/expand-ico.png" alt="ico1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item"  id="index-3">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <a href="photo-view.php">
                                            <img src="img/result3.png" alt="Result img"  class="bg-image" />
                                        </a>
                                        <div class="clearfix">   
                                            <div class="filter-overlay">
                                                <span class="check-icon icons">
                                                    <img src="img/check-ico.png" alt="ico2">
                                                </span>
                                            </div>
                                            <a href="#fancybox-content-1" class="expand-icon icons fancybox">
                                                <img src="img/expand-ico.png" alt="ico1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->

                           

                            <!-- Start result-item -->
                            <div class="result-item nested-item"  id="index-27">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <a href="photo-view.php">
                                            <img src="img/result27.png" alt="Result img"  class="bg-image" />
                                        </a>
                                        <div class="clearfix">   
                                            <div class="filter-overlay">
                                                <span class="check-icon icons">
                                                    <img src="img/check-ico.png" alt="ico2">
                                                </span>
                                            </div>
                                            <a href="#fancybox-content-1" class="expand-icon icons fancybox">
                                                <img src="img/expand-ico.png" alt="ico1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item"  id="index-28">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <a href="photo-view.php">
                                            <img src="img/result28.png" alt="Result img"  class="bg-image" />
                                        </a>
                                        <div class="clearfix">   
                                            <div class="filter-overlay">
                                                <span class="check-icon icons">
                                                    <img src="img/check-ico.png" alt="ico2">
                                                </span>
                                            </div>
                                            <a href="#fancybox-content-1" class="expand-icon icons fancybox">
                                                <img src="img/expand-ico.png" alt="ico1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item loading-image">
                                <div class="result-item-inner">
                                    <div class="result--inner">
                                        <img src="img/result28.png" alt="Result img"  class="bg-image" />
                                        <div class="clearfix">   
                                            <div class="loading-overlay">
                                                <span class="icons load-icon">
                                                    <img src="img/loader-icon.png" alt="ico3">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End result-item -->
                            

                        </div>
                    </div>

                    <div class="overlay-wrapper-filterz sidebar-nav-fixed affix">
                        <div class="edit-filter">
                            <form action="#" method="post">

                                <div class="filter-progress">
                                    <h2>Editing 1 photos</h2>
                                    <p>
                                        Discoverability
                                    </p>
                                    <div class="progress-outer">
                                        <div class="progress-wrap progress" data-progress-percent="35">
                                            <div class="progress-bar progress"></div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Start filter-type -->
                                <div class="filter-type">
                                    <h3 class="filter-opened">Basic info</h3>
                                    <div class="filter-field clearfix "  style="display: block;">

                                        <fieldset>
                                            <p>Title</p>
                                            <input type="text" name="title" value="" placeholder="Deconstruction of the old lobby" class="full-input" id="title">
                                        </fieldset>

                                        <fieldset>
                                            <p>Tags</p>
                                            <div class="tags-wrapper clearfix">

                                                <div class="tag">
                                                    bulding <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                                </div>
                                                <div class="tag">
                                                    factory <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                                </div>

                                                <div class="tag">
                                                    old <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                                </div>

                                                <div class="add-tag">
                                                    add tag
                                                </div>

                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <p>Albums</p>
                                            <div class="clearfix">
                                                <input type="text" name="searchPhoto" value="" placeholder="Search..." id="search-album" class="search" />
                                                <input type="checkbox" name="album-1" value="p0" id="album-1" />
                                                <label for="album-1">Gala Dinner</label>
                                                <input type="checkbox" name="album-2" value="p1" id="album-2" />
                                                <label for="album-2">New Year’s Eve</label>
                                                <input type="checkbox" name="album-3" value="p2" id="album-3" />
                                                <label for="album-3">New Summer Festival 2015</label>
                                                <input type="checkbox" name="album-4" value="p3" id="album-4" />
                                                <label for="album-4">Welcome Event 2014</label>
                                                <input type="checkbox" name="album-5" value="p3" id="album-5" checked />
                                                <label for="album-5">New Lobby</label>
                                                <a href="#" class="general-link">Add album</a>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <p>Location</p>
                                            <input type="text" name="location" value="" placeholder="Hotel Baur au Lac" class="full-input" id="location">
                                        </fieldset>

                                    </div>
                                </div>
                                <!-- End filter-type -->

                                <!-- Start filter-type -->
                                <div class="filter-type">
                                    <h3>technical</h3>
                                    <div class="filter-field clearfix">
                                        <fieldset>
                                            <p>Location</p>
                                            <input type="text" name="photographer" value="" class="full-input" id="photographer2">

                                            <p>Camera</p>
                                            <input type="text" name="camera" value="" class="full-input" id="camera">

                                            <p>Lens</p>
                                            <input type="text" name="Lens" value="" class="full-input" id="Lens">

                                            <p>Focal lenght</p>
                                            <input type="text" name="focal-lenght" value="" class="full-input" id="focal-lenght">

                                            <p>Shutter Speer</p>
                                            <input type="text" name="shutter-speer" value="" class="full-input" id="shutter-speer">

                                            <p>Aperture</p>
                                            <input type="text" name="aperture" value="" class="full-input" id="aperture">

                                            <p>ISO</p>
                                            <input type="text" name="iso" value="" class="full-input" id="iso">

                                            <p>Date Taken</p>
                                            <input type="text" name="date-taken" value="" class="full-input" id="date-taken">
                                        </fieldset>
                                    </div>
                                </div>
                                <!-- End filter-type -->

                                <!-- Start filter-type -->
                                <div class="filter-type">
                                    <h3>Access</h3>
                                    <div class="filter-field clearfix">
                                        <fieldset>
                                            <p>Access</p>
                                            <input type="radio" name="access" value="a1" id="access-1" />
                                            <label for="access-1">Unsorted</label>

                                            <input type="radio" name="access" value="a2" id="access-2" />
                                            <label for="access-2">Newest</label>
                                        </fieldset>
                                        <fieldset>
                                            <p>Date of Publication</p>
                                            <input type="text" class="date" name="date" id="date" placeholder="01.01.2008">
                                        </fieldset>
                                        <fieldset>
                                            <p>Use</p>

                                            <input type="radio" name="use" value="u1" id="use-3" />
                                            <label for="use-3">Oldest</label>

                                            <input type="radio" name="use" value="u1" id="use-4" />
                                            <label for="use-4">Most popular</label>

                                            <input type="radio" name="use" value="u1" id="use-5" />
                                            <label for="use-5">Most popular</label>

                                        </fieldset>
                                    </div>
                                </div>
                                <!-- End filter-type -->

                                <!-- Start filter-type -->
                                <div class="filter-type">
                                    <h3>Licence</h3>
                                    <div class="filter-field clearfix">
                                        <fieldset>
                                            <input type="radio" name="licence" value="u1" id="licence-0" checked />
                                            <label for="licence-0">All rights reserved</label>

                                            <input type="radio" name="licence" value="u1" id="licence-1" />
                                            <label for="licence-1">Public Domain Work</label>

                                            <input type="radio" name="licence" value="u1" id="licence-2" />
                                            <label for="licence-2">Public Domain Dedication (CC0)</label>

                                            <input type="radio" name="licence" value="u1" id="licence-3" />
                                            <label for="licence-3">Attribution</label>

                                            <input type="radio" name="licence" value="u1" id="licence-4" />
                                            <label for="licence-4">Attribution - ShareAlike</label>

                                            <input type="radio" name="licence" value="u1" id="licence-5" />
                                            <label for="licence-5">Attribution - NoDervis</label>

                                            <input type="radio" name="licence" value="u1" id="licence-6" />
                                            <label for="licence-6">Attribution - NonCommercialt</label>

                                        </fieldset>
                                    </div>
                                </div>
                                <!-- End filter-type -->
                                <div class=" ui-elements">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a class="btn blue-btn" href="#">Publish</a>

                                        </div>   
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a class="btn black-btn discard-button" href="#">Discard</a>
                                        </div>                  
                                    </div>

                                    <a href="#" class="btn grey-btn"> Delete Selecter (1) </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End filter-result-container -->
        <div class="clearfix">
            <div class="col-xs-12 visible-xs">
                <a href="#" class="image-inner">
                    <figure>
                        <img src="img/recently-added-4.png" alt="Recently added" class="img-responsive">
                    </figure>
                    <div class="figure-hover">
                        <span class="hover-icon"></span>
                        <p>show more</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="load-more-wrapper cf">
            <div class="loading-inner">
                <span class="icons load-icon">
                    <img src="img/loader-icon.png" alt="ico3">
                </span>
            </div>
        </div>

        <div class="floating-wrapper">
            <a class="btn blue-btn edit-single-photo" href="#">edit selected (1 photo)</a>
        </div>

    </section>
    <!-- End section -->

    <!-- start fancybox content -->
    <div id="fancybox-content-1">
        <div class="clearfix">

            <div class="slider-container">
                <div class="slider-1">
                    <div><img src="img/result1.png" alt="img1"></div>
                    <div><img src="img/result2.png" alt="img2"></div>
                    <div><img src="img/result3.png" alt="img3"></div>
                    <div><img src="img/result4.png" alt="img4"></div>
                    <div><img src="img/result5.png" alt="img5"></div>
                    <div><img src="img/result6.png" alt="img6"></div>
                    <div><img src="img/result7.png" alt="img7"></div>
                    <div><img src="img/result8.png" alt="img8"></div>
                    <div><img src="img/result9.png" alt="img9"></div>
                    <div><img src="img/result10.png" alt="img10"></div>
                    <div><img src="img/result11.png" alt="img11"></div>
                    <div><img src="img/result12.png" alt="img12"></div>
                    <div><img src="img/result13.png" alt="img13"></div>
                    <div><img src="img/result14.png" alt="img14"></div>
                    <div><img src="img/result15.png" alt="img15"></div>
                    <div><img src="img/result16.png" alt="img16"></div>
                    <div><img src="img/result17.png" alt="img17"></div>
                    <div><img src="img/result18.png" alt="img18"></div>
                    <div><img src="img/result19.png" alt="img19"></div>
                    <div><img src="img/result20.png" alt="img20"></div>
                    <div><img src="img/result21.png" alt="img21"></div>
                    <div><img src="img/result22.png" alt="img22"></div>
                    <div><img src="img/result23.png" alt="img23"></div>
                    <div><img src="img/result24.png" alt="img24"></div>
                    <div><img src="img/result25.png" alt="img25"></div>
                    <div><img src="img/result26.png" alt="img26"></div>
                    <div><img src="img/result27.png" alt="img27"></div>
                    <div><img src="img/result28.png" alt="img28"></div>
                </div>
            </div>
            <div class="edit-filter-container">
                <div class="edit-filter">
                    <form action="#" method="post">
                        <div class="scrollbar-wrapper clearfix">
                            <div class="filter-progress">
                                <h2>Editing 4 photos</h2>
                                <p>
                                    Discoverability
                                </p>
                                <div class="progress-outer">
                                    <div class="progress-wrap progress" data-progress-percent="35">
                                        <div class="progress-bar progress"></div>
                                    </div>
                                </div>

                            </div>
                            <!-- Start filter-type -->
                            <div class="filter-type">
                                <h3 class="filter-opened">Basic info</h3>
                                <div class="filter-field clearfix "  style="display: block;">

                                    <fieldset>
                                        <p>Title</p>
                                        <input type="text" name="title" value="" placeholder="Deconstruction of the old lobby" class="full-input" id="title1">
                                    </fieldset>

                                    <fieldset>
                                        <p>Tags</p>
                                        <div class="tags-wrapper clearfix">

                                            <div class="tag">
                                                bulding <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                            </div>
                                            <div class="tag">
                                                factory <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                            </div>

                                            <div class="tag">
                                                old <span class="remove-tag"><img src="img/remove.png" alt="remove"></span>
                                            </div>

                                            <div class="add-tag">
                                                add tag
                                            </div>

                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <p>Albums</p>
                                        <div class="clearfix">
                                            <input type="text" name="searchPhoto" value="" placeholder="Search..." id="search-album1" class="search" />
                                            <input type="checkbox" name="album-11" value="p0" id="album-11" />
                                            <label for="album-11">Gala Dinner</label>
                                            <input type="checkbox" name="album-22" value="p1" id="album-22" />
                                            <label for="album-22">New Year’s Eve</label>
                                            <input type="checkbox" name="album-33" value="p2" id="album-33" />
                                            <label for="album-33">New Summer Festival 2015</label>
                                            <input type="checkbox" name="album-44" value="p3" id="album-44" />
                                            <label for="album-44">Welcome Event 2014</label>
                                            <input type="checkbox" name="album-55" value="p3" id="album-55" checked />
                                            <label for="album-55">New Lobby</label>
                                            <a href="#" class="general-link">Add album</a>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <br>
                                        <p>Location</p>
                                        <input type="text" name="location" value="" placeholder="Hotel Baur au Lac" class="full-input" id="location1">
                                    </fieldset>

                                </div>
                            </div>
                            <!-- End filter-type -->

                            <!-- Start filter-type -->
                            <div class="filter-type">
                                <h3>technical</h3>
                                <div class="filter-field clearfix">
                                    <fieldset>
                                        <p>Location</p>
                                        <input type="text" name="photographer" value="" class="full-input" id="photographer22">

                                        <p>Camera</p>
                                        <input type="text" name="camera" value="" class="full-input" id="camera1">

                                        <p>Lens</p>
                                        <input type="text" name="Lens" value="" class="full-input" id="Lens1">

                                        <p>Focal lenght</p>
                                        <input type="text" name="focal-lenght" value="" class="full-input" id="focal-lenght1">

                                        <p>Shutter Speer</p>
                                        <input type="text" name="shutter-speer" value="" class="full-input" id="shutter-speer1">

                                        <p>Aperture</p>
                                        <input type="text" name="aperture" value="" class="full-input" id="aperture1">

                                        <p>ISO</p>
                                        <input type="text" name="iso" value="" class="full-input" id="iso1">

                                        <p>Date Taken</p>
                                        <input type="text" name="date-taken" value="" class="full-input" id="date-taken1">
                                    </fieldset>
                                </div>
                            </div>
                            <!-- End filter-type -->

                            <!-- Start filter-type -->
                            <div class="filter-type">
                                <h3>Access</h3>
                                <div class="filter-field clearfix">
                                    <fieldset>
                                        <p>Access</p>
                                        <input type="radio" name="access" value="a1" id="access-11" />
                                        <label for="access-11">Unsorted</label>

                                        <input type="radio" name="access" value="a2" id="access-22" />
                                        <label for="access-22">Newest</label>
                                    </fieldset>
                                    <fieldset>
                                        <p>Date of Publication</p>
                                        <input type="text" class="date" name="date" id="date1" placeholder="01.01.2008">
                                    </fieldset>
                                    <fieldset>
                                        <p>Use</p>

                                        <input type="radio" name="use" value="u1" id="use-33" />
                                        <label for="use-33">Oldest</label>

                                        <input type="radio" name="use" value="u1" id="use-44" />
                                        <label for="use-44">Most popular</label>

                                        <input type="radio" name="use" value="u1" id="use-55" />
                                        <label for="use-55">Most popular</label>

                                    </fieldset>
                                </div>
                            </div>
                            <!-- End filter-type -->

                            <!-- Start filter-type -->
                            <div class="filter-type">
                                <h3>Licence</h3>
                                <div class="filter-field clearfix">
                                    <fieldset>
                                        <input type="radio" name="licence" value="u1" id="licence-00" checked />
                                        <label for="licence-00">All rights reserved</label>

                                        <input type="radio" name="licence" value="u1" id="licence-11" />
                                        <label for="licence-11">Public Domain Work</label>

                                        <input type="radio" name="licence" value="u1" id="licence-22" />
                                        <label for="licence-22">Public Domain Dedication (CC0)</label>

                                        <input type="radio" name="licence" value="u1" id="licence-33" />
                                        <label for="licence-33">Attribution</label>

                                        <input type="radio" name="licence" value="u1" id="licence-44" />
                                        <label for="licence-44">Attribution - ShareAlike</label>

                                        <input type="radio" name="licence" value="u1" id="licence-55" />
                                        <label for="licence-55">Attribution - NoDervis</label>

                                        <input type="radio" name="licence" value="u1" id="licence-66" />
                                        <label for="licence-66">Attribution - NonCommercialt</label>

                                    </fieldset>
                                </div>
                            </div>
                            <!-- End filter-type -->
                        </div>
                        <div class="ui-elements">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a class="btn blue-btn" href="#">Publish</a>

                                </div>   
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a class="btn black-btn" href="#">Discard</a>
                                </div>                  
                            </div>

                            <a href="#" class="btn grey-btn"> Delete Selected (4) </a>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
    
    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>