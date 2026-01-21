<?php

if (!defined('ABSPATH')) {
    exit;
}

function function_health_clone_enqueue_assets(): void
{
    wp_enqueue_style(
        'function-health-clone-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'function_health_clone_enqueue_assets');

function function_health_clone_customize_register(WP_Customize_Manager $wp_customize): void
{
    $wp_customize->add_section('fhc_hero', [
        'title' => __('Hero', 'function-health-clone'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('fhc_hero_pill', [
        'default' => '100+ lab biomarkers, one membership.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_hero_pill', [
        'label' => __('Hero pill text', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_hero_title', [
        'default' => 'Your complete health story starts with better data.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_hero_title', [
        'label' => __('Hero title', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_hero_subtitle', [
        'default' => 'Function brings comprehensive lab testing, expert insights, and personalized action plans together so you can feel your best.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('fhc_hero_subtitle', [
        'label' => __('Hero subtitle', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_hero_primary_button_text', [
        'default' => 'Get started',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_hero_primary_button_text', [
        'label' => __('Primary button text', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_hero_primary_button_url', [
        'default' => '#pricing',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('fhc_hero_primary_button_url', [
        'label' => __('Primary button URL', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('fhc_hero_secondary_button_text', [
        'default' => 'See how it works',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_hero_secondary_button_text', [
        'label' => __('Secondary button text', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_hero_secondary_button_url', [
        'default' => '#labs',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('fhc_hero_secondary_button_url', [
        'label' => __('Secondary button URL', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('fhc_hero_card_title', [
        'default' => 'Your Function dashboard',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_hero_card_title', [
        'label' => __('Hero feature card title', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_hero_card_copy', [
        'default' => 'Track biomarkers, review insights, and follow your personalized plan in one place.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('fhc_hero_card_copy', [
        'label' => __('Hero feature card copy', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_hero_card_features', [
        'default' => "Snapshot summaries for every lab\nActionable steps from clinicians\nProgress tracking over time",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_hero_card_features', [
        'label' => __('Hero feature list (one per line)', 'function-health-clone'),
        'section' => 'fhc_hero',
        'type' => 'textarea',
    ]);

    $wp_customize->add_section('fhc_stats', [
        'title' => __('Stats', 'function-health-clone'),
        'priority' => 40,
    ]);

    $wp_customize->add_setting('fhc_stats_heading', [
        'default' => 'Measure what matters most.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_stats_heading', [
        'label' => __('Stats heading', 'function-health-clone'),
        'section' => 'fhc_stats',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_stats_items', [
        'default' => "100+|Biomarkers\n90%|Members feel more in control\n2x|Faster insights",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_stats_items', [
        'label' => __('Stats items (Value|Label per line)', 'function-health-clone'),
        'section' => 'fhc_stats',
        'type' => 'textarea',
    ]);

    $wp_customize->add_section('fhc_benefits', [
        'title' => __('Benefits', 'function-health-clone'),
        'priority' => 50,
    ]);

    $wp_customize->add_setting('fhc_benefits_heading', [
        'default' => 'Everything you need to take action.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_benefits_heading', [
        'label' => __('Benefits heading', 'function-health-clone'),
        'section' => 'fhc_benefits',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_benefits_copy', [
        'default' => 'Function connects lab testing, clinician insights, and personalized recommendations in one place.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('fhc_benefits_copy', [
        'label' => __('Benefits copy', 'function-health-clone'),
        'section' => 'fhc_benefits',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_benefits_items', [
        'default' => "Personalized clinician insights|Understand what your labs mean and what to do next.\nConcierge experience|Schedule appointments, track results, and get guidance in one hub.\nActionable playbooks|Follow clear, science-backed plans tailored to your goals.",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_benefits_items', [
        'label' => __('Benefits items (Title|Description per line)', 'function-health-clone'),
        'section' => 'fhc_benefits',
        'type' => 'textarea',
    ]);

    $wp_customize->add_section('fhc_labs', [
        'title' => __('Labs', 'function-health-clone'),
        'priority' => 60,
    ]);

    $wp_customize->add_setting('fhc_labs_heading', [
        'default' => 'Deep lab testing without the wait.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_labs_heading', [
        'label' => __('Labs heading', 'function-health-clone'),
        'section' => 'fhc_labs',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_labs_copy', [
        'default' => 'Choose from panels across hormones, metabolic health, cardiovascular risk, longevity, and more.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('fhc_labs_copy', [
        'label' => __('Labs copy', 'function-health-clone'),
        'section' => 'fhc_labs',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_labs_items', [
        'default' => "Hormones & fertility|Metabolic health|Cardiovascular risk|Longevity & inflammation|Nutrients & vitamins|Autoimmune screening",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_labs_items', [
        'label' => __('Labs items (Label per line)', 'function-health-clone'),
        'section' => 'fhc_labs',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_labs_item_description', [
        'default' => 'Included in your baseline testing panel.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_labs_item_description', [
        'label' => __('Labs item description', 'function-health-clone'),
        'section' => 'fhc_labs',
        'type' => 'text',
    ]);

    $wp_customize->add_section('fhc_pricing', [
        'title' => __('Pricing', 'function-health-clone'),
        'priority' => 70,
    ]);

    $wp_customize->add_setting('fhc_pricing_heading', [
        'default' => 'Membership built for momentum.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_pricing_heading', [
        'label' => __('Pricing heading', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_pricing_price', [
        'default' => '$499',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_pricing_price', [
        'label' => __('Pricing price', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_pricing_description', [
        'default' => 'Includes a full lab panel, clinician summary, and personalized action plan.',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('fhc_pricing_description', [
        'label' => __('Pricing description', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_pricing_button_text', [
        'default' => 'Join now',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_pricing_button_text', [
        'label' => __('Pricing button text', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_pricing_button_url', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('fhc_pricing_button_url', [
        'label' => __('Pricing button URL', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('fhc_pricing_details', [
        'default' => "Full baseline panel (100+ biomarkers)\nClinician consultation summary\nPersonalized action plan\nMobile lab visit scheduling",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_pricing_details', [
        'label' => __('Pricing details (one per line)', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('fhc_pricing_included_heading', [
        'default' => 'What is included',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_pricing_included_heading', [
        'label' => __('Pricing included heading', 'function-health-clone'),
        'section' => 'fhc_pricing',
        'type' => 'text',
    ]);

    $wp_customize->add_section('fhc_testimonials', [
        'title' => __('Testimonials', 'function-health-clone'),
        'priority' => 80,
    ]);

    $wp_customize->add_setting('fhc_testimonials_heading', [
        'default' => 'Members are taking control of their health.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_testimonials_heading', [
        'label' => __('Testimonials heading', 'function-health-clone'),
        'section' => 'fhc_testimonials',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_testimonials_items', [
        'default' => "\"My clinician helped me finally understand my labs.\"|Jamie L.|Founder\n\"The action plan was clear and doable.\"|Morgan K.|Designer\n\"I feel informed and empowered every step.\"|Taylor R.|Engineer",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_testimonials_items', [
        'label' => __('Testimonials (Quote|Name|Role per line)', 'function-health-clone'),
        'section' => 'fhc_testimonials',
        'type' => 'textarea',
    ]);

    $wp_customize->add_section('fhc_faq', [
        'title' => __('FAQ', 'function-health-clone'),
        'priority' => 90,
    ]);

    $wp_customize->add_setting('fhc_faq_heading', [
        'default' => 'Frequently asked questions',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_faq_heading', [
        'label' => __('FAQ heading', 'function-health-clone'),
        'section' => 'fhc_faq',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_faq_items', [
        'default' => "What lab tests are included?|Your membership includes a comprehensive panel with over 100 biomarkers.\nHow do I schedule labs?|Use the member portal to pick a location or mobile appointment.\nDo I get support interpreting results?|Yes, a clinician summary accompanies every test.",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_faq_items', [
        'label' => __('FAQ items (Question|Answer per line)', 'function-health-clone'),
        'section' => 'fhc_faq',
        'type' => 'textarea',
    ]);

    $wp_customize->add_section('fhc_footer', [
        'title' => __('Footer', 'function-health-clone'),
        'priority' => 100,
    ]);

    $wp_customize->add_setting('fhc_footer_tagline', [
        'default' => 'Ready to build your health baseline?',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_footer_tagline', [
        'label' => __('Footer tagline', 'function-health-clone'),
        'section' => 'fhc_footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_footer_button_text', [
        'default' => 'Talk to us',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('fhc_footer_button_text', [
        'label' => __('Footer button text', 'function-health-clone'),
        'section' => 'fhc_footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('fhc_footer_button_url', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('fhc_footer_button_url', [
        'label' => __('Footer button URL', 'function-health-clone'),
        'section' => 'fhc_footer',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('fhc_footer_links', [
        'default' => "Privacy policy|#\nTerms of service|#\nSupport|#",
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('fhc_footer_links', [
        'label' => __('Footer links (Label|URL per line)', 'function-health-clone'),
        'section' => 'fhc_footer',
        'type' => 'textarea',
    ]);
}
add_action('customize_register', 'function_health_clone_customize_register');

function function_health_clone_parse_lines(string $text): array
{
    $lines = preg_split('/\r\n|\r|\n/', $text);
    $lines = array_filter(array_map('trim', $lines));
    return array_values($lines);
}

function function_health_clone_parse_pairs(string $text, int $parts = 2): array
{
    $lines = function_health_clone_parse_lines($text);
    $parsed = [];

    foreach ($lines as $line) {
        $values = array_map('trim', explode('|', $line));
        $values = array_pad($values, $parts, '');
        $parsed[] = array_slice($values, 0, $parts);
    }

    return $parsed;
}
