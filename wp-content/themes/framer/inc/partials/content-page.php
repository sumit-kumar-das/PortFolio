<?php
/**
 * @package framer
 */
?>
<div class="row">

		<div class="col-1-1">
		<!-- <h1 class="postcontenttitle"><?php the_title() ?></h1> -->
		<div class="wrap-col test postcontent">
        
    <?php the_post_thumbnail( 'framer-full' ); ?>
        <div id="content"> <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'framer' ),
			'after'  => '</div>',
		) );
		
		
		?>
        <br>
</div></div>

</div>

</div>
	


</div>

