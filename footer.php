<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaif
 */

?>

<!-- footer
================================================== -->
<footer>

    <div class="">

        <div class="footer">

            <ul class="footer-logo">
                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg);" alt=""></li>
            </ul>

            <ul class="footer-nav">
                <li><a href="#">Про нас</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Правила</a></li>
            </ul>

            <ul class="footer-social">
                <li><a href="https://www.instagram.com/kaif_upgrade/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://t.me/kaifupgrade"><i class="fa fa-telegram"></i></a></li>
                <li><a href="https://www.facebook.com/kaifhookah"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
            <ul class="copyright">
                <li>@All rights reserved 2021</li>
            </ul>
    </div>

</footer> <!-- Footer End-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
