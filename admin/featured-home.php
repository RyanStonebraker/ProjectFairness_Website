<?php
function pf_featured_section($wp_customize, $section_count) {
  $section_id = "pf_featured_section_${section_count}";
  $wp_customize->add_section($section_id, array(
      'panel' => 'pf_featured_panel',
      'capability' => 'edit_theme_options',
      'title' => __("Featured Section ${section_count}"),
      'description' => __("Configure featured section ${section_count}.")
  ));
  addSettingWithTextControl($wp_customize, $section_id, 'name', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'link', '', false);
  addSettingWithTextControl($wp_customize, $section_id, 'short_description', '', false);
  addSettingWithCheckboxControl ($wp_customize, $section_id, 'hide', '', false);
}

function pf_featured_panel($wp_customize) {
    $panel_id = 'pf_featured_panel';
    $wp_customize->add_panel($panel_id, array(
        'capability' => 'edit_theme_options',
        'title' => __('Featured Items'),
        'description' => __('Configure the featured items.')
    ));
    $featured_count = 3;
    for ($i = 1; $i <= 3; ++$i) {
      pf_featured_section($wp_customize, $i);
    }
}
add_action('customize_register', 'pf_featured_panel', 0);
