<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gravity_karol
 */
?>

</div><!-- #content -->

<footer>
    <div class="wrapper footer">
        <div class="footer-column">
            <div class="footer-column__head">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="logo"/>
            </div>
            <div class="footer-column__main">
                <span>&copy; 2018 - All Rights Reserved to <br>
                    <b>PixelHint.com</b></span>
            </div>
        </div>
        <div class="footer-column">
            <div class="footer-column__head">
                <p>What is pristine.</p>
            </div>
            <div class="footer-column__main">
                <span>Elegancy is a unique HTML5, & CSS website template, it’s fully responsive, SEO and fast speed optimzed and beautiful.</span>
            </div>
        </div>
        <div class="footer-column">
            <div class="footer-column__head">
                <p>Know more.</p>
            </div>
            <div class="footer-column__main">
                <ul>
                    <li><a href="">Terms & Condition</a></li>
                    <li><a href="">Faq</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Services</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-column">
            <div class="footer-column__head">
                <p>connect.</p>
            </div>
            <div class="footer-column__main">
                <ul>
                    <li><a href=""><i class="flaticon-facebook-logo-button"></i> <span>facebook</span></a></li>
                    <li><a href=""><i class="flaticon-twitter-logo-button"></i> <span>twitter</span></a></li>
                    <li><a href=""><i class="flaticon-rss"></i> <span>rss</span></a></li>
                    <li><a href=""><i class="flaticon-google-plus-logo-button"></i> <span>google plus</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->


        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
