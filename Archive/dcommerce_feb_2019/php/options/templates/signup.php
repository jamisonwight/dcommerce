<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-signup">
<?php 
if (get_option('dcomm_template_signup') == '' | get_option('dcomm_template_signup') == null) :
$signupTemplate = <<<EOT
"signup": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $signupTemplate = get_option('dcomm_template_signup');
endif;
?>

    <div class="cell">
        <?php wp_editor($signupTemplate, 'dcomm_template_signup'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_signup_set" value="1" <?php checked(1, get_option('dcomm_template_signup_set', 0)); ?>/> Use Sign Up Custom Templates
    </div>
        
</div>