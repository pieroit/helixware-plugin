<?php
/**
 */

/**
 * Print the general section header.
 */
function hewa_admin_settings_server_section_callback() {

    echo '<p>' .
        esc_html__( 'Set here the basic settings for HelixWare including the URL for HelixWare Server and the application data.' ) .
        '</p>';

}

function hewa_admin_settings_server_section() {

    register_setting( HEWA_OPTIONS_SETTINGS_SERVER, HEWA_OPTIONS_SETTINGS_SERVER );

    // Add the general section.
    add_settings_section(
        HEWA_OPTIONS_SETTINGS_SERVER,
        'Server Settings',
        'hewa_admin_settings_server_section_callback',
        HEWA_OPTIONS_SETTINGS_SERVER
    );


    hewa_admin_settings_add_field(
        HEWA_SETTINGS_SERVER_URL, __( 'Server URL', HEWA_LANGUAGE_DOMAIN ), 'hewa_admin_settings_input_text'
    );

    hewa_admin_settings_add_field(
        HEWA_SETTINGS_APPLICATION_KEY, __( 'Application Key', HEWA_LANGUAGE_DOMAIN ), 'hewa_admin_settings_input_text'
    );

    hewa_admin_settings_add_field(
        HEWA_SETTINGS_APPLICATION_SECRET, __( 'Application Secret', HEWA_LANGUAGE_DOMAIN ), 'hewa_admin_settings_input_text'
    );

}

