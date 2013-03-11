<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package mikieabadi
 * @since mikieabadi 1.0
 */
?>

			</div><!-- #main .site-main -->
		</div><!-- #main .site-main-border -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'mikieabadi_credits' ); ?>
				This website is designed by the <a href="http://www.akurniawan.com" target="_blank">groom</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- #page .hfeed .site -->
</div>

<?php wp_footer(); ?>

</body>
</html>