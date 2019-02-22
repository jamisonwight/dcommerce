<?php

function dcommerce_shortcode_main($atts)
{
    $a = shortcode_atts(array(
        'class' => 'dcomm-store-main',
    ), $atts);
    ?>
        <div data-ecp-wrapper="true" class="<?php echo $a['class']; ?> grid-container"></div>
    <?php
}
add_shortcode('dcomm-main', 'dcommerce_shortcode_main');

function dcommerce_shortcode_cart_presence($atts)
{
    $a = shortcode_atts(array(
        'type' => 'default',
        'style' => '',
        'class' => 'dcomm-cart-presence',
    ), $atts);

    if ($a['type'] == 'list' && $a['style'] == 'divider') : ?>
        <ul class="<?php echo $a['class']; ?>">
            <?php if ($_GET['view'] == 'products' | $_GET['view'] == 'product'): ?>
                <li><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></li>
                <li>|</li>
                <li>
                <div data-ecp-presence></div>
                </li>
                <li>|</li>
                <li>
                <div data-ecp-minicart></div>
                </li>
            <?php else: ?>
                <li ><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></li>
                <li>|</li>
                <li><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=cart"><span class="fas fa-shopping-cart"></span> Cart</a></li>
            <?php endif; ?>
        </ul>
    <?php elseif ($a['type'] == 'list' && $a['style'] == '') : ?>
        <ul class="<?php echo $a['class']; ?>">
            <?php if ($_GET['view'] === 'products' | $_GET['view'] === 'product'): ?>
                <li ><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></li>
                <li>
                <div data-ecp-presence></div>
                </li>
                <li>
                <div data-ecp-minicart></div>
                </li>
            <?php else: ?>
                 <li ><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></li>
                <li><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=cart"><span class="fas fa-shopping-cart"></span> Cart</a></li>
            <?php endif; ?>
        </ul> 
    <?php elseif ($a['type'] == 'div') : ?>
        <div class="<?php echo $a['class']; ?>">
             <?php if ($_GET['view'] === 'products' | $_GET['view'] === 'product'): ?>
                <div><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></div>
                <div data-ecp-presence></div>
                <div data-ecp-minicart></div>
            <?php else: ?>
                 <div><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></div>
                 <div><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account"><span class="fas fa-shopping-cart"></span> Cart</a></div>
            <?php endif; ?>
        </div>    
    <?php elseif ($a['type'] == 'default') : ?>
        <div class="<?php echo $a['class']; ?>">
             <?php if ($_GET['view'] === 'products' | $_GET['view'] === 'product'): ?>
                <div data-ecp-presence></div>
                <div data-ecp-minicart></div>
            <?php else: ?>
                <div><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account">Account</a></div>
                <div><a href="<?php echo bloginfo('url') . get_option('dcomm_url_path_root'); ?>?view=account"><span class="fas fa-shopping-cart"></span> Cart</a></div>
            <?php endif; ?>
        </div>    
    <?php endif;
}
add_shortcode('dcomm-cart-presence', 'dcommerce_shortcode_cart_presence');

