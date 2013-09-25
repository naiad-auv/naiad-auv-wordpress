<?php

/* * *************************************************************************************************** */
// Generate option tabs content
/* * *************************************************************************************************** */

function nimbus_field_engine() {

    global $allowedtags, $NIMBUS_FONT_FACES, $NIMBUS_OPTIONS_ARR;
    $option_name = THEME_OPTIONS;
    $theme_options = get_option(THEME_OPTIONS);
    $options = $NIMBUS_OPTIONS_ARR;
    $section_return = array();
    
    foreach ($options as $option) {
        $section_return[$option['tab']] = '';
    }

    foreach ($options as $option) {
    
        // Set option variables 
    
        if (isset($option['classes'])) {
            $classes = $option['classes'];
        }
        
        if (isset($option['label'])) {
            $label = $option['label'];
        }
        
        
        
        
        
        
        // Set field number variable

        if (($option['type'] == "tab")) {
            unset($field_num);
            $field_num = 1;
        }

        // Do stuff excluding tabs and html.

        if (($option['type'] != "tab") && ($option['type'] != "html")) {

            // Set value for default and override with saved option if set.

            $value = '';
            if (isset($option['default'])) {
                $value = $option['default'];
            }
            if (isset($theme_options[($option['id'])])) {
                $value = $theme_options[($option['id'])];
            }

            // Begin option, wrap all with basic title and wrappers.
            
            $section_return[$option['tab']] .= '<div id="' . $option['id'] . '_option_wrapper" class="option_wrapper">' . "\n";
            $section_return[$option['tab']] .= '<div class="option_info_column">' . "\n";
            $section_return[$option['tab']] .= '<div class="option_number">' . $field_num . '</div>' . "\n";
            if (isset($option['info'])) {
                $section_return[$option['tab']] .= '<a class="info_box_button" href="#' . $option['id'] . '_info"><img src="' . get_stylesheet_directory_uri() . '/nimbus/images/info_button.png" alt="Info Window" /></a>' . "\n";
            }
            if (isset($option['video'])) {
                $section_return[$option['tab']] .= '<img src="' . get_stylesheet_directory_uri() . '/nimbus/images/vid_button.png" alt="Video Window" />' . "\n";
            }
            $section_return[$option['tab']] .= '</div>' . "\n";
            $section_return[$option['tab']] .= '<div id="' . $option['id'] . '_option_right" class="option_right">' . "\n";
            $section_return[$option['tab']] .= '<p class="option_name">' . $option['name'] . '</p>' . "\n";

            // Include descrtiption if availible.

            if (isset($option['desc'])) {
                $section_return[$option['tab']] .= '<p class="option_description">' . $option['desc'] . '</p>' . "\n";
            }
        }

        // Construct text field.

        if ($option['type'] == "text") {
            $section_return[$option['tab']] .= '<input id="' . $option['id'] . '" class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" type="text" value="' . esc_attr($value) . '" />' . "\n";
            $field_num++;

            // Construct textarea.
        } elseif ($option['type'] == "textarea") {
            $section_return[$option['tab']] .= '<textarea id="' . $option['id'] . '" class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" >' . esc_textarea($value) . '</textarea>' . "\n";
            $field_num++;


            // Construct select. 
        } elseif ($option['type'] == "select") {
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" id="' . esc_attr($option['id']) . '">' . "\n";
            foreach ($option['options'] as $key => $select) {

                $section_return[$option['tab']] .= '<option ' . selected($value, $key, false) . ' value="' . esc_attr($key) . '">' . esc_html($select) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $field_num++;

            // Construct Font Select.  
        } elseif ($option['type'] == "typography") {

            // Font Face

            $section_return[$option['tab']] .= '<div class="split_select_left">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Face: ( * Google Web Font )</p>' . "\n";
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";
            $faces = $NIMBUS_FONT_FACES;
            ksort($faces);
            foreach ($faces as $key => $face) {
                $section_return[$option['tab']] .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div>' . "\n";

            // Font Size

            $section_return[$option['tab']] .= '<div class="split_select_right">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Size</p>' . "\n";
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][size]') . '" id="' . esc_attr($option['id'] . '_size') . '">' . "\n";
            for ($i = 6; $i < 66; $i++) {
                $font_size = $i . 'px';
                $section_return[$option['tab']] .= '<option value="' . esc_attr($font_size) . '" ' . selected($value['size'], $font_size, false) . '>' . esc_html($font_size) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div><div class="clear10"></div>' . "\n";

            // Line-Height

            $section_return[$option['tab']] .= '<div class="split_select_left">' . "\n";
            $section_return[$option['tab']] .= '<p>Line Height</p>' . "\n";
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][line]') . '" id="' . esc_attr($option['id'] . '_line') . '">' . "\n";
            $line_begin = 0.5;
            $line_increment = 0.1;
            for ($i = 0; $i < 16; $i++) {
                $line_height = ($line_begin + $line_increment * $i) . 'em';
                $section_return[$option['tab']] .= '<option value="' . esc_attr($line_height) . '" ' . selected($value['line'], $line_height, false) . '>' . esc_html($line_height) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div>' . "\n";

            // Font Style

            $section_return[$option['tab']] .= '<div class="split_select_right">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Style</p>' . "\n";
            $styles = nimbus_font_styles();
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . $option_name . '[' . $option['id'] . '][style]" id="' . $option['id'] . '_style">' . "\n";
            foreach ($styles as $key => $style) {
                $section_return[$option['tab']] .= '<option value="' . esc_attr($key) . '" ' . selected($value['style'], $key, false) . '>' . $style . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div><div class="clear10"></div>' . "\n";

            // Text Transform

            $section_return[$option['tab']] .= '<div class="split_select_left">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Case</p>' . "\n";
            $cases = nimbus_font_transform();
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . $option_name . '[' . $option['id'] . '][fonttrans]" id="' . $option['id'] . '_case">' . "\n";
            foreach ($cases as $key => $case) {
                $section_return[$option['tab']] .= '<option value="' . esc_attr($key) . '" ' . selected($value['fonttrans'], $key, false) . '>' . $case . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div>' . "\n";

            // Font Color		

            $section_return[$option['tab']] .= '<div class="split_select_right_color">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Color</p>' . "\n";
            $section_return[$option['tab']] .= '<div id="' . esc_attr($option['id']) . '_color_picker" class="colorSelector"><div style="' . esc_attr('background-color:' . $value['color']) . '"></div></div>';
            $section_return[$option['tab']] .= '<input class="' . $classes . ' hex_field" name="' . esc_attr($option_name . '[' . $option['id'] . '][color]') . '" id="' . esc_attr($option['id'] . '_color') . '" type="text" value="' . esc_attr($value['color']) . '" />';
            $section_return[$option['tab']] .= '</div><div class="clear10"></div>' . "\n";
            $field_num++;

            // Construct checkbox.	
        } elseif ($option['type'] == "checkbox") {
            $section_return[$option['tab']] .= '<input id="' . $option['id'] . '" class="' . $classes . '" type="checkbox" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" ' . checked($value, 1, false) . ' /><span class="checkbox_label">' . $label . '</span>';
            $field_num++;

            // Construct multiple checkboxes
        } elseif ($option['type'] == "multicheck") {
            foreach ($option['options'] as $key => $multi) {
                $checked = '';
                $label = $multi;
                $multi = preg_replace('/[^a-zA-Z0-9._\-]/', '', strtolower($key));

                $id = $option_name . '-' . $option['id'] . '-' . $multi;
                $name = $option_name . '[' . $option['id'] . '][' . $multi . ']';

                if (isset($value[$multi])) {
                    $checked = checked($value[$multi], 1, false);
                }

                $section_return[$option['tab']] .= '<input id="' . esc_attr($id) . '" class="' . $classes . '" type="checkbox" name="' . esc_attr($name) . '" ' . $checked . ' /><label for="' . esc_attr($id) . '">' . esc_html($label) . '</label><br />';
            }
            $field_num++;

            // Construct radio.	
        } elseif ($option['type'] == "radio") {
            $name = $option_name . '[' . $option['id'] . ']';
            foreach ($option['options'] as $key => $radio) {
                $id = $option_name . '-' . $option['id'] . '-' . $key;
                $section_return[$option['tab']] .= '<input class="' . $classes . '" type="radio" name="' . esc_attr($name) . '" id="' . esc_attr($id) . '" value="' . esc_attr($key) . '" ' . checked($value, $key, false) . ' /><label for="' . esc_attr($id) . '">' . esc_html($radio) . '</label><br />';
            }
            $field_num++;

            // Font Face/Color   
        } elseif ($option['type'] == "font") {

            // Font Face

            $section_return[$option['tab']] .= '<div class="split_select_left">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Face</p>' . "\n";
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";
            $faces = $NIMBUS_FONT_FACES;
            ksort($faces);
            foreach ($faces as $key => $face) {
                $section_return[$option['tab']] .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div>' . "\n";

            // Font Color		

            $section_return[$option['tab']] .= '<div class="split_select_right_color">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Color</p>' . "\n";
            $section_return[$option['tab']] .= '<div id="' . esc_attr($option['id']) . '_color_picker" class="colorSelector"><div style="' . esc_attr('background-color:' . $value['color']) . '"></div></div>';
            $section_return[$option['tab']] .= '<input class="' . $classes . '  hex_field" name="' . esc_attr($option_name . '[' . $option['id'] . '][color]') . '" id="' . esc_attr($option['id'] . '_color') . '" type="text" value="' . esc_attr($value['color']) . '" />';
            $section_return[$option['tab']] .= '</div><div class="clear10"></div>' . "\n";

            $field_num++;

            // Font Face Only
        } elseif ($option['type'] == "face") {

            // Font Face

            $section_return[$option['tab']] .= '<div class="split_select_left">' . "\n";
            $section_return[$option['tab']] .= '<p>Font Face</p>' . "\n";
            $section_return[$option['tab']] .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";
            $faces = $NIMBUS_FONT_FACES;
            ksort($faces);
            foreach ($faces as $key => $face) {
                $section_return[$option['tab']] .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";
            }
            $section_return[$option['tab']] .= '</select>' . "\n";
            $section_return[$option['tab']] .= '</div>' . "\n";

            $field_num++;

            // Construct color picker.	
        } elseif ($option['type'] == "color") {

            $section_return[$option['tab']] .= '<div id="' . esc_attr($option['id'] . '_picker') . '" class="colorSelector"><div style="' . esc_attr('background-color:' . $value) . '"></div></div>';
            $section_return[$option['tab']] .= '<input class="' . $classes . ' hex_field" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" id="' . esc_attr($option['id']) . '" type="text" value="' . esc_attr($value) . '" />';
            $field_num++;

            // Construct image.	
        } elseif ($option['type'] == "image") {
            $section_return[$option['tab']] .= '<input id="' . $option['id'] . '" class="upload_image ' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" type="text" value="' . esc_attr($value) . '" />';
            $section_return[$option['tab']] .= '<input type="button" name="upload_image_button" class="upload_image_button nimbus_button_blue" value="Browse" />';
            //$section_return[$option['tab']] .= '<img src="' . $value . '" />';	
            $field_num++;
            
            // pro account
        } elseif ($option['type'] == "pro") {
            $join_text = __('This feature is available to Nimbus Themes members.', 'nimbus_opulus_sombre');
            $join_link_text = __('Join today!!.', 'nimbus_opulus_sombre');
            $section_return[$option['tab']] .= '<p><span style="color:#fc7e2a; font-weight:bold;">' . $join_text . '</span> <a style="font-weight:bold;" href="http://www.nimbusthemes.com/join/?utm_source=opulus_sombre&utm_medium=theme&utm_content=panel_link&utm_campaign=opulus_sombre">' . $join_link_text . '</a></p>';
            $field_num++;    

            // item_html
        } elseif ($option['type'] == "item_html") {

            $section_return[$option['tab']] .= $option['html'];
            $field_num++;             

            // Construct tabs.	
        } elseif ($option['type'] == "tab") {
            $section_return[$option['tab']] .= '<li><a href="#' . $option['url'] . '" id="' . $option['id'] . '" class="' . $classes . '">' . $option['name'] . '</a></li>';

            // Construct html.	
        } elseif ($option['type'] == "html") {
            $section_return[$option['tab']] .= $option['html'];
        }

        // Close field wrap html.

        if (($option['type'] != "tab") && ($option['type'] != "html")) {
            $section_return[$option['tab']] .= '<div class="clear30"></div></div><div class="clear20"></div></div>';
        }

        if (isset($option['info'])) {
            $section_return[$option['tab']] .= '<div style="display: none;">';
            $section_return[$option['tab']] .= '<div id="' . $option['id'] . '_info" class="info_box">';
            $section_return[$option['tab']] .= '<h2>' . $option['name'] . '</h2>';
            $section_return[$option['tab']] .= $option['info'];
            $section_return[$option['tab']] .= '</div>';
            $section_return[$option['tab']] .= '</div>';
        }
    }

    return $section_return;
}

