<?php
add_action('admin_menu', 'dcommerce_menu');

function dcommerce_menu()
{
    add_menu_page('dCommerce Settings', 'dcommerce', 'manage_options', 'dcommerce', 'dcommerce_options', plugins_url('/images/favicon.png', __FILE__), 35);
    
    // call register settings function
    add_action('admin_init', 'register_dcommerce_settings');
}

function register_dcommerce_settings()
{
    //register our settings
    register_setting('dcommerce_settings_group', 'api_key');
    register_setting('dcommerce_settings_group', 'dcomm_url_path_root');
    // register_setting( 'dcommerce_settings_group', 'root_category_slug');
    register_setting('dcommerce_settings_group', 'default_css');
    register_setting('dcommerce_settings_group', 'dcommerce_css');
    register_setting('dcommerce_settings_group', 'disable_cache');
    register_setting('dcommerce_settings_group', 'category_menu_varietal');
    register_setting('dcommerce_settings_group', 'category_menu_collection');
    register_setting('dcommerce_settings_group', 'category_menu_main');
    register_setting('dcommerce_settings_group', 'dcomm_custom_messages');
    register_setting('dcommerce_settings_group', 'dcomm_custom_css');
    register_setting('dcommerce_settings_group', 'dcomm_grid');
    register_setting('dcommerce_settings_group', 'dcomm_default_templates');

    // CSS Settings
    register_setting('dcommerce_settings_group', 'dcomm_heading_1');
    register_setting('dcommerce_settings_group', 'dcomm_heading_2');
    register_setting('dcommerce_settings_group', 'dcomm_heading_3');
    register_setting('dcommerce_settings_group', 'dcomm_heading_4');
    register_setting('dcommerce_settings_group', 'dcomm_heading_5');
    register_setting('dcommerce_settings_group', 'dcomm_paragraph');
    register_setting('dcommerce_settings_group', 'dcomm_ecpcontent');
    register_setting('dcommerce_settings_group', 'dcomm_button');
    register_setting('dcommerce_settings_group', 'dcomm_filter_background');
    register_setting('dcommerce_settings_group', 'dcomm_filter_padding');
    register_setting('dcommerce_settings_group', 'dcomm_filter_grid');

    // Register view Alias settings
    register_setting('dcommerce_settings_group', 'dcomm_alias_account_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_account_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_account_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_account_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_products_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_products_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_products_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_products_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_product_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_product_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_product_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_product_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_categories_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_categories_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_categories_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_categories_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_cart_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_cart_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_cart_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_cart_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signin_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signin_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signin_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signin_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signout_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signout_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signout_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_signout_set');
    register_setting('dcommerce_settings_group', 'dcomm_alias_checkout_name');
    register_setting('dcommerce_settings_group', 'dcomm_alias_checkout_forceload');
    register_setting('dcommerce_settings_group', 'dcomm_alias_checkout_root');
    register_setting('dcommerce_settings_group', 'dcomm_alias_checkout_set');

    // Register template Settings
    register_setting('dcommerce_settings_group', 'dcomm_template_account');
    register_setting('dcommerce_settings_group', 'dcomm_template_account_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_base');
    register_setting('dcommerce_settings_group', 'dcomm_template_base_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_campaign');
    register_setting('dcommerce_settings_group', 'dcomm_template_campaign_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_cart');
    register_setting('dcommerce_settings_group', 'dcomm_template_cart_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_checkout');
    register_setting('dcommerce_settings_group', 'dcomm_template_checkout_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_login');
    register_setting('dcommerce_settings_group', 'dcomm_template_login_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_notification');
    register_setting('dcommerce_settings_group', 'dcomm_template_notification_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_products');
    register_setting('dcommerce_settings_group', 'dcomm_template_products_set');
    register_setting('dcommerce_settings_group', 'dcomm_template_signup');
    register_setting('dcommerce_settings_group', 'dcomm_template_signup_set');


    // Set Menus
    if (isset($_POST['category_menu_varietal'])) {
        update_option('category_menu_varietal', $_POST['category_menu_varietal']);
    }
    if (isset($_POST['category_menu_collection'])) {
        update_option('category_menu_collection', $_POST['category_menu_collection']);
    }
    if (isset($_POST['category_menu_main'])) {
        update_option('category_menu_main', $_POST['category_menu_main']);
    }

    // Set Custom Messages
    if (isset($_POST['dcomm_custom_messages'])) {
        update_option('dcomm_custom_messages', $_POST['dcomm_custom_messages']);
    }

    // Set Templates 
    if (isset($_POST['dcomm_template_account'])) {
        update_option('dcomm_template_account', $_POST['dcomm_template_account']);
    }
    if (isset($_POST['dcomm_template_base'])) {
        update_option('dcomm_template_base', $_POST['dcomm_template_base']);
    }
    if (isset($_POST['dcomm_template_campaign'])) {
        update_option('dcomm_template_campaign', $_POST['dcomm_template_campaign']);
    }
    if (isset($_POST['dcomm_template_cart'])) {
        update_option('dcomm_template_cart', $_POST['dcomm_template_cart']);
    }
    if (isset($_POST['dcomm_template_checkout'])) {
        update_option('dcomm_template_checkout', $_POST['dcomm_template_checkout']);
    }
    if (isset($_POST['dcomm_template_login'])) {
        update_option('dcomm_template_login', $_POST['dcomm_template_login']);
    }
    if (isset($_POST['dcomm_template_notification'])) {
        update_option('dcomm_template_notification', $_POST['dcomm_template_notification']);
    }
    if (isset($_POST['dcomm_template_products'])) {
        update_option('dcomm_template_products', $_POST['dcomm_template_products']);
    }
    if (isset($_POST['dcomm_template_signup'])) {
        update_option('dcomm_template_signup', $_POST['dcomm_template_signup']);
    }
}

function dcommerce_options()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    ?>
	<div class="grid-container">
        <img class="dcommerce-logo" src="<?php echo plugins_url('/images/dcommerce.png', __FILE__); ?>">
        <form method="post" action="options.php" class="grid-x grid-margin-y grid-padding-y grid-margin-x grid-padding-x">
            <?php settings_fields('dcommerce_settings_group'); ?>
            <?php do_settings_sections('dcommerce_settings_group'); ?>

            <!-- Configuration -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_configuration.php'; ?>

            <!-- Preferences -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_preferences.php'; ?>

            <!-- Custom Messages -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_custom_messages.php'; ?>

            <!-- CSS Styling -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_css.php'; ?>

            <!-- Templates -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_templates.php'; ?>

            <!-- View Aliases -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_aliases.php'; ?>
            
            <!-- Category Menus -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_menus.php'; ?>

            <!-- Shortcodes -->
            <?php include plugin_dir_path( __FILE__ ).'options/options_shortcodes.php'; ?>

        </form>
    </div>
<?php 
} ?>