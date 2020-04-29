<div class="grid-x grid-padding-y product-detail">
    <div class="cell ecp-component ecp_ProductDetail {message:css_class}">
        <div data-ecp-id="{message:product_id}">
            <div class="grid-x ecp-clearfix">
                <div class="cell large-4">
                    <img class="product-image product-image-large" src="{message:image_1}">
                </div>
                <div class="cell large-6">
                    <h1>{message:product_name}</h1>
                    <div class="ecp-html-subtitle" data-ecp-handle="feature_text">{message:feature_text}</div>
                    <span data-ecp-handle="discounted">
                        <span class="ecp-price-discounted">{currency:cart_discount_price}</span><span class="ecp-price-regular">{currency:cart_regular_price}</span>
                    </span>
                    <span data-ecp-handle="not_discounted">
                        <p class="ecp-price"><i><strong>Price:</strong></i>&nbsp;  {currency:price}</p>
                    </span>
                    <div class="ecp-section" data-ecp-handle="available">
                        <form class="ecp-form grid-x grid-margin-x">
                            <span class="cell small-3 medium-3">
                                    <select name="product_qty">
                                        <!-- | ProductDetail_Option template | -->
                                    </select>
                                </span>
                                <span class="cell small-9 medium-9">
                                    <button data-ecp-action="add-to-cart" data-ecp-handle="add_to_cart">{message:ProductDetail/AddToCartButton}</button>
                                    <span data-ecp-handle="add_more_to_cart">
                                        <button data-ecp-action="add-to-cart">{message:ProductDetail/AddMoreToCartButton}</button>
                                        <p class="ecp-form-tip ecp-text-center">{message:ProductDetail/CartCount_template}</p>
                                    </span>
                                </span>
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
                    <div class="ecp-html-content" data-ecp-handle="description">{message:description}</div>
                    <div class="grid-x">
                        <div class="ecp-section cell winemaker-notes" data-ecp-handle="​technical_notes">
                            <h3>{message:ProductDetail/TechnicalNotesTitle}</h3>
                            <div class="ecp-html-content ecp-note">{message:technical_notes}</div>
                        </div>
                        <div class="ecp-section cell awards" data-ecp-handle="​secondary_notes">
                            <h3>{message:ProductDetail/SecondaryNotesTitle}</h3>
                            <div class="ecp-html-content ecp-note">{message:secondary_notes}</div>
                        </div>
                        <div class="ecp-section cell" data-ecp-handle="review_notes">
                            <h3>{message:ProductDetail/ReviewNotesTitle}</h3>
                            <div class="ecp-html-content ecp-note">{message:review_notes}</div>
                        </div>
                        <div class="ecp-section cell" data-ecp-handle="view_pdf">
                            <a class="ecp-note" href="{message:pdf}" target="_blank">{message:ProductDetail/ViewPDFLink}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>