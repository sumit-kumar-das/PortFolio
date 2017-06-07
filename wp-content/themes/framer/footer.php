<div id="footer">
	<div class="wrapper">
		<div class="row">

			<?php dynamic_sidebar( 'framer-footer' ); ?>
		</div>
	</div>



<div id="bottom">
	<div class="wrapper">
		<p class="bottomtext">
			&copy; <?php bloginfo( 'name' ); ?> <?php echo date_i18n( __( 'Y', 'framer' ) ); ?> / <?php printf( esc_html__( 'By: %1$s %2$s.', 'framer' ), 'Sumit', '<a href="http://themefurnace.com" rel="designer">Kumar Das</a>' ); ?>
		</p>
	</div>
	<!-- End wrapper -->
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>