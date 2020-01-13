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

    <!--************************ 
       Custom Body Text Classes
    ****************************-->
<?php
    $isClasses = false;
    $classes = array(
        'heading_1' => array(
            'name' => 'heading-1',
            'class' => get_option('dcomm_heading_1')
        ),
        'heading_2' => array(
            'name' => 'heading-2',
            'class' => get_option('dcomm_heading_2')
        ),
        'heading_3' => array(
            'name' => 'heading-3',
            'class' => get_option('dcomm_heading_3')
        ),
        'heading_4' => array(
            'name' => 'heading-4',
            'class' => get_option('dcomm_heading_4')
        ),
        'heading_5' => array(
            'name' => 'heading-5',
            'class' => get_option('dcomm_heading_5')
        ),
        'paragraph' => array(
            'name' => 'paragraph',
            'class' => get_option('dcomm_paragraph')
        ),
        'ecpContent' => array(
            'name' => 'ecpcontent',
            'class' => get_option('dcomm_ecpcontent')
        ),
        'button' => array(
            'name' => 'button',
            'class' => get_option('dcomm_button')
        ),
    );

    foreach ($classes as $key => $val) {
        if (!empty($val)) {
            $isClasses = true;
        }
    }

    if ($isClasses) {
        echo '<script src="'.plugins_url('js/dcomm-classes.js', __FILE__).'" id="dcomm-classes"';

        // Data Attributes
        foreach ($classes as $key => $val) {
            if (!empty($val)) {
                echo ' data-'.$val['name'].'="'.$val['class'].'"';
            }
        } 

        echo '></script>';
    }
?>

    <!--//* FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <!--//* Load Foundation only on the store pages -->
     <?php if ($foundation_grid == 'all') : ?>
        <!--//* Foundation JS -->
        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
        <!--//* Foundation Grid -->
        <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/foundation-grid.css', __FILE__) ?>"/>
    <?php else: ?>
        <!--//* Do nothing  -->   
    <?php endif; ?>
    
    <?php if (is_page($storeUrl)) : ?>
         <!--*********************** 
            Load on Store pages 
        ***************************-->
        <!-- CUSTOM CSS -->
        <style><?php echo get_option('dcomm_custom_css'); ?></style>

        <?php if ($default_css != 0) : ?>
            <link rel="stylesheet" type="text/css" href="https://cdn.ecellar-rw.com/1/css/ecp-theme.css" lazyload />
        <?php endif; ?>

        <!--//* Load Foundation only on the store pages -->
        <?php if ($foundation_grid == 'store') : ?>
            <!--//* Foundation JS -->
            <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
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

        // Google Analytics
        stats: {fbq: true, gtm: true}, pathRoot: '/store/',

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
        addMessages: [
            <?php echo stripslashes(get_option('dcomm_custom_messages')); ?>
		],
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
                    "ResetPassword": {
                        "url": "<?php echo plugins_url('templates/login/ResetPassword.php', __FILE__) ?>"
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
                    "JoinClub": {
                        "url": "<?php echo plugins_url('templates/signup/JoinClub.php', __FILE__) ?>"
                    },
                    "JoinClubCreateBillingAddress": {
                        "url": "<?php echo plugins_url('templates/signup/JoinClubCreateBillingAddress.php', __FILE__) ?>"
                    },
                    "JoinClubCreateCustomer": {
                        "url": "<?php echo plugins_url('templates/signup/JoinClubCreateCustomer.php', __FILE__) ?>"
                    },
                    "JoinClubReview": {
                        "url": "<?php echo plugins_url('templates/signup/JoinClubReview.php', __FILE__) ?>"
                    },
                    "JoinClubSelectTier": {
                        "url": "<?php echo plugins_url('templates/signup/JoinClubSelectTier.php', __FILE__) ?>"
                    },
                    "JoinList": {
                        "url": "<?php echo plugins_url('templates/signup/JoinList.php', __FILE__) ?>"
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
                    "SelectPickupLocation": {
                        "url": "<?php echo plugins_url('templates/checkout/SelectPickupLocation.php', __FILE__) ?>"
                    },
                    "CreatePaymentMethod": {
                        "url": "<?php echo plugins_url('templates/checkout/CreatePaymentMethod.php', __FILE__) ?>"
                    },
                    "EditShippingAddress": {
                        "url": "<?php echo plugins_url('templates/checkout/EditShippingAddress.php', __FILE__) ?>"
                    },
                    "OrderReview": {
                        "url": "<?php echo plugins_url('templates/checkout/OrderReview.php', __FILE__) ?>"
                    },
                    "ReplacePaymentMethod": {
                        "url": "<?php echo plugins_url('templates/checkout/ReplacePaymentMethod.php', __FILE__) ?>"
                    },
                    "SelectPickupLocation": {
                        "url": "<?php echo plugins_url('templates/checkout/SelectPickupLocation.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>
            // Account
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
                    "CreateBillingAddress": {
                        "url": "<?php echo plugins_url('templates/account/CreateBillingAddress.php', __FILE__) ?>"
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
                    "CreatePaymentMethod": {
                        "url": "<?php echo plugins_url('templates/account/CreatePaymentMethod.php', __FILE__) ?>"
                    },
                    "CreateShippingAddress": {
                        "url": "<?php echo plugins_url('templates/account/CreateShippingAddress.php', __FILE__) ?>"
                    },
                    "ClubSubscriptions": {
                        "url": "<?php echo plugins_url('templates/account/ClubSubscriptions.php', __FILE__) ?>"
                    },
                    "ClubSubscriptions__Subscription__Pickup": {
                        "url": "<?php echo plugins_url('templates/account/ClubSubscriptions__Subscription__Pickup.php', __FILE__) ?>"
                    },
                    "ClubSubscriptions__Subscription__Shipment": {
                        "url": "<?php echo plugins_url('templates/account/ClubSubscriptions__Subscription__Shipment.php', __FILE__) ?>"
                    },
                    "ClubSubscriptions__Tier": {
                        "url": "<?php echo plugins_url('templates/account/ClubSubscriptions__Tier.php', __FILE__) ?>"
                    },
                    "EditClubSubscription": {
                        "url": "<?php echo plugins_url('templates/account/EditClubSubscription.php', __FILE__) ?>"
                    },
                    "EditClubSubscription__Address": {
                        "url": "<?php echo plugins_url('templates/account/EditClubSubscription__Address.php', __FILE__) ?>"
                    },
                    "EditClubSubscription__PaymentMethod": {
                        "url": "<?php echo plugins_url('templates/account/EditClubSubscription__PaymentMethod.php', __FILE__) ?>"
                    },
                    "OrderDetail": {
                        "url": "<?php echo plugins_url('templates/account/OrderDetail.php', __FILE__) ?>"
                    },
                    "Orders": {
                        "url": "<?php echo plugins_url('templates/account/Orders.php', __FILE__) ?>"
                    },
                    "PaymentMethods": {
                        "url": "<?php echo plugins_url('templates/account/PaymentMethods.php', __FILE__) ?>"
                    },
                    "PaymentMethods__PaymentMethod": {
                        "url": "<?php echo plugins_url('templates/account/PaymentMethods__PaymentMethod.php', __FILE__) ?>"
                    },
                    "ReplacePaymentMethod": {
                        "url": "<?php echo plugins_url('templates/account/ReplacePaymentMethod.php', __FILE__) ?>"
                    },
                    "Reservations": {
                        "url": "<?php echo plugins_url('templates/account/Reservations.php', __FILE__) ?>"
                    },
                }
            },
            <?php endif; ?>

            }		
        ],
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
