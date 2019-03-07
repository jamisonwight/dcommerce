<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-campaign">
<?php 
if (get_option('dcomm_template_campaign') == '' | get_option('dcomm_template_campaign') == null) :
$campaignTemplate = <<<EOT
"campaign": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $campaignTemplate = get_option('dcomm_template_campaign');
endif;
?>

    <div class="cell">
        <?php wp_editor($campaignTemplate, 'dcomm_template_campaign'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_campaign_set" value="1" <?php checked(1, get_option('dcomm_template_campaign_set', 0)); ?>/> Use Campaign Custom Templates
    </div>
        
</div>