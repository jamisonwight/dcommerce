<div class="cell medium-6 large-4 product-block" data-equalizer-watch>
    <div class="ecp-list-item grid-x" data-ecp-id="{message:product_id}" data-equalizer-watch>
        <h2><a href="{message:__productdetail_link}" data-ecp-action="load-product" data-ecp-key="{message:slug}">{message:product_name}</a></h2>
        <a title="product-link" href="{message:__productdetail_link}" data-ecp-action="load-product" data-ecp-key="{message:slug}"><img class="product-image-small" src="{message:thumbnail}"></a>
        <div class="ecp-html-subtitle" data-ecp-handle="feature_text" data-equalizer-watch>{message:feature_text}</div>
        
        <div class="cell ecp-section product-block-addtocart" data-ecp-handle="available" data-equalizer-watch>
            <span data-ecp-handle="not_discounted" data-equalizer-watch>
                <div class="ecp-price"><strong>Price:</strong> {currency:price}</div>
            </span>
            <form class="grid-x ecp-form" data-equalizer-watch>
                <div class="cell small-4 medium-5 xlarge-3">
                    <select name="product_qty">
                        <!-- | CategoryWithProducts_Option template | -->
                    </select>
                </div>
                <div class="cell small-8 medium-7 xlarge-9">
                    <button data-ecp-action="add-to-cart" data-ecp-handle="add_to_cart">{message:CategoryWithProducts/AddToCartButton}</button>
                    <div data-ecp-handle="add_more_to_cart">
                        <button data-ecp-action="add-to-cart">{message:CategoryWithProducts/AddMoreToCartButton}</button>
                        <p class="ecp-form-tip ecp-text-center">{message:CategoryWithProducts/CartCount_template}</p>
                    </div>
                </div>
            </form>
        </div>
        <div class="ecp-section" data-ecp-handle="not_available">
            <div class="ecp-callout-box">
            <span data-ecp-handle="status_back_ordered">{message:CategoryWithProducts/Status/BackOrdered}</span>
            <span data-ecp-handle="status_call">{message:CategoryWithProducts/Status/Call}</span>
            <span data-ecp-handle="status_discontinued">{message:CategoryWithProducts/Status/Discontinued}</span>
            <span data-ecp-handle="status_pre_ordered">{message:CategoryWithProducts/Status/PreOrdered}</span>
            <span data-ecp-handle="status_restricted_allocated">{message:CategoryWithProducts/Status/RestrictedAllocated}</span>
            <span data-ecp-handle="status_restricted_wine_club">{message:CategoryWithProducts/Status/RestrictedWineClub}</span>
            <span data-ecp-handle="status_sold_out">{message:CategoryWithProducts/Status/SoldOut}</span>
            <span data-ecp-handle="status_">{message:CategoryWithProducts/Status/Unknown}</span>
            </div>
        </div>
    </div>
</div>