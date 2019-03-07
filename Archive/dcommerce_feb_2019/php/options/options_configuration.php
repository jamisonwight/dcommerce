<section class="cell medium-8 medium-offset-2">
    <h1><span class="fa fa-wrench" aria-hidden="true"></span> Configuration</h1>
    <div class="cell">
        <div class="grid-x grid-margin-x">
            <h2 class="cell medium-6">API Key</h2>
            <div class="cell medium-6">
                <input type="text" name="api_key" value="<?php echo esc_attr(get_option('api_key')); ?>" />
                <p>Key issued by eCellar</p>
            </div>
        </div>

        <div class="grid-x grid-margin-x">
            <h2 class="cell medium-6">URL Path Root</h2>
            <div class="cell medium-6">
                <input type="text" name="dcomm_url_path_root" value="<?php echo esc_attr(get_option('dcomm_url_path_root')); ?>" />
                <p>URL Example: /store/</p>
            </div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>