// Main Menu
function dcommerce_shortcode_menu($atts)
{
    $a = shortcode_atts(array(
        'class' => 'dcomm-menu-wrapper',
    ), $atts);
    ?>
        <div class="<?php echo $a['class']; ?> grid-container">
            <div class="grid-x grid-margin-x dcomm-menu">
                <div class="cell medium-12 large-8 large-offset-2">
                    <div class="grid-x grid-margin-x">
                        <div class="cell medium-4 dcomm-menu-single dcomm-menu-misc">
                            <h4>View by Category</h4>
                            <?php echo get_option('category_menu_main'); ?>
                        </div>
                        <div class="cell medium-4 dcomm-menu-single dcomm-menu-varietal">
                            <h4>View by Varietal</h4>
                            <?php echo get_option('category_menu_varietal'); ?>
                        </div>
                        <div class="cell medium-4 dcomm-menu-single dcomm-menu-collection">
                            <h4>View by Collection</h4>
                            <?php echo get_option('category_menu_collection'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php

}
add_shortcode('dcomm-menu', 'dcommerce_shortcode_menu');


// Filter Menu
function dcommerce_shortcode_menu_filter($atts)
{

    $cat_main = get_option('category_menu_main');
    $cat_varietal = get_option('category_menu_varietal');
    $cat_collection = get_option('category_menu_collection');

    $a = shortcode_atts(array(
        'class' => 'dcomm-menu-filter-wrapper',
    ), $atts);

    if ($_GET['view'] === 'products' | $_GET['view'] === 'product') :
    ?>
        <div class="<?php echo $a['class']; ?> grid-container">
            <div class="grid-x grid-margin-x grid-padding-x dcomm-menu">
                <div class="cell medium-12 large-8 large-offset-2">
                    <div class="grid-x grid-margin-x">

                        <?php if ($cat_main !== '' && $cat_varietal !== '' && $cat_collection !== ''): ?>
                            <div class="cell medium-3"><h4>Filter By:</h4></div>
                            <div class="cell medium-3 dcomm-menu-single dcomm-menu-misc">
                                <h5>Category <span class="fas fa-chevron-down"></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_main; ?>
                                </div>
                            </div>
                            <div class="cell medium-3 dcomm-menu-single dcomm-menu dcomm-menu-varietal">
                                <h5>Varietal <span class="fas fa-chevron-down"></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_varietal; ?>
                                </div>
                            </div>
                            <div class="cell medium-3 dcomm-menu-single dcomm-menu dcomm-menu-collection">
                                <h5>Collection <span class="fas fa-chevron-down"></span></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_collection; ?>
                                </div>
                            </div>
                        <?php elseif($cat_collection == ''): ?>
                            <div class="cell medium-2 medium-offset-1"><h4>Filter By:</h4></div>
                            <div class="cell medium-4 dcomm-menu-single dcomm-menu-misc">
                                <h5>Category <span class="fas fa-chevron-down"></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_main; ?>
                                </div>
                            </div>
                            <div class="cell medium-4 dcomm-menu-single dcomm-menu dcomm-menu-varietal">
                                <h5>Varietal <span class="fas fa-chevron-down"></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_varietal; ?>
                                </div>
                            </div>
                        <?php elseif($cat_collection == '' && $cat_main == ''): ?>
                            <div class="cell medium-2 medium-offset-2"><h4>Filter By:</h4></div>
                            <div class="cell medium-6 dcomm-menu-single dcomm-menu dcomm-menu-varietal">
                                <h5>Varietal <span class="fas fa-chevron-down"></h5>
                                <div class="dcomm-toggle-menu">
                                    <?php echo $cat_varietal; ?>
                                </div>
                            </div>
                        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;
}
add_shortcode('dcomm-menu-filter', 'dcommerce_shortcode_menu_filter');


// Varietal Menu
function dcommerce_shortcode_menu_varietal($atts)
{
    $a = shortcode_atts(array(
        'class' => 'dcomm-menu-varietal',
    ), $atts);
    ?>
            <div class="<?php echo $a['class']; ?>">
                <?php echo get_option('category_menu_varietal'); ?>
            </div>
    <?php

}
add_shortcode('dcomm-menu-varietal', 'dcommerce_shortcode_menu_varietal');


// Collection Menu
function dcommerce_shortcode_menu_collection($atts)
{
    $a = shortcode_atts(array(
        'class' => 'dcomm-menu-collection',
    ), $atts);
    ?>
        <div class="<?php echo $a['class']; ?>">
            <?php echo get_option('category_menu_collection'); ?>
        </div>
    <?php

}
add_shortcode('dcomm-menu-collection', 'dcommerce_shortcode_menu_collection');


// Main Menu
function dcommerce_shortcode_menu_main($atts)
{
    $a = shortcode_atts(array(
        'class' => 'dcomm-menu-main',
    ), $atts);
    ?>
        <div class="<?php echo $a['class']; ?>">
            <?php echo get_option('category_menu_main'); ?>
        </div>
<?php

}
add_shortcode('dcomm-menu-main', 'dcommerce_shortcode_menu_main');


