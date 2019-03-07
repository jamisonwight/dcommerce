<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-cart">
<?php 
if (get_option('dcomm_template_cart') == '' | get_option('dcomm_template_cart') == null) :
$cartTemplate = <<<EOT
"cart": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $cartTemplate = get_option('dcomm_template_cart');
endif;
?>

    <div class="cell">
        <?php wp_editor($cartTemplate, 'dcomm_template_cart'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_cart_set" value="1" <?php checked(1, get_option('dcomm_template_cart_set', 0)); ?>/> Use Cart Custom Templates
    </div>
        
</div>