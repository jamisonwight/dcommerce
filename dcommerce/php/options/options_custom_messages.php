<section class="dcomm-menu-options cell medium-8 medium-offset-2">
    <h1><span class="far fa-sticky-note"></span> Custom Messages</h1>
    <div class="cell">
        <div class="grid-x grid-margin-y">
            <div class="cell" id="customMessagesEditor"><?php echo stripslashes(get_option('dcomm_custom_messages'));?></div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>