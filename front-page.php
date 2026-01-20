<?php

get_header();

$hero_pill = get_theme_mod('fhc_hero_pill', '100+ lab biomarkers, one membership.');
$hero_title = get_theme_mod('fhc_hero_title', 'Your complete health story starts with better data.');
$hero_subtitle = get_theme_mod(
    'fhc_hero_subtitle',
    'Function brings comprehensive lab testing, expert insights, and personalized action plans together so you can feel your best.'
);
$hero_primary_text = get_theme_mod('fhc_hero_primary_button_text', 'Get started');
$hero_primary_url = get_theme_mod('fhc_hero_primary_button_url', '#pricing');
$hero_secondary_text = get_theme_mod('fhc_hero_secondary_button_text', 'See how it works');
$hero_secondary_url = get_theme_mod('fhc_hero_secondary_button_url', '#labs');
$hero_card_title = get_theme_mod('fhc_hero_card_title', 'Your Function dashboard');
$hero_card_copy = get_theme_mod(
    'fhc_hero_card_copy',
    'Track biomarkers, review insights, and follow your personalized plan in one place.'
);
$hero_card_features = function_health_clone_parse_lines(
    get_theme_mod(
        'fhc_hero_card_features',
        "Snapshot summaries for every lab\nActionable steps from clinicians\nProgress tracking over time"
    )
);

$stats_heading = get_theme_mod('fhc_stats_heading', 'Measure what matters most.');
$stats_items = function_health_clone_parse_pairs(
    get_theme_mod('fhc_stats_items', "100+|Biomarkers\n90%|Members feel more in control\n2x|Faster insights"),
    2
);

$benefits_heading = get_theme_mod('fhc_benefits_heading', 'Everything you need to take action.');
$benefits_copy = get_theme_mod(
    'fhc_benefits_copy',
    'Function connects lab testing, clinician insights, and personalized recommendations in one place.'
);
$benefits_items = function_health_clone_parse_pairs(
    get_theme_mod(
        'fhc_benefits_items',
        "Personalized clinician insights|Understand what your labs mean and what to do next.\nConcierge experience|Schedule appointments, track results, and get guidance in one hub.\nActionable playbooks|Follow clear, science-backed plans tailored to your goals."
    ),
    2
);

$labs_heading = get_theme_mod('fhc_labs_heading', 'Deep lab testing without the wait.');
$labs_copy = get_theme_mod(
    'fhc_labs_copy',
    'Choose from panels across hormones, metabolic health, cardiovascular risk, longevity, and more.'
);
$labs_item_description = get_theme_mod('fhc_labs_item_description', 'Included in your baseline testing panel.');
$labs_items = function_health_clone_parse_lines(
    get_theme_mod(
        'fhc_labs_items',
        "Hormones & fertility\nMetabolic health\nCardiovascular risk\nLongevity & inflammation\nNutrients & vitamins\nAutoimmune screening"
    )
);

$pricing_heading = get_theme_mod('fhc_pricing_heading', 'Membership built for momentum.');
$pricing_price = get_theme_mod('fhc_pricing_price', '$499');
$pricing_description = get_theme_mod(
    'fhc_pricing_description',
    'Includes a full lab panel, clinician summary, and personalized action plan.'
);
$pricing_button_text = get_theme_mod('fhc_pricing_button_text', 'Join now');
$pricing_button_url = get_theme_mod('fhc_pricing_button_url', '#');
$pricing_details = function_health_clone_parse_lines(
    get_theme_mod(
        'fhc_pricing_details',
        "Full baseline panel (100+ biomarkers)\nClinician consultation summary\nPersonalized action plan\nMobile lab visit scheduling"
    )
);
$pricing_included_heading = get_theme_mod('fhc_pricing_included_heading', 'What is included');

$testimonials_heading = get_theme_mod('fhc_testimonials_heading', 'Members are taking control of their health.');
$testimonials_items = function_health_clone_parse_pairs(
    get_theme_mod(
        'fhc_testimonials_items',
        "\"My clinician helped me finally understand my labs.\"|Jamie L.|Founder\n\"The action plan was clear and doable.\"|Morgan K.|Designer\n\"I feel informed and empowered every step.\"|Taylor R.|Engineer"
    ),
    3
);

$faq_heading = get_theme_mod('fhc_faq_heading', 'Frequently asked questions');
$faq_items = function_health_clone_parse_pairs(
    get_theme_mod(
        'fhc_faq_items',
        "What lab tests are included?|Your membership includes a comprehensive panel with over 100 biomarkers.\nHow do I schedule labs?|Use the member portal to pick a location or mobile appointment.\nDo I get support interpreting results?|Yes, a clinician summary accompanies every test."
    ),
    2
);

