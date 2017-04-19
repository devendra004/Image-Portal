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
    <section id="section" class="lightbox-detail-wrapper lightbox-filter-wrapper">

        <div class="filter-settings">
            <div class="filter-dropdown clearfix">
                <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
            </div>
        </div>

        <!-- Start filters -->
        <?php include 'includes/filter.php' ?>
        <!-- End filters -->

        <div class="container">
            <div class="row">
                <div class="title-wrapper clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h1 class="page-title pull-left">Lightbox “Hotel Lobby” <span>(6 photos)</span></h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="#" class="btn black-btn pull-right new-lightbox delete-button">delete</a>
                        <div class="pull-right new-lightbox-wrapper">
                            <a href="#" class="btn blue-btn new-lightbox">rename</a>
                            <div class="general-dropdown lightbox-dropdown">
                                <div class="general-dropdown-inner">
                                    <ul class="clearfix">
                                        <li>
                                            <form action="#" method="post">
                                                <input type="text" name="newlightbox" value="" placeholder="Rename">
                                                <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <!-- Start lightbox-detail-inner -->
                    <div class="lightbox-detail-inner filter clearfix">

                        <div class="lightbox-detail">

                            <div class="gutter-size"></div>

                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-1">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-2.jpg" alt="img1">
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
                            <!-- End result-item -->
                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-2">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-3.jpg" alt="img1">
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
                            <!-- End result-item -->
                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-3">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-5.jpg" alt="img1">
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
                            <!-- End result-item -->
                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-4">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-4.jpg" alt="img1">
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
                            <!-- End result-item -->
                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-5">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-6.jpg" alt="img1">
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
                            <!-- End result-item -->
                            <!-- Start result-item -->
                            <div class="result-item filter-result" id="index-6">
                                <div class="filter-result-inner">
                                    <img src="img/filter-img-7.jpg" alt="img1">
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
                            <!-- End result-item -->
                        </div>
                    </div>
                    <!-- End lightbox-detail-inner -->

                    <div class="row clearfix">
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

                </div>

                <div class="col-sm-12 col-md-6">

                    <!-- Start lightbox-download-option -->
                    <div class="lightbox-download-option">
                        <h2>Selected Photos <small>(2 photos)</small></h2>
                        <h3>download options</h3>

                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="lightSize" value="1" id="light-size-1" />
                                    <label for="light-size-1"></label>
                                    <p>Small</p>
                                </td>
                                <td>
                                    <span>500x300</span>
                                </td>
                                <td>
                                    <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                </td>
                                <td>
                                    <span>162kb</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="lightSize" value="2" id="light-size-2" />
                                    <label for="light-size-2"></label>
                                    <p>Medium</p>
                                </td>
                                <td>
                                    <span>1000x600</span>
                                </td>
                                <td>
                                    <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                </td>
                                <td>
                                    <span>527kb</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="lightSize" value="3" id="light-size-3" />
                                    <label for="light-size-3"></label>
                                    <p>Large</p>
                                </td>
                                <td>
                                    <span>4000x2400</span>
                                </td>
                                <td>
                                    <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                </td>
                                <td>
                                    <span>1.74mb</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="lightSize" value="4" id="light-size-4" />
                                    <label for="light-size-4"></label>
                                    <p>Original</p>
                                </td>
                                <td>
                                    <span>5000x3000</span>
                                </td>
                                <td>
                                    <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                </td>
                                <td>
                                    <span>2.52mb</span>
                                </td>
                            </tr>
                        </table>

                        <a href="#" class="btn blue-btn">download selected</a>

                        <div class="share-content">
                            <a href="#" class="btn share-btn">share</a>
                            <div class="share-content-inner">
                                <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                <a href="#" class="btn blue-btn">copy</a>
                                <p class="date-title">link accessible until</p>
                                <div class="select-date"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End lightbox-download-option -->

                </div>

            </div>

        </div>

    </section>
    <!-- End section -->

    <!-- start fancybox content -->
    <div id="fancybox-content-1">
        <div class="clearfix">

            <div class="slider-container">
                <div class="slider-1">
                    <div><img src="img/filter-img-2.jpg" alt="img1"></div>
                    <div><img src="img/filter-img-3.jpg" alt="img1"></div>
                    <div><img src="img/filter-img-5.jpg" alt="img1"></div>
                    <div><img src="img/filter-img-4.jpg" alt="img1"></div>
                    <div><img src="img/filter-img-6.jpg" alt="img1"></div>
                    <div><img src="img/filter-img-7.jpg" alt="img1"></div>
                </div>
            </div>

            <div class="edit-filter-container edit-filter-container-single">
                <div class="edit-filter">
                    <div class="scrollbar-wrapper-single clearfix">
                        <!-- Start lightbox-download-option -->
                        <div class="lightbox-download-option">
                            <div class="lightbox-download-option-inner">
                                <h2>The hotel lobby of the Luxury Hotel New York in the 80s</h2>
                                <h3>keywords</h3>
                                <ul class="keyword-list clearfix">
                                    <li><a href="#">Building</a>,</li>
                                    <li><a href="#">art</a>,</li>
                                    <li><a href="#">park</a>,</li>
                                    <li><a href="#">hotel</a>,</li>
                                    <li><a href="#">tree</a>,</li>
                                    <li><a href="#">stone</a>,</li>
                                    <li><a href="#">gallery</a>,</li>
                                    <li><a href="#">modern</a>,</li>
                                    <li><a href="#">outside</a></li>
                                </ul>

                                <ul class="photographer-info clearfix">
                                    <li>
                                        <h3>number</h3>
                                        <p>27811212</p>
                                    </li>
                                    <li>
                                        <h3>date taken</h3>
                                        <p>13 May 2015</p>
                                    </li>
                                    <li>
                                        <h3>photographer</h3>
                                        <a href="#">heinz burgi</a>
                                    </li>
                                    <li>
                                        <h3>image size</h3>
                                        <p>18.3 MB</p>
                                    </li>
                                    <li>
                                        <h3>location</h3>
                                        <a href="#">Hotel</a>
                                    </li>
                                    <li>
                                        <h3>resolution</h3>
                                        <p>3000 x 2300px</p>
                                    </li>
                                </ul>

                                <h3>download options</h3>
                            </div>
                            <table>
                                <tr>
                                    <td>
                                        <input type="radio" name="lightSize" value="1" id="light-size-11" />
                                        <label for="light-size-11"></label>
                                        <p>Small</p>
                                    </td>
                                    <td>
                                        <span>500x300</span>
                                    </td>
                                    <td>
                                        <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                    </td>
                                    <td>
                                        <span>162kb</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="lightSize" value="2" id="light-size-22" />
                                        <label for="light-size-22"></label>
                                        <p>Medium</p>
                                    </td>
                                    <td>
                                        <span>1000x600</span>
                                    </td>
                                    <td>
                                        <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                    </td>
                                    <td>
                                        <span>527kb</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="lightSize" value="3" id="light-size-33" />
                                        <label for="light-size-33"></label>
                                        <p>Large</p>
                                    </td>
                                    <td>
                                        <span>4000x2400</span>
                                    </td>
                                    <td>
                                        <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                    </td>
                                    <td>
                                        <span>1.74mb</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="lightSize" value="4" id="light-size-44" />
                                        <label for="light-size-44"></label>
                                        <p>Original</p>
                                    </td>
                                    <td>
                                        <span>5000x3000</span>
                                    </td>
                                    <td>
                                        <span>6.9 x 4.6 cm <i>(72dpi)</i></span>
                                    </td>
                                    <td>
                                        <span>2.52mb</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- End lightbox-download-option -->
                    </div>
                    <div class="ui-elements">
                        <div class="mtn-wrapper">
                            <a href="#" class="btn blue-btn">download This photo</a>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">

                                    <div class="save-content">
                                        <a href="#" class="btn save-btn">Add to lightbox</a>
                                        <div class="save-inner lightbox-scroll-container">

                                            <ul class="clearfix">
                                                <li><a href="#">My Media<small>(3)</small></a></li>
                                                <li><a href="#">List One<small>(14)</small></a></li>
                                                <li><a href="#">List Two<small>(7)</small></a></li>
                                                <li><a href="#">List One<small>(14)</small></a></li>
                                                <li><a href="#">List Two<small>(7)</small></a></li>
                                                <li>
                                                    <form action="#" method="post">
                                                        <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                        <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                    </form>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>   
                                <div class="col-md-6 col-sm-6 col-xs-6 align-right">
                                    <div class="share-content">
                                        <a href="#" class="btn share-btn">share</a>
                                        <div class="share-content-inner">
                                            <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                            <a href="#" class="btn blue-btn">copy</a>
                                            <p class="date-title">link accessible until</p>
                                            <div class="select-date"></div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- start fancybox content -->

    <!-- start delete layer content -->
    <div class="delete-lightbox">
        <div class="mobile-padding">
            <div class="delete-lightbox-inner">
                <div class="delete-content">
                    <h2>Delete lightbox</h2>

                    <p>
                        Do you really want to delete this lightbox? <br>
                        This step cannot be undone.
                    </p>
                </div>
                <div class="button-wrapper clearfix">
                    <a href="#" class="btn black-btn pull-right lightbox-delete-button">delete</a>
                    <a href="#" class="btn blue-btn pull-right cancel-button">cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end fancybox content -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>