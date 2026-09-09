<?php
/**
 * Template Name: Creative Developer Portfolio
 * Template for displaying the homepage / portfolio of Abdul Vashid
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<!-- Hero Section -->
<section class="portfolio-hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="badge-status">
                    <span class="status-dot"></span>
                    Available for New Projects & Freelance Roles
                </div>

                <h1 class="hero-title">
                    Hi, I'm <span class="text-gradient">Abdul Vashid</span>
                </h1>

                <p class="hero-description">
                    A Full-Stack Web Developer & WordPress Specialist crafting high-performance web applications, custom PHP themes, and automated Git deployment workflows.
                </p>

                <div class="hero-cta">
                    <a href="#projects" class="btn-primary">
                        View Selected Work &rarr;
                    </a>
                    <a href="#contact" class="btn-secondary">
                        Get In Touch
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>5+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Projects Shipped</p>
                    </div>
                    <div class="stat-item">
                        <h3>99.9%</h3>
                        <p>Uptime & Quality</p>
                    </div>
                </div>
            </div>

            <div class="hero-avatar-wrapper">
                <div class="avatar-glow-ring">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/developer-avatar.jpg' ); ?>" alt="Abdul Vashid - Web Developer" class="avatar-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Core Expertise</span>
            <h2 class="section-title">Specialized Services & Engineering</h2>
        </div>

        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">⚡</div>
                <h3>Custom WordPress Architecture</h3>
                <p>Bespost theme & plugin development built from scratch with modern clean code, custom post types, and Gutenberg integration.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">💻</div>
                <h3>Full-Stack PHP & JavaScript</h3>
                <p>Building scalable backend web applications, RESTful APIs, React components, and dynamic user interfaces.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🚀</div>
                <h3>Git CI/CD & Live Deployment</h3>
                <p>Automated deployment pipelines connecting local Git repositories directly to live cPanel, VPS, and cloud hosting servers.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🎯</div>
                <h3>Performance & Core Web Vitals</h3>
                <p>Speed optimization, Database query tuning, Lighthouse 95+ score optimization, and clean semantic SEO structure.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="portfolio-projects-section" id="projects">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Featured Work</span>
            <h2 class="section-title">Selected Projects & Custom Builds</h2>
        </div>

        <div class="projects-grid">
            <?php
            // Query latest blog posts / projects
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <article class="project-card">
                        <div class="project-body">
                            <div class="project-tags">
                                <span class="tag-pill">WordPress</span>
                                <span class="tag-pill">PHP 8</span>
                            </div>
                            <h3 class="project-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="project-desc">
                                <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                            </div>
                            <div class="project-footer">
                                <a href="<?php the_permalink(); ?>" class="project-link">View Case Study &rarr;</a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Showcase Cards if no posts exist yet
                ?>
                <article class="project-card">
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="tag-pill">WordPress</span>
                            <span class="tag-pill">Git CI/CD</span>
                        </div>
                        <h3 class="project-title">Vashid Custom Theme Framework</h3>
                        <p class="project-desc">Lightweight responsive WordPress starter theme connected with GitHub Actions for automated live server deployment.</p>
                        <div class="project-footer">
                            <a href="#" class="project-link">View Project &rarr;</a>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="tag-pill">Full-Stack</span>
                            <span class="tag-pill">PHP / MySQL</span>
                        </div>
                        <h3 class="project-title">E-Commerce Custom Storefront</h3>
                        <p class="project-desc">High-speed custom WooCommerce integration with optimized checkout flow and API webhooks.</p>
                        <div class="project-footer">
                            <a href="#" class="project-link">View Project &rarr;</a>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="tag-pill">Headless WP</span>
                            <span class="tag-pill">React</span>
                        </div>
                        <h3 class="project-title">Headless Web App Engine</h3>
                        <p class="project-desc">Fast static front-end rendering consuming WordPress REST API with dynamic search and live filtering.</p>
                        <div class="project-footer">
                            <a href="#" class="project-link">View Project &rarr;</a>
                        </div>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Contact / Call to Action -->
<section class="contact-cta-section" id="contact">
    <div class="container">
        <div class="contact-card">
            <h2>Let's Build Something Great Together</h2>
            <p>Need a custom WordPress theme, web developer consultation, or automated deployment setup for your project?</p>
            <div style="margin-top: 1.5rem;">
                <a href="mailto:abdulvashid@example.com" class="btn-primary" style="font-size: 1.1rem; padding: 1rem 2.25rem;">
                    📩 Start a Conversation
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
