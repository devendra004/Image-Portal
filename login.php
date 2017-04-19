<?php include 'includes/head.php' ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header-login.php' ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section" class="login-wrapper">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

                    <!-- Start login-form -->
                    <form action="#" method="post" class="login-form">

                        <h1>Welcome</h1>
                        <p>Your account is now ready to use. Please log in now:</p>

                        <fieldset>
                            <input type="text" name="username" value="" placeholder="username" />
                        </fieldset>

                        <fieldset>
                            <input type="password" name="password" value="" placeholder="password"  />
                        </fieldset>

                        <fieldset>
                            <input type="submit" name="login-submit" value="log in" class="btn blue-btn" />
                        </fieldset>

                    </form>
                    <!-- End login-form -->

                </div>

                <div class="col-xs-12 col-md-12">
                    <!-- Start help-links -->
                    <div class="help-links clearfix">
                        <a href="#">forgot your password?</a>
                        <a href="#">news user? sign up account</a>
                    </div>
                    <!-- End help-links -->
                </div>

            </div>

        </div>
    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php' ?>
    <!-- End footer -->
</div>

<?php include 'includes/scripts.php' ?>