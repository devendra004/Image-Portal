 <?php include 'includes/head.php' ?>

 <!-- Start wrapper -->
 <div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php' ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section" class="view-wrapper">

        <div class="filter-settings">
            <div class="filter-dropdown clearfix">
                <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
            </div>
        </div>

        <!-- Start filters -->
        <?php include 'includes/filter.php' ?>
        <!-- End filters -->

        <div class="photo-description">
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-7">

                        <figure class="photo-detail-image">
                            <img src="img/author-photo.png" alt="Photo" />
                        </figure>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-5">

                        <!-- Start lightbox-download-option -->
                        <div class="lightbox-download-option">
                            <h2>The hotel lobby of the Luxury Hotel New York in the 80s, taken from the main entrance</h2>
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
                                    <h3>location</h3>
                                    <a href="#">Hotel</a>
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
                                    <h3>resolution</h3>
                                    <p>3000 x 2300px</p>
                                </li>
                            </ul>

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

                            <a href="#" class="btn blue-btn">download all photo</a>

                            <div class="save-content">
                                <a href="#" class="btn save-btn">save</a>
                                <div class="save-inner">
                                    <ul class="clearfix">
                                        <li><a href="#">My Media<small>(3)</small></a></li>
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
        </div>

        <!-- Start similar-photos -->
        <div class="photo-view colored-bg-1">

            <div class="container">

                <h2 class="home-title">Similar Photos</h2>

                <div class="row">

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/similar-img-1.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/similar-img-2.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/similar-img-3.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/similar-img-4.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/similar-img-5.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="filter-and-sort.html" class="image-inner">
                            <figure>
                                <img src="img/similar-img-6.png" alt="Result" />
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
        <!-- End similar-photos -->

        <!-- Start author-photos -->
        <div class="photo-view colored-bg-3">

            <div class="container">

                <h2 class="home-title">More From This author</h2>

                <div class="row">

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/author-photo-1.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/author-photo-2.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/author-photo-3.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/author-photo-4.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="#" class="image-inner">
                            <figure>
                                <img src="img/author-photo-5.png" alt="Result" />
                            </figure>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="filter-and-sort.html" class="image-inner">
                            <figure>
                                <img src="img/similar-img-2.png" alt="Result" />
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
        <!-- End similar-photos -->

    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>