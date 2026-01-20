<?php

if (is_front_page()) {
    include locate_template('front-page.php');
    return;
}

get_header();
?>
<section class="fhc-section">
    <div class="fhc-container">
        <h1><?php esc_html_e('Blog', 'function-health-clone'); ?></h1>
        <?php if (have_posts()) : ?>
            <div class="fhc-card-grid">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <article class="fhc-card">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(get_the_excerpt()); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'function-health-clone'); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
