<footer id="footer">

    <div class="main-footer">

        <div class="container">

            <div id="footer-logo">
                <a href="homepage.php"><img src="img/footer-logo.png" alt="Logo" /></a>
            </div>

            <ul class="main-footer-nav clearfix">
                <li><a href="#">help center</a></li>
                <li><a href="#">contact us</a></li>
                <li><a href="#">imprint</a></li>
                <li><a href="#">policy</a></li>
            </ul>

            <div class="language-container cf">
                <p>lang:</p>
                <select name="language" class="footer-language">
                    <option value="lang1"  data-imagesrc="img/bgi/english-lang.png">&nbsp;</option>
                    <option value="lang2"  data-imagesrc="img/bgi/english-lang.png">&nbsp;</option>
                </select>
            </div>

            <p class="copyright-footer">
                All contents (c) Copyright 1999-2015 Customer. All rights reserved.
            </p>

        </div>

    </div>

</footer>
<!-- start fancybox content -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.admin-navigation').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.admin-navigation').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.admin-navigation').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
</script>


<script type="text/javascript">
$('.ui.sticky')
  .sticky({
    context: '#example3'
  })
;
</script>