$footer_tagline = get_theme_mod('fhc_footer_tagline', 'Ready to build your health baseline?');
$footer_button_text = get_theme_mod('fhc_footer_button_text', 'Talk to us');
$footer_button_url = get_theme_mod('fhc_footer_button_url', '#');
$footer_links = function_health_clone_parse_pairs(
    get_theme_mod('fhc_footer_links', "Privacy policy|#\nTerms of service|#\nSupport|#"),
    2
);
?>

<section class="fhc-hero" id="top">
    <div class="fhc-container fhc-hero-grid">
        <div>
            <span class="fhc-pill"><?php echo esc_html($hero_pill); ?></span>
            <h1><?php echo esc_html($hero_title); ?></h1>
            <p><?php echo wp_kses_post($hero_subtitle); ?></p>
            <div class="fhc-badge-list">
                <a class="fhc-button" href="<?php echo esc_url($hero_primary_url); ?>">
                    <?php echo esc_html($hero_primary_text); ?>
                </a>
                <a class="fhc-button secondary" href="<?php echo esc_url($hero_secondary_url); ?>">
                    <?php echo esc_html($hero_secondary_text); ?>
                </a>
            </div>
        </div>
        <div class="fhc-card">
            <h3><?php echo esc_html($hero_card_title); ?></h3>
            <p><?php echo wp_kses_post($hero_card_copy); ?></p>
            <ul class="fhc-list">
                <?php foreach ($hero_card_features as $feature) : ?>
                    <li>• <?php echo esc_html($feature); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="fhc-section" id="stats">
    <div class="fhc-container">
        <h2><?php echo esc_html($stats_heading); ?></h2>
        <div class="fhc-stats">
            <?php foreach ($stats_items as $stat) : ?>
                <div class="fhc-stat">
                    <strong><?php echo esc_html($stat[0]); ?></strong>
                    <span><?php echo esc_html($stat[1]); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="fhc-section" id="benefits">
    <div class="fhc-container">
        <h2><?php echo esc_html($benefits_heading); ?></h2>
        <p><?php echo wp_kses_post($benefits_copy); ?></p>
        <div class="fhc-card-grid">
            <?php foreach ($benefits_items as $item) : ?>
                <div class="fhc-card">
                    <h3><?php echo esc_html($item[0]); ?></h3>
                    <p><?php echo esc_html($item[1]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="fhc-section" id="labs">
    <div class="fhc-container">
        <h2><?php echo esc_html($labs_heading); ?></h2>
        <p><?php echo wp_kses_post($labs_copy); ?></p>
        <div class="fhc-card-grid">
            <?php foreach ($labs_items as $label) : ?>
                <div class="fhc-card">
                    <h3><?php echo esc_html($label); ?></h3>
                    <p><?php echo esc_html($labs_item_description); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="fhc-section" id="pricing">
    <div class="fhc-container fhc-pricing">
        <div>
            <h2><?php echo esc_html($pricing_heading); ?></h2>
            <p><?php echo wp_kses_post($pricing_description); ?></p>
            <p class="fhc-price"><?php echo esc_html($pricing_price); ?></p>
            <a class="fhc-button" href="<?php echo esc_url($pricing_button_url); ?>">
                <?php echo esc_html($pricing_button_text); ?>
            </a>
        </div>
        <div class="fhc-card">
            <h3><?php echo esc_html($pricing_included_heading); ?></h3>
            <ul class="fhc-list">
                <?php foreach ($pricing_details as $detail) : ?>
                    <li>• <?php echo esc_html($detail); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="fhc-section" id="testimonials">
    <div class="fhc-container">
        <h2><?php echo esc_html($testimonials_heading); ?></h2>
        <div class="fhc-testimonial">
            <?php foreach ($testimonials_items as $testimonial) : ?>
                <blockquote>
                    <p><?php echo esc_html($testimonial[0]); ?></p>
                    <strong><?php echo esc_html($testimonial[1]); ?></strong>
                    <p><?php echo esc_html($testimonial[2]); ?></p>
                </blockquote>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="fhc-section" id="faq">
    <div class="fhc-container">
        <h2><?php echo esc_html($faq_heading); ?></h2>
        <div>
            <?php foreach ($faq_items as $faq) : ?>
                <div class="fhc-faq-item">
                    <h3><?php echo esc_html($faq[0]); ?></h3>
                    <p><?php echo esc_html($faq[1]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<footer class="fhc-footer" id="contact">
    <div class="fhc-container">
        <h2><?php echo esc_html($footer_tagline); ?></h2>
        <a class="fhc-button" href="<?php echo esc_url($footer_button_url); ?>">
            <?php echo esc_html($footer_button_text); ?>
        </a>
        <nav>
            <?php foreach ($footer_links as $link) : ?>
                <a href="<?php echo esc_url($link[1]); ?>">
                    <?php echo esc_html($link[0]); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
</footer>

<?php
get_footer();
