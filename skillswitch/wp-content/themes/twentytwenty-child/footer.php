<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
	<footer id="site-footer">
		<div class="container">
			<div class="box box1"><?php twentytwenty_site_logo(); ?><?php dynamic_sidebar( 'sidebar-54' ); ?></div>
			<div class="box box2"><?php dynamic_sidebar( 'sidebar-55' ); ?></div>
			<div class="box box3"><?php dynamic_sidebar( 'sidebar-56' ); ?></div>
			<div class="box4"><?php dynamic_sidebar( 'sidebar-58' ); ?></div>
			<div class="copy_right"><?php dynamic_sidebar( 'sidebar-57' ); ?></div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script type="text/javascript">
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() >= 15) {
			jQuery('#site-header').addClass('myfixedHeader');
			}
			else {
			jQuery('#site-header').removeClass('myfixedHeader');
			}
		});
	</script>
	<script>
		jQuery(document).ready(function() {
		jQuery(".learn_tab li").click(function () {
			jQuery(".learn_tab li").removeClass("active");
			jQuery(this).addClass("active");        
		});
		});
	</script>
	</body>
</html>
