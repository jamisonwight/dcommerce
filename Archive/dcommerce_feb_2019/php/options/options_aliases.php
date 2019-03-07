<section class="dcomm-aliases cell medium-8 medium-offset-2">
    <h1><span class="fa fa-location-arrow" aria-hidden="true"></span> View Aliases</h1>
    <div class="cell">
            <div class="grid-x grid-margin-x grid-margin-y grid-padding-y">
                <div class="cell">
                    <p>For information on view alias options refer to <a href="https://github.com/ecellar/remote-widgets/wiki/Initialization-Options">Initialization Options</a>. Make sure to set each custom alias you want active by checking the "Set Alias" field.</p>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Account</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_account_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_account_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_account_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_account_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_account_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_account_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_account_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_account_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_account_set" value="1" <?php checked(1, get_option('dcomm_alias_account_set', 0)); ?>/> Set Account Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Products</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_products_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_products_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_products_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_products_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_products_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_products_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_products_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_products_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_products_set" value="1" <?php checked(1, get_option('dcomm_alias_products_set', 0)); ?>/> Set Products Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Product</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_product_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_product_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_product_forceload"> 
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_product_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_product_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_product_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_product_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_product_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_product_set" value="1" <?php checked(1, get_option('dcomm_alias_product_set', 0)); ?>/> Set Product Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Categories</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_categories_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_categories_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_categories_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_categories_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_categories_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_categories_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_categories_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_categories_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_categories_set" value="1" <?php checked(1, get_option('dcomm_alias_categories_set', 0)); ?>/> Set Categories Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Cart</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_cart_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_cart_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_cart_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_cart_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_cart_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_cart_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_cart_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_cart_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_cart_set" value="1" <?php checked(1, get_option('dcomm_alias_cart_set', 0)); ?>/> Set Cart Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Sign In</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_signin_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_signin_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_signin_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_signin_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_signin_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_signin_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_signin_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_signin_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_signin_set" value="1" <?php checked(1, get_option('dcomm_alias_signin_set', 0)); ?>/> Set Sign In Alias
                        </div>
                    </div>
                </div>
                    <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Sign Out</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_signout_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_signout_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_signout_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_signout_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_signout_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_signout_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_signout_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_signout_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_signout_set" value="1" <?php checked(1, get_option('dcomm_alias_signout_set', 0)); ?>/> Set Sign Out Alias
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 alias">
                    <h2 class="cell small-10 small-offset-1">Checkout</h2>
                    <div class="grid-x grid-margin-y">
                        <div class="cell small-10 small-offset-1"><input type="text" name="dcomm_alias_checkout_name" placeholder="Alias Name" value="<?php echo esc_attr(get_option('dcomm_alias_checkout_name')); ?>" /></div>
                        <div class="cell small-10 small-offset-1">
                            <p>Force Page Load</p>
                            <label>
                                <select name="dcomm_alias_checkout_forceload">
                                    <option value="none" selected <?php selected(get_option('dcomm_alias_checkout_forceload'), "none"); ?>>None</option>
                                    <option value="all" <?php selected(get_option('dcomm_alias_checkout_forceload'), "all"); ?>>All</option>
                                    <option value="viewChange" <?php selected(get_option('dcomm_alias_checkout_forceload'), "viewChange"); ?>>View Change</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="text" name="dcomm_alias_checkout_root" placeholder="Path Root" value="<?php echo esc_attr(get_option('dcomm_alias_checkout_root')); ?>" /><br>
                            <small>Leave blank for default root path</small>
                        </div>
                        <div class="cell small-10 small-offset-1">
                            <input type="checkbox" name="dcomm_alias_checkout_set" value="1" <?php checked(1, get_option('dcomm_alias_checkout_set', 0)); ?>/> Set Checkout Alias
                        </div>
                    </div>
                </div>
            </div>
        <?php submit_button(); ?>
    </div>
</section>