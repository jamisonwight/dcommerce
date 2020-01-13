<section class="dcomm-options dcomm-options-css cell medium-8 medium-offset-2">
    <h1><span class="fab fa-css3-alt" aria-hidden="true"></span> CSS Styling</h1>
    <div class="cell">
        <div class="cell css-section">
            <h2 class="cell">Custom Styles</h2>
            <div id="customCSSEditor"><?php echo get_option('dcomm_custom_css'); ?></div>
        </div>

        <div class="cell css-section">
            <h2 class="cell">Filter Menu</h2>
            <div class="grid-x grid-margin-x grid-padding-y">
                <div class="cell medium-4">
                    <h4>Background Color</h4>
                    <input type="text" name="dcomm_filter_background" value="<?php echo esc_attr(get_option('dcomm_filter_background')); ?>" placeholder="Background Color" />
                </div>
                <div class="cell medium-4">
                    <h4>Padding</h4>
                    <input type="text" name="dcomm_filter_padding" value="<?php echo esc_attr(get_option('dcomm_filter_padding')); ?>" placeholder="Padding"/>
                </div>
                <div class="cell medium-4">
                    <h4>Grid Type</h4>
                    <div class="grid-x grid-options">
                        <div class="cell large-4 large-offset-4"><input type="radio" name="dcomm_filter_grid" value="full" <?php checked('full', get_option('dcomm_filter_grid', true)); ?>/> Full</div>
                        <div class="cell large-4 large-offset-4"><input type="radio" name="dcomm_filter_grid" value="fluid" <?php checked('fluid', get_option('dcomm_filter_grid', true)); ?>/> Fluid</div>
                        <div class="cell large-4 large-offset-4"><input type="radio" name="dcomm_filter_grid" value="default" <?php checked('default', get_option('dcomm_filter_grid', true)); ?>/> Default</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>