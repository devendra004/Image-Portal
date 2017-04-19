<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header-login.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section">

        <!-- Start home-slider -->
        <div class="container-fluid">

            <div class="home-slider-wrapper">
                <span class="overlay"></span> 
                <div class="slider-caption">
                    <div class="slider-caption-inner">

                        <div class="container">
                            <h2>A photo collection from Baur au Lac</h2>
                            <small>Discover amazing photos, stay inspired, and become part of it.</small>
                            <a href="#" class="btn blue-btn">get started</a>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="home-slider">

                        <div>
                            <span style="background-image: url('img/home-slider-img-1.png');"></span>
                        </div>
                        <div>
                            <span style="background-image: url('img/home-slider-img-2.png');"></span>
                        </div>
                        <div>
                            <span style="background-image: url('img/home-slider-img-1.png');"></span>
                        </div>
                        <div>
                            <span style="background-image: url('img/home-slider-img-2.png');"></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- End home-slider -->

        <!-- Start homepage-options -->
        <div class="homepage-options">
            <div class="container">
                <div class="row">

                    <ul class="options-list clearfix">
                        <li>
                            <a href="#" class="download-pictures">Download high-resolution pictures</a>
                        </li>

                        <li>
                            <a href="#" class="save-lightbox">Save your favourite photos in lightboxes</a>
                        </li>

                        <li>
                            <a href="#" class="see-editor">See the latest updates from editor</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- End homepage-options -->

        <!-- Start signup-wrapper -->
        <div class="signup-wrapper colored-bg-1">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-offset-3 col-md-6">

                        <form action="#" method="post" class="signup-form">

                            <h1>Sign up - It's free!</h1>

                            <fieldset>
                                <div class="left-field pull-left clearfix">
                                    <select name="signup-select" class="signup-select">
                                        <option value="MR">MR</option>
                                        <option value="MS">MS</option>
                                    </select>
                                    <input type="text" name="firstName" value="" placeholder="first name" class="floated-input" />
                                </div>
                                <div class="right-field pull-right clearfix">
                                    <input type="text" name="lastName" value="" placeholder="last name" class="full-input" />
                                </div>
                            </fieldset>

                            <fieldset>
                                <input type="text" name="company" value="" placeholder="company" class="full-input" />
                            </fieldset>

                            <fieldset>
                                <div class="left-field pull-left">
                                    <input type="text" name="phoneNumber" value="" placeholder="phone number" class="full-input" />
                                </div>

                                <div class="right-field pull-right">
                                    <input type="email" name="email" value="" placeholder="email address" class="full-input" />
                                </div>
                            </fieldset>

                            <fieldset>
                                <p>AREAS OF INTEREST</p>
                                <input type="checkbox" name="hotel" value="1" id="signup-check-1" />
                                <label for="signup-check-1">Hotel</label>
                                <input type="checkbox" name="restaurant" value="2" id="signup-check-2" />
                                <label for="signup-check-2">Restaurant</label>
                                <input type="checkbox" name="winery" value="3" id="signup-check-3" />
                                <label for="signup-check-3">Winery</label>
                            </fieldset>

                            <fieldset>
                                <textarea name="signup-text" placeholder="remark"></textarea>
                            </fieldset>

                            <fieldset>
                                <input type="submit" name="signup-submit" value="sign up" class="btn blue-btn" />
                            </fieldset>
                        </form>

                    </div>

                </div>
            </div>

        </div>
        <!-- End signup-wrapper -->
    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>