<?php 
// CUSTOM MESSAGES
add_action("wp_ajax_update_custom_messages", "update_custom_messages");

function update_custom_messages() {
    $editor_data = $_POST['customMessages'];
    
    update_option('dcomm_custom_messages', $editor_data);
    
    wp_die();
}


// CUSTOM CSS
add_action("wp_ajax_update_custom_css", "update_custom_css");

function update_custom_css() {
    $editor_data = $_POST['customCSS'];
    
    update_option('dcomm_custom_css', $editor_data);
    
    wp_die();
}