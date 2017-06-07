<?php
/**
 * The page template file.
 *
 * @package framer
 */

get_header('page');
?>
<div class="insideposts" style="padding-left:0px !important;">

<div class="wrapper" >

<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'inc/partials/content', 'page' );
				endwhile;
			?>

</div></div>
<?php get_footer();