<?php
/**
 * Main Template File
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<main class="site-main container">
    <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <header class="entry-header">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
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
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Previous', 'my-simple-theme' ),
                'next_text' => __( 'Next &raquo;', 'my-simple-theme' ),
            ) );
            ?>
        </div>

    <?php else : ?>

        <article class="post-card">
            <h2><?php esc_html_e( 'Nothing Found', 'my-simple-theme' ); ?></h2>
            <p><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'my-simple-theme' ); ?></p>
        </article>

    <?php endif; ?>
</main>

<?php get_footer(); ?>