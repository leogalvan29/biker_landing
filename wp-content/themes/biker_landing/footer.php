<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biker_landing
 */

?>

	<footer id="colophon" class="site-footer" > 

	  <style>
		  .site-footer{
			background-color:<?php echo esc_attr(get_theme_mod('color_footer' ,'#fff'))  ?> !important;
		  }
	  </style>

	  <h1><?php  echo get_theme_mod('texto_footer')  ?></h1>
	
	</footer><!-- #colophon -->
	<style>
		

		.site-footer h1{
			margin:0;
			padding:0;
		}
	</style>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
