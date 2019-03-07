<section class="dcomm-templates cell medium-8 medium-offset-2">
    <h1><span class="fa fa-file-code-o" aria-hidden="true"></span> Templates</h1>
    <div class="cell">
        <div class="cell">
            <div class="grid-x grid-margin-y grid-margin-x dcomm-templates-container">
                <div class="cell small-12">
                    <input type="checkbox" name="dcomm_default_templates" value="1" <?php checked(1, get_option('dcomm_default_templates', 1)); ?>/>
                    <h2>Default Templates</h2><br>
                    <small>
                        Unchecking this option will revert to the eCellar default templates
                    </small>
                </div>
                <!-- <div class="cell small-4">
                    <input type="text" name="dcomm_template_path" placeholder="Templates Root URL" value="<?php echo esc_attr(get_option('dcomm_template_path')); ?>" />
                </div> -->
                <div class="cell">
                    <h2>Custom Templates</h2>
                </div>
                <div class="cell dcomm-custom-templates">
                    <label>
                        <select id="templateSelect" autocomplete="off">
                            <option id="templateSelectDefault" selected="selected">-- Select Templates to Add --</option>
                            <option value="account">Account</option>
                            <option value="base">Base</option>
                            <option value="campaign">Campaign</option>
                            <option value="cart">Cart</option>
                            <option value="checkout">Checkout</option>
                            <option value="login">Login</option>
                            <option value="notification">Notification</option>
                            <option value="products">Products</option>
                            <option value="signup">Sign Up</option>
                        </select>
                    </label>
                </div>
                <div class="cell dcomm-template-container">
                    <!-- Account -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/account.php'; ?>

                    <!-- Base -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/base.php'; ?>

                    <!-- Campaign -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/campaign.php'; ?>

                    <!-- Cart -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/cart.php'; ?>

                    <!-- Checkout-->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/checkout.php'; ?>
                    
                    <!-- Login -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/login.php'; ?>

                    <!-- Notification -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/notification.php'; ?>

                    <!-- Products -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/products.php'; ?>

                     <!-- Sign Up -->
                    <?php include plugin_dir_path( __FILE__ ).'/templates/signup.php'; ?>
                </div>
                <p class="cell">
                    Add custom templates based off the <a href="https://github.com/ecellar/remote-widgets/wiki/11-Template-Directory">Template Directory</a>. 
                    Any templates that are set will override the default dcommerce templates. If you add custom templates to a specific view, all templates that are not added to the view
                    will be set to the eCellar default. 
                </p>
            </div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>