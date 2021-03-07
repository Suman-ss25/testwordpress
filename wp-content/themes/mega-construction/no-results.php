<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Mega Construction
 */
?>

<header role="banner">
	<h2 class="entry-title"><?php echo esc_html( get_theme_mod('mega_construction_search_result_title',__('Nothing Found', 'mega-construction' )) ); ?></h2>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'mega-construction' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html( get_theme_mod('mega_construction_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mega-construction' )) ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip; it happens to the best of us.', 'mega-construction' ); ?></p><br />
	<div class="read-moresec mt-3">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right py-2 px-4"><?php esc_html_e( 'Back to Home Page', 'mega-construction' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'mega-construction' ); ?></span></a>
	</div>
<?php endif; ?>
