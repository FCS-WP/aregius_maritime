<?php

add_action('admin_init', 'add_custom_general_settings_field');

function add_custom_general_settings_field() {

    register_setting(
        'general',                    
        'custom_mailing_address',  
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => '', // Default value
        )
    );

    add_settings_field(
        'custom_mailing_address',     
        __('Mailing Address', 'text-domain'), 
        'display_custom_field_callback',     
        'general'                           
    );
}

// Callback function to display the input field
function display_custom_field_callback() {
    $value = get_option('custom_mailing_address', ''); 
    echo '<input type="text" id="custom_mailing_address" name="custom_mailing_address" value="' . esc_attr($value) . '" class="regular-text">';
}
