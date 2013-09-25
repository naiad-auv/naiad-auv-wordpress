<?php

/* **************************************************************************************************** */
// Filter text fields
/* **************************************************************************************************** */

function nimbus_filter_text($input) {
    global $allowedposttags;
    $output = wp_kses($input, $allowedposttags);
    return $output;
}

add_filter('nimbus_filter_text', 'nimbus_filter_text');


/* **************************************************************************************************** */
// Filter Checkbox
/* **************************************************************************************************** */

function nimbus_filter_checkbox($input) {
    if ($input) {
        $output = "1";
    } else {
        $output = "0";
    }
    return $output;
}

add_filter('nimbus_filter_checkbox', 'nimbus_filter_checkbox');


/* **************************************************************************************************** */
// Filter Multicheck
/* **************************************************************************************************** */

function nimbus_filter_multicheck($input, $option) {
    $output = '';
    if (is_array($input)) {
        foreach ($option['options'] as $key => $value) {
            $output[$key] = "0";
        }
        foreach ($input as $key => $value) {
            if (array_key_exists($key, $option['options']) && $value) {
                $output[$key] = "1";
            }
        }
    }
    return $output;
}

add_filter('nimbus_filter_multicheck', 'nimbus_filter_multicheck', 10, 2);


