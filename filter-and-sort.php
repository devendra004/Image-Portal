<?php include 'includes/head.php' ?>   

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php' ?>   
    <!-- End header -->

    <!-- Start section -->
    <section id="section">

        <!-- Start filter-settings -->
        <div class="filter-settings">
            <div class="filter-result-inner-container clearfix">

                <div class="filter-dropdown clearfix">
                    <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
                </div>

                <ul class="view-option clearfix">
                    <li><a href="#" class="active nested"></a></li>
                    <li><a href="#" class="thumb"></a></li>
                </ul>
            </div>
        </div>
        <!-- End filter-settings -->

        <!-- Start filter-result-container -->
        <div class="filter-result-container colored-bg-1">

            <div class="filter-result-inner-container clearfix">
                <div class="center-container clearfix">

                    <!-- Start filters -->
                    <?php include 'includes/filter.php' ?>
                    <!-- End filters -->

                    <div class="result-inner nested">
                        <div class="float-contaier clearfix">

                            <div class="gutter-size"></div>

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result1.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">
                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Lorem ipsum dolor</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result2.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Sit amet dolor is</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result3.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Vestibulum libero massa</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result4.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Etiam sem odio</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result5.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result6.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Sed magna lacus</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result7.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Proin in nulla</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result8.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Pellentesque gravida</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result9.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Donec placerat vulputate</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result10.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Mauris hendrerit</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result11.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Sed semper lectus</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result12.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Fusce condimentum</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result13.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Lorem ipsum dolor</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result14.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Sit amet dolor is</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result15.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Vestibulum libera massa</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result16.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>        
                                <p><a href="#">Etiam sem odio</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result17.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result18.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result19.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result20.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result21.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result22.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result23.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result24.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result25.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result26.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result27.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
                            </div>
                            <!-- End result-item -->

                            <!-- Start result-item -->
                            <div class="result-item nested-item">
                                <div class="result-item-inner">
                                    <div>
                                        <a href="photo-view.php">
                                            <img src="img/result28.png" alt="Result img"  class="bg-image"/>
                                        </a>
                                        <div class="sort-overlay"></div>

                                        <div class="result-hover">
                                            <ul class="clearfix">
                                                <li class="result-download">
                                                    <span class="download-icon icons">
                                                        <img src="img/download-ico.png" alt="ico3">
                                                    </span>
                                                </li>
                                                <li class="result-lightbox">
                                                    <span class="lightbox-icon icons">
                                                        <img src="img/lightbox-ico.png" alt="ico4">
                                                    </span>
                                                    <div class="result-scroll-container">

                                                        <ul class="result-lightbox-inner">
                                                            <li><a href="#">My Media</a><small>(3)</small></li>
                                                            <li><a href="#">List One</a><small>(14)</small></li>
                                                            <li><a href="#">List Two</a><small>(7)</small></li>
                                                            <li>
                                                                <form action="#" method="post">
                                                                    <input type="text" name="newlightbox" value="" placeholder="New lightbox" />
                                                                    <input type="submit" name="newlightbox-submit" value="save" class="btn blue-btn" />
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="result-upload">
                                                    <span class="share-icon icons share-btn">
                                                        <img src="img/share-ico.png" alt="ico5">
                                                    </span>
                                                    <div class="share-content-inner">
                                                        <input type="text" name="share-input" placeholder="http://www.domain.com/" value="" />
                                                        <a href="#" class="btn blue-btn">copy</a>
                                                        <p class="date-title">link accessible until</p>
                                                        <div class="select-date"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#">Aliquam erat volutpat</a></p>
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

                </div>

            </div>

        </div>
        <!-- End filter-result-container -->

        <!-- Start load more -->
        <div class="load-more-wrapper cf">
            <div class="loading-inner">
                <span class="icons load-icon">
                    <img src="img/loader-icon.png" alt="ico3">
                </span>
            </div>
        </div>
        <!-- End load more -->

    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>