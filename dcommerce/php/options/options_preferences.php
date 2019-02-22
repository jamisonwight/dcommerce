<section class="dcomm-options cell medium-8 medium-offset-2">
    <h1><span class="fa fa-sliders" aria-hidden="true"></span> Preferences</h1>
    <div class="cell">
        <div class="cell">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell medium-4">
                    <input type="checkbox" name="default_css" value="1" <?php checked(1, get_option('default_css', 1)); ?>/>
                    <h2>Default eCellar Styles</h2>
                </div>
                <div class="cell medium-4">
                    <input type="checkbox" name="dcommerce_css" value="1" <?php checked(1, get_option('dcommerce_css', 1)); ?>/>
                    <h2>Default dCommerce Styles</h2>
                </div>
                <div class="cell medium-4">
                    <div class="grid-x">
                        <h2 class="cell">Foundation Grid</h2>
                        <div class="cell"><input type="radio" name="dcomm_grid" value="store" <?php checked('store', get_option('dcomm_grid', true)); ?>/> Store page only</div>
                        <div class="cell"><input type="radio" name="dcomm_grid" value="all" <?php checked('all', get_option('dcomm_grid', true)); ?>/> All pages</div>
                        <div class="cell"><input type="radio" name="dcomm_grid" value="none" <?php checked('none', get_option('dcomm_grid', true)); ?>/> None</div>
                    </div>
                </div>
                <div class="cell medium-4">
                    <input type="checkbox" name="disable_cache" value="1" <?php checked(1, get_option('disable_cache', 0)); ?>/>
                    <h2>Disable Cache</h2>
                </div>
        
            </div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>