<?php
/**
 * Template for displaying all static pages
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<main class="site-main container">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
            <header class="entry-header">
                <h1 class="post-title"><?php the_title(); ?></h1>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-simple-theme' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
