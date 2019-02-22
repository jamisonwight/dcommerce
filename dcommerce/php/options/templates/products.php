<div class="grid-x grid-margin-y dcomm-template-single" id="dcomm-template-products">
<?php 
if (get_option('dcomm_template_products') == '' | get_option('dcomm_template_products') == null) :
$productsTemplate = <<<EOT
"products": {
    "en": {
        "TEMPLATENAME": {
            "url": "URL TO TEMPLATE"
        },
    }
},
EOT;
else:
    $productsTemplate = get_option('dcomm_template_products');
endif;
?>

    <div class="cell">
        <?php wp_editor($productsTemplate, 'dcomm_template_products'); ?>
    </div>
    <div class="cell">
        <input type="checkbox" name="dcomm_template_products_set" value="1" <?php checked(1, get_option('dcomm_template_products_set', 0)); ?>/> Use Products Custom Templates
    </div>
        
</div>