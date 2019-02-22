<?php

// Header scripts
function dcommerce_header_scripts()
{
    // Main Options
    $api_key = get_option('api_key');
    $disable_cache = get_option('disable_cache');
    $default_css = get_option('default_css');
    $dcommerce_css = get_option('dcommerce_css');
    $foundation_grid = get_option('dcomm_grid');

    // Directories
    $pathRoot = get_option('dcomm_url_path_root');
    $templateDir = plugin_dir_path(__FILE__) . 'templates';
    $cssDir = plugin_dir_path(__FILE__) . 'css';
    $storeUrl = trim($pathRoot, '/'); 

    // Alias options
    $aliasArray = array('account', 'products', 'product', 'categories', 'cart', 'checkout', 'signin', 'signout');
    $aliases = array();
    foreach ($aliasArray as $key => $val) :
        $aliases[$key] = array();
        $aliases[$key]['name'] =  $val;
        $aliases[$key]['alias'] =  get_option('dcomm_alias_'.$val.'_name');
        $aliases[$key]['force_load'] =  get_option('dcomm_alias_'.$val.'_forceload');
        $aliases[$key]['root'] =  get_option('dcomm_alias_'.$val.'_root');
        $aliases[$key]['set'] =  get_option('dcomm_alias_'.$val.'_set');
    endforeach;

    // Template options
    $defaultTemplates = get_option('dcomm_template_defaults');
    $templatesArray = array('account', 'base', 'campaign', 'cart', 'checkout', 'login', 'notification', 'products', 'signup');
    $templates = array();
    foreach ($templatesArray as $key => $val) :
        $templates[$val] = array();
        $templates[$val]['name'] =  $val;
        $templates[$val]['content'] =  get_option('dcomm_template_'.$val);
        $templates[$val]['set'] =  get_option('dcomm_template_'.$val.'_set');
    endforeach;

    // View Aliases
    // Check if any of the alias fields are set then set to true
    $aliasSet = false;
    foreach ($aliases as $alias) : 
        if ($alias['set'] == 1) :
            $aliasSet = true;
        else : 
        endif;
    endforeach;
    ?>

    <!--*********************** 
        Load on all pages 
    ***************************-->
    <!--//* FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <!--//* Load Foundation only on the store pages -->
     <?php if ($foundation_grid == 'all') : ?>
        <!--//* Foundation Grid -->
        <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/foundation-grid.css', __FILE__) ?>"/>
    <?php else: ?>
        <!--//* Do nothing  -->   
    <?php endif; ?>
    

    <!--*********************** 
        Load on Store pages 
    ***************************-->
    <?php if (is_page($storeUrl)) : ?>
        <?php if ($default_css != 0) : ?>
            <link rel="stylesheet" type="text/css" href="https://cdn.ecellar-rw.com/1/css/ecp-theme.css" lazyload />
        <?php endif; ?>

        <!--//* Load Foundation only on the store pages -->
        <?php if ($foundation_grid == 'store') : ?>
            <!--//* Foundation Grid -->
            <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/foundation-grid.css', __FILE__) ?>"/>
        <?php else: ?>
             <!--//* Do nothing  -->
        <?php endif; ?>
    <?php endif; ?>


    <script>
    // **************
    //   OPTIONS
    // ************** 
    epubOptions = { 
        // API Key 
        APIKey: '<?php echo $api_key; ?>',

        // Init Query String
        initQueryString: true,  

        // Disable Cache        
        <?php if ($disable_cache == 0 || !isset($disable_cache)) : ?>
        disableCache: false,
        <?php else : ?>
        disableCache: true,
        <?php endif; ?>

        // Path Root
        pathRoot: '<?php echo $pathRoot; ?>',

        // View Alias
        <?php if ($aliasSet) : ?>
        viewAliases: {
            <?php foreach ($aliases as $a) :
                if ($a['set'] == 1) : ?>
                    '<?php echo $a['name']; ?>' : {
                        <?php // check for new alias name 
                        if ($a['alias'] != '') : ?>
                            alias: '<?php echo $a['alias']; ?>',
                        <?php endif; ?>
                        <?php // Check for force page load options
                        if ($a['force_load'] != 'none') : ?>
                            forcePageLoad: '<?php echo $a['force_load']; ?>',
                        <?php endif; ?>
                        <?php // Check for path root 
                        if ($a['root'] != '') : ?>
                            pathRoot: '<?php echo $a['root']; ?>',
                        <?php endif; ?>
                    },
                <?php endif; ?>
            <?php endforeach; ?>
        },
        <?php endif; ?>
        // Templates
        addTemplates: [ 
            { 
            // Products 
            <?php if ($templates['products']['name'] == 'products' && $templates['products']['set'] != 0): ?>
                <?php echo $templates['products']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "products": {
                "en": {
                    "CategoryWithProducts": { 
                        "url": "<?php echo plugins_url('templates/products/categoryWithProducts.php', __FILE__) ?>",
                    },
                    "CategoryWithProducts__Product": {
                        "url": "<?php echo plugins_url('templates/products/categoryWithProducts__Product.php', __FILE__) ?>",
                    },
                    "ProductDetail": {
                        "url": "<?php echo plugins_url('templates/products/ProductDetail.php', __FILE__) ?>"
                    }
                }
            },
            <?php endif; ?>
            // Cart
            <?php if ($templates['cart']['name'] == 'cart' && $templates['cart']['name'] != 0): ?>
                <?php echo $templates['cart']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "cart": {
            "en": {
                "MiniCart": {
                    "url": "<?php echo plugins_url('templates/cart/MiniCart.php', __FILE__) ?>"
                },
                "GeneralCart": {
                    "url": "<?php echo plugins_url('templates/cart/GeneralCart.php', __FILE__) ?>"
                },
                "GeneralCart__Product_A": {
                    "url": "<?php echo plugins_url('templates/cart/GeneralCart__Product_A.php', __FILE__) ?>"
                },
                "GeneralCart__Product_B": {
                    "url": "<?php echo plugins_url('templates/cart/GeneralCart__Product_B.php', __FILE__) ?>"
                },
                "GeneralCartRemove": {
                    "url": "<?php echo plugins_url('templates/cart/GeneralCartRemove.php', __FILE__) ?>"
                },
                "GeneralCartEmpty": {
                    "url": "<?php echo plugins_url('templates/cart/GeneralCartEmpty.php', __FILE__) ?>"
                }
            }
            },
            <?php endif; ?>
            // Login
            <?php if ($templates['login']['name'] == 'login' && $templates['login']['name'] != 0): ?>
                <?php echo $templates['login']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "login": {
                "en": {
                    "LocateAccount": {
                        "url": "<?php echo plugins_url('templates/login/LocateAccount.php', __FILE__) ?>"
                    },
                    "AccountFound": {
                        "url": "<?php echo plugins_url('templates/login/AccountFound.php', __FILE__) ?>"
                    },
                    "ForgotPassword": {
                        "url": "<?php echo plugins_url('templates/login/ForgotPassword.php', __FILE__) ?>"
                    },
                    "Presence": {
                        "url": "<?php echo plugins_url('templates/login/Presence.php', __FILE__) ?>"
                    },
                    "CreateAccount": {
                        "url": "<?php echo plugins_url('templates/login/CreateAccount.php', __FILE__) ?>"
                    },
                    "Logout": {
                        "url": "<?php echo plugins_url('templates/login/Logout.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>
            // Sign Up
            <?php if ($templates['signup']['name'] == 'signup' && $templates['signup']['name'] != 0): ?>
                <?php echo $templates['signup']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "signup": {
                "en": {
                    "CreateCustomer": {
                        "url": "<?php echo plugins_url('templates/signup/CreateCustomer.php', __FILE__) ?>"
                    },
                    "CreateCustomerThankYou": {
                        "url": "<?php echo plugins_url('templates/signup/CreateCustomerThankYou.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>
            // Checkout
            <?php if ($templates['checkout']['name'] == 'checkout' && $templates['checkout']['name'] != 0): ?>
                <?php echo $templates['checkout']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "checkout": {
                "en": {
                    "CreateShippingAddress": {
                        "url": "<?php echo plugins_url('templates/checkout/CreateShippingAddress.php', __FILE__) ?>"
                    },
                    "CreateBillingAddress": {
                        "url": "<?php echo plugins_url('templates/checkout/CreateBillingAddress.php', __FILE__) ?>"
                    },
                    "SelectShippingAddress": {
                        "url": "<?php echo plugins_url('templates/checkout/SelectShippingAddress.php', __FILE__) ?>"
                    },
                    "EditBillingAddress": {
                        "url": "<?php echo plugins_url('templates/checkout/EditBillingAddress.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>
            // Dashboard
            <?php if ($templates['account']['name'] == 'account' && $templates['account']['name'] != 0): ?>
                <?php echo $templates['dashboard']['content'] ?>
            <?php elseif (isset($defaultTemplates)): ?>
            "account": {
                "en": {
                    "Dashboard": {
                        "url": "<?php echo plugins_url('templates/account/Dashboard.php', __FILE__) ?>"
                    },
                    "EditProfile": {
                        "url": "<?php echo plugins_url('templates/account/EditProfile.php', __FILE__) ?>"
                    },
                    "EditBillingAddress": {
                        "url": "<?php echo plugins_url('templates/account/EditBillingAddress.php', __FILE__) ?>"
                    },
                    "EditShippingAddress": {
                        "url": "<?php echo plugins_url('templates/account/EditShippingAddress.php', __FILE__) ?>"
                    },
                    "ShippingAddresses": {
                        "url": "<?php echo plugins_url('templates/account/ShippingAddresses.php', __FILE__) ?>"
                    },
                    "ChangePassword": {
                        "url": "<?php echo plugins_url('templates/account/ChangePassword.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>

            }		
        ]
    }
    </script>
    <?php
}

add_action('wp_head', 'dcommerce_header_scripts');

function dcommerce_footer_scripts()
{
    $pathRoot = get_option('dcomm_url_path_root');
    $storeUrl = trim($pathRoot, '/');

    if (is_page($storeUrl)) : ?>
        <script src="https://cdn.ecellar-rw.com/js/loader.js"></script>
    <?php endif;
}
add_action('wp_footer', 'dcommerce_footer_scripts');


function dcommerce_frontend_scripts()
{
    $pathRoot = get_option('dcomm_url_path_root');
    $storeUrl = trim($pathRoot, '/');
    $dcommerce_css = get_option('dcommerce_css');

    wp_enqueue_script('dcommerce-frontend-js', plugins_url('js/dcommerce-frontend.js', __FILE__), array('jquery'), '1.0', 'true');

    //* Default dcommerce styles
    if ($dcommerce_css == 1) :
        wp_enqueue_style('dcommerce-frontend-css', plugins_url('css/dcommerce-frontend.css', __FILE__), array(), null, 'all');
    endif;
}
add_action('wp_enqueue_scripts', 'dcommerce_frontend_scripts', 1400); 
