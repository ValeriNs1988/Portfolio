<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
            <div class="container">
                <div class="site-grid">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'portfolio' ); ?></h1>
                    </header>
                    <div class="page-content">


                    </div>
                </div>
            </div>



		</section>

	</main>

<?php
get_footer();
