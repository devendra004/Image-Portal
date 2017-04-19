<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section" class="account-wrapper">

        <div class="filter-settings">
            <div class="filter-dropdown clearfix">
                <a href="#" class="btn blue-btn" id="filter-btn">filter and sort</a>
            </div>
        </div>

        <!-- Start filters -->
        <?php include 'includes/filter.php' ?>
        <!-- End filters -->

        <!-- Start account-form -->
        <div class="container">

            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

                <form action="#" method="post" class="account-form">

                    <div class="account-form-inner">

                        <h1>My Account</h1>
                        <figure class="account-photo">
                            <img src="img/account-photo-placeholder.png" alt="Account photo" />
                        </figure>

                        <div class="photo-upload">
                            <span>Change your photo</span>
                            <input type="file" name="changePhoto" class="upload" />
                        </div>

                        <select name="salutation" id="salutation">
                            <option value="1">MR</option>
                            <option value="1">MISS</option>
                        </select>

                        <input type="text" name="accountFirstName" value="" placeholder="first name" />

                        <input type="text" name="accountLastName" value="" placeholder="last name" />

                        <input type="text" name="accountCompany" value="" placeholder="comany" />

                        <input type="text" name="accountPhoneNumber" value="" placeholder="phone number" />

                        <input type="email" name="accountEmail" value="" placeholder="email address" />

                        <input type="submit" name="accountSubmit" value="save changes" class="btn blue-btn" />

                    </div>

                    <a href="#" class="delete-account-btn">delete account</a>

                </form>

            </div>

        </div>
        <!-- End account-form -->

    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->

</div>
<!-- End wrapper -->

<?php include 'includes/scripts.php'; ?>