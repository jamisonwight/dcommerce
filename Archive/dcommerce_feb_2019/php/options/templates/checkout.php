<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-checkout">
<?php 
if (get_option('dcomm_template_checkout') == '' | get_option('dcomm_template_checkout') == null) :
$checkoutTemplate = <<<EOT
"checkout": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $checkoutTemplate = get_option('dcomm_template_checkout');
endif;
?>

    <div class="cell">
        <?php wp_editor($checkoutTemplate, 'dcomm_template_checkout'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_checkout_set" value="1" <?php checked(1, get_option('dcomm_template_checkout_set', 0)); ?>/> Use Checkout Custom Templates
    </div>
        
</div>