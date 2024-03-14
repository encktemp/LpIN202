<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

    <style type="text/css">
            ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            -webkit-border-radius: 16px;
            }

            ::-webkit-scrollbar-track-piece {
            background-color:rgb(0, 0, 0) transparent;
            -webkit-border-radius: 3px;
            }

            ::-webkit-scrollbar-thumb:vertical {
            height: 5px;
            background-color: #ffcc00  !important;
            -webkit-border-radius: 3px;
            }

            ::-webkit-scrollbar-thumb:horizontal {
            width: 5px;
            background-color: rgb(0, 0, 0) transparent;
            -webkit-border-radius: 3px;
            }
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">



	</body>
</html>
