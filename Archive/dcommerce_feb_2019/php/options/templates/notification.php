<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-notification">
<?php 
if (get_option('dcomm_template_notification') == '' | get_option('dcomm_template_notification') == null) :
$notificationTemplate = <<<EOT
"notification": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $notificationTemplate = get_option('dcomm_template_notification');
endif;
?>

    <div class="cell">
        <?php wp_editor($notificationTemplate, 'dcomm_template_notification'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_notification_set" value="1" <?php checked(1, get_option('dcomm_template_notification_set', 0)); ?>/> Use Notification Custom Templates
    </div>
        
</div>