<?php
/**
 * Template Name: About Page
 * Template for displaying the About Me page for Abdul Vashid
 *
 * @package My_Simple_Theme
 */

get_header(); ?>

<!-- About Hero Section -->
<section class="portfolio-hero about-hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="badge-status">
                    <span class="status-dot"></span>
                    Get to know the developer behind the code
                </div>

                <h1 class="hero-title">
                    About <span class="text-gradient">Abdul Vashid</span>
                </h1>

                <p class="hero-description">
                    Full-Stack Web Developer with a strong focus on custom WordPress engineering, clean PHP
                    architecture, and modern, high-performance web applications.
                </p>

                <div class="hero-cta">
                    <a href="#bio" class="btn-primary">
                        Read My Story &darr;
                    </a>
                    <a href="#contact" class="btn-secondary">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="hero-avatar-wrapper">
                <div class="avatar-glow-ring">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/developer-avatar.jpg'); ?>"
                        alt="Abdul Vashid - Web Developer" class="avatar-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Bio & Story Section -->
<section class="services-section" id="bio">
    <div class="container">
        <div class="bio-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">

            <div class="bio-card skill-card" style="padding: 2.5rem;">
                <h2 style="font-size: 1.85rem; font-weight: 700; color: #f8fafc; margin-bottom: 1.25rem;">
                    Building Digital Experiences with Precision
                </h2>
                <p style="color: #94a3b8; font-size: 1rem; line-height: 1.8; margin-bottom: 1.25rem;">
                    Hello! I'm <strong>Abdul Vashid</strong>, a passionate Web Developer dedicated to transforming ideas
                    into fast, elegant, and secure digital products.
                </p>
                <p style="color: #94a3b8; font-size: 1rem; line-height: 1.8; margin-bottom: 1.25rem;">
                    Over the years, I have specialized in custom WordPress theme and plugin development, craft-tailored
                    backend PHP code, and modern JavaScript frontend interfaces. I believe that code should not only
                    function flawlessly but should also be easy to maintain and scale.
                </p>
                <p style="color: #94a3b8; font-size: 1rem; line-height: 1.8;">
                    Whether it's building a complex web application from scratch or setting up automated Git deployment
                    pipelines to live hosting servers, I focus on delivering seamless developer and user experiences.
                </p>
            </div>

            <div class="skills-overview-card skill-card" style="padding: 2.5rem;">
                <h3 style="font-size: 1.5rem; font-weight: 700; color: #f8fafc; margin-bottom: 1.75rem;">
                    Technical Proficiency
                </h3>

                <div class="skill-progress-item" style="margin-bottom: 1.5rem;">
                    <div
                        style="display: flex; justify-content: space-between; color: #f8fafc; font-weight: 500; font-size: 0.95rem; margin-bottom: 0.5rem;">
                        <span>PHP & WordPress Architecture</span>
                        <span style="color: #38bdf8;">95%</span>
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 9999px; overflow: hidden;">
                        <div
                            style="width: 95%; height: 100%; background: linear-gradient(90deg, #6366f1, #38bdf8); border-radius: 9999px;">
                        </div>
                    </div>
                </div>

                <div class="skill-progress-item" style="margin-bottom: 1.5rem;">
                    <div
                        style="display: flex; justify-content: space-between; color: #f8fafc; font-weight: 500; font-size: 0.95rem; margin-bottom: 0.5rem;">
                        <span>JavaScript & Modern Frontend (React)</span>
                        <span style="color: #38bdf8;">90%</span>
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 9999px; overflow: hidden;">
                        <div
                            style="width: 90%; height: 100%; background: linear-gradient(90deg, #6366f1, #38bdf8); border-radius: 9999px;">
                        </div>
                    </div>
                </div>

                <div class="skill-progress-item" style="margin-bottom: 1.5rem;">
                    <div
                        style="display: flex; justify-content: space-between; color: #f8fafc; font-weight: 500; font-size: 0.95rem; margin-bottom: 0.5rem;">
                        <span>HTML5 / CSS3 / Glassmorphism UI</span>
                        <span style="color: #38bdf8;">95%</span>
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 9999px; overflow: hidden;">
                        <div
                            style="width: 95%; height: 100%; background: linear-gradient(90deg, #6366f1, #38bdf8); border-radius: 9999px;">
                        </div>
                    </div>
                </div>

                <div class="skill-progress-item" style="margin-bottom: 1.5rem;">
                    <div
                        style="display: flex; justify-content: space-between; color: #f8fafc; font-weight: 500; font-size: 0.95rem; margin-bottom: 0.5rem;">
                        <span>Git, CI/CD & Live Server Deployment</span>
                        <span style="color: #38bdf8;">90%</span>
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 9999px; overflow: hidden;">
                        <div
                            style="width: 90%; height: 100%; background: linear-gradient(90deg, #6366f1, #38bdf8); border-radius: 9999px;">
                        </div>
                    </div>
                </div>

                <div class="skill-progress-item">
                    <div
                        style="display: flex; justify-content: space-between; color: #f8fafc; font-weight: 500; font-size: 0.95rem; margin-bottom: 0.5rem;">
                        <span>MySQL & Database Optimization</span>
                        <span style="color: #38bdf8;">88%</span>
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 9999px; overflow: hidden;">
                        <div
                            style="width: 88%; height: 100%; background: linear-gradient(90deg, #6366f1, #38bdf8); border-radius: 9999px;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="custom-section">
    <div class="container">
        <div class="three-col">
            <div class="inner-box1">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/developer-avatar.jpg'); ?>"
                    alt="">
                <h2>Abdul Vashid</h2>
                <p>Lorem ip consequuntur cumque eaque? Est molestias cum doloremque sapiente ex fugiat labore et?</p>
            </div>
            <div class="inner-box1">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/developer-avatar.jpg'); ?>"
                    alt="">
                <h2>Abdul Vashid</h2>
                <p>Lorem ip consequuntur cumque eaque? Est molestias cum doloremque sapiente ex fugiat labore et?</p>
            </div>
            <div class="inner-box1">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/developer-avatar.jpg'); ?>"
                    alt="">
                <h2>Abdul Vashid</h2>
                <p>Lorem ip consequuntur cumque eaque? Est molestias cum doloremque sapiente ex fugiat labore et?</p>
            </div>
        </div>
    </div>
