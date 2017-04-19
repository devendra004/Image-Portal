<?php include 'includes/head.php'; ?>

<!-- Start wrapper -->
<div id="wrapper">

    <!-- Start header -->
    <?php include 'includes/header-login.php'; ?>
    <!-- End header -->

    <!-- Start section -->
    <section id="section" class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <!-- Start login-form -->
                    <form action="#" method="post" class="choose-pw login-form">
                        <h1>Choose Your Password</h1>

                        <span class="pw-error-msg">passwords don't match<i></i></span>

                        <fieldset>
                            <input type="password" name="password" value="" placeholder="password" id="new-password"  />
                        </fieldset>

                        <fieldset>
                            <input type="password" name="password" value="" placeholder="confirm password" id="confirm-password"  />
                        </fieldset>

                        <fieldset>
                            <input type="submit" name="change-pw-submit" value="submit" class="btn blue-btn" id="change-pw"  />
                        </fieldset>
                    </form>
                    <!-- End login-form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <!-- Start footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer -->
    
</div>

<?php include 'includes/scripts.php'; ?>