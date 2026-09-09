<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<main class="site-main container">
    <section class="error-404 not-found post-card" style="text-align: center; padding: 4rem 2rem;">
        <h1 class="page-title" style="font-size: 3rem; margin-bottom: 1rem;">404</h1>
        <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'my-simple-theme' ); ?></h2>
        <p style="margin-top: 1rem; color: #6b7280;"><?php esc_html_e( 'It looks like nothing was found at this location. Try searching or go back home.', 'my-simple-theme' ); ?></p>
        <div style="margin-top: 2rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; padding: 0.75rem 1.5rem; background: #2563eb; color: #ffffff; border-radius: 6px; font-weight: 500;">Return Home</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
