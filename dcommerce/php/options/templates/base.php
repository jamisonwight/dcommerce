<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-base">
<?php 
if (get_option('dcomm_template_base') == '' | get_option('dcomm_template_base') == null) :
$baseTemplate = <<<EOT
"base": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $baseTemplate = get_option('dcomm_template_base');
endif;
?>

    <div class="cell">
        <?php wp_editor($baseTemplate, 'dcomm_template_base'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_base_set" value="1" <?php checked(1, get_option('dcomm_template_base_set', 0)); ?>/> Use Base Custom Templates
    </div>
        
</div>