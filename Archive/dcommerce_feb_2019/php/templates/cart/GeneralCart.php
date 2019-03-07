<div class="grid-x grid-padding-y cart cart_GeneralCart">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_GeneralCart">
        <form class="ecp-form">
            <h1>{message:GeneralCart/Title}</h1>
            <p class="ecp-summary">{message:GeneralCart/Summary}</p>

            <div class="ecp-x-list grid-x grid-padding-y" data-ecp-handle="products">
            <!-- | GeneralCart__Product template | -->
            </div>

            <div data-ecp-handle="apply_changes_section">
                <button data-ecp-action="apply-changes">{message:GeneralCart/ApplyChangesButton}</button>
            </div>
            <div data-ecp-handle="estimate_section">
                <div class="ecp-callout-box">
                    <div class="ecp-grid">
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsSubtotal}</span>
                            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_subtotal}</span>
                        </div>
                    </div>
                    <div class="ecp-grid">
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsDiscountTotal}</span>
                            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_discount_total}</span>
                        </div>
                    </div>
                    <div class="ecp-grid">
                        <div class="ecp-grid-row ecp-clearfix">
                            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsTotal}</span>
                            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_total}</span>
                        </div>
                    </div>
                </div>
                <p class="ecp-form-tip">{message:GeneralCart/PreCheckoutInfo}</p>
                <button data-ecp-handle="checkout_button" data-ecp-action="checkout">{message:GeneralCart/CheckoutButton}</button>
            </div>
        </form>
    </div>
</div>

