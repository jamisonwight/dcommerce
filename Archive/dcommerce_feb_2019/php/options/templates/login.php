<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-login">
<?php 
if (get_option('dcomm_template_login') == '' | get_option('dcomm_template_login') == null) :
$loginTemplate = <<<EOT
"login": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $loginTemplate = get_option('dcomm_template_login');
endif;
?>

    <div class="cell">
        <?php wp_editor($loginTemplate, 'dcomm_template_login'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_login_set" value="1" <?php checked(1, get_option('dcomm_template_login_set', 0)); ?>/> Use Login Custom Templates
    </div>
        
</div>