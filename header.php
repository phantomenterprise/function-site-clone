<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$announcement_text = get_theme_mod(
    'fhc_announcement_text',
    'Now available in all 50 states · Book your baseline labs today.'
);
$logo_text = get_theme_mod('fhc_logo_text', 'Function');
$header_links = function_health_clone_parse_pairs(
    get_theme_mod('fhc_header_links', "How it works|#benefits\nLabs|#labs\nPricing|#pricing\nFAQ|#faq"),
    2
);
$header_button_text = get_theme_mod('fhc_header_button_text', 'Join now');
$header_button_url = get_theme_mod('fhc_header_button_url', '#pricing');
?>
<div class="fhc-announcement">
    <div class="fhc-container">
        <?php echo esc_html($announcement_text); ?>
    </div>
</div>
<header class="fhc-header">
    <div class="fhc-container">
        <div class="fhc-logo"><?php echo esc_html($logo_text); ?></div>
        <nav class="fhc-nav">
            <?php foreach ($header_links as $link) : ?>
                <a href="<?php echo esc_url($link[1]); ?>"><?php echo esc_html($link[0]); ?></a>
            <?php endforeach; ?>
        </nav>
        <div class="fhc-header-actions">
            <a class="fhc-button secondary" href="<?php echo esc_url($header_button_url); ?>">
                <?php echo esc_html($header_button_text); ?>
            </a>
        </div>
    </div>
</header>
