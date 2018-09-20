<?php
function pf_donation_tracker_section($wp_customize) {
    $section_id = 'pf_donation_tracker_section';
    $wp_customize->add_section($section_id, array(
        'capability' => 'edit_theme_options',
        'title' => __('Donation Tracker'),
        'description' => __('Configure the donation tracker.')
    ));
    addSettingWithTextControl($wp_customize, $section_id, 'title', '', false);
    addSettingWithTextControl($wp_customize, $section_id, 'current_donations', '', false);
    addSettingWithTextControl($wp_customize, $section_id, 'goal', '', false);
}
add_action('customize_register', 'pf_donation_tracker_section', 0);
