<section class="dcomm-menu-options cell medium-8 medium-offset-2">
    <h1><span class="fa fa-sort-desc" aria-hidden="true"></span> Menus</h1>
    <div class="cell">
        <div class="grid-x grid-margin-y">
            <p class="cell">These are optional category menu's that can placed by the menu shortcodes. Any menu's that are left empty will not be displayed.</p>
            <div class="cell">
                <h2>Main Category</h2>
                <?php 
                    $categoryMenu = get_option('category_menu_main', '');
                    wp_editor($categoryMenu, 'category_menu_main');
                ?>
                <br>
                <p>NOTE: These should be a list of anchor elements </p>
            </div>
            <div class="cell">
                <h2>Category Varietal</h2>
                <?php 
                    $categoryMenu = get_option('category_menu_varietal', '');
                    wp_editor($categoryMenu, 'category_menu_varietal');
                ?>
                <br>
                <p>NOTE: These should be a list of anchor elements </p>
            </div>
            <div class="cell">
                <h2>Category Collection</h2>
                <?php 
                    $categoryMenu = get_option('category_menu_collection', '');
                    wp_editor($categoryMenu, 'category_menu_collection');
                ?>
                <br>
                <p>NOTE: These should be a list of anchor elements </p>
            </div>
        </div>
    </div>
    <?php submit_button(); ?>
</section>