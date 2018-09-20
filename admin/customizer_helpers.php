<?php

function addSettingWithControl ($wp_customize, $control_type, $section_name, $setting_append, $default="", $js_live_reload=true, $options=array(), $title=null) {
    $added_title = false;
    if (!$title) {
        $title = explode("_", $setting_append);
        $title = implode(" ", $title);
        $title = ucwords($title);
        $added_title = true;
    }
    $setting_id = "{$section_name}_{$setting_append}";
    $control_id = "{$setting_id}_control";

    $wp_customize->add_setting($setting_id, array(
        'default' => $default,
        'transport'  => $js_live_reload ? 'postMessage' : 'refresh',
    ));

    if ($control_type === "image") {
        $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               $control_id,
               array(
                   'label'      => __($title),
                   'section'    => $section_name,
                   'settings'   => $setting_id,
               )
           )
       );
    }
    else if ($control_type === "color") {
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $control_id,
                array(
                    'label'      => __($title),
                    'section'    => $section_name,
                    'settings'   => $setting_id,
                )
            )
        );
    }
    else {
        if ($added_title)
            $title .= ": ";
        $settings = array(
            "type"     => $control_type,
            "label"    => __("$title"),
            "section"  => $section_name,
            "settings" => $setting_id
        );
        $wp_customize->add_control($control_id, array_merge($settings, $options));
    }
}

function addSettingWithTextControl ($wp_customize, $section_name, $setting_append, $default="", $js_live_reload=true, $title=null) {
    addSettingWithControl($wp_customize, "text", $section_name, $setting_append, $default, $js_live_reload, array(), $title);
}

function addSettingWithImageControl ($wp_customize, $section_name, $setting_append, $default="", $js_live_reload=true, $title=null) {
    addSettingWithControl($wp_customize, "image", $section_name, $setting_append, $default, $js_live_reload, array(), $title);
}

function addSettingWithColorControl ($wp_customize, $section_name, $setting_append, $default="", $js_live_reload=true, $title=null) {
    addSettingWithControl($wp_customize, "color", $section_name, $setting_append, $default, $js_live_reload, array(), $title);
}

function addSettingWithRangeControl ($wp_customize, $min, $max, $step, $section_name, $setting_append, $default="", $js_live_reload=true, $title=null) {
    $options = array("input_attrs" => array(
        'min' => $min,
        'max' => $max,
        'step' => $step,
    ));
    addSettingWithControl($wp_customize, "range", $section_name, $setting_append, $default, $js_live_reload, $options, $title);
}

function addSettingWithCheckboxControl ($wp_customize, $section_name, $setting_append, $default="", $js_live_reload=true, $title=null) {
    $title = ucwords(str_replace("_", " ", $setting_append));
    addSettingWithControl($wp_customize, "checkbox", $section_name, $setting_append, $default, $js_live_reload, array(), $title);
}
