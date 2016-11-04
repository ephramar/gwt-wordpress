<?php
/**
 * Template Name: Full Width Template
 *
 * @package GWT
 * @subpackage DOH NIR Portal
 * @since Government Website Template 2.0
 */

get_header();
include_once('inc/banner.php');
?>

<?php govph_displayoptions( 'govph_panel_top' ); ?>

<div id="main-content" class="container-main" role="document">
	<div class="row">
		
		<div id="content" class="<?php govph_displayoptions( 'govph_content_fullwidth' ); ?>columns" role="main">
			<?php 
				while( have_posts() ) : the_post(); 
				
				get_template_part('template-parts/content', 'page'); 
				
				endwhile; //end of the loop 
			?>
		</div><!-- end content -->
		
	</div><!-- end row -->
</div><!-- end main -->

<?php govph_displayoptions( 'govph_panel_bottom' ); ?>

<?php get_footer(); ?>