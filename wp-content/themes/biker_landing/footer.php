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

          <div class="row-footer">
		  <h1 class="titulo_footer"><?php  echo get_theme_mod('texto_footer')  ?></h1> 
	  <a href=""><?php echo get_theme_mod('texto_boton_footer') ?> </a>
		  </div>
	  <style>
		  .site-footer{
			background-color:<?php echo esc_attr(get_theme_mod('color_footer' ,'#fff'))  ?> !important;
			padding:80px 0px; 
			margin-top:50px;

		  }
		  .site-footer .row-footer{
			width:90%;
			margin:0px auto; 
			height:auto;
			max-width:1140px; 
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
		  }

		  .site-footer .row-footer a {
			text-decoration:none;
			color:<?php echo get_theme_mod('color_boton_footer')  ?>;
			background-color:<?php echo get_theme_mod('fondo_boton_footer')  ?>;
			position:relative;
			top:15px;
			width:<?php echo get_theme_mod('ancho_boton_footer') ?>px;
			display:flex;
			justify-content:center;
			align-items:center;
			padding:10px 0px;
			height:<?php  echo get_theme_mod('alto_boton_footer') ?>px;
			border-radius:20px;
		  }
	  </style>

	
	  <style>
		.titulo_footer{
			 font-size:<?php echo get_theme_mod('tamano_titulo_footer') ?>px;
			 color:<?php  echo get_theme_mod('color_titulo_footer') ?>;
		}
	  </style>
	
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
