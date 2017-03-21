<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caos
 */

?>
<div class="clearfix"></div>

<?php if ( !is_single() ) { ?>            
</div><!-- /#container -->
<?php } ?>

	

	<div class="sub-footer">
        <div class="container">
			<?php echo do_shortcode("[uptolike]"); ?>
			<br>
		    
			<div class="text-center">
                    Developed by <a href="https://m-lab.xyz/">Monster Lab.</a>
                    Powered by <a href="https://wordpress.org/"">WordPress</a>
            </div>
         </div><!-- .container -->
    </div><!-- .sub-footer -->

<?php wp_footer(); ?>

</body>
</html>