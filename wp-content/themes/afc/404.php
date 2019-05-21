<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AFC
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="container">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! page introuvable.', 'afc' ); ?></h1>
					</header><!-- .page-header -->
	
					<div class="page-content">
						<p><?php esc_html_e( 'Rien Trouver dans cette location. Vous pouvez essai les liens du menu ?', 'afc' ); ?></p>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
