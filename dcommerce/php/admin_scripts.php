<?php
function load_dcommerce_admin_scripts($hook)
{
        // Load only on ?page=mypluginname
        if ($hook != 'toplevel_page_dcommerce') {
                return;
        }
        //  CSS
        wp_enqueue_style('dcommerce_admin_css', plugins_url('css/dcommerce.css', __FILE__));
        wp_enqueue_style('dcommerce_foundation_css', plugins_url('css/foundation-grid.css', __FILE__));

        // Font Awesome 
        wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css');

        // Ace Editor
        wp_enqueue_script('ace-js', 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js', array(), '1.0.0', false );

        // Dcommerce JS
        wp_enqueue_script('dcommerce-js', plugins_url('js/dcommerce.js', __FILE__), array('jquery'), '1.0', false);
        wp_localize_script( 'dcommerce-js', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));


}
add_action('admin_enqueue_scripts', 'load_dcommerce_admin_scripts');

