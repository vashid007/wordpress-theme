<?php
/**
 * Template for displaying Search Results pages
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<main class="site-main container">
    <?php if ( have_posts() ) : ?>
        <header class="page-header post-card">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'my-simple-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                <header class="entry-header">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                </header>

                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <article class="post-card">
            <h2><?php esc_html_e( 'Nothing Found', 'my-simple-theme' ); ?></h2>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'my-simple-theme' ); ?></p>
            <?php get_search_form(); ?>
        </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
