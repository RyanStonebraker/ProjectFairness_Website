<?php
function addDonationTrackerSection ($wp_customize, $name) {
  $panel_id = 'pf_donation_tracker_panel';
  $shortName = strtolower(str_replace(" ", "", $name));
  $section_id = "pf_donation_tracker_section_$shortName";
  $wp_customize->add_section($section_id, array(
      'capability' => 'edit_theme_options',
      'title' => __("$name"),
      'panel' => $panel_id,
      'description' => __("Track donations for $name.")
  ));
  addSettingWithImageControl($wp_customize, $section_id, 'picture', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'name', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'runner_statement', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'current_donations', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'goal', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'donation-button-shortcode', '', false);
}

function get_content_from_pages ($pages) {
  $content = "";
  foreach ($pages as $pageName) {
    $page = get_page_by_title($pageName);
    if ($page)
      $content .= apply_filters('the_content', $page->post_content);
  }

  return $content;
}

function pf_donation_tracker_panel($wp_customize) {
    $panel_id = 'pf_donation_tracker_panel';
    $wp_customize->add_panel($panel_id, array(
        'capability' => 'edit_theme_options',
        'title' => __('Donation Tracker'),
        'description' => __('Configure the donation tracker.')
    ));

    $content = get_content_from_pages(array(
      "donate",
      "marathon",
      "Brooklyn Marathon and Half Marathon"
    ));

    $donation_tracker_matches = array();
    preg_match_all('/\[\[donation-tracker=\'([a-zA-Z 0-9]*)\'\]\]/', $content, $donation_tracker_matches);
    foreach ($donation_tracker_matches as $donation_tracker) {
      foreach ($donation_tracker as $runner) {
        addDonationTrackerSection($wp_customize, $runner);
      }
    }
}
add_action('customize_register', 'pf_donation_tracker_panel', 0, 2);
