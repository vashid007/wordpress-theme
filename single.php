<?php
/**
 * Template for displaying all single posts
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
                <div class="post-meta">
                    Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                </div>
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

        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile;
    ?>
</main>

<?php get_footer(); ?>
