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

        // JS
        wp_enqueue_script('dcommerce-js', plugins_url('js/dcommerce.js', __FILE__), array('jquery'), '1.0');
}
add_action('admin_enqueue_scripts', 'load_dcommerce_admin_scripts');