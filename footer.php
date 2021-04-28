<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
			<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
				<div class="navbar-brand justify-content-center">
					<a href="https://christinanatasha.me">
						<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</a>
				</div>
			<?php endif; ?>
            <div class="site-info">
                <p>
					Design and content &copy; <?php echo date('Y'); ?> <?php echo '<a href="https://christinanatasha.me">Christina Natasha</a>'; ?>
				</p>
				<p>
					Connect with me! <br>
                	<a href="https://www.linkedin.com/in/kurisunatasha25">LinkedIn</a>
					<span class="sep"> | </span>
					<a href="https://bit.ly/kurisu-upwork-profile">Upwork</a>
					<span class="sep"> | </span>
					<a href="https://www.fiverr.com/kurisu_na">Fiverr</a>
					<span class="sep"> | </span>
					<a href="https://www.behance.net/kurisu_na">Behance</a>
                </p>
				<p>
					<a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Based on the Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>
				</p>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>