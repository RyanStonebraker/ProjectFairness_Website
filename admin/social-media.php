<?php
function pf_social_media_section($wp_customize) {
    $section_id = 'pf_social_media_section';
    $wp_customize->add_section($section_id, array(
        'capability' => 'edit_theme_options',
        'title' => __('Social Media'),
        'description' => __('Configure the social media bar.')
    ));
    addSettingWithTextControl($wp_customize, $section_id, 'facebook', '', false);
}
add_action('customize_register', 'pf_social_media_section', 0);
