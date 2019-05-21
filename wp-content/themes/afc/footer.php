<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AFC
 */

?>

	</div><!-- #content -->
	<footer>
        <div class="container container1">
            <!--MAIN ROW-->
            <div class="row">
                <?php dynamic_sidebar( 'footer_1' );?>
                <div class="col-sm-3 col-md-3">
                    <a href="" class="afc-btn-grey">Nous contacter</a>
                    <a href="" class="afc-btn-grey">obtenir un devis</a>
                </div>
            </div>
        </div>
        <div class="row  copyright">
            <div class="container">
                <ul class="list-unstyled list-inline footer-nav">
                    <li><a href="">&copy;<?php echo date("Y")?> AFC</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