</section>

<!-- Values & Principles Section -->
<section class="portfolio-projects-section">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-tag">Work Philosophy</span>
            <h2 class="section-title">Core Development Principles</h2>
        </div>

        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">⚡</div>
                <h3>Speed & Optimization</h3>
                <p>Clean code architecture ensuring fast page loads, optimized database queries, and lightweight assets.
                </p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🔒</div>
                <h3>Security & Best Practices</h3>
                <p>Following strict WordPress coding standards, input sanitization, and secure server communication.</p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🎨</div>
                <h3>Modern Visual Craft</h3>
                <p>Attentive to UI/UX details, smooth micro-interactions, dark glassmorphism, and responsive layouts.
                </p>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🔄</div>
                <h3>Continuous Integration</h3>
                <p>Automated workflow setup using Git, GitHub Actions, and seamless server deployment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Dynamic Content Area from WP Dashboard Editor -->
<?php if (have_posts()): ?>
    <section style="padding: 3rem 0; background: #0f172a; color: #ffffff;">
        <div class="container">
            <?php
            while (have_posts()):
                the_post();
                if (get_the_content()):
                    ?>
                    <article class="post-card"
                        style="background: var(--bg-card); color: #94a3b8; border-color: var(--border-glass);">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endif;
            endwhile;
            ?>
        </div>
    </section>
<?php endif; ?>

<!-- Contact CTA Section -->
<section class="contact-cta-section" id="contact">
    <div class="container">
        <div class="contact-card">
            <h2>Let's Work Together</h2>
            <p>Have a project in mind or need a custom web development solution?</p>
            <div style="margin-top: 1.5rem;">
                <a href="mailto:abdulvashid@example.com" class="btn-primary"
                    style="font-size: 1.1rem; padding: 1rem 2.25rem;">
                    📩 Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>