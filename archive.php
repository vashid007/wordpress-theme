<?php
/**
 * Template for displaying Archive pages (Categories, Tags, Author, Date)
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<main class="site-main container">
    <?php if ( have_posts() ) : ?>
        <header class="page-header post-card">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
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
                    <div class="post-meta">
                        Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                    </div>
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
        </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
