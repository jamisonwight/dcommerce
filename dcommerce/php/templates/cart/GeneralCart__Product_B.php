<div class="cell cart_Product">
    <div class="ecp-box" data-ecp-id="{message:product_id}" data-ecp-handle="product">
        <div class="ecp-box-header">
            <a href="{message:__productdetail_link}" data-ecp-action="load-product" data-ecp-key="{message:slug}">{message:product_name}</a>
        </div>
        <div class="ecp-box-content">
            <div class="ecp-section">
                <div class="grid-x ecp-clearfix">

                    <!-- Product Image -->
                    <div class="cell medium-3">
                        <img class="product-image" src="{message:thumbnail}">
                    </div>

                    <!-- Filler -->
                    <div class="cell medium-5"></div>

                    <!-- Product Cart Info -->
                    <div class="cell medium-4">
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-5"><label>{message:GeneralCart/PriceLabel}</label></span>
                            <span class="ecp-grid-col-7 ecp-text-right">
                                <span data-ecp-handle="discounted">
                                    <span class="ecp-price-regular">{currency:regular_price}</span><span class="ecp-price-discounted">{currency:discount_price}</span>
                                </span>
                                <span data-ecp-handle="not_discounted">
                                    <span class="ecp-price">{currency:regular_price}</span>
                                </span>
                            </span>
                        </div>
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-5"><label class="ecp-form-input-label">{message:GeneralCart/QuantityLabel}</label></span>
                            <span class="ecp-grid-col-7">
                                <select name="product_quantity" data-ecp-action="change-quantity">
                                    <!-- | GeneralCart__Product__Option template | -->
                                </select>
                            </span>
                        </div>
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-5"><label>{message:GeneralCart/TotalLabel}</label></span>
                            <span class="ecp-grid-col-7 ecp-text-right"><span data-ecp-handle="product_total">{currency:total}</span></span>
                        </div>
                        <div class="remove-product ecp-grid-row ecp-clearfix">
                            <a href="#" class="ecp-option" data-ecp-action="remove-product">{message:GeneralCart/RemoveLink}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>