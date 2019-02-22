<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-account">
<?php 
if (get_option('dcomm_template_account') == '' | get_option('dcomm_template_account') == null) :
$accountTemplate = <<<EOT
"account": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $accountTemplate = get_option('dcomm_template_account');
endif;
?>

    <div class="cell">
        <?php wp_editor($accountTemplate, 'dcomm_template_account'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_account_set" value="1" <?php checked(1, get_option('dcomm_template_account_set', 0)); ?>/> Use Account Custom Templates
    </div>
</div